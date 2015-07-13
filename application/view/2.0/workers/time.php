<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The Time worker can be used to get 'x minutes ago', 'x hours ago', 'x years ago', etc. It can also
    be used to get the time difference.
</p>
<hr>
<h4>Usage:</h4>

Time worker can be called and used in the below way:

<div id="code">
    <?php 
    $text = $this->load->worker('text');

    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class user extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    /**
     * Find difference between 2 dates
     */
    function method1()
    {
        $handle = $this->load->worker(\'Time\');
        echo $handle->dateDiff(\'2014-01-19 08:30:41\',\'2014-01-19 06:36:42\');
        //prints 1 Hour 53 Minutes 59 Seconds
    }
    /**
     * Find time ago
     */
    function method1()
    {
        $handle = $this->load->worker(\'Time\');
        echo $handle->timeAgo(\'2012-01-19 08:30:41\');
        //prints 3 years ago
    }
}
?>')
    ?>

</div>
