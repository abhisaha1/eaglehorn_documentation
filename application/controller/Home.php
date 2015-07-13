<?php
namespace application\controller;
use Eaglehorn\Base;

class Home extends Base {

    var $version = '2.0';

    public function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        
        $data = array(
            'TITLE'     => 'Home',
            'CONTENT'   => 'page.php'
        );
        $view = $this->load->view('2.0/home.php',$data);
        
        $view->render();
        
    }
    
    function page($page,$version = '')
    {

        if($version != '')
        {
            $this->version = $version;
        }

        
        $page_path = configItem('site')['viewdir'] .$this->version. '/pages/'.$page.'.php';
        
        if(file_exists($page_path)) {

            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'SIDEBAR'   => $this->version.'/sidebar.php',
                'TITLE'     => ucfirst($page),
                'CONTENT'   => $this->version.'/pages/'.$page.'.php'
            );
            $template = $this->load->template('two_column',$data);
            $template->render();
            
        }else{
            echo '404';
        }
    }
    
    function worker($worker,$version = '')
    {

        if($version != '')
        {
            $this->version = $version;
        }

        $page_path = configItem('site')['viewdir'] .$this->version. '/workers/'.$worker.'.php';
        
        if(file_exists($page_path)) {
            
            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'SIDEBAR'   => $this->version . '/sidebar.php',
                'TITLE'     => 'Worker • '.ucfirst($worker),
                'CONTENT'   => $this->version.'/workers/'.$worker.'.php'
            );
            $template = $this->load->template('two_column',$data);

            return $template->render();
            
        }else{
            echo '404';
        }
    }

    
    function credits()
    {
        
        $page_path = configItem('site')['viewdir'] . 'credits.php';
        
        if(file_exists($page_path)) {
            
            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'TITLE'     => 'Credits',
                'CONTENT'   => 'credits.php'
            );
            $template = $this->load->template('one_column',$data);

            return $template->render();
            
        }else{
            echo '404';
        }
    }
    
    
}
?>
