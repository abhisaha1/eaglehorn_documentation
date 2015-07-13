<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>
    The session worker can be used to store values which will be available throughout the application 
    on every request. 
</p>
<hr>
<h4>Usage:</h4>
<div class="alert alert-danger" role="alert">
    The session worker does not use <code>$_SESSION</code>, instead it uses database to store its sessions.
</div>

To use this worker, you will have to create a table -
<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('CREATE TABLE IF NOT EXISTS  `sessions` (
    session_id varchar(200) DEFAULT \'0\' NOT NULL,
    ip_address varchar(45) DEFAULT \'0\' NOT NULL,
    user_agent varchar(120) NOT NULL,
    time_updated int(10) unsigned DEFAULT 0 NOT NULL,
    data text NOT NULL,
    PRIMARY KEY (session_id)
);');
    ?>

</div>
<div class="bs-callout bs-callout-info">
    To use this worker, you should configure <code>$config['session']</code> according to your needs.
</div>
<br>

Using the session class
<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class User extends Base {

    function __construct() {
        parent::__construct();
        $this->load->worker(\'session\');
    }
    
    
    function setSession() {
        $this->session->Set(\'userid\',13);
        $this->session->Set(\'name\',\'Eaglehorn\');
    }
    
    function fetchSession() {
        $user_id = $this->session->Get(\'userid\');
        //fetch all session variables
        $my_sessions = $this->session->GetAll();
    }
    
    function delSession() {
        $this->session->Remove(\'userid\');
        //clear everything. Mainly used for logout
        $this->session->Destroy();
    }
    
}

?>')
    ?>

</div>
