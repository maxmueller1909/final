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

/* _partials/contact.html.twig */
class __TwigTemplate_7b3567c80d7d5f6843952c8f508b6da0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/contact.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"grid-layer\">
            <div itemscope itemtype=\"http://schema.org/LocalBusiness\">
                <div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                    <b class=\"text-uppercase\">Telefon</b>
                    <p>
                        <a href=\"tel: +493717750014\"><span itemprop=\"telephone\">0371 775 00 14</span></a><br />
                        <a href=\"tel: +491749393140\">0174 93 93 140</a><br />
                        <a href=\"whatsapp://send?phone=+491749393140\">WhatsApp</a>
                    </p>
                </div>
                <div class=\"grid-layer\">
                    <b class=\"text-uppercase\">E-Mail</b>
                    <p>
                        Patienten: <a href=\"mailto: kontakt@neurospine-chemnitz.de\">kontakt@neurospine-chemnitz.de</a><br />
                        Geschäftspartner: <a href=\"mailto: info@neurospine-chemnitz.de\">info@neurospine-chemnitz.de</a>
                    </p>
                </div>
                <div class=\"grid-layer\">
                    <b class=\"text-uppercase\">Adresse</b>
                    <p>
                        <span itemprop=\"streetAddress\">Zeisigwaldstraße 80</span>,<br />
                        <span itemprop=\"addressLocality\">09130 Chemnitz</span>,<br />
                        <span itemprop=\"addressRegion\">Sachsen</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "_partials/contact.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"grid-layer\">
            <div itemscope itemtype=\"http://schema.org/LocalBusiness\">
                <div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\">
                    <b class=\"text-uppercase\">Telefon</b>
                    <p>
                        <a href=\"tel: +493717750014\"><span itemprop=\"telephone\">0371 775 00 14</span></a><br />
                        <a href=\"tel: +491749393140\">0174 93 93 140</a><br />
                        <a href=\"whatsapp://send?phone=+491749393140\">WhatsApp</a>
                    </p>
                </div>
                <div class=\"grid-layer\">
                    <b class=\"text-uppercase\">E-Mail</b>
                    <p>
                        Patienten: <a href=\"mailto: kontakt@neurospine-chemnitz.de\">kontakt@neurospine-chemnitz.de</a><br />
                        Geschäftspartner: <a href=\"mailto: info@neurospine-chemnitz.de\">info@neurospine-chemnitz.de</a>
                    </p>
                </div>
                <div class=\"grid-layer\">
                    <b class=\"text-uppercase\">Adresse</b>
                    <p>
                        <span itemprop=\"streetAddress\">Zeisigwaldstraße 80</span>,<br />
                        <span itemprop=\"addressLocality\">09130 Chemnitz</span>,<br />
                        <span itemprop=\"addressRegion\">Sachsen</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>", "_partials/contact.html.twig", "/Users/mmueller/Downloads/website_web/templates/_partials/contact.html.twig");
    }
}
