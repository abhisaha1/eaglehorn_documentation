<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>
    The cache worker provides a way to to cache templates, views, just any content for a specific period
    of time.
</p>

You can configure your cache directory from the config file, <code>cache.config.php</code>. This directory should have <mark>write access</mark><br><br>
<pre class="code">
$config['cache']['dir'] = root . 'application/cache/';
</pre>
<hr>
<h4>Usage:</h4>
The cache worker can be used in the below way:
<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class User extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    
    function login()
    {
        //load the cache worker
        $cache = $this->load->worker(\'Cache\');
        
        //delete expired cache
        $cache->eraseExpired();
        
        if($cache->isCached(\'loginview\'))
        {
            echo $cache->retrieve(\'loginview\');
        }
        else
        {
            $cache->startCaching();
            //pushing data to template
            $data = array(
                \'TITLE\' => \'Login\',
                \'CONTENT\' => \'LoginView.php\'
            );

            $template = $this->load->template(\'one_col\', $data);
            $template->render(); //show the view
            $cache->stopCaching();
            //store the cache for 10 minutes
            $cache->store(\'loginview\',$cache->last_stored_cache,10*60);
        }
    }
}
?>');
    ?>

</div>

<h4>Methods:</h4>
Below are the methods available for cache.<br><br>

<pre class="code">

startCaching();             //place this where you want to start caching

stopCaching();              //place this where you want to stop caching

store($key,$data,$time);    //store the cache for x secs

retrieve($key);             // Get the stored cache

eraseExpired();             //Delete all expired cache

erase($key);                // Delete cache with $key even if it has not expired.

eraseAll();                 //Delete all cache even if they have not expired.

</pre>