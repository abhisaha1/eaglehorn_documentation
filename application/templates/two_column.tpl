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

        
        <link rel="stylesheet" href="{{configItem('site')['url']}}/public/css/style.css">


    </head>

    <body>

   <!--{{inc("header.php")}}-->

        <!--        Navigation -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#eh_menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{configItem('site')['url']}}">Eaglehorn</a>
                </div>

                <div class="collapse navbar-collapse" id="eh_menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{configItem('site')['url']}}home/page/start">Documentation</a>
                        </li>
                        <li>
                            <a href="{{configItem('site')['url']}}home/credits">Credits</a>
                        </li>
                    </ul>
                </div>
                <!--                    /.navbar-collapse -->
            </div>
            <!--                /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">

            <div class="row row-offcanvas row-offcanvas-left">

                <!-- Sidebar Column -->
                <div class="col-md-3 col-sm-3 sidebar-offcanvas" id="sidebar">
                    <div class="sidebar">
                        {{SIDEBAR|raw}}
                        <!-- /.row -->
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-md-9 col-sm-9" id="content">

                    <button type="button" class="visible-xs pull-left navbar-toggle" data-toggle="offcanvas">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2>
                        {{TITLE}}
                    </h2>

                    {{CONTENT|raw}}
                </div>


            </div>
            <!-- /.row -->



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


        $(document).ready(function () {
            $('[data-toggle="offcanvas"]').click(function () {
                $('.row-offcanvas').toggleClass('active')
            });

            $(".sidebar").height($("#content").height());
        });
        </script>
    </body>

</html>