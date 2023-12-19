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

/* Default/imprint.html.twig */
class __TwigTemplate_c682d97e3e6cf82e1960388904d1003c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/imprint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/imprint.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/imprint.html.twig", 1);
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
        echo "    <div id=\"imprint\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 text-center\">
                    <h1 class=\"page-header-big\">Impressum</h1>
                    <br />
                    <p>Berufsbezeichnung:<br />
                    Facharzt für Neurochirurgie<br />
                    verliehen in der Bundesrepublik Deutschland</p>
                    <p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Ärztekammer:</span><br />
                        Sächsische Landesärztekammer<br />
                        Körperschaft des öffentlichen Rechts<br />
                        Schützenhöhe 16<br />
                        01074 Dresden<br />
                        www.slaek.de</p>
                    <p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Berufsrechtliche Regelung:</span></b><br />
                        Berufsordnung für die Ärzte in Sachsen<br />
                        www.slaek.de</p>
                    <p style=\"margin-top: 10px; margin-bottom: 4px\">
\t\t\t\t\t\t<span style=\"font-weight: bold; color: #999999\">Kassenärztliche
\t\t\t\t\t\tVereinigung Sachsen:</span><br />
                        Geschäftsstelle Chemnitz<br />
                        Carl-Hamel-Str. 3<br />
                        09116 Chemnitz<br />
                        LANR 202461552<br />
                        BSNR 944140800</p>
\t\t\t\t\t\t<hr />
\t\t\t\t\t\t<br />
\t\t\t\t\t<p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Entwicklung & Marketing</span><br />
Popcorn Solution GmbH<br />
Telefon: 0371 666 38 322<br />
Kontakt <a href=\"mailto: date@popcorn-solution.com\">date@popcorn-solution.com</a><br />
<a href=\"www.popcorn-solution.com\" target=\"_blank\">www.popcorn-solution.com</a><br />
</p><br /><hr />
                    <br />
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-9\">
                                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/SMUL_LO_EPLR-CMYK-RZ.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</div>
                            <div class=\"col-md-3\">
                                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Leader_07_13_jpg.jpg"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"col-md-12\">
                                <br />
\t\t\t\t\t\t\t<p>Die Errichtung unserer neuen Zweigpraxis auf über 110qm zur Versorgung von Patienten im Leipziger Land ab 2020 wird unterstützt und gefördert durch: </p>
                                <br />
                                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/zertifikat.jpg"), "html", null, true);
        echo "\" />
                            </div>
\t\t\t\t\t\t</div>
                    <br />
\t\t\t\t\t\t<p>Zuständig für die Durchführung der ELER-Förderung im Freistaat Sachsen ist das Staatsministerium für Umwelt und Landwirtschaft (SM U L), Referat Förderstrategie, ELER-Verwaltungsbehörde. <br />Die Fertigstellung ist 01/2020 geplant.</p>
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
        return "Default/imprint.html.twig";
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
        return array (  125 => 53,  116 => 47,  110 => 44,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"imprint\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3 text-center\">
                    <h1 class=\"page-header-big\">Impressum</h1>
                    <br />
                    <p>Berufsbezeichnung:<br />
                    Facharzt für Neurochirurgie<br />
                    verliehen in der Bundesrepublik Deutschland</p>
                    <p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Ärztekammer:</span><br />
                        Sächsische Landesärztekammer<br />
                        Körperschaft des öffentlichen Rechts<br />
                        Schützenhöhe 16<br />
                        01074 Dresden<br />
                        www.slaek.de</p>
                    <p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Berufsrechtliche Regelung:</span></b><br />
                        Berufsordnung für die Ärzte in Sachsen<br />
                        www.slaek.de</p>
                    <p style=\"margin-top: 10px; margin-bottom: 4px\">
\t\t\t\t\t\t<span style=\"font-weight: bold; color: #999999\">Kassenärztliche
\t\t\t\t\t\tVereinigung Sachsen:</span><br />
                        Geschäftsstelle Chemnitz<br />
                        Carl-Hamel-Str. 3<br />
                        09116 Chemnitz<br />
                        LANR 202461552<br />
                        BSNR 944140800</p>
\t\t\t\t\t\t<hr />
\t\t\t\t\t\t<br />
\t\t\t\t\t<p style=\"margin-top: 0px; margin-bottom: 4px\">
                        <span style=\"font-weight: bold; color: #999999\">Entwicklung & Marketing</span><br />
Popcorn Solution GmbH<br />
Telefon: 0371 666 38 322<br />
Kontakt <a href=\"mailto: date@popcorn-solution.com\">date@popcorn-solution.com</a><br />
<a href=\"www.popcorn-solution.com\" target=\"_blank\">www.popcorn-solution.com</a><br />
</p><br /><hr />
                    <br />
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-9\">
                                    <img src=\"{{ asset(\"assets/img/SMUL_LO_EPLR-CMYK-RZ.jpg\") }}\" />
\t\t\t\t\t\t\t</div>
                            <div class=\"col-md-3\">
                                    <img src=\"{{ asset(\"assets/img/Leader_07_13_jpg.jpg\") }}\" />
                            </div>
                            <div class=\"col-md-12\">
                                <br />
\t\t\t\t\t\t\t<p>Die Errichtung unserer neuen Zweigpraxis auf über 110qm zur Versorgung von Patienten im Leipziger Land ab 2020 wird unterstützt und gefördert durch: </p>
                                <br />
                                    <img src=\"{{ asset(\"assets/img/zertifikat.jpg\") }}\" />
                            </div>
\t\t\t\t\t\t</div>
                    <br />
\t\t\t\t\t\t<p>Zuständig für die Durchführung der ELER-Förderung im Freistaat Sachsen ist das Staatsministerium für Umwelt und Landwirtschaft (SM U L), Referat Förderstrategie, ELER-Verwaltungsbehörde. <br />Die Fertigstellung ist 01/2020 geplant.</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Default/imprint.html.twig", "/Users/mmueller/Downloads/website_web/templates/Default/imprint.html.twig");
    }
}
