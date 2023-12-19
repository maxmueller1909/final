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

/* Practice/team.html.twig */
class __TwigTemplate_e2e634cc6d2abc7b5b367dd13056c234 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Practice/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Practice/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Practice/team.html.twig", 1);
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
        echo "    <div id=\"team\">
        <div class=\"container-fluid\" style=\"display: none\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team_2.jpg"), "html", null, true);
        echo "')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer\">
                        <h2 class=\"section_header text-uppercase text-center\">Betreuung aus einer Hand</h2>
                        <div class=\"row\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <p>Gemeinsam mit meinem Praxisteam möchte ich, dass Sie sich von Anfang an durch uns gut betreut und in unserer Praxis wohl fühlen. Mein Ziel ist es, Ihnen persönliche Beratung, zielführende Diagnostik sowie eine auf Ihre individuelle Situation abgestimmte moderne neurochirurgisch – operative Behandlung aus einer Hand zu bieten.</p>
                                <p>Dabei besteht mein Tätigkeitsschwerpunkt in der multimodalen Therapie von Wirbelsäulenerkrankungen. In einem auf Ihre speziellen Beschwerden abgestimmten Stufenkonzept bilden dabei besonders moderne und schonende Techniken der minimalinvasiven Therapie bei Rückenschmerzen und Bandscheibenleiden einen wichtigen Baustein.</p>
                                <p>
                                    <em>Dr. med. U. Krug</em><br />
                                    Facharzt für Neurochirurgie
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer gallery\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"member\">
                                        <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/udo_2.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 col-xs-6\">
                                                <span>Dr. Udo Krug</span>
                                            </div>
                                            <div class=\"col-md-8 col-xs-6 text-right\">
                                                <span>Facharzt Neurochirurgie / Praxisinhaber</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
                                    <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/892714/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container892714\" style=\"position:relative; width:272px; height:168px; margin:15px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/top10-top20-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><div style=\"position:absolute; top:25px; left:108px; width:148px; height:58px; overflow:hidden; white-space:normal;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" style=\"font-size:15px; line-height:18px; font-weight:bold; color:#01a3d4; text-decoration:none; border:0px;\" target=\"_blank\">Dr. med. Udo Krug</a></div><div style=\"position:absolute; top:98px; left:108px; width:152px; height:53px; overflow:hidden; color:#888; font-size:11px; line-height:13px;\"><strong>Neurochirurgen</strong><br>in Chemnitz auf&nbsp;<a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"color:#069bd2; font-size:11px; text-decoration:none; border:0px; background-color:transparent !important;\" target=\"_blank\">jameda</a></div></div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/309432/\" type=\"text/javascript\" async=\"\"></script><div id=\"jameda-widget-container309432\" style=\"position:relative; width:97px; height:145px; margin:15px 25px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/bw-small-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"display:block; position:absolute; top:100px; left:10px; width:70px; height:20px; background-color:transparent !important;\" target=\"_blank\"></a><span><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" target=\"_blank\" style=\"display:block; position:absolute; top:5px; left:10px; width:70px; height:90px; text-align:center; text-decoration:none; border:0px; overflow:hidden; background-color:transparent !important;\"><div style=\"font-family:Arial; font-size:10px; line-height:12px; color:#fff;\">Von Patienten bewertet mit</div><div style=\"display:block; width:55px; margin:8px 0px 0px 6px; padding:3px 0px 4px 0px; border-radius:4px; color:#FFFFFF; text-align:center; text-shadow:1px 1px 1px rgba(0, 0, 0, 0.25); text-decoration:none; border-top:1px solid #8acf27; border-right:1px solid #77b41e; border-bottom:1px solid #76b21d; border-left:1px solid #8bd324; background:#84ca1e; background:linear-gradient(top,#8bd324 0%,#7cc118 100%);\">Note<div style=\"font-size:26px; line-height:28px; font-weight:bold; color:#fff;\">1,4</div></div></a></span></div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"member\">
                                    <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/mandy.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\">
                                                <span>Mandy</span>
                                            </div>
                                            <div class=\"col-md-6 col-xs-6 text-right\">
                                                <span>MTA – Neurologie</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center\">
                                        <p>Terminvergabe</p>
                                        <p>Neuroelektrodiagnostik</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"member\">
                                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/team/nadine.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\">
                                                <span>Nadine</span>
                                            </div>
                                            <div class=\"col-md-6 col-xs-6 text-right\">
                                                <span>Arzthelferin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center\">
                                        <p>Terminvergabe mobil</p>
                                        <p>Besondere Praxisleistungen Therapie</p>
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
        return "Practice/team.html.twig";
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
        return array (  168 => 93,  146 => 74,  116 => 47,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"team\">
        <div class=\"container-fluid\" style=\"display: none\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/team_2.jpg\") }}')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer\">
                        <h2 class=\"section_header text-uppercase text-center\">Betreuung aus einer Hand</h2>
                        <div class=\"row\">
                            <div class=\"col-md-10 col-md-offset-1\">
                                <p>Gemeinsam mit meinem Praxisteam möchte ich, dass Sie sich von Anfang an durch uns gut betreut und in unserer Praxis wohl fühlen. Mein Ziel ist es, Ihnen persönliche Beratung, zielführende Diagnostik sowie eine auf Ihre individuelle Situation abgestimmte moderne neurochirurgisch – operative Behandlung aus einer Hand zu bieten.</p>
                                <p>Dabei besteht mein Tätigkeitsschwerpunkt in der multimodalen Therapie von Wirbelsäulenerkrankungen. In einem auf Ihre speziellen Beschwerden abgestimmten Stufenkonzept bilden dabei besonders moderne und schonende Techniken der minimalinvasiven Therapie bei Rückenschmerzen und Bandscheibenleiden einen wichtigen Baustein.</p>
                                <p>
                                    <em>Dr. med. U. Krug</em><br />
                                    Facharzt für Neurochirurgie
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer gallery\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"member\">
                                        <img src=\"{{ asset(\"assets/img/team/udo_2.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-4 col-xs-6\">
                                                <span>Dr. Udo Krug</span>
                                            </div>
                                            <div class=\"col-md-8 col-xs-6 text-right\">
                                                <span>Facharzt Neurochirurgie / Praxisinhaber</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center w-100\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
                                    <div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/892714/\" type=\"text/javascript\" async></script><div id=\"jameda-widget-container892714\" style=\"position:relative; width:272px; height:168px; margin:15px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/top10-top20-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><div style=\"position:absolute; top:25px; left:108px; width:148px; height:58px; overflow:hidden; white-space:normal;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" style=\"font-size:15px; line-height:18px; font-weight:bold; color:#01a3d4; text-decoration:none; border:0px;\" target=\"_blank\">Dr. med. Udo Krug</a></div><div style=\"position:absolute; top:98px; left:108px; width:152px; height:53px; overflow:hidden; color:#888; font-size:11px; line-height:13px;\"><strong>Neurochirurgen</strong><br>in Chemnitz auf&nbsp;<a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=Top5&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"color:#069bd2; font-size:11px; text-decoration:none; border:0px; background-color:transparent !important;\" target=\"_blank\">jameda</a></div></div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <script src=\"https://cdn1.jameda-elements.de/widgets/siegel/81069776_1/309432/\" type=\"text/javascript\" async=\"\"></script><div id=\"jameda-widget-container309432\" style=\"position:relative; width:97px; height:145px; margin:15px 25px; background-image:url(https://cdn1.jameda-elements.de/premium/widgets/_images/bw-small-bg.png); background-repeat:no-repeat; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:15px;\"><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/fachgebiet/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" class=\"jam_link_check\" style=\"display:block; position:absolute; top:100px; left:10px; width:70px; height:20px; background-color:transparent !important;\" target=\"_blank\"></a><span><a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_content=BWnote&amp;utm_source=Kunden-Homepages&amp;utm_medium=Badges&amp;utm_term=81069776&amp;utm_campaign=Badges\" target=\"_blank\" style=\"display:block; position:absolute; top:5px; left:10px; width:70px; height:90px; text-align:center; text-decoration:none; border:0px; overflow:hidden; background-color:transparent !important;\"><div style=\"font-family:Arial; font-size:10px; line-height:12px; color:#fff;\">Von Patienten bewertet mit</div><div style=\"display:block; width:55px; margin:8px 0px 0px 6px; padding:3px 0px 4px 0px; border-radius:4px; color:#FFFFFF; text-align:center; text-shadow:1px 1px 1px rgba(0, 0, 0, 0.25); text-decoration:none; border-top:1px solid #8acf27; border-right:1px solid #77b41e; border-bottom:1px solid #76b21d; border-left:1px solid #8bd324; background:#84ca1e; background:linear-gradient(top,#8bd324 0%,#7cc118 100%);\">Note<div style=\"font-size:26px; line-height:28px; font-weight:bold; color:#fff;\">1,4</div></div></a></span></div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"member\">
                                    <img src=\"{{ asset(\"assets/img/team/mandy.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\">
                                                <span>Mandy</span>
                                            </div>
                                            <div class=\"col-md-6 col-xs-6 text-right\">
                                                <span>MTA – Neurologie</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center\">
                                        <p>Terminvergabe</p>
                                        <p>Neuroelektrodiagnostik</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"member\">
                                    <img src=\"{{ asset(\"assets/img/team/nadine.jpg\") }}\" alt=\"Neurospine Chemnitz\" />
                                    <div class=\"header\">
                                        <div class=\"row\">
                                            <div class=\"col-md-6 col-xs-6\">
                                                <span>Nadine</span>
                                            </div>
                                            <div class=\"col-md-6 col-xs-6 text-right\">
                                                <span>Arzthelferin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"content text-center\">
                                        <p>Terminvergabe mobil</p>
                                        <p>Besondere Praxisleistungen Therapie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Practice/team.html.twig", "/Users/mmueller/Downloads/website_web/templates/Practice/team.html.twig");
    }
}
