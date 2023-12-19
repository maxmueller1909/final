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

/* Emails/contact.html.twig */
class __TwigTemplate_8effee1b52c274f29db64d614587cbd1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Emails/contact.html.twig"));

        // line 1
        echo "Neue Nachricht von ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ")

";
        // line 3
        if (((isset($context["pain"]) || array_key_exists("pain", $context) ? $context["pain"] : (function () { throw new RuntimeError('Variable "pain" does not exist.', 3, $this->source); })()) == 1)) {
            // line 4
            echo "    Wo haben Sie Schmerzen?
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["what"]) || array_key_exists("what", $context) ? $context["what"] : (function () { throw new RuntimeError('Variable "what" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "
    Wie lange schon?
    ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["strength"]) || array_key_exists("strength", $context) ? $context["strength"] : (function () { throw new RuntimeError('Variable "strength" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "

    Andere Symtome außer Schmerzen
    ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["where"]) || array_key_exists("where", $context) ? $context["where"] : (function () { throw new RuntimeError('Variable "where" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "

    Möchten Sie von uns zur Terminvereinbarung zurückgerufen werden?
    ";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["callback"]) || array_key_exists("callback", $context) ? $context["callback"] : (function () { throw new RuntimeError('Variable "callback" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "

    Ich habe keine Schmerzen, aber…
    ";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["problem"]) || array_key_exists("problem", $context) ? $context["problem"] : (function () { throw new RuntimeError('Variable "problem" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "
";
        }
        // line 21
        echo "
Nachricht
";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "html", null, true);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Emails/contact.html.twig";
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
        return array (  100 => 23,  96 => 21,  91 => 19,  85 => 16,  79 => 13,  73 => 10,  69 => 8,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Neue Nachricht von {{ name }} ({{ email }})

{% if pain == 1 %}
    Wo haben Sie Schmerzen?
    {% for i in what %}
        {{ i }}
    {% endfor %}

    Wie lange schon?
    {{ strength }}

    Andere Symtome außer Schmerzen
    {{ where }}

    Möchten Sie von uns zur Terminvereinbarung zurückgerufen werden?
    {{ callback }}

    Ich habe keine Schmerzen, aber…
    {{ problem }}
{% endif %}

Nachricht
{{ message }}", "Emails/contact.html.twig", "/Users/mmueller/Downloads/website_web/templates/Emails/contact.html.twig");
    }
}
