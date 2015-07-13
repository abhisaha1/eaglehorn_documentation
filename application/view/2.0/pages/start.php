A really short guide to kick start Eaglehorn.
<hr>

<h4>Create a controller:</h4>
    <p>Create a controller by the name Home.php in the below path:</p>
    <pre class="code">application/controller/Home.php</pre>
    <p>Create a view by the name hello.php in the below path and some text:</p>
    <pre class="code">application/view/hello.php</pre>
    <p>Add the below code in Home.php controller:</p>
<div id="code">
<?php 
    $text = $this->load->worker('Text');
    echo $text->codeHighlight('namespace application\controller;
use Eaglehorn\Base;

class Home extends Base
{
    public function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $view = $this->load->view(\'hello.php\');
        $view->render();
    }   
}  ');
?>
</div>

<p>Change the default controller to home by editing <code>config.php</code></p>
<pre class="code">$config['site']['default_controller'] = 'Home';</pre>

<p>The last step is to run:</p>
<pre class="code">
composer dump-autoload -o
</pre>
which will do the autoload mappings.


<p>Navigate to the below url (replace <code>your-project-folder</code> accordingly):</p>
<pre class="code">http://localhost/your-project-folder/public</pre>

<div id="code">
    <?php
    $text = $this->load->worker('Text');
    echo $text->codeHighlight('Hello Eagle! //output');
    ?>
</div>