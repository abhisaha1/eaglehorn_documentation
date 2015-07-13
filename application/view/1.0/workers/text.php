<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The Text worker can be used to highlight codes and also can be used as a text marker.
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

class User extends Base {

    function __construct() {
        parent::__construct();
    }
    
    /**
     * Highlight code
     */
    function method1() {
        $handle = $this->load->worker(\'text\');
        echo $handle->codeHighlight(\'<html></html>\');
    }
    /**
     * Highlight words
     */
    function method1() {
        $handle = $this->load->worker(\'text\');
        echo $handle->highlightPhrase(\'Eaglehorn is a PHP MVC Framework\',\'Eaglehorn\');
        echo $handle->highlightPhrase(\'Eaglehorn is a PHP MVC Framework\',\'Eaglehorn\',\'<i>\',\'</i>\');
    }
    
}

?>')
    ?>

</div>
Output:
<?php
echo '<pre>'.$text->codeHighlight('<html></html>');
echo $text->highlightPhrase('Eaglehorn is a PHP MVC Framework','Eaglehorn').'<br>';
echo $text->highlightPhrase('Eaglehorn is a PHP MVC Framework','Eaglehorn','<i>','</i>');
?>