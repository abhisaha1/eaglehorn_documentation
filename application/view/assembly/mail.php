<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, 
    necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta 
    id animi corrupti debitis ipsum officiis rerum.
</p>
<hr>
<h4>Usage:</h4>
The mail assembly uses the famous <code>phpmailer</code> class internally to send mails.
<br>
Mail assembly can be called and used in the below way:

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
     * Loading the EH_Mail assembly for sending emails
     */
    function sendMail() {
        $this->load->assembly(\'Mail\');
        $this->EH_Mail->AddAddress(\'johnsmith@gmail.com\',\'John Smith\');
        $this->EH_Mail->AddCC(\'johndave@gmail.com\',\'John Dave\');
        $this->EH_Mail->body = "Hi! How are you doing ?";
        $this->EH_Mail->subject = "Hello";
        $this->Send();
    }
    
}

?>')
    ?>

</div>
