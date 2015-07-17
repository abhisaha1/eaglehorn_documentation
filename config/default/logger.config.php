<?php
/**
 * Logger configurations
 */
$config['logger']['activate'] = 0;

$config['logger']['stack'] = 0;

$config['logger']['file'] = $config['site']['appdir'] . 'logs/'; //should have write permission

//0-emergency, 1-alert, 2-critical, 3-error, 4-warning, 5-notice, 6-info, 7-debug
$config['logger']['level'] = 'debug';