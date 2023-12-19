<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_a17060d56b4f79f7f5806bea2a92613e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"format-detection\" content=\"telephone=no\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>

        <title>Neurospine Chemnitz</title>

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"assets/css/app.minify.css\" type=\"text/css\" media=\"all\" />
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-32x32.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon-16x16.png"), "html", null, true);
        echo "\">
        <link rel=\"manifest\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("manifest.json"), "html", null, true);
        echo "\">
        <meta name=\"theme-color\" content=\"#ffffff\">


        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css\" />
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js\"></script>
        <script>
            window.addEventListener(\"load\", function(){
                window.cookieconsent.initialise({
                    \"palette\": {
                        \"popup\": {
                            \"background\": \"#b5152b\"
                        },
                        \"button\": {
                            \"background\": \"#333333\"
                        }
                    },
                    \"content\": {
                        \"message\": \"Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können.\",
                        \"dismiss\": \"Ok\",
                        \"link\": \"Mehr erfahren\",
                        \"href\": \"http://www.neurospine-chemnitz.de/datenschutz\"
                    }
                })});
        </script>
        <style>
            .cc-revoke, .cc-window{
                position: relative;!important;
            }
        </style>



    </head>
    <body id=\"app\">

        <div id=\"main-page\">
            <div class=\"container-fluid\" role=\"main\">
                ";
        // line 60
        $this->loadTemplate("header.html.twig", "base.html.twig", 60)->display($context);
        // line 61
        echo "
                ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
                ";
        // line 64
        $this->loadTemplate("footer.html.twig", "base.html.twig", 64)->display($context);
        // line 65
        echo "            </div>
        </div>

        ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 114
        echo "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "            <script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.js\" type=\"text/javascript\"></script>
            <script src=\"Resources/assets/js/*\" type=\"text/javascript\"></script>
            <script src=\"\" type=\"text/javascript\"></script>

            <script>
                function isScrolledIntoView(el) {
                    var elemTop = el.getBoundingClientRect().top;
                    var elemBottom = el.getBoundingClientRect().bottom;

                    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
                    return isVisible;
                }

                \$(window).on('scroll', function() {
                    if (isScrolledIntoView(document.getElementById('counters'))) {
                        \$('.ace-counter-number').countTo();

                        // Unbind scroll event
                        \$(window).off('scroll');
                    }
                });

                var isMobile = window.matchMedia(\"only screen and (max-width: 768px)\");

                if (!isMobile.matches) {
                    \$('ul.nav li.dropdown').hover(function() {
                        \$(this).find('.dropdown-menu').stop(true, true).show();
                    }, function() {
                        \$(this).find('.dropdown-menu').stop(true, true).hide();
                    });
                }

                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-104708982-1', 'auto');
                ga('send', 'pageview');

            </script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  176 => 69,  166 => 68,  148 => 62,  137 => 114,  135 => 68,  130 => 65,  128 => 64,  125 => 63,  123 => 62,  120 => 61,  118 => 60,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"format-detection\" content=\"telephone=no\" />
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>

        <title>Neurospine Chemnitz</title>

            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"assets/css/app.minify.css\" type=\"text/css\" media=\"all\" />
            <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
            <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
            <![endif]-->

        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('apple-touch-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('favicon-32x32.png') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('favicon-16x16.png') }}\">
        <link rel=\"manifest\" href=\"{{ asset('manifest.json') }}\">
        <meta name=\"theme-color\" content=\"#ffffff\">


        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css\" />
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js\"></script>
        <script>
            window.addEventListener(\"load\", function(){
                window.cookieconsent.initialise({
                    \"palette\": {
                        \"popup\": {
                            \"background\": \"#b5152b\"
                        },
                        \"button\": {
                            \"background\": \"#333333\"
                        }
                    },
                    \"content\": {
                        \"message\": \"Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können.\",
                        \"dismiss\": \"Ok\",
                        \"link\": \"Mehr erfahren\",
                        \"href\": \"http://www.neurospine-chemnitz.de/datenschutz\"
                    }
                })});
        </script>
        <style>
            .cc-revoke, .cc-window{
                position: relative;!important;
            }
        </style>



    </head>
    <body id=\"app\">

        <div id=\"main-page\">
            <div class=\"container-fluid\" role=\"main\">
                {% include('header.html.twig') %}

                {% block body %}{% endblock %}

                {% include('footer.html.twig') %}
            </div>
        </div>

        {% block javascripts %}
            <script src=\"http://code.jquery.com/jquery-latest.min.js\" type=\"text/javascript\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.js\" type=\"text/javascript\"></script>
            <script src=\"Resources/assets/js/*\" type=\"text/javascript\"></script>
            <script src=\"\" type=\"text/javascript\"></script>

            <script>
                function isScrolledIntoView(el) {
                    var elemTop = el.getBoundingClientRect().top;
                    var elemBottom = el.getBoundingClientRect().bottom;

                    var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
                    return isVisible;
                }

                \$(window).on('scroll', function() {
                    if (isScrolledIntoView(document.getElementById('counters'))) {
                        \$('.ace-counter-number').countTo();

                        // Unbind scroll event
                        \$(window).off('scroll');
                    }
                });

                var isMobile = window.matchMedia(\"only screen and (max-width: 768px)\");

                if (!isMobile.matches) {
                    \$('ul.nav li.dropdown').hover(function() {
                        \$(this).find('.dropdown-menu').stop(true, true).show();
                    }, function() {
                        \$(this).find('.dropdown-menu').stop(true, true).hide();
                    });
                }

                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-104708982-1', 'auto');
                ga('send', 'pageview');

            </script>

        {% endblock javascripts %}
    </body>
</html>", "base.html.twig", "/Users/mmueller/Downloads/website_web/templates/base.html.twig");
    }
}
