<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>Hooks are listeners which get triggered when an event occurs. These events are predefined. Lets say, you want to
    do some initiation work before a controller or a tempalate or a view is loaded, then this is a great feature for
    those kind of stuff.
</p>
<hr>
<h4>Naming a hook:</h4>
There is no standard rule for naming a hook, however lets follow the naming pattern.<br>
- Hooks <code>should not contain -</code> in their names.<br>
- Use CamelCase to name your hooks.<br>
- Avoid using <code>UPPERCASE</code>, though it does work without following this rule.<br><br>

Ex: <code>PreLoadHook.php, PostLoadHook.php, PreTemplateHook.php</code> are few good ways of naming a hook.
<br>
<br/>
<strong>All the hooks has been defined in the <code>hooks.config.php</code> file. You can map your class and method and activate them from there.</strong>

<div class="bs-callout bs-callout-info">
    <h4>Method defination</h4>
    <p><strong>function methodName ( $instance, $class, $method, $data ) { }</strong></p>
    <hr/>
    <p><strong>$instance</strong> - Instance of the current hook (Controller, Template, View)</p>
    <p><strong>$class</strong>    - Name of the class being called</p>
    <p><strong>$method</strong>   - Name of the method being called</p>
    <p><strong>$data</strong>     - Data which is being passed</p>
</div>

<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\hooks;

//This is the class which you configure in hooks.config.php
class PreLoadHook
{
    //This is the method which you configure in hooks.config.php
    function controllerPreload()
    {

    }
}

?>')
    ?>
</div>
