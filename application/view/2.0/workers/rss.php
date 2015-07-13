<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The RSS Worker is used to fetch 'X' items from any RSS Feed. It outputs an array of feeds.
</p>
<hr>
<h4>Usage:</h4>

RSS worker can be called and used in the below way:

<div id="code">
    <?php 
    
    $rssparser = $this->load->worker('Rss');
    $rssparser->setUrl('http://feeds.bbci.co.uk/news/world/asia/rss.xml');  // get feed
    $rssparser->set_cache_life(30);                       // Set cache life time in minutes
    $var = $rssparser->getFeed(2); 
        
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
    
    function getfeeds()
    {
        $rssparser = $this->load->worker(\'rss\');
        $rssparser->setUrl(\'http://feeds.bbci.co.uk/news/world/asia/rss.xml\');  // get feed
        $rssparser->set_cache_life(30);                       // Set cache life time in minutes
        $feeds = $rssparser->getFeed(2); 
        display($feeds);
    }
}
?>')
    ?>

</div>
Output:
<?php display($var); ?>