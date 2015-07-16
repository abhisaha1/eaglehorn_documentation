The structure of the application is important as it allows you to house your files in an organised manner.
Your application resides inside the <code>application</code> folder. This folder has been namespaced as <code>application</code>.
However you can change the namespace from the <code>composer.json</code> file but make sure to run <code>composer dump-autoload -o</code>
to do the mappings.
<hr>

<h4>The public folder</h4>
<p>We will get inside the application folder in sometime but before that lets talk about the public folder. This folder contains thd
<code>index.php</code> file which is the start of your application. All your css/js/images files should be kept here. This is
the only folder which can be accessed directly without using a controller.</p>
<br/>
<h4>The application folder</h4>
<p>
    <code>controller</code> -All your controller classes goes inside this folder. These classes can interact with your model, call workers
    and render the view. Your application logic goes inside this.
</p>

<p>
    <code>model</code> -All your database related queries are written here. These classes can take advantage of the RedBeanPHP ORM or
    eaglehorns inbuilt PDO Class.
</p>

<p>
    <code>view</code> - All your files which need to be rendered and displayed in the frontend are written here.
</p>

<p>
    <code>templates</code> - In this folder you write templates which houses the views inside. The template uses <strong>twig</strong>
    as its template engine.
</p>

<p>
    <code>hooks</code> - Here you can write hooks which can be used to catch events of your application without being a part of
    the application. For eg. you can write a hook to trigger when a particular controller is loaded and a method is called.
</p>

<p>
    <code>cache</code> - The cache folder is used by workers to cache some data which is used to make the workers perform better.
    This folder should have write access.
</p>

