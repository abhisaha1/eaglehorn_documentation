<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>
    A model is responsible to perform CRUD operations. It can only accept data from controller.
</p>
<hr>
<h4>Naming the model:</h4>
As models are not displayed in the url, fancy names can be given. But to keep everything standard, <br>
 - Models <code>should not contain -</code> in their names.<br>
 - Use CamelCase to name your models.<br>
 - Avoid using <code>UPPERCASE</code>, though it does work without following this rule.<br><br>
 Ex: <code>UserModel.php, AuthModel.php</code> are few good ways of naming a model.
 <br>
<hr>

<div class="bs-callout bs-callout-info">
    <h4>Database Wrapper class</h4>
    <p>Eaglehorn has a PDO Wrapper class which can be used by extending the model with Model.</p>
</div>

<h4>Basic markup of a model:</h4>

<div id="code">
<?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

//using the Eaglehorn PDO
class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
}

?>')

?>
</div>

<h4>Queries: Delete </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function deleteUser() {
        
        //delete Method Declaration
        //public function delete($table, $where, $bind="") { }

        //DELETE #1
        $this->delete("mytable", "Age < 30");

        //DELETE #2 w/Prepared Statement
        $lname = "Doe";
        $bind = array(
            ":lname" => $lname
        )
        $this->delete("mytable", "Lname = :lname", $bind);

    }
    
}

?>')
    ?>
</div>
<h4>Queries: Insert </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function insertUser() {
        
        //insert Method Declaration
        //public function insert($table, $info) { }

        $insert = array(
            "FName" => "John",
            "LName" => "Doe",
            "Age" => 26,
            "Gender" => "male"
        );
        $this->insert("mytable", $insert);

    }
    
}

?>')
    ?>
</div>

<h4>Queries: Run </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function createTable() {
        
        //run Method Declaration
        public function run($sql, $bind="") { }

        //MySQL
        $sql = <<<STR
        CREATE TABLE mytable (
            ID int(11) NOT NULL AUTO_INCREMENT,
            FName varchar(50) NOT NULL,
            LName varchar(50) NOT NULL,
            Age int(11) NOT NULL,
            Gender enum(\'male\',\'female\') NOT NULL,
            PRIMARY KEY (ID)
        ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;
        STR;
        $this->run($sql);

    }
    
}

?>')
    ?>
</div>
<h4>Queries: Select </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function getUser() {
        
        //select Method Declaration
        //public function select($table, $where="", $bind="", $fields="*") { }

        //SELECT #1
        $results = $this->select("mytable");

        //SELECT #2
        $results = $this->select("mytable", "Gender = \'male\'");

        //SELECT #3 w/Prepared Statement
        $search = "J";
        $bind = array(
            ":search" => "%$search"
        );
        $results = $this->select("mytable", "FName LIKE :search", $bind);

    }
    
}

?>')
    ?>
</div>

<h4>Queries: Update </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function updateUser() {
        
        //update Method Declaration
        public function update($table, $set, $where, $bind="") { }

        
        $set = array(
            "age" => ":age"
        );
        
        $bind = array(
            ":fname" => $fname,
            ":lname" => $lname,
            ":age"   => 23
        );
        $this->update("mytable", $set, "fname = :fname AND lname = :lname", $bind);

    }
    
}

?>')
    ?>
</div>
<h4>Queries: Delete </h4>


<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class UserModel extends Model {

    function __construct() {
        parent::__construct();
    }
    
    function deleteUser() {
        
        //insert Method Declaration
        //public function insert($table, $where, $bind) { }

        $bind = array(
            ":email" => "john@gmail.com"
        );
        
        $where = "email=:email";
        $this->delete("mytable", $where, $bind);

    }
    
}

?>')
    ?>
</div>


<h4>Calling a model into a controller: </h4>

If you want to use the methods of a model, then you should load the model first.

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\model;
use Eaglehorn\Model;

class User extends Base {

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Loading the auth model and and calling verify method  
     */
    function method1() {
        $this->authmodel = $this->load->model(\'AuthModel\',array(),\'verify\',array());
    }
    
    /**
     * Loading the auth model with $constructor_paras parameters 
     * and verify method with $method_paras parameters
     */
    function method2() {
    
        $constructor_paras = array(\'email\',\'smith@gmail.com\');
        $method_paras = array(\'password\',\'secret\');
        $this->load->model(\'Auth\',$constructor_paras,\'verify\',$method_paras());

    }
    
    /**
     * Load the constructor first and then call a method
     */
    function method3() {
    
        $auth_model = $this->load->model(\'AuthModel\');
        //call the method verify
        $auth_model->verify();
    }
}

?>')
    ?>

</div>