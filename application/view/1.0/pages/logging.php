<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>It is possible to log useful information into a file. The Logger class extends the PSR-3 Abstract Logger to
   keep the standard.</p>
<hr>

<h4>Using the logger:</h4>
To use the logger, first you need to activate it. To do so, open <code>config.php</code> and change 
<code>$config['logger']['activate']</code> to <code>1</code>. Now that its activated you can start using
in the below way.
<br><br>
<pre>Make sure that the logs directory application/logs/ has write permission. You can also change the file location from config file.</pre>
<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class user extends Base {

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Logging example
     */
    function teslog() {
        
        $para = array(
            \'fname\' => \'John\',
            \'lname\' => \'Smith\',
        );
        
        $this->logger->emergency("This is emergency");
        $this->logger->alert("This is just an alert");
        $this->logger->critical("This is critical");
        $this->logger->info("This info will get logged along with parameters", $para);
        $this->logger->error("This is an error");
        $this->logger->notice("This is a notice");
        $this->logger->fatal("This is a fatal error");
        $this->logger->warning("This is a warning");
    }
    
}

?>')
    ?>

</div>