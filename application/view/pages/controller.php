<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Quite simply, the controller handles incoming requests. It is the component which can interact with the models 
 to make data available in the view.
</p>
<hr>
<h4>Naming the controller:</h4>
As controllers get displayed in the url, it is very important to have a good naming convention of a controller.<br>
- Controllers <code>should not contain -</code> in their names.<br>
- Use CamelCase to name your controllers.<br>
- Avoid using <code>UPPERCASE</code>, though it does work without following this rule.<br><br>

Ex: <code>User.php, Auth.php, BookStore.php</code> are few good ways of naming a controller.
<br>
<br>


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
    
}

?>')
    ?>
</div>

<div class="bs-callout bs-callout-info">
    If your URL is <code>http://localhost/projectfolder/user/login/para1/para2</code>, then
    it will call the <code>user controller</code> and <code> login method</code> 
    by passing <code>para1 and para2 parameters</code>
    <br><br>
    If your URL is <code>http://localhost/projectfolder/user/</code>, then
    it will call the <code>user controller</code> and <code> index method</code></p>
</div>

<h4>Creating folders inside controllers:</h4>
If controller(say user) is inside a folder(home) then we refer the controller in the format <code>home-user</code><br>
If the URL is <code>http://localhost/projectfolder/home-user/login</code>, then it will call the <code>controller
user</code> inside the <code>folder home</code> and the <code>method login</code>


<div class="bs-callout bs-callout-info">
    <h4>Loading different modules</h4>
    <p><code>$this->load</code> is used to load controllers, models, workers, views, templates inside a controller</p>
</div>

<h4>Basic markup of a controller:</h4>

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
    
    function index() {
        echo "This is my user controller, index method";
    }
    
}

?>')
    ?>
</div>
<h4>Loading a controller into another controller: </h4>

If you want to use the methods of another controller, then you should load the controller first.

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
     * Loading the auth controller and verify method  
     */
    function method1() {
        $this->load->controller(\'auth\',array(),\'verify\',array());
        
        //if auth is inside the folder lib
        //$this->load->controller(\'lib/auth\',array(),\'verify\',array());
    }
    
    /**
     * Loading the auth controller with $constructor_paras parameters 
     * and verify method with $method_paras parameters
     */
    function method2() {
    
        $constructor_paras = array(\'email\',\'smith@gmail.com\');
        $method_paras = array(\'password\',\'secret\');
        $this->load->controller(\'auth\',$constructor_paras,\'verify\',$method_paras());

    }
    
    /**
     * Load the constructor first and then call a method
     */
    function method3() {
    
        $auth = $this->load->controller(\'auth\');
        //call the method verify
        $auth->verify();
    }
}

?>')
    ?>

</div>