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

/* footer.html.twig */
class __TwigTemplate_d69d49da710eec4d55f0a51841684d4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"layer\">
                    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", ["_route"], "method", false, false, false, 6) == "contact")) {
            // line 7
            echo "                        <h5>Partner</h5>
                        <div class=\"row\">
                            <div class=\"col-md-2 col-xs-6\">
                                 <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/agr.jpg"), "html", null, true);
            echo "\" alt=\"AGR Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/bws_royal.jpg"), "html", null, true);
            echo "\" alt=\"BWS-Royal Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/dr_claudia_doehler.jpg"), "html", null, true);
            echo "\" alt=\"Dr. Claudia Döhler Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/pilates_zentrum_chemnitz.jpg"), "html", null, true);
            echo "\" alt=\"Pilates Zentrum Chemnitz\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/admedia.jpg"), "html", null, true);
            echo "\" alt=\"AdMedia Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/partner/medizinische_kraeftigungtherapie.jpg"), "html", null, true);
            echo "\" alt=\"Medizinische Kraeftigungtherapie Logo\" />
                            </div>
                        </div>
                    ";
        }
        // line 29
        echo "                </div>
            </div>
            <div class=\"col-md-12 text-center\">
                <div class=\"facts\">
                    <div class=\"row row-eq-height\" id=\"counters\">
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"9\" data-speed=\"500\" data-refresh-interval=\"1\">9</span>
                            <p class=\"text-center\">von 10 Patienten</p>
                            <p class=\"text-center\">mit implantierter Schmerzsonde wollen diese nach Testwoche dauerhaft behalten</p>
                        </div>
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"92\" data-speed=\"500\" data-refresh-interval=\"1\">92</span>
                            <p class=\"text-center\">Prozent</p>
                            <p class=\"text-center\">aller 2016 operierten Patienten haben unsere Praxis weiterempfohlen</p>
                        </div>
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"5\" data-speed=\"500\" data-refresh-interval=\"1\">5</span>
                            <p class=\"text-center\">Tage</p>
                            <p class=\"text-center\">beträgt die durchschnittliche Verweildauer im KH nach Bandscheiben-OP</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"contact\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo2.png"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz Logo\" class=\"footer-logo\"/></a>
                        </div>
                        <div class=\"col-md-3 col-xs-6\">
                            <b>Adresse</b>
                            <p>
                                Zeisigwaldstraße 80<br />
                                09130 Chemnitz<br />
                                Sachsen
                            </p>
                        </div>
                        <div class=\"col-md-3 col-xs-6\">
                            <b>Telefon</b>
                            <a href=\"tel: +493717750014\">0371 775 00 14</a><br />
                            <a href=\"tel: +491749393140\">0174 93 93 140</a><br />
                            <a href=\"whatsapp://send?phone=+491749393140\">WhatsApp</a>
                        </div>
                        <div class=\"col-md-4 col-xs-6\">
                            <b>Mail</b>
                            Patiententen <a href=\"mailto: kontakt@neurospine-chemnitz.de\">kontakt@neurospine-chemnitz.de</a><br />
                            Geschäftspartner <a href=\"mailto: info@neurospine-chemnitz.de\">info@neurospine-chemnitz.de</a>
                            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_imprint");
        echo "\">Impressum</a> | <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_protection");
        echo "\">Datenschutz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t<p style=\"text-align: center;\">Diese Seite ist Chemnitzer Können - erstellt von <a href=\"https://popcorn-solution.com\" target=\"_blank\">Popcorn Solution GmbH</a>.</p>
