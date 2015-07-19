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
<strong>All the hooks has been defined in the <code>config/default/hooks.config.php</code> file. You can map your class and method and activate them from there.</strong>
<p>
    Below are the available hooks and there definations.
</p>
<hr/>
<h4>pre_controller hook</h4>
<p>This hook is triggered before any controller is loaded.</p>
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('\'pre_controller\' => array(
    \'class\'         => \'Hooks\',
    \'namespace\'     => \'hooks\',
    \'method\'        => \'ControllerPreload\',
    \'active\'        => 1
)')
    ?>
</div>
After you have defined the hook parameters, create a class in the <code>hooks</code> folder with the above defination.

<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php namespace application\hooks;
class Hooks
{
    function ControllerPreload($instance, $class, $method, $data)
    {
        //$instance - Instance of the current Controller
        //$class    - Name of the class being called
        //$method   - Name of the method being called
        //$data     - Data which is being passed
    }
}')
    ?>
</div>
<hr/>

<h4>post_controller hook</h4>
<p>This hook is triggered after any controller is loaded.</p>
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('\'post_controller\' => array(
    \'class\'         => \'Hooks\',
    \'namespace\'     => \'hooks\',
    \'method\'        => \'ControllerPostload\',
    \'active\'        => 1
)')
    ?>
</div>
After you have defined the hook parameters, create a class in the <code>hooks</code> folder with the above defination.
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php namespace application\hooks;
class Hooks
{
    function ControllerPostload($instance, $class, $method, $data)
    {
        //$instance - Instance of the current Controller
        //$class    - Name of the class being called
        //$method   - Name of the method being called
        //$data     - Data which is being passed
    }
}')
    ?>
</div>
<hr/>
<h4>pre_template hook</h4>
<p>This hook is triggered before any templates are loaded.</p>
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('\'pre_template\' => array(
    \'class\'         => \'Hooks\',
    \'namespace\'     => \'hooks\',
    \'method\'        => \'TemplatePreload\',
    \'active\'        => 1
)')
    ?>
</div>
After you have defined the hook parameters, create a class in the <code>hooks</code> folder with the above defination.
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php namespace application\hooks;
class Hooks
{
    function TemplatePreload($instance,$data)
    {
        //$instance - Instance of the current Template
        //$data     - Data which is being passed
    }
}')
    ?>
</div>

<hr/>
<h4>error hook</h4>
<p>This hook listens to all the errors that are being triggered. You might want to store them in database or
   or change the way they are displayed.</p>
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('\'error\' => array(
    \'class\'         => \'Hooks\',
    \'namespace\'     => \'hooks\',
    \'method\'        => \'Error\',
    \'active\'        => 1
)')
    ?>
</div>
After you have defined the hook parameters, create a class in the <code>hooks</code> folder with the above defination.
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php namespace application\hooks;
class Hooks
{
    function Error($error)
    {
        //$error - Array. Contains information about the error.
    }
}')
    ?>
</div>

<hr/>
<h4>404 hook</h4>
<p>This hook gets triggered when there is a 404, page not found.</p>
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('\'404\' => array(
    \'class\'         => \'Hooks\',
    \'namespace\'     => \'hooks\',
    \'method\'        => \'NotFound\',
    \'active\'        => 1
)')
    ?>
</div>
After you have defined the hook parameters, create a class in the <code>hooks</code> folder with the above defination.
<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php namespace application\hooks;
class Hooks
{
    function NotFound($request)
    {
        //$request - Array. Contains information about the request.
    }
}')
    ?>
</div>






