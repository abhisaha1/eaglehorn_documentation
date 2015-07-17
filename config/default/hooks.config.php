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
            'active'        => 0
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

        )
);
