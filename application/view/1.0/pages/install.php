Eaglehorn utilizes Composer to manage its dependencies. 
First, download a copy of the <code>composer.phar</code>. 
Once you have the PHAR archive, 
you can either keep it in your local project directory or move to <code>usr/local/bin</code>
to use it globally on your system. On Windows, you can use the Composer <a href="https://getcomposer.org/Composer-Setup.exe">Windows installer</a>.
<hr>

<h4>Via Composer:</h4>
    <p>You may also install Eaglehorn by issuing the Composer create-project command in your terminal:</p>
<pre class="code">
composer create-project ajaxtown/eaglehorn:dev-master
</pre>
    
<p>That will create the project by loading all dependencies. After this you need to create autoload class mappings.
For that this is the command.</p>
<pre class="code">
composer dump-autoload -o
</pre>
-o is for <code>optimized</code>

    <br>
<h4>Via Download:</h4>
    <p>You may also download Eaglehorn and extract its contents inside your root folder.
    Next, in the root of your Eaglehorn application, run the <code>composer update</code> command 
    to install all of the framework's dependencies. 
    This process requires Git to be installed on the server to successfully complete the installation.</p>

