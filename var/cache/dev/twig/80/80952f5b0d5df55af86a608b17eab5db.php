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

/* Service/konservativetherapie.html.twig */
class __TwigTemplate_78d0c252d086fa73ba00f9602d2e071f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/konservativetherapie.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/konservativetherapie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Service/konservativetherapie.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/konservative-therapie.jpg"), "html", null, true);
        echo "')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">...wenn NICHTS tun zu wenig und Operieren zu viel ist:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Konservative Therapie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                <p>In den wenigsten Fällen ist eine Operation notwendig.
                                    Aber nur eine Krankschreibung und Abwarten reicht auch nicht aus, wenn der Patient Schmerzen hat . Oftmals braucht ihr Körper durch gezielte Physiotherapie und eine kurzfristige Gabe des richtigen Medikaments auch nur den entscheidenden Anstoss um seine Selbstheilungskräfte zu aktivieren</p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h3>Physiotherapie</h3>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p>Wissenschaftlich auswertbare Studien beweisen, dass bei Wirbelsäulenbeschwerden, Bewegung besser ist als Bettruhe. Hierdurch wird der venöse Abfluß im Spinalkanal gefördert. Zudem bei Wechsel aus Bewegung und Bettruhe Besserung der Nährstoffversorgung der Bandscheibe.</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p>Vorraussetzung für die konservative Therapie ist, dass keine akuten schwerwiegenden neurologischen Ausfälle (z.B. Lähmungen und Muskelschwäche oder dauerhafte Gefühlsstörungen / Blasendysfunktion ) vorliegen, denn diese münden ohne <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_operativetherapie");
        echo "\">operative Therapie</a> in aller Regel in einen Dauerschaden, der verhindert werden sollte. </p>
                                        </div>
                                    </div>
                                    <hr />
                                    <p>Zur <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_stosswellentherapie");
        echo "\">Stoßwellentherapie</a></p>
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
        return "Service/konservativetherapie.html.twig";
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
        return array (  110 => 38,  103 => 34,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/service/konservative-therapie.jpg\") }}')\">
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">...wenn NICHTS tun zu wenig und Operieren zu viel ist:</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Konservative Therapie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6 col-md-offset-3\">
                                <p>In den wenigsten Fällen ist eine Operation notwendig.
                                    Aber nur eine Krankschreibung und Abwarten reicht auch nicht aus, wenn der Patient Schmerzen hat . Oftmals braucht ihr Körper durch gezielte Physiotherapie und eine kurzfristige Gabe des richtigen Medikaments auch nur den entscheidenden Anstoss um seine Selbstheilungskräfte zu aktivieren</p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h3>Physiotherapie</h3>
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <p>Wissenschaftlich auswertbare Studien beweisen, dass bei Wirbelsäulenbeschwerden, Bewegung besser ist als Bettruhe. Hierdurch wird der venöse Abfluß im Spinalkanal gefördert. Zudem bei Wechsel aus Bewegung und Bettruhe Besserung der Nährstoffversorgung der Bandscheibe.</p>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <p>Vorraussetzung für die konservative Therapie ist, dass keine akuten schwerwiegenden neurologischen Ausfälle (z.B. Lähmungen und Muskelschwäche oder dauerhafte Gefühlsstörungen / Blasendysfunktion ) vorliegen, denn diese münden ohne <a href=\"{{ path('service_operativetherapie') }}\">operative Therapie</a> in aller Regel in einen Dauerschaden, der verhindert werden sollte. </p>
                                        </div>
                                    </div>
                                    <hr />
                                    <p>Zur <a href=\"{{ path('service_stosswellentherapie') }}\">Stoßwellentherapie</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Service/konservativetherapie.html.twig", "/Users/mmueller/Downloads/website_web/templates/Service/konservativetherapie.html.twig");
    }
}
