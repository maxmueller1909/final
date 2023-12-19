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

/* Service/diagnostik.html.twig */
class __TwigTemplate_5b4ea00ae544faf8fc7584b6ff72ed20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/diagnostik.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/diagnostik.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Service/diagnostik.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/diagnostik.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">...wenn es auf eine exakte Diagnose ankommt:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Diagnostik</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 bullet\">
                                        <p>Neuroelektrodiagnostik</p>
                                        <p>Evozierte Potentiale</p>
                                        <p>Magnetstimulation</p>
                                        <p>Ausschlussdiagnostik  pAVK</p>
                                     </div>
                                    <div class=\"col-md-8\">
                                        <p>
                                            Das Bindeglied zwischen Auffälligkeiten in der Bildgebung ( MRT / CT/ Rö.) und ihren aktuellen Beschwerden ist die Neurologische Diagnostik . Sie beweist letztendlich ( oder schliesst dies sicher aus), ob nervale Strukturen wie Rückenmark oder Nervenwurzeln durch auffällige Veränderungen geschädigt werden und sichern so eine genaue Diagnose. Nicht nur auf diese kommt es an,  sondern auch auf eine genaue Bestimmung des Stadiums der Erkrankung/Schädigung sowie ob andere Begleiterkrankungen neben der Hauptdiagnose zum Beschwerdebild beitragen und mitbehandelt werden sollten.<br />
                                            Unsere Praxis ist in der Lage diese zielführende Diagnostik durchzuführen, sofern sie zum Vorstellungszeitpunkt nicht bereits von einem FA f. Neurologie oder einer Neurologischen Klinik auf Überweisung ihres Hausarztes veranlasst wurde. Bringen sie diese Vorbefunde bitte zur Erstvorstellung mit.
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
        return "Service/diagnostik.html.twig";
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
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/service/diagnostik.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">...wenn es auf eine exakte Diagnose ankommt:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Diagnostik</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-4 bullet\">
                                        <p>Neuroelektrodiagnostik</p>
                                        <p>Evozierte Potentiale</p>
                                        <p>Magnetstimulation</p>
                                        <p>Ausschlussdiagnostik  pAVK</p>
                                     </div>
                                    <div class=\"col-md-8\">
                                        <p>
                                            Das Bindeglied zwischen Auffälligkeiten in der Bildgebung ( MRT / CT/ Rö.) und ihren aktuellen Beschwerden ist die Neurologische Diagnostik . Sie beweist letztendlich ( oder schliesst dies sicher aus), ob nervale Strukturen wie Rückenmark oder Nervenwurzeln durch auffällige Veränderungen geschädigt werden und sichern so eine genaue Diagnose. Nicht nur auf diese kommt es an,  sondern auch auf eine genaue Bestimmung des Stadiums der Erkrankung/Schädigung sowie ob andere Begleiterkrankungen neben der Hauptdiagnose zum Beschwerdebild beitragen und mitbehandelt werden sollten.<br />
                                            Unsere Praxis ist in der Lage diese zielführende Diagnostik durchzuführen, sofern sie zum Vorstellungszeitpunkt nicht bereits von einem FA f. Neurologie oder einer Neurologischen Klinik auf Überweisung ihres Hausarztes veranlasst wurde. Bringen sie diese Vorbefunde bitte zur Erstvorstellung mit.
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
{% endblock %}", "Service/diagnostik.html.twig", "/Users/mmueller/Downloads/website_web/templates/Service/diagnostik.html.twig");
    }
}