\t\t\t</div>
\t\t</div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "footer.html.twig";
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
        return array (  148 => 76,  123 => 56,  94 => 29,  87 => 25,  81 => 22,  75 => 19,  69 => 16,  63 => 13,  57 => 10,  52 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"layer\">
                    {% if app.request.get('_route') == 'contact' %}
                        <h5>Partner</h5>
                        <div class=\"row\">
                            <div class=\"col-md-2 col-xs-6\">
                                 <img src=\"{{ asset(\"assets/img/partner/agr.jpg\") }}\" alt=\"AGR Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"{{ asset(\"assets/img/partner/bws_royal.jpg\") }}\" alt=\"BWS-Royal Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"{{ asset(\"assets/img/partner/dr_claudia_doehler.jpg\") }}\" alt=\"Dr. Claudia Döhler Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"{{ asset(\"assets/img/partner/pilates_zentrum_chemnitz.jpg\") }}\" alt=\"Pilates Zentrum Chemnitz\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"{{ asset(\"assets/img/partner/admedia.jpg\") }}\" alt=\"AdMedia Logo\" />
                            </div>
                            <div class=\"col-md-2 col-xs-6\">
                                <img src=\"{{ asset(\"assets/img/partner/medizinische_kraeftigungtherapie.jpg\") }}\" alt=\"Medizinische Kraeftigungtherapie Logo\" />
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
            <div class=\"col-md-12 text-center\">
                <div class=\"facts\">
                    <div class=\"row row-eq-height\" id=\"counters\">
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"9\" data-speed=\"500\" data-refresh-interval=\"1\">9</span>
                            <p class=\"text-center\">von 10 Patienten</p>
                            <p class=\"text-center\">mit implantierter Schmerzsonde wollen diese nach Testwoche dauerhaft behalten</p>
                        </div>
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"92\" data-speed=\"500\" data-refresh-interval=\"1\">92</span>
                            <p class=\"text-center\">Prozent</p>
                            <p class=\"text-center\">aller 2016 operierten Patienten haben unsere Praxis weiterempfohlen</p>
                        </div>
                        <div class=\"col-md-4 single\">
                            <span class=\"ace-counter-number number h2\" data-from=\"0\" data-to=\"5\" data-speed=\"500\" data-refresh-interval=\"1\">5</span>
                            <p class=\"text-center\">Tage</p>
                            <p class=\"text-center\">beträgt die durchschnittliche Verweildauer im KH nach Bandscheiben-OP</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12\">
                <div class=\"contact\">
                    <div class=\"row\">
                        <div class=\"col-md-2 col-xs-6\">
                            <a href=\"{{ path('home_homepage') }}\"><img src=\"{{ asset(\"assets/img/logo2.png\") }}\" alt=\"Neurospine Chemnitz Logo\" class=\"footer-logo\"/></a>
                        </div>
                        <div class=\"col-md-3 col-xs-6\">
                            <b>Adresse</b>
                            <p>
                                Zeisigwaldstraße 80<br />
                                09130 Chemnitz<br />
                                Sachsen
                            </p>
                        </div>
                        <div class=\"col-md-3 col-xs-6\">
                            <b>Telefon</b>
                            <a href=\"tel: +493717750014\">0371 775 00 14</a><br />
                            <a href=\"tel: +491749393140\">0174 93 93 140</a><br />
                            <a href=\"whatsapp://send?phone=+491749393140\">WhatsApp</a>
                        </div>
                        <div class=\"col-md-4 col-xs-6\">
                            <b>Mail</b>
                            Patiententen <a href=\"mailto: kontakt@neurospine-chemnitz.de\">kontakt@neurospine-chemnitz.de</a><br />
                            Geschäftspartner <a href=\"mailto: info@neurospine-chemnitz.de\">info@neurospine-chemnitz.de</a>
                            <a href=\"{{ path('home_imprint') }}\">Impressum</a> | <a href=\"{{ path('home_protection') }}\">Datenschutz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t<p style=\"text-align: center;\">Diese Seite ist Chemnitzer Können - erstellt von <a href=\"https://popcorn-solution.com\" target=\"_blank\">Popcorn Solution GmbH</a>.</p>
\t\t\t</div>
\t\t</div>
    </div>
</footer>", "footer.html.twig", "/Users/mmueller/Downloads/website_web/templates/footer.html.twig");
    }
}
