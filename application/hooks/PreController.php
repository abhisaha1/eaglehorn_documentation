<?php namespace application\hooks;

class PreController {


    function postload($instance)
    {
        //$function = new \Twig_SimpleFunction('config', 'configItem');
        //$instance->template->twig->addFunction($function);
    }

    function pretemplate($instance)
    {


    }

    function preload()
    {

    }

    function error($error)
    {

    }

    function notFound($error)
    {
        \Eaglehorn\View::show('header.php');
    }
}