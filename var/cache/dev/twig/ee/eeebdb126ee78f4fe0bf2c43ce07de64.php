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

/* Service/minimalinvasivetherapie.html.twig */
class __TwigTemplate_6e408d4fdc4ea976a52553f80b160596 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/minimalinvasivetherapie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/minimalinvasivetherapie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Service/minimalinvasivetherapie.html.twig", 1);
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/minimalinvasive-therapie.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">….wenn Präzision und zielpunktgenaue Wirkung gefragt ist:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Minimalinvasive Therapie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3>Schmerzbehandlung</h3>
                                <div class=\"bullet\">
                                    <b>CT –gestützte (Computertomographie) </b>
                                    <p>Infiltration der Wirbelgelenke/Facettenblockade (FB)</p>
                                    <p>Periradikuläre Therapie (PRT) der Wurzelaustrittszone</p>
                                </div>
                                <hr />
                                <p><b>FB</b>: bei der Infiltrationsbehandlung der kleinen Wirbelgelenke erfolgt unter Bildwandler- oder CT Navigation die gezielte Applikation von flüssigen entzündungshemmenden und/oder  lokal narkotisierenden Medikamenten an die kleinen Wirbelgelenke. Dadurch kommt es bei einer übergrossen Mehrheit unserer Patienten  ( zu einer länger anhaltenden (bis zu 8 Woche) Schmerzlinderung, bzw. Schmerzfreiheit bei tiefliegenden Kreuzschmerzen im Bereich der Lendenwirbelsäule.  Diese Behandlung hat sich besonders bewährt bei Abnutzungsveränderungen im Bereich der kleinen Wirbelgelenke, den sog. Facettengelenksarthrosen, sowie in diesem Zusammenhang auftretenden akuten und chronischen Blockierungsneigungen der kleinen Wirbelgelenke. </p>
                            </div>
                            <div class=\"col-md-6\">
                                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/computertomographie.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"Computertomographie\" />
                            </div>
                            <div class=\"col-md-12\">
                                <p><b>PRT</b>:  die Wirkstoffapplikation an die schmerzauslösende Spinalwurzel ist ideal bei vorwiegend ausstrahlendem Beinschmerz (Ischialgie) und sorgt für eine abschwellende, entzündungshemmende Reaktion direkt am Ort der schmerzhaften  Druckschädigung der Wurzel (Radix) durch eine vorwölbende Bandscheibe.     In den Händen des fachkundigen Anwenders treten bei dieser Behandlung kaum Nebenwirkungen auf. Ebenso ist diese Methode kaum schmerzhaft. Schwere gesundheitliche Beeinträchtigungen/Nebenwirkungen  haben wir  bisher nie beobachtet. Nicht ganz auszuschliessen sind allgemeine operative Risiken, wie lokale Infektionen oder auch Allergien.     In der Regel sind Sie nach einer FB oder PRT bereits am nächsten Tag wieder ohne Einschränkungen voll belastbar, eine Arbeitsunfähigkeit ist in der übergroßen Zahl der Fälle nicht notwendig. Bitte beachten Sie, dass Sie am Tag der Behandlung nicht selbst ein Fahrzeug oder Maschinen führen sollten, da es in wenigen Fällen ( ca.2%) unmittelbar nach Infiltration zu Taubheitsgefühl im Bein/Fußbereich kommen kann. Diese Wirkung des Anästhetikums ist zwar unschädlich und reversibel, aber erschwert das Feingefühl.</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h5>Spezielle Schmerztherapie an Nervenwurzeln und Wirbelgelenken</h5>
                                <h3>Wie wird sie durchgeführt?</h3>
                                <p>In Fällen, dass die Ursache ihrer Schmerzen nicht unmittlebar operativ behandelt werden muss  oder die Aussicht auf dauerhafte / überbrückende Schmerzlinderung ohne Korrektur der  Grundursache das Ziel ist , kann unter Zielpunktkontrolle eine geringe Menge eines örtlich wirkenden Schmerzmittels direkt an das schmerzende Wirbelgelenk ( FB) oder an die Wurzelaustritsöffnung ( PRT) platziert werden.</p>
                            </div>
                            <div class=\"col-md-6 bullet\">
                                <h5>Dies hat im Vergleich zur Schmerztherapie mit Tabletten/Kapseln/Tropfen folgende</h5>
                                <h3>Vorteile</h3>
                                <p><b>Keine Nebenwirkungen</b> in Form von Magenbeschwerden,  Sodbrennen  , Müdigkeit, Übelkeit,  Verdauungsproblemen, da das Wirkstoffgemisch aus Schmerzmittel und Entzündungshemmer direkt am Ort der Schmerzentstehung wirkt , insbesondere nicht Magen und andere Organe belastet und nicht über die Blutbahn im ganzen Körper verteilt wird</p>
                                <p>Dadurch ist viel <b>weniger Wirkstoff</b> insgesamt notwendig</p>
                                <p>Die Wirkung ist gleichmässiger und länger anhaltend</p>
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
        return "Service/minimalinvasivetherapie.html.twig";
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
        return array (  103 => 34,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/service/minimalinvasive-therapie.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">….wenn Präzision und zielpunktgenaue Wirkung gefragt ist:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Minimalinvasive Therapie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <h3>Schmerzbehandlung</h3>
                                <div class=\"bullet\">
                                    <b>CT –gestützte (Computertomographie) </b>
                                    <p>Infiltration der Wirbelgelenke/Facettenblockade (FB)</p>
                                    <p>Periradikuläre Therapie (PRT) der Wurzelaustrittszone</p>
                                </div>
                                <hr />
                                <p><b>FB</b>: bei der Infiltrationsbehandlung der kleinen Wirbelgelenke erfolgt unter Bildwandler- oder CT Navigation die gezielte Applikation von flüssigen entzündungshemmenden und/oder  lokal narkotisierenden Medikamenten an die kleinen Wirbelgelenke. Dadurch kommt es bei einer übergrossen Mehrheit unserer Patienten  ( zu einer länger anhaltenden (bis zu 8 Woche) Schmerzlinderung, bzw. Schmerzfreiheit bei tiefliegenden Kreuzschmerzen im Bereich der Lendenwirbelsäule.  Diese Behandlung hat sich besonders bewährt bei Abnutzungsveränderungen im Bereich der kleinen Wirbelgelenke, den sog. Facettengelenksarthrosen, sowie in diesem Zusammenhang auftretenden akuten und chronischen Blockierungsneigungen der kleinen Wirbelgelenke. </p>
                            </div>
                            <div class=\"col-md-6\">
                                    <img src=\"{{ asset(\"assets/img/computertomographie.jpg\") }}\" class=\"img-responsive\" alt=\"Computertomographie\" />
                            </div>
                            <div class=\"col-md-12\">
                                <p><b>PRT</b>:  die Wirkstoffapplikation an die schmerzauslösende Spinalwurzel ist ideal bei vorwiegend ausstrahlendem Beinschmerz (Ischialgie) und sorgt für eine abschwellende, entzündungshemmende Reaktion direkt am Ort der schmerzhaften  Druckschädigung der Wurzel (Radix) durch eine vorwölbende Bandscheibe.     In den Händen des fachkundigen Anwenders treten bei dieser Behandlung kaum Nebenwirkungen auf. Ebenso ist diese Methode kaum schmerzhaft. Schwere gesundheitliche Beeinträchtigungen/Nebenwirkungen  haben wir  bisher nie beobachtet. Nicht ganz auszuschliessen sind allgemeine operative Risiken, wie lokale Infektionen oder auch Allergien.     In der Regel sind Sie nach einer FB oder PRT bereits am nächsten Tag wieder ohne Einschränkungen voll belastbar, eine Arbeitsunfähigkeit ist in der übergroßen Zahl der Fälle nicht notwendig. Bitte beachten Sie, dass Sie am Tag der Behandlung nicht selbst ein Fahrzeug oder Maschinen führen sollten, da es in wenigen Fällen ( ca.2%) unmittelbar nach Infiltration zu Taubheitsgefühl im Bein/Fußbereich kommen kann. Diese Wirkung des Anästhetikums ist zwar unschädlich und reversibel, aber erschwert das Feingefühl.</p>
                            </div>
                            <div class=\"col-md-6\">
                                <h5>Spezielle Schmerztherapie an Nervenwurzeln und Wirbelgelenken</h5>
                                <h3>Wie wird sie durchgeführt?</h3>
                                <p>In Fällen, dass die Ursache ihrer Schmerzen nicht unmittlebar operativ behandelt werden muss  oder die Aussicht auf dauerhafte / überbrückende Schmerzlinderung ohne Korrektur der  Grundursache das Ziel ist , kann unter Zielpunktkontrolle eine geringe Menge eines örtlich wirkenden Schmerzmittels direkt an das schmerzende Wirbelgelenk ( FB) oder an die Wurzelaustritsöffnung ( PRT) platziert werden.</p>
                            </div>
                            <div class=\"col-md-6 bullet\">
                                <h5>Dies hat im Vergleich zur Schmerztherapie mit Tabletten/Kapseln/Tropfen folgende</h5>
                                <h3>Vorteile</h3>
                                <p><b>Keine Nebenwirkungen</b> in Form von Magenbeschwerden,  Sodbrennen  , Müdigkeit, Übelkeit,  Verdauungsproblemen, da das Wirkstoffgemisch aus Schmerzmittel und Entzündungshemmer direkt am Ort der Schmerzentstehung wirkt , insbesondere nicht Magen und andere Organe belastet und nicht über die Blutbahn im ganzen Körper verteilt wird</p>
                                <p>Dadurch ist viel <b>weniger Wirkstoff</b> insgesamt notwendig</p>
                                <p>Die Wirkung ist gleichmässiger und länger anhaltend</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}", "Service/minimalinvasivetherapie.html.twig", "/Users/mmueller/Downloads/website_web/templates/Service/minimalinvasivetherapie.html.twig");
    }
}
