If you are done with the installation, you just need to configure the environment to make
Eaglehorn run. This can be done easily by setting the appropriate url inside the
<code>config/environment.config.php</code> file. You can set up multiple environments in this file.
<a href="<?php echo configItem('site')['url']?>home/page/environment">Learn more</a>
<hr>

<h4>Change default Controller</h4>
<p>You can change the default controller to something else by editing <code>config/default/app.config.php</code></p>
<pre class="code">$config['site']['default_controller'] = 'DefaultController';</pre>

<div class="bs-callout bs-callout-danger">
    Always remember to run <code>composer dump-autoload -o</code> after creating a new class. This will do the autoload
    mappings.
</div>