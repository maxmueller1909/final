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

/* Service/stosswellentherapie.html.twig */
class __TwigTemplate_1b17d1af1808b11f6af352f817fbd864 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/stosswellentherapie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/stosswellentherapie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Service/stosswellentherapie.html.twig", 1);
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
        echo "
    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/stosswellentherapie.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h2 class=\"section_header text-uppercase text-center\">Stosswellentherapie ( ESWT) </h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>Die Zunahme myofaszialer Beschwerden hat ihre Ursache in einem – meist durch anhaltende, bewegungsarme Fehlhaltung (PC-Arbeitsplatz) provozierten Muskel-Sehnen-Schmerz. Diese schmerzhaften Verklebungen der Muskulatur (myofasziale Triggerpunkte) können mit der neuesten Generation moderner Stoßwellengeräte mit höherer Wirktiefe und Effiziens als mit herkömmlichen Massagen bzw. manueller Therapie behandelt werden.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5>Wie wirkt Stoßwellentherapie?</h5>
                                        <p>Applikatoren mit anatomisch geformter Kontaktfläche übertragen die Energie der radialen Stosswelle sehr viel konzentrierter auf die tiefliegende, filigrane Stützmuskulatur der Wirbelsäule und bewirken die schonende und risikofreie Behandlung myofaszialer Schmerzen.  </p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <p class=\"btn_wa\">
                                            <b class=\"btn btn-neurospine\">Schmerzlindernd</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Stoffwechselaktivierend</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Durchblutungsfördernd</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Muskelentspannend</b>
                                        </p>
                                    </div>
                                </div>
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
        return "Service/stosswellentherapie.html.twig";
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
        return array (  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/service/stosswellentherapie.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h2 class=\"section_header text-uppercase text-center\">Stosswellentherapie ( ESWT) </h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <p>Die Zunahme myofaszialer Beschwerden hat ihre Ursache in einem – meist durch anhaltende, bewegungsarme Fehlhaltung (PC-Arbeitsplatz) provozierten Muskel-Sehnen-Schmerz. Diese schmerzhaften Verklebungen der Muskulatur (myofasziale Triggerpunkte) können mit der neuesten Generation moderner Stoßwellengeräte mit höherer Wirktiefe und Effiziens als mit herkömmlichen Massagen bzw. manueller Therapie behandelt werden.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h5>Wie wirkt Stoßwellentherapie?</h5>
                                        <p>Applikatoren mit anatomisch geformter Kontaktfläche übertragen die Energie der radialen Stosswelle sehr viel konzentrierter auf die tiefliegende, filigrane Stützmuskulatur der Wirbelsäule und bewirken die schonende und risikofreie Behandlung myofaszialer Schmerzen.  </p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <p class=\"btn_wa\">
                                            <b class=\"btn btn-neurospine\">Schmerzlindernd</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Stoffwechselaktivierend</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Durchblutungsfördernd</b><br /><br />
                                            <b class=\"btn btn-neurospine\">Muskelentspannend</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Service/stosswellentherapie.html.twig", "/Users/mmueller/Downloads/website_web/templates/Service/stosswellentherapie.html.twig");
    }
}
