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

/* Default/emergency.html.twig */
class __TwigTemplate_c7ad0a602ecea03601cbb06fe656b294 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/emergency.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/emergency.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/emergency.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/notfall.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">Wann ist der Rückenschmerz ein</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Notfall</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2 bullet text-justify\">
                                <div>Folgende Warnsymptome sollten Sie ernst nehmen und umgehend den Spezialisten / Neurochirurgen  aufsuchen:</div>
                                <p><b>Probleme beim Wasserlassen oder Stuhlgang in Verbindung mit kürzlich oder akut aufgetretenen Rücken/Beinschmerzen ohne urologische Vorerkrankungen</b></p>
                                <p><b>Plötzlich aufgetretene und andauernde Taubheitsgefühle oder Schwäche / Lähmungen  in Beinen oder Füssen, Armen oder Händen</b></p>
                                <p><b>Anhaltender Rücken/Beinschmerz in Gefolge eines Unfalles oder Gewalteinwirkung, Hubbelastung</b></p>
                                <p><b>Rückenschmerz in Verbindung mit Fieber / Schüttelfrost</b></p>
                                <p><b>Plötzlicher Rückenschmerz mit Krebserkrankung in der Vorgeschichte, starker Gewichtsverlust oder rasche Ermüdbarkeit</b></p>
                                <p><b>Ist der Schmerz in der Nacht besonders stark?</b></p>
                                <div>Sie haben außerhalb der Praxisöffnungszeiten diese Beschwerden, aber die Behandlung kann nicht bis zum nächsten Werktag aufgeschoben werden > dann wählen Sie entweder </div>
                                <hr />
                            </div>
                            <div class=\"col-md-5 col-md-offset-1\">
                                <h5 class=\"text-center\">Telefon <span class=\"h3\"><b>116117</b></span></h5>
                                <h4 class=\"section_header text-uppercase text-center\">Ärztlicher Bereitschaftsdienst</h4>
                                <p>Bei <b>nicht lebensbedrohlichen</b> Beschwerden, etwa bei hohem Fieber, starken Bauch- schmerzen oder Erbrechen. Sie konsultieren den ärztlichen Bereitschaftsdienst, wenn Sie nachts oder am Wochenende gesundheitliche Beschwerden haben, wegen der Sie normalerweise eine Arztpraxis aufsuchen würden, die Behandlung aber nicht bis zum nächsten (Werk-)Tag warten kann.</p>
                            </div>
                            <div class=\"col-md-5\">
                                <h5 class=\"text-center\">Telefon <span class=\"h3\"><b>112</b></span></h5>
                                <h4 class=\"section_header text-uppercase text-center\">Rettungsdienst</h4>
                                <p>Bei <b>lebensbedrohlichen</b> Symptomen, beispielsweise Bewusstlosigkeit, akuten Blutungen, starke Herzbeschwerden, schwere Störungen des Atemsystems ,  Komplikationen in der Schwangerschaft und Vergiftungen. Der Rettungsdienst ist rund um die Uhr bei medizinischen Notfällen im Einsatz und innerhalb kürzester Zeit beim Patienten.</p>
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
        return "Default/emergency.html.twig";
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
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/notfall.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">Wann ist der Rückenschmerz ein</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Notfall</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2 bullet text-justify\">
                                <div>Folgende Warnsymptome sollten Sie ernst nehmen und umgehend den Spezialisten / Neurochirurgen  aufsuchen:</div>
                                <p><b>Probleme beim Wasserlassen oder Stuhlgang in Verbindung mit kürzlich oder akut aufgetretenen Rücken/Beinschmerzen ohne urologische Vorerkrankungen</b></p>
                                <p><b>Plötzlich aufgetretene und andauernde Taubheitsgefühle oder Schwäche / Lähmungen  in Beinen oder Füssen, Armen oder Händen</b></p>
                                <p><b>Anhaltender Rücken/Beinschmerz in Gefolge eines Unfalles oder Gewalteinwirkung, Hubbelastung</b></p>
                                <p><b>Rückenschmerz in Verbindung mit Fieber / Schüttelfrost</b></p>
                                <p><b>Plötzlicher Rückenschmerz mit Krebserkrankung in der Vorgeschichte, starker Gewichtsverlust oder rasche Ermüdbarkeit</b></p>
                                <p><b>Ist der Schmerz in der Nacht besonders stark?</b></p>
                                <div>Sie haben außerhalb der Praxisöffnungszeiten diese Beschwerden, aber die Behandlung kann nicht bis zum nächsten Werktag aufgeschoben werden > dann wählen Sie entweder </div>
                                <hr />
                            </div>
                            <div class=\"col-md-5 col-md-offset-1\">
                                <h5 class=\"text-center\">Telefon <span class=\"h3\"><b>116117</b></span></h5>
                                <h4 class=\"section_header text-uppercase text-center\">Ärztlicher Bereitschaftsdienst</h4>
                                <p>Bei <b>nicht lebensbedrohlichen</b> Beschwerden, etwa bei hohem Fieber, starken Bauch- schmerzen oder Erbrechen. Sie konsultieren den ärztlichen Bereitschaftsdienst, wenn Sie nachts oder am Wochenende gesundheitliche Beschwerden haben, wegen der Sie normalerweise eine Arztpraxis aufsuchen würden, die Behandlung aber nicht bis zum nächsten (Werk-)Tag warten kann.</p>
                            </div>
                            <div class=\"col-md-5\">
                                <h5 class=\"text-center\">Telefon <span class=\"h3\"><b>112</b></span></h5>
                                <h4 class=\"section_header text-uppercase text-center\">Rettungsdienst</h4>
                                <p>Bei <b>lebensbedrohlichen</b> Symptomen, beispielsweise Bewusstlosigkeit, akuten Blutungen, starke Herzbeschwerden, schwere Störungen des Atemsystems ,  Komplikationen in der Schwangerschaft und Vergiftungen. Der Rettungsdienst ist rund um die Uhr bei medizinischen Notfällen im Einsatz und innerhalb kürzester Zeit beim Patienten.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Default/emergency.html.twig", "/Users/mmueller/Downloads/website_web/templates/Default/emergency.html.twig");
    }
}
