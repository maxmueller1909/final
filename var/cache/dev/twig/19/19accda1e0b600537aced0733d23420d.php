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

/* Default/neurochirurgie.html.twig */
class __TwigTemplate_9004e0911c298a8d8b5bd9d93204e796 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/neurochirurgie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/neurochirurgie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/neurochirurgie.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/neurochirugie.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h5 class=\"text-left\"><b>Fachärzte für Neurochirurgie</b> sind Spezialisten für <b>Erkrankungen am Nervensystem</b></h5>
                                        <h2 class=\"section_header text-uppercase text-left\">Neurochirurgie Allgemein</h2>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <p>Dieses unterteilt sich in ein zentrales ( Hirn und Rückenmark) und peripheres (Armnerven/ Beinnerven)  Nervensystem. Neben dem Bereich der <b>cranialen Neurochirurgie</b> ( Erkrankungen im Schädelinneren : Hirntumore, Hirnblutungen, Hirninfarkte, Störungen am Liquorsystem) befasst sich der Bereich der <b>spinalen Neurochirurgie</b> mit Erkrankungen und Schädigungen bzw. Schmerzen, welche im Bereich der Wirbelsäule auf  Rückenmark; Spinalwurzeln und Nerven einwirken können.</p>
                                        <p><b>neurospine  = neuro (Neurochirurgie) + spine (Rücken)</b></p>
                                        <p>Besonders der Bereich der spinalen Neurochirurgie hat durch die Notwendigkeit der Berücksichtigung von Stabilität und Körperhaltung und damit der Verbindung mit Gelenken und Beweglichkeit (Orthopädie/Unfallchirurgie) als auch mit Schmerzen (Anästhesie/Schmerzmedizin) sowie der Psyche des Betroffenen ( Neurologie/Psychologie) einen hochkomplexen Charakter und bedarf  deshalb besonders <b>intensiver fachübergreifender Zusammenarbeit</b>.</p>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <p>Die Wirbelsäule des Menschen verbindet grosse Teile des Skeletts ( Kopf-Rippen-Becken) miteinander, und ist die tragende Zentralachse des Körpers.</p>
                                        <br />
                                        <h5>Sie gliedert sich in</h5>
                                        <p> 7 Halswirbel: <b>HSW</b> (1), 12  Brustwirbel: <b>BWS</b> (2), 5  Lendenwirbel: <b>LWS</b> (3)</p>
                                        <p>sowie Kreuzbein (4) und Steissbein (5) deren Wirbelkörper nicht mehr mit Bandscheiben verbunden sind. Die Verbindung zwischen Kreuzbein und Becken bildet das </p>
                                        <p>Ileosakralgelenk ( ISG ) welches häufig als  Schmerzgenerator ausserhalb der Wirbelsäule in Erscheinung tritt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/wirbelsaeule.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" />
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
        return "Default/neurochirurgie.html.twig";
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
        return array (  113 => 44,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/neurochirugie.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <h5 class=\"text-left\"><b>Fachärzte für Neurochirurgie</b> sind Spezialisten für <b>Erkrankungen am Nervensystem</b></h5>
                                        <h2 class=\"section_header text-uppercase text-left\">Neurochirurgie Allgemein</h2>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <p>Dieses unterteilt sich in ein zentrales ( Hirn und Rückenmark) und peripheres (Armnerven/ Beinnerven)  Nervensystem. Neben dem Bereich der <b>cranialen Neurochirurgie</b> ( Erkrankungen im Schädelinneren : Hirntumore, Hirnblutungen, Hirninfarkte, Störungen am Liquorsystem) befasst sich der Bereich der <b>spinalen Neurochirurgie</b> mit Erkrankungen und Schädigungen bzw. Schmerzen, welche im Bereich der Wirbelsäule auf  Rückenmark; Spinalwurzeln und Nerven einwirken können.</p>
                                        <p><b>neurospine  = neuro (Neurochirurgie) + spine (Rücken)</b></p>
                                        <p>Besonders der Bereich der spinalen Neurochirurgie hat durch die Notwendigkeit der Berücksichtigung von Stabilität und Körperhaltung und damit der Verbindung mit Gelenken und Beweglichkeit (Orthopädie/Unfallchirurgie) als auch mit Schmerzen (Anästhesie/Schmerzmedizin) sowie der Psyche des Betroffenen ( Neurologie/Psychologie) einen hochkomplexen Charakter und bedarf  deshalb besonders <b>intensiver fachübergreifender Zusammenarbeit</b>.</p>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <p>Die Wirbelsäule des Menschen verbindet grosse Teile des Skeletts ( Kopf-Rippen-Becken) miteinander, und ist die tragende Zentralachse des Körpers.</p>
                                        <br />
                                        <h5>Sie gliedert sich in</h5>
                                        <p> 7 Halswirbel: <b>HSW</b> (1), 12  Brustwirbel: <b>BWS</b> (2), 5  Lendenwirbel: <b>LWS</b> (3)</p>
                                        <p>sowie Kreuzbein (4) und Steissbein (5) deren Wirbelkörper nicht mehr mit Bandscheiben verbunden sind. Die Verbindung zwischen Kreuzbein und Becken bildet das </p>
                                        <p>Ileosakralgelenk ( ISG ) welches häufig als  Schmerzgenerator ausserhalb der Wirbelsäule in Erscheinung tritt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <img src=\"{{ asset(\"assets/img/wirbelsaeule.jpg\") }}\" class=\"img-responsive\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Default/neurochirurgie.html.twig", "/Users/mmueller/Downloads/website_web/templates/Default/neurochirurgie.html.twig");
    }
}
