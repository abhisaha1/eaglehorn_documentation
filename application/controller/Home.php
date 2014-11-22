<?php
namespace application\controller;
use Eaglehorn\Base;

class Home extends Base {
    
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        
        $data = array(
            'TITLE'     => 'Home',
            'CONTENT'   => 'page.php'
        );
        $view = $this->load->view('home.php',$data);
        
        $view->render();
        
    }
    
    function page($page) {
        
        
        $page_path = configItem('site')['viewdir'] . 'pages/'.$page.'.php';
        
        if(file_exists($page_path)) {
            
            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'SIDEBAR'   => 'sidebar.php',
                'TITLE'     => ucfirst($page),
                'CONTENT'   => 'pages/'.$page.'.php'
            );
            $template = $this->load->template('two_column',$data);

            $template->render();
            
        }else{
            echo '404';
        }
    }
    
    function worker($worker) {
        
        
        $page_path = configItem('site')['viewdir'] . 'workers/'.$worker.'.php';
        
        if(file_exists($page_path)) {
            
            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'SIDEBAR'   => 'sidebar.php',
                'TITLE'     => 'Worker • '.ucfirst($worker),
                'CONTENT'   => 'workers/'.$worker.'.php'
            );
            $template = $this->load->template('two_column',$data);

            return $template->render();
            
        }else{
            echo '404';
        }
    }
    function assembly($assembly) {
        
        
        $page_path = configItem('site')['viewdir'] . 'assembly/'.$assembly.'.php';
        
        if(file_exists($page_path)) {
            
            $this->updated_on = date("F d Y H:i:s.", filemtime($page_path));
            $data = array(
                'SIDEBAR'   => 'sidebar.php',
                'TITLE'     => 'Assembly • '.ucfirst($assembly),
                'CONTENT'   => 'assembly/'.$assembly.'.php'
            );
            $template = $this->load->template('two_column',$data);

            return $template->render();
            
        }else{
            echo '404';
        }
    }
    
    function credits() {
        
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
