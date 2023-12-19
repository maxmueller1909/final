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

/* Contact/callback.html.twig */
class __TwigTemplate_cf937ecc845be354fd9134a8f2687210 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/callback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/callback.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), 'row');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 3, $this->source); })()), "number", [], "any", false, false, false, 3), 'row');
        echo "
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 4, $this->source); })()), "message", [], "any", false, false, false, 4), 'row');
        echo "

<div class=\"form-group lgr_restyx\">
    <span style=\"display:inline-block\">
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 8, $this->source); })()), "protection", [], "any", false, false, false, 8), 'widget');
        echo "
    </span>
    <span style=\"display:inline-block\">
        Ich hab die <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_protection");
        echo "\" target=\"_blank\">Datenschutzbestimmungen</a> gelesen.
    </span>
</div>

<button class=\"btn btn-neurospine btn-lg\" style=\"width: 100%\">Rückruf anfordern</button>
";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 16, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Contact/callback.html.twig";
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
        return array (  76 => 16,  68 => 11,  62 => 8,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(callback) }}
{{ form_row(callback.name) }}
{{ form_row(callback.number) }}
{{ form_row(callback.message) }}

<div class=\"form-group lgr_restyx\">
    <span style=\"display:inline-block\">
        {{ form_widget(callback.protection) }}
    </span>
    <span style=\"display:inline-block\">
        Ich hab die <a href=\"{{ path('home_protection') }}\" target=\"_blank\">Datenschutzbestimmungen</a> gelesen.
    </span>
</div>

<button class=\"btn btn-neurospine btn-lg\" style=\"width: 100%\">Rückruf anfordern</button>
{{ form_end(callback) }}", "Contact/callback.html.twig", "/Users/mmueller/Downloads/website_web/templates/Contact/callback.html.twig");
    }
}
