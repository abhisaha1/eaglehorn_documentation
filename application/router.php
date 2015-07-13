<?php
\Eaglehorn\Router::route('/login/', 'home-login/dologin/');
\Eaglehorn\Router::route('/test', function(){
    echo 123;
    display($_GET);
});
?>
