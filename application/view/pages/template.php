<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Templates are used to avoid duplicate contents in your views. It becomes very useful when you have to 
    render multiple views in one page.
</p>
<hr>
<h4>Naming the view:</h4>
Templates can have a decent naming convention but we will follow the rules.<br>
 - Templates <code>should not contain -</code> in their names.<br>
 - Avoid using <code>UPPERCASE</code> or <code>Camelcase</code>, though it does work without following this rule.<br><br>
 - Templates should end with extension .tpl
 
 <pre>one_column.tpl, two_column.tpl, no_column.tpl are few good ways of naming a template.</pre>
 <br>
 

<h4>Basic markup of a template:</h4>
Templates usually contain html markup. You can have variables inside templates. Template variables are
wrapped inside {}.
<div id="code">
<?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{TITLE}</title>
    </head>
    <body>
        <header>
            <?php include_once VIEWDIR . \'header.php\'; ?>
        <header>
        
        {CONTENT}
        {SIDEBAR}
        <footer>
            <?php include_once VIEWDIR . \'footer.php\'; ?>
        </footer>
    </body>
</html>
?>')

?>
</div>
<h4>Calling a Template and displaying: </h4>

To display the template, you should load the template first. You can also pass mixed data which become
template variables.

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
     * Loading the home template and rendering it.
     * {TITLE}, {SIDEBAR} and {CONTENT} are template variables.
     */
    function signup() {
    
        $data = array(
            \'TITLE\'   => \'Signup\', 
            \'SIDEBAR\' => \'reg/sidebar.php\', //fetches the content internally from application/views/reg/sidebar.php
            \'CONTENT\' => \'reg/signup.php\' //fetches the content internally from application/views/reg/signup.php
        );
        
        $template = $this->load->template(\'two_col.tpl\',$data);
        return $template->render();
    }
    
}

?>')
    ?>

</div>

<h4>Assigning functions to variables: </h4>
<div class="bs-callout bs-callout-info">
    You can assign functions to variables which will be applied automatically. For ex. <code>{TITLE|trim|strtoupper}</code> will 
    automatically apply the functions <code>trim()</code> and <code>strtoupper()</code> after replacing TITLE with its value.
</div>