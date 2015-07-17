Imagine a scenario where you have to push your changes to different servers, like Staging or Quality, Production, etc. Each of them will
have different urls. And you might want to have different configurations(mysql, logging) for each of these servers. To make this possible, Eaglehorn
has a <code>environment.config.php</code> inside the <code>config</code> folder.
<hr>

The <code>environment.config.php</code> looks something like this.


<div id="code">
    <?php
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
$config[\'environment\'] = array(

        \'default\'     => \'http://localhost/public/\',
        \'test\'        => \'http://test.eaglehorn/\',
        \'production\'  => \'http://eaglehorn.org/\',
        \'xxx\'         => \'http://xxxx.xxx\'
        //add your environment here...
);
return $config;')
    ?>
</div>

<p>By default, the <code>default</code> environment is set. If you open the config folder, you will see that the default folder
contains all the configuration files. These files get loaded automatically by Eaglehorn.

    <br/><br/>
When you are in another environment,
say <code>test</code> environment, then the <code>$config['site']['url']</code> gets changed automatically to the mapped url that you
    have mentioned in the above file.

    <br/><br/>
    However, you might want to change the mysql config files or cache config files. In such cases,
    you can create a folder inside the <code>config</code> folder. Give this the same name that you are mentioning in the above file,
    that is <code>test</code> or <code>production</code> or <code>xxx</code>. Then copy the relevant <code>xxx.config.php</code> file into
    the newly created folder. Eaglehorn is going to scan this file and overwrite the default configuration file.
</p>
<br/>