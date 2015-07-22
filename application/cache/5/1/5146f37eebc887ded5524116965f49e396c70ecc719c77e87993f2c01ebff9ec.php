<?php

/* two_column.tpl */
class __TwigTemplate_5146f37eebc887ded5524116965f49e396c70ecc719c77e87993f2c01ebff9ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

    <head>

        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta property=\"og:title\" content=\"A free, PHP MVC Framework for rapid application development\" />
        <meta property=\"og:site_name\" content=\"Eaglehorn\"/>
        <meta property=\"og:image\" content=\"\"/>
        <meta property=\"og:description\" content=\"A free, PHP MVC Framework for rapid application development\">
        <title>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["TITLE"]) ? $context["TITLE"] : null), "html", null, true);
        echo "</title>
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">

        
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(configItem("site"), "url", array(), "array"), "html", null, true);
        echo "/css/style.css\">


    </head>

    <body>

   <!--";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('inc')->getCallable(), array("header.php")), "html", null, true);
        echo "-->

        <!--        Navigation -->
        <nav class=\"navbar\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#eh_menu\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(configItem("site"), "url", array(), "array"), "html", null, true);
        echo "\">Eaglehorn</a>
                </div>

                <div class=\"collapse navbar-collapse\" id=\"eh_menu\">
                    <ul class=\"nav navbar-nav\">
                        <li>
                            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(configItem("site"), "url", array(), "array"), "html", null, true);
        echo "home/page/start\">Documentation</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(configItem("site"), "url", array(), "array"), "html", null, true);
        echo "home/credits\">Credits</a>
                        </li>
                    </ul>
                </div>
                <!--                    /.navbar-collapse -->
            </div>
            <!--                /.container -->
        </nav>

        <!-- Page Content -->
        <div class=\"container\">

            <div class=\"row row-offcanvas row-offcanvas-left\">

                <!-- Sidebar Column -->
                <div class=\"col-md-3 col-sm-3 sidebar-offcanvas\" id=\"sidebar\">
                    <div class=\"sidebar\">
                        ";
        // line 62
        echo (isset($context["SIDEBAR"]) ? $context["SIDEBAR"] : null);
        echo "
                        <!-- /.row -->
                    </div>
                </div>
                <!-- Content Column -->
                <div class=\"col-md-9 col-sm-9\" id=\"content\">

                    <button type=\"button\" class=\"visible-xs pull-left navbar-toggle\" data-toggle=\"offcanvas\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <h2>
                        ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["TITLE"]) ? $context["TITLE"] : null), "html", null, true);
        echo "
                    </h2>

                    ";
        // line 79
        echo (isset($context["CONTENT"]) ? $context["CONTENT"] : null);
        echo "
                </div>


            </div>
            <!-- /.row -->



            <!-- Footer -->
            <footer>
                <div class=\"container text-left\">
                    <p>Built by Abhishek Saha</p>
                    <p>&copy; Ajaxtown 2014</p>
                </div>
            </footer>

        </div>
        <!-- /.container -->
        <!-- Optional: Include the jQuery library -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55967210-1', 'auto');
        ga('send', 'pageview');


        \$(document).ready(function () {
            \$('[data-toggle=\"offcanvas\"]').click(function () {
                \$('.row-offcanvas').toggleClass('active')
            });

            \$(\".sidebar\").css('min-height', \$(\"#content\").height());
        });
        </script>
    </body>

</html>";
    }

    public function getTemplateName()
    {
        return "two_column.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 79,  117 => 76,  100 => 62,  80 => 45,  74 => 42,  65 => 36,  50 => 24,  40 => 17,  32 => 12,  19 => 1,);
    }
}
