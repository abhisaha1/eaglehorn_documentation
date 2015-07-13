<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The upload worker can be used to upload files. It can also be used to crop, resize, add effects to image uploads.
</p>
<hr>
<h4>Usage:</h4>
The upload worker needs to be loaded first.
<br><br>
<div class="alert alert-danger" role="alert">
    This worker uses the class written by Verot. More detailed documention
    of this class can be found at <a target="_blank"href="http://www.verot.net/php_class_upload_docs.htm">here</a>.
</div>
<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace application\controller;
use Eaglehorn\Base;

class user extends Base {

    function __construct() {
        parent::__construct();
    }
    
    function upload_file() {
    
        $handle = $this->load->worker(\'upload\');
        $handle = new upload($_FILES[\'image_field\']);
        if ($handle->uploaded) {
            $handle->file_new_name_body   = \'image_resized\';
            $handle->image_resize         = true;
            $handle->image_x              = 100;
            $handle->image_ratio_y        = true;
            $handle->process(VIEWDIR.\'assets\');
            if ($handle->processed) {
                echo \'image resized\';
                $handle->clean();
            } else {
                echo \'error : \' . $handle->error;
            }
        }
    }
    
}

?>')
    ?>

</div>
