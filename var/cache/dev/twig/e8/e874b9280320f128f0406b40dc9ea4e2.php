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

/* Contact/contact.html.twig */
class __TwigTemplate_8297902197fa932e0d918ff322dbabe4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Contact/contact.html.twig", 1);
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
        echo "    <div id=\"contact\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"embed-responsive embed-responsive-16by9 maps\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.7662901411168!2d12.961782309802487!3d50.83982130155833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a7442bc2f78477%3A0x3459cf39caba8006!2sDr.+Udo+Krug!5e0!3m2!1sde!2sde!4v1500463971742\"></iframe>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 15
        $this->loadTemplate("flashbag.html.twig", "Contact/contact.html.twig", 15)->display($context);
        // line 16
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer local_business\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <b class=\"text-uppercase\">Besuchen Sie uns</b>
                                <p>Bei Kontaktwunsch senden Sie uns bitte folgdene Angaben zu. Wir freuen uns, von Ihnen zu hören.</p>
                                <p>Um die Dringlichkeit Ihres Anliegens im Vorfeld besser beurteilen zu können, hilft unserm Team ein vollständig und detailliert ausgefüllter <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Patientenerfassungsbogen.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Patientenerfassungsbogen</a> sehr.</p>
                                ";
        // line 26
        $this->loadTemplate("_partials/contact.html.twig", "Contact/contact.html.twig", 26)->display($context);
        // line 27
        echo "                                <hr />
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/892714/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container892714\" style=\"position:relative; width:272px; height:168px; margin:15px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/top10-top20-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><div style=\"position:absolute; top:25px; left:108px; width:148px; height:58px; overflow:hidden; white-space:normal;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" style=\"font-size:15px; line-height:18px; font-weight:bold; color:#01a3d4; text-decoration:none; border:0px;\" target=\"_blank\">Dr. med. Udo Krug</a></div><div style=\"position:absolute; top:98px; left:108px; width:152px; height:53px; overflow:hidden; color:#888; font-size:11px; line-height:13px;\"><strong>Neurochirurgen</strong><br>in Chemnitz auf&nbsp;<a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"color:#069bd2; font-size:11px; text-decoration:none; border:0px; background-color:transparent !important;\" target=\"_blank\">jameda</a></div></div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/309432/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container309432\" style=\"position:relative; width:97px; height:145px; margin:15px 25px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/bw-small-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"display:block; position:absolute; top:100px; left:10px; width:70px; height:20px; background-color:transparent !important;\" target=\"_blank\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 text-center\">
                                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/siegel2.png"), "html", null, true);
        echo "\" alt=\"Qualitätssiegel QM in der Arztpraxis\" style=\"width: 50%\"/>
                                        <p class=\"text-center\">QM-Richtlinie G-BA <br />DIN EN ISO 9001</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-md-offset-1\">
                                ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), 'form_start');
        echo "
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), 'row');
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'row');
        echo "
                                <div class=\"pain_status\">
                                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "pain", [], "any", false, false, false, 48), 'row');
        echo "
                                </div>
                                <div class=\"pain_box\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "what", [], "any", false, false, false, 51), 'row');
        echo "
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "strength", [], "any", false, false, false, 52), 'row');
        echo "
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "where", [], "any", false, false, false, 53), 'row');
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "callback", [], "any", false, false, false, 54), 'row');
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "problem", [], "any", false, false, false, 55), 'row');
        echo "
                                </div>
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "message", [], "any", false, false, false, 57), 'row');
        echo "

                                <div class=\"form-group lgr_restyx\">
                                    <span style=\"display:inline-block\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "protection", [], "any", false, false, false, 61), 'widget');
        echo "
                                    </span>
                                    <span style=\"display:inline-block\">
                                        Ich hab die <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_protection");
        echo "\" target=\"_blank\">Datenschutzbestimmungen</a> gelesen.
                                    </span>
                                </div>
                                <button class=\"btn btn-neurospine btn-lg\">Kontakt aufnehmen</button>
                                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
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

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "
    ";
        // line 81
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>

        \$(document).ready(function() {
            \$('#contact_pain').change(function(){
                if(\$(this).val() == 1){
                    \$('.pain_box').show();
                } else {
                    \$('.pain_box').hide();
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Contact/contact.html.twig";
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
        return array (  216 => 81,  213 => 80,  203 => 79,  183 => 68,  176 => 64,  170 => 61,  163 => 57,  158 => 55,  154 => 54,  150 => 53,  146 => 52,  142 => 51,  136 => 48,  131 => 46,  127 => 45,  123 => 44,  114 => 38,  101 => 27,  99 => 26,  95 => 25,  84 => 16,  82 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"contact\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"embed-responsive embed-responsive-16by9 maps\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1259.7662901411168!2d12.961782309802487!3d50.83982130155833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a7442bc2f78477%3A0x3459cf39caba8006!2sDr.+Udo+Krug!5e0!3m2!1sde!2sde!4v1500463971742\"></iframe>
                    </div>
                </div>
            </div>
        </div>

        {% include('flashbag.html.twig') %}

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer local_business\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <b class=\"text-uppercase\">Besuchen Sie uns</b>
                                <p>Bei Kontaktwunsch senden Sie uns bitte folgdene Angaben zu. Wir freuen uns, von Ihnen zu hören.</p>
                                <p>Um die Dringlichkeit Ihres Anliegens im Vorfeld besser beurteilen zu können, hilft unserm Team ein vollständig und detailliert ausgefüllter <a href=\"{{ asset('Patientenerfassungsbogen.pdf') }}\" target=\"_blank\">Patientenerfassungsbogen</a> sehr.</p>
                                {% include '_partials/contact.html.twig' %}
                                <hr />
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/892714/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container892714\" style=\"position:relative; width:272px; height:168px; margin:15px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/top10-top20-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><div style=\"position:absolute; top:25px; left:108px; width:148px; height:58px; overflow:hidden; white-space:normal;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" style=\"font-size:15px; line-height:18px; font-weight:bold; color:#01a3d4; text-decoration:none; border:0px;\" target=\"_blank\">Dr. med. Udo Krug</a></div><div style=\"position:absolute; top:98px; left:108px; width:152px; height:53px; overflow:hidden; color:#888; font-size:11px; line-height:13px;\"><strong>Neurochirurgen</strong><br>in Chemnitz auf&nbsp;<a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"color:#069bd2; font-size:11px; text-decoration:none; border:0px; background-color:transparent !important;\" target=\"_blank\">jameda</a></div></div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/309432/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container309432\" style=\"position:relative; width:97px; height:145px; margin:15px 25px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/bw-small-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"display:block; position:absolute; top:100px; left:10px; width:70px; height:20px; background-color:transparent !important;\" target=\"_blank\"></a></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 text-center\">
                                            <img src=\"{{ asset(\"assets/img/siegel2.png\") }}\" alt=\"Qualitätssiegel QM in der Arztpraxis\" style=\"width: 50%\"/>
                                        <p class=\"text-center\">QM-Richtlinie G-BA <br />DIN EN ISO 9001</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-md-offset-1\">
                                {{ form_start(form) }}
                                {{ form_row(form.name) }}
                                {{ form_row(form.email) }}
                                <div class=\"pain_status\">
                                    {{ form_row(form.pain) }}
                                </div>
                                <div class=\"pain_box\">
                                    {{ form_row(form.what) }}
                                    {{ form_row(form.strength) }}
                                    {{ form_row(form.where) }}
                                    {{ form_row(form.callback) }}
                                    {{ form_row(form.problem) }}
                                </div>
                                {{ form_row(form.message) }}

                                <div class=\"form-group lgr_restyx\">
                                    <span style=\"display:inline-block\">
                                        {{ form_widget(form.protection) }}
                                    </span>
                                    <span style=\"display:inline-block\">
                                        Ich hab die <a href=\"{{ path('home_protection') }}\" target=\"_blank\">Datenschutzbestimmungen</a> gelesen.
                                    </span>
                                </div>
                                <button class=\"btn btn-neurospine btn-lg\">Kontakt aufnehmen</button>
                                {{ form_end(form) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}

{% block javascripts %}

    {{ parent() }}

    <script>

        \$(document).ready(function() {
            \$('#contact_pain').change(function(){
                if(\$(this).val() == 1){
                    \$('.pain_box').show();
                } else {
                    \$('.pain_box').hide();
                }
            });
        });
    </script>
{% endblock %}

", "Contact/contact.html.twig", "/Users/mmueller/Downloads/website_web/templates/Contact/contact.html.twig");
    }
}
