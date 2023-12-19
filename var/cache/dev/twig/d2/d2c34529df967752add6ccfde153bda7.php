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

/* Practice/practice.html.twig */
class __TwigTemplate_ca65ed596f79add4c976940164546e6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Practice/practice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Practice/practice.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Practice/practice.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"practice\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/1.jpg"), "html", null, true);
        echo "')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h1 class=\"page-header-big\">Unsere Praxis</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer gallery\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/00.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />

                                <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/02.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/3.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/4.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/6.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/8.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/11.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                            </div>
                            <div class=\"col-md-6\">
                                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/01.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />

                                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/2.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/5.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/7.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/9.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/13.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/10.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/practice/12.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Practice/practice.html.twig";
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
        return array (  179 => 68,  173 => 65,  167 => 62,  161 => 59,  155 => 56,  149 => 53,  143 => 50,  138 => 48,  131 => 44,  125 => 41,  119 => 38,  113 => 35,  107 => 32,  101 => 29,  96 => 27,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"practice\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/practice/1.jpg\") }}')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h1 class=\"page-header-big\">Unsere Praxis</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer gallery\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <img src=\"{{ asset(\"assets/img/practice/00.jpg\") }}\" alt=\"Neurospine Chemnitz\" />

                                <img src=\"{{ asset(\"assets/img/practice/02.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/3.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/4.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/6.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/8.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/11.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                            </div>
                            <div class=\"col-md-6\">
                                <img src=\"{{ asset(\"assets/img/practice/01.jpg\") }}\" alt=\"Neurospine Chemnitz\" />

                                <img src=\"{{ asset(\"assets/img/practice/2.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/5.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/7.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/9.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/13.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/10.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                                
                                <img src=\"{{ asset(\"assets/img/practice/12.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Practice/practice.html.twig", "/Users/mmueller/Downloads/website_web/templates/Practice/practice.html.twig");
    }
}
