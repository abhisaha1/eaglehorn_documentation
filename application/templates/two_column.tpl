<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="A free, PHP MVC Framework for rapid application development" />
        <meta property="og:site_name" content="Eaglehorn"/>
        <meta property="og:image" content=""/>
        <meta property="og:description" content="A free, PHP MVC Framework for rapid application development">
        <title>{{TITLE}}</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        
        <link rel="stylesheet" href="{{configItem('site')['url']}}/css/style.css">


    </head>

    <body>

   <!--{{inc("header.php")}}-->

        <!--        Navigation -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{configItem('site')['url']}}">Eaglehorn</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo configItem('site')['url']; ?>home/page/start">Documentation</a>
                        </li>
                        <li>
                            <a href="<?php echo configItem('site')['url']; ?>home/credits">Credits</a>
                        </li>
                    </ul>
                </div>
                <!--                    /.navbar-collapse -->
            </div>
            <!--                /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row">


                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-3">



                    <!-- Side Widget Well -->
                    <!--                    <div class="well">
                                            <h4>Side Widget Well</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                                        </div>-->
                    <!-- Blog Categories Well -->
                    <div class="sidebar">
                        {{SIDEBAR|raw}}
                        <!-- /.row -->
                    </div>
                </div>
                <!-- Blog Entries Column -->
                <div class="col-md-9" id="content">


                    <h2>
                        <a href="#">{{TITLE}}</a>
                    </h2>

                    {{CONTENT|raw}}
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="container text-left">
                    <p>Built by Abhishek Saha</p>
                    <p>&copy; Ajaxtown 2014</p>
                </div>
            </footer>

        </div>
        <!-- /.container -->
        <!-- Optional: Include the jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
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