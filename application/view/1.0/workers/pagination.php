<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The pagination worker is used to build a pagination. The pagination markup is uses the
    bootstrap markup. So, if you are using bootstrap, you really don't have to worry about css.
</p>
<hr>
<h4>Usage:</h4>
The Pagination worker is great and can be used very easily.

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class User extends Base {

    function __construct() {
        parent::__construct();
    }
    
    function paginate() {
        $pagination = $this->load->worker(\'pagination\');
    
        $page = getParameters(1);
        $target_url = configItem(\'site\')[\'url\'] .\'home/worker/pagination\';
        $total_count = 30;
        $limit = 3;
        
        //write a query in your model to get the records
        //the below sql is for reference
        $start = ($page > 0) ? $page * $limit - $limit : 0;
        echo $sql = "SELECT * FROM users LIMIT $start,$limit";
        //create pagination
        echo $pagination->prepare($target_url, $total_count, $limit,\'para1/para2\',$page); 
    }
    
}

?>')
    ?>

</div>
<?php

    $pagination = $this->load->worker('pagination');
    
    $page = getParameters(1);
    $target_url = configItem('site')['url'] .'home/worker/pagination';
    $total_count = 30;
    $limit = 3;
    
    $start = ($page > 0) ? $page * $limit - $limit:0;
    echo '<code>'.$sql = "SELECT * FROM users LIMIT $start,$limit".'</code><p>';
    echo $pagination->prepare($target_url, $total_count, $limit,'para1/para2',$page); 

?>

</div>
