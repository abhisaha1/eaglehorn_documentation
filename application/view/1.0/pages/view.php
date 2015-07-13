<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>View is the user interface. This is where you design the UI. You can access data from controller and use it in your view.</p>
<hr>
<h4>Naming the view:</h4>
Views can have a decent naming convention but we will follow the rules.<br>
 - Views <code>should not contain -</code> in their names.<br>
 - Use CamelCase to name your views.<br>
 - Avoid using <code>UPPERCASE</code>, though it does work without following this rule.<br><br>
 Ex: <code>Login.php, Registration.php</code> are few good ways of naming a view.
 <br>
 <br>

<h4>Basic markup of a view:</h4>
There is no markup for a view. You can create a PHP or HTML file for views.
<div id="code">
<?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Name</title>
        
    </head>
    <body></body>
</html>
?>')

?>
</div>

<div class="bs-callout bs-callout-info">
    If you are considering to have a particular layout like a one-column or two-column, then
    you should write the layout markup in the template</a> with {VARIABLES}. The view can then be pushed into the template,
    which will replace to the {VARIABLES} with view content. This will help you to avoid writing the HTML markup (like above)
    in all the views.
</div>

<h4>Calling a View: </h4>

To display the view, you should load the view first.

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class User extends Base {

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Loading the registration view and rendering it
     */
    function signup() {
        $view = $this->load->view(\'Registration.php\',array());
        $view->render();
    }
    
}

?>')
    ?>

</div>

<h4>Passing Parameters:</h4>

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class User extends Base {

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Loading the registration view and rendering it
     */
    function signup() {
        
        $this->heading = \'Registration\';
        
        $data = array(
            \'name\' => \'Eaglehorn\'
        );
        
        $view = $this->load->view(\'Registration.php\',data);
        $view->render();
    }
    
}
?>

 - View:

<?php

    echo $this->heading; // prints Registration
    echo $this->name; //error
    echo $name; // prints eaglehorn

?>')
    ?>
</div>