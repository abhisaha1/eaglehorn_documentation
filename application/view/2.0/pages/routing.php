<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>
    Routing is used to make beautiful URL's and to map URL's to the correct controller and method.
    Lets consider the below scenario.
    
    <p>You have a controller user.php in the below path.</p>
    <pre class="code">applications/controller/employee/users/registered/user.php</pre>

    <p>You can access this controller by going to:</p>
    <pre class="code">http://localhost/public/employee-users-registered-user/method</pre>
    
    <p>Eaglehorn will now read the controller as <mark>employee/users/registered/user.php</mark> internally</p>
    
    <p>To make such URL's short, we use routes. You can add a rule in the 
        <code>application/routes.php</code> to map the above URL with a shorter one.</p>
    <pre class="code">\Eaglehorn\Router::route( 'reg-user/method','employee-users-registered-user/method' );</pre>
    
    <p>Now if you navigate to:</p>
    <pre class="code">http://localhost/public/reg-user/method</pre>
    <p>it will automatically execute the user controller and the method</p>
    
</p>
<hr>
<h4>Defining routes:</h4>
In the application folder, you will find a file <code>router.php</code>. These is where we define the routes.
<br>

In the below code, <mark>fancywords</mark> is fancy url that you would like to make active. <br><br>
<pre>
For ex.
We want http://localhost/public/fancywords to actually call welcome controller and the index method.
We would set a router rule for this.
</pre>
<div id="code">
<?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
  namespace Eaglehorn;
  // Adding a basic route
  Router::route( \'/login\', \'controller/method\' );
 
  // Adding a route with a named alphanumeric capture, using the <:var_name> syntax
  Router::route( \'/fancywords/<:username>\', \'controller/method\' );
 
  // Adding a route with a named numeric capture, using the <#var_name> syntax
  Router::route( \'/fancywords/<#user_id>\', \'controller/method\' );
 
  // Adding a route with a wildcard capture (Including directory separtors), using
  // the <var_name> syntax
  Router::route( \'/fancywords/<*categories>\', \'controller/method\' );
 
  // Adding a wildcard capture (Excludes directory separators), using the
  // <!var_name> syntax
  Router::route( \'/fancywords/<!category>\', \'controller/method\' );
 
  // Adding a custom regex capture using the <:var_name|regex> syntax
  Router::route( \'/fancywords/<:zipcode|[0-9]{5}>\', \'controller/method\' );
 
  // Specifying priorities
  Router::route( \'/fancywords\', \'controller/method\', 1 ); // Executes first
  Router::route( \'/fancywords/<:status>\', \'controller/method\', 100 ); // Executes after')

?>
</div>

<h4>Routing without Controller:</h4>
You can now route your requests without using a Contoller. This can be very helpfull when you are testing some logic or creating a very small
application.

<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('// Print some text
Router::route(\'/fancywords/<#para>\', function($user) {
    echo "Hello $user";
}

// Show the view without a controller
Router::route(\'/fancywords/<#para>\', function($user) {
    View::show(\'welcome.php\',array(\'user\' => $user));
}');
    ?>
</div>

<br>