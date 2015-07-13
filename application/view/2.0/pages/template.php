<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Templates are used to avoid duplicate contents in your views. It becomes very useful when you have to 
    render multiple views in one page.
</p>

<div class="bs-callout bs-callout-info">
    <h4>Twig integration</h4>
    <p>Eaglehorn is integrated with Twig internally. Twig has been extended to add few handy functions.
        <strong>The important point to remember is that you cannot use php tags inside templates.</strong>
    </p>
</div>

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
wrapped inside {{ }}.
<div id="code">
<?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{TITLE}}</title>
        //<!--This is how you can add css. configItem() has been made to work here. -->
        <link rel="stylesheet" href="{{configItem("site")["url"]}}/css/style.css">
    </head>
    <body>
        <header>
            //<!--Including header.php from view directory -->
            {{inc("header.php")}}
        <header>

        //<!--The below variables are defined in controller -->
        {{CONTENT|raw}}
        {{SIDEBAR|raw}}

        <footer>
            //<!--Including footer.php from view directory -->
             {{inc("footer.php")}}
        </footer>
    </body>
</html>
?>')

?>
</div>
<h4>Calling a Template and displaying: </h4>

To display the template, you should load the template first. You can also pass mixed data which becomes
template variables.

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

//User controller
class User extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    
    /**
     * Loading the home template and rendering it.
     * {{TITLE}}, {{SIDEBAR|raw}} and {{CONTENT|raw}} are template variables.
     * The raw filter marks the value as being "safe".
     */
    function signup()
    {
        $data = array(
            \'TITLE\'   => \'Signup\', 
            \'SIDEBAR\' => \'reg/sidebar.php\', //fetches content from application/views/reg/sidebar.php
            \'CONTENT\' => \'reg/signup.php\' //fetches content from application/views/reg/signup.php
        );
        $template = $this->load->template(\'two_col.tpl\',$data);
        return $template->render();
    }
}

?>')
    ?>

</div>

<h4>Twig Documentation: </h4>
<p>Make sure to check out the complete <a href="http://twig.sensiolabs.org/documentation" target="_blank">documentation of Twig</a>.</p>