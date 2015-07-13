<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The cookie worker can be used to manage cookies. You can create/delete/edit cookies easily.
</p>
<hr>
<h4>Usage:</h4>
The cookie worker can be used in the below way:

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class user extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    
    function method()
    {
        //load the cookie worker
        $this->load->worker(\'Cookie\');
        
        //create a cookie
        $this->cookie->Set(\'user_id\',100);
        
        //check if the cookie exist. if yes, echo it
        if($this->cookie->Exists(\'user_id\')) {
            echo $this->cookie->Get(\'user_id\'); //prints 100
        }
        //set the value of the cookie to 0
        $this->cookie->Set(\'user_id\',0);
        
        //check if the cookie is empty or null
        if($this->cookie->IsEmpty(\'user_id\')) {
            echo "Cookie is empty";
        }
        //delete the cookie
        $this->cookie->Delete(\'user_id\');
        
        //if the cookie does not exist, echo not found
        if(!$this->cookie->Exists(\'user_id\')) {
            echo "No cookie found";
        }
    }
}

?>');
    ?>

</div>
Output:
<pre>
<?php

    $this->cookie = $this->load->worker('Cookie');

    //create a cookie
    $this->cookie->Set('user_id',100);

    //check if the cookie exist. if yes, echo it
    if($this->cookie->Exists('user_id')) {
        echo $this->cookie->Get('user_id') .'<br>'; //prints 100
    }
    //set the value of the cookie to 0
    $this->cookie->Set('user_id',0);

    //check if the cookie is empty or null
    if($this->cookie->IsEmpty('user_id')) {
        echo "Cookie is empty" .'<br>';
    }
    //delete the cookie
    $this->cookie->Delete('user_id');

    //if the cookie does not exist, echo not found
    if(!$this->cookie->Exists('user_id')) {
        echo "No cookie found" .'<br>';
    }

?>
</pre>