<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eaglehorn is a PHP MVC Framework for developing PHP applications. 
                        It gives a very clean way to understand how MVC works. 
                        A light-weight framework with clean architecture.">
    <meta name="keywords" content="eaglehorn, php, mvc, frameowrk, lightweight, abhishek, saha, abhishek saha, redsnow, ajaxtown">
    <meta name="author" content="Abhishek Saha">
    <meta property="og:title" content="Eaglehorn: A simple PHP MVC Framework" />
    <meta property="og:site_name" content="Eaglehorn"/>
    <meta property="og:image" content="<?php echo configItem('site')['viewurl']; ?>img/eaglelogo.png"/>
    <meta property="og:description" content="Eaglehorn is a PHP MVC Framework for developing PHP applications. 
                        It gives a very clean way to understand how MVC works. 
                        A light-weight framework with clean architecture.">
    <meta name="google-site-verification" content="QwFtAQmrWXMkUuNGvw_Zw5BT8vzAVPAG80vrpJzsqCs" />
    <title>Eaglehorn - PHP MVC Framework</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">


    <!-- Custom CSS -->
    <link href="<?php configItem('site')['url']; ?>public/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="http://ajaxtown.com">
                    <i class="fa fa-play-circle"></i>  <span class="light">Ajaxtown</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home/page/install">Installation</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="home/page/start/2.0">Documentation</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Eaglehorn</h1>
                        <p class="intro-text">A Tiny PHP MVC Framework</p>
                        <a href="https://github.com/ajaxtown/eaglehorn/archive/master.zip" class="btn btn-default btn-lg">Download v2.0</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
    
    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>About</h2>
                <p>
                    Eaglehorn is a fast, simple and rapid MVC framework. Its not Laravel. Its not Symfony.
                    It allows you to build applications with most minimal configurations.
                    Eaglehorn follows latest PSR standards and uses composer. 
                </p>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section id="feature" class="container feature-section text-center">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Features in v2.0</h2>
                <p>
                    <div class="col-lg-12 text-left">
                        <h2 class="subtitle">Hooks</h2>
                        <p>Now you can attach your classes to event listeners. For eg. 
                         you might want to do some preprocessing work before the controller is loaded
                         and a method is triggered.
                        </p>
                    </div>

                </p>

                <p>
                    <div class="col-lg-12 text-left">
                        <h2 class="subtitle">Twig</h2>
                        <p>Eaglehorn now uses Twig as its template engine. It has ton's of features. Dont forget 
                        to checkout its documentation.
                        </p>
                    </div>

                </p>

                <p>
                    <div class="col-lg-12 text-left">
                        <h2 class="subtitle">RedBeanPHP ORM</h2>
                        <p>RedBeanPHP can be used instead of Eaglehorn's inbuilt Model class. 
                        </p>
                    </div>
                </p>

                <p>
                    <div class="col-lg-12 text-left">
                        <h2 class="subtitle">Improved Router</h2>
                        <p>The router class has been improved, yet keeping it really simple.
                            If you are making a small application you can ignore controllers, models etc. 
                            Router now provides a callback function to execute your views without using the controller.
                        </p>
                    </div>
                </p>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Built by Abhishek Saha</p>
            <p>&copy; Ajaxtown 2014</p>
        </div>
    </footer>

    <!-- Optional: Include the jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-55967210-1', 'auto');
    ga('send', 'pageview');

    </script>
</body>

</html>