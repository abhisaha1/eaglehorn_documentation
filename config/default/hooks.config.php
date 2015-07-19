<?php
$config['hooks'] = array(

        'logger' => array(
            'class'         => 'logger',
            'namespace'     => 'hooks\logger',
            'active'        => 0
        ),

        'pre_controller' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'preload',
            'active'        => 1
        ),

        'post_controller' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'postload',
            'active'        => 1
        ),

        'pre_template'  => array(

            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'pretemplate',
            'active'        => 1

        ),

        'error' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'error',
            'active'        => 1
        ),

        '404' => array(
            'class'         => 'PreController',
            'namespace'     => 'hooks',
            'method'        => 'notFound',
            'active'        => 1
        )
);
