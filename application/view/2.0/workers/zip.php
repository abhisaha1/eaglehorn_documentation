<!-- First Blog Post -->

<p><span class="glyphicon glyphicon-time"></span> Updated on <?php echo $this->updated_on; ?></p>
<hr>
<p>The zip worker can be used to create zip files. It can also be used to force download a zip file.
</p>
<hr>
<h4>Usage:</h4>
Creating a file with contents dynamically and zipping it.

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
    
    function zipIt()
    {
        //loading the worker
        $zip = $this->load->worker(\'Zip\');
        //setting up a comment
        $zip->setComment(\'Some nice comment here\'); 
        //adding text to document.txt which will get created
        $zip->addFile(\'Text to write inside a file\', "document.txt");
        //finalize
        $zip->finalize();
        //save the file inside the public folder.
        $zip->saveZipFile(configItem(\'site\')[\'rootdir\']."public/report.zip");
        //download the zip file by he name myreport.zip
        $zip->downloadZip("myreport.zip");
    }
}
?>');
    ?>

</div>

Zipping the application folder <code>controller</code> and downloading it

<div id="code">
    <?php 
    $text = $this->load->worker('text');
    echo $text->codeHighlight('<?php
namespace Eaglehorn\application\controller;
use Eaglehorn\core\controller\Base;

class User extends Base
{
    function __construct()
    {
        parent::__construct();
    }
    
    function zipIt()
    {
        //loading the worker
        $zip = $this->load->worker(\'Zip\');
        //setting up a comment
        $zip->setComment(\'Some nice comment here\');
        //* Adding the directory that needs to be zipped and the folder
        //* which will contain the files inside the zipped file.
        $zip->addDirectoryContent(configItem(\'site\')[\'rootdir\']."controller", "controller");
        //finalize
        $zip->finalize();
        //save the file inside the public folder.
        $zip->saveZipFile(configItem(\'site\')[\'rootdir\']."public/controllers.zip");
        //download the zip file by he name myreport.zip
        $zip->downloadZip("controllers.zip");
    }
}
?>');
    ?>

</div>
