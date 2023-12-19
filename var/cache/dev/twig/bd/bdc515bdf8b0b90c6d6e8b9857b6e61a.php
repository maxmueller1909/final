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

/* header.html.twig */
class __TwigTemplate_bef0de70f19b91c002e2bc5bd38da178 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<header>
    <!-- Static navbar -->
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_homepage");
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz Logo\"/>
                </a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"https://www.google.de/maps/dir//Dr.+Udo+Krug,+Zeisigwaldstraße+80,+09130+Chemnitz/@50.839281,12.9614497,17z/data=!4m15!1m6!3m5!1s0x47a7442bc2f78477:0x3459cf39caba8006!2sDr.+Udo+Krug!8m2!3d50.839281!4d12.9636384!4m7!1m0!1m5!1m1!1s0x47a7442bc2f78477:0x3459cf39caba8006!2m2!1d12.9636384!2d50.839281\" target=\"_blank\" itemscope itemtype=\"http://schema.org/LocalBusiness\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            <span itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                                    <span itemprop=\"streetAddress\">Zeisigwaldstraße 80</span>,
                                    <span itemprop=\"addressLocality\">09130 Chemnitz</span>,
                                    <span itemprop=\"addressRegion\">Sachsen</span>
                            </span>
                        </a>
                    </li>
                    <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->openTimeTableFilter(twig_date_format_filter($this->env, "now", "w")), "html", null, true);
        echo "</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right main-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle ";
        // line 31
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "attributes", [], "any", false, false, false, 31), "get", ["_route"], "method", false, false, false, 31)) && is_string($__internal_compile_1 = "home") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            echo " active ";
        }
        echo "\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Startseite <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_homepage");
        echo "\">Home</a></li>
                            <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_neurochirurgie");
        echo "\">Neurochirurgie Allgemein</a></li>
                            <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_philosophy");
        echo "\">Prinzipien und Praxisphilosophie</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_emergency");
        echo "\">Zuständigkeiten im Notfall</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle ";
        // line 40
        if ((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "attributes", [], "any", false, false, false, 40), "get", ["_route"], "method", false, false, false, 40)) && is_string($__internal_compile_3 = "service") && str_starts_with($__internal_compile_2, $__internal_compile_3))) {
            echo " active ";
        }
        echo "\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Leistungen <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service");
        echo "\">3 Stufen Modell</a></li>
                            <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_diagnostik");
        echo "\">Diagnostik</a></li>
                            <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_konservativetherapie");
        echo "\">Konservative Therapie</a></li>
                            <li><a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_minimalinvasivetherapie");
        echo "\">Minimalinvasive Schmerztherapie</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_operativetherapie");
        echo "\">Operative Therapie</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle ";
        // line 50
        if ((is_string($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", ["_route"], "method", false, false, false, 50)) && is_string($__internal_compile_5 = "practice") && str_starts_with($__internal_compile_4, $__internal_compile_5))) {
            echo " active ";
        }
        echo "\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Praxis <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("practice_team");
        echo "\">Unser Team</a></li>
                            <li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("practice_practice");
        echo "\">Unsere Räume</a></li>
                        </ul>
                    </li>
                    <li><a class=\"";
        // line 56
        if ((is_string($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56)) && is_string($__internal_compile_7 = "contact") && str_starts_with($__internal_compile_6, $__internal_compile_7))) {
            echo " active ";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Kontakt</a></li>
                    <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_homepage");
        echo "#erfassungsbogen\" class=\"btn-neurospine\">Patientenerfassungsbogen</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</header>
<div class=\"clearfix\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
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
        return array (  167 => 57,  159 => 56,  153 => 53,  149 => 52,  142 => 50,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  112 => 40,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  86 => 31,  77 => 27,  60 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <!-- Static navbar -->
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('home_homepage') }}\">
                    <img src=\"{{ asset(\"assets/img/logo.png\") }}\" alt=\"Neurospine Chemnitz Logo\"/>
                </a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"https://www.google.de/maps/dir//Dr.+Udo+Krug,+Zeisigwaldstraße+80,+09130+Chemnitz/@50.839281,12.9614497,17z/data=!4m15!1m6!3m5!1s0x47a7442bc2f78477:0x3459cf39caba8006!2sDr.+Udo+Krug!8m2!3d50.839281!4d12.9636384!4m7!1m0!1m5!1m1!1s0x47a7442bc2f78477:0x3459cf39caba8006!2m2!1d12.9636384!2d50.839281\" target=\"_blank\" itemscope itemtype=\"http://schema.org/LocalBusiness\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            <span itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                                    <span itemprop=\"streetAddress\">Zeisigwaldstraße 80</span>,
                                    <span itemprop=\"addressLocality\">09130 Chemnitz</span>,
                                    <span itemprop=\"addressRegion\">Sachsen</span>
                            </span>
                        </a>
                    </li>
                    <li><a href=\"{{ path('contact') }}\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> {{ \"now\"|date(\"w\")|opening }}</a></li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right main-nav\">
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle {% if app.request.attributes.get('_route') starts with \"home\" %} active {% endif %}\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Startseite <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('home_homepage') }}\">Home</a></li>
                            <li><a href=\"{{ path('home_neurochirurgie') }}\">Neurochirurgie Allgemein</a></li>
                            <li><a href=\"{{ path('home_philosophy') }}\">Prinzipien und Praxisphilosophie</a></li>
                            <li><a href=\"{{ path('home_emergency') }}\">Zuständigkeiten im Notfall</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle {% if app.request.attributes.get('_route') starts with \"service\" %} active {% endif %}\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Leistungen <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('service') }}\">3 Stufen Modell</a></li>
                            <li><a href=\"{{ path('service_diagnostik') }}\">Diagnostik</a></li>
                            <li><a href=\"{{ path('service_konservativetherapie') }}\">Konservative Therapie</a></li>
                            <li><a href=\"{{ path('service_minimalinvasivetherapie') }}\">Minimalinvasive Schmerztherapie</a></li>
                            <li><a href=\"{{ path('service_operativetherapie') }}\">Operative Therapie</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle {% if app.request.attributes.get('_route') starts with \"practice\" %} active {% endif %}\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Praxis <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"{{ path('practice_team') }}\">Unser Team</a></li>
                            <li><a href=\"{{ path('practice_practice') }}\">Unsere Räume</a></li>
                        </ul>
                    </li>
                    <li><a class=\"{% if app.request.attributes.get('_route') starts with \"contact\" %} active {% endif %}\" href=\"{{ path('contact') }}\">Kontakt</a></li>
                    <li><a href=\"{{ path('home_homepage') }}#erfassungsbogen\" class=\"btn-neurospine\">Patientenerfassungsbogen</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
</header>
<div class=\"clearfix\"></div>", "header.html.twig", "/Users/mmueller/Downloads/website_web/templates/header.html.twig");
    }
}
