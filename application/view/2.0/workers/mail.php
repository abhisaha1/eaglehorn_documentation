<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Sending Emails using PHPMailer Class.
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

class User extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Loading the Mail worker for sending emails
     */
    function sendMail()
    {
        $this->load->worker(\'Mail\');
        $this->Mail->AddAddress(\'johnsmith@gmail.com\',\'John Smith\');
        $this->Mail->AddCC(\'johndave@gmail.com\',\'John Dave\');
        $this->Mail->body = "Hi! How are you doing ?";
        $this->Mail->subject = "Hello";
        $this->Send();
    }
}

?>')
    ?>

</div>
