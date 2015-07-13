<?php
namespace application\controller;
use Eaglehorn\Base;

class About extends Base {

    var $version = '2.0';

    public function __construct($para1,$para2) {
        parent::__construct();
        echo $para1.$para2;
    }
    
    function test($a, $b)
    {
        echo $a.$b;
    }
    
}
?>
