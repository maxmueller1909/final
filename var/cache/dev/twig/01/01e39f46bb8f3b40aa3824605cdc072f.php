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

/* Default/philosophy.html.twig */
class __TwigTemplate_47d80be3b753abf2be353a6653e9c46f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/philosophy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/philosophy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/philosophy.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/philosophie.jpg"), "html", null, true);
        echo "'); background-position: top left!important;\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-md-offset-6 text-left\" style=\"color: #ffffff; font-size: 1.5em\">
                                    <p class=\"text-justify\">
                                        Ich vertrete das Prinzip der <b>ungeteilten persönlichen Verantwortung</b> des Arztes in freier Niederlassung bei einer operativen Therapie, bestehend aus den Etappen
                                    </p>
                                    <br />
                                    <p class=\"btn_wa\"><b class=\"btn btn-neurospine\">Diagnostik</b> – <b class=\"btn btn-neurospine\">Operation</b> – <b class=\"btn btn-neurospine\">Nachsorge</b></p>
                                    <br />
                                    <p>
                                        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/unterschrift.png"), "html", null, true);
        echo "\" alt=\"Unterschrift Dr. Krug\" style=\"max-width: 300px\" />
                                    </p>
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
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">Prinzipien  der Praxisführung</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Praxisphilosophie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-offset-2 col-md-8 bullet\">
                                <p>Die Bedürfnisse des Patienten stehen an erster Stelle. Nur ein gut aufgeklärter Patient kann für sich eine Entscheidung treffen und damit eigenverantwortlich handeln. Dabei berät der Arzt und entwickelt mit dem Patienten eine individuelle Behandlungsstrategie. </p>
                                <p>Beurteilung des Erfolges an qualitativen, nicht an quantitativen Kriterien</p>
                                <p>Patientenorientierte Kommunikation und Verständlichkeit unter Einbezug einer ganzheitlichen Sichtweise in Diagnostik und Therapie </p>
                                <p>Interdisziplinäre Zusammenarbeit mit Fachärzten und Kliniken zum Wohle des Patienten</p>
                                <hr />
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"modal-pra-box\">
                                            <a data-toggle=\"modal\" data-target=\"#davor\">Kommt Ihnen das bekannt vor<span class=\"h3\"><b>?</b></span></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"modal-pra-box\">
                                            <a data-toggle=\"modal\" data-target=\"#danach\">Das geht besser<span class=\"h3\"><b>!</b></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class=\"modal fade\" id=\"davor\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"davor\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Kommt Ihnen das bekannt vor?</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <p>Assistenzarzt <b>X</b> berät Sie in der Kliniksambulanz und bespricht vorab wichtige Details mit Ihnen zum geplanten Eingriff ….</p>
                    <p>Oberarzt <b>Y</b> operiert Sie – hat Sie noch nie gesehen. Wird Sie auch nie mehr sehen. Wird auch nie wissen, wie es Ihnen später geht.</p>
                    <p>Chefarzt <b>W</b> lernen Sie zur Visite und nur kurz kennen – muss dringend in OP. Hat kaum Zeit</p>
                    <p>Zum Entlassungstag fehlt die Zeit für ein Entlassungsgespräch mit dem Stationsarzt – der hatte Bereitschaft und muss früh nach Hause. Ihre Fragen beantworten Krankenschwestern – die sind sehr nett. Im Entlassungsbrief steht, dass sich ihre Schmerzen deutlich gebessert haben, dass stimmt aber so nicht, finden Sie, als Sie beim Hausarzt sitzen – wegen der Krankschreibung.</p>
                    <p>auf Assistenzarzt <b>Z</b> treffen Sie Wochen später in der Kliniksambulanz letztmalig zur Nachkontrolle, dieser hat weder Kenntnis von ihren Beschwerden vor der OP, noch von wichtigen Besonderheiten in der OP, welche bei der Nachbehandlung Beachtung finden sollten. Verordnungen oder Rezepte als auch Rehaanträge ausstellen soll der Hausarzt, dem dies per Brief mitgeteilt wird. Wieder Termin dort, Warten … Erklären.</p>
                </div>
                <div class=\"modal-footer\">
                    <a data-toggle=\"modal\" data-target=\"#danach\" data-dismiss=\"modal\" class=\"h4 text-left\">Geht das wirklich nicht besser?</a>

                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"danach\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"davor\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Das geht besser!</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <p>Das Prinzip der ungeteilten persönlichen Verantwortung des Arztes in freier Niederlassung erstreckt sich über die Behandlungsetappen</p>
                    <p><b>Diagnostik</b> - <b>Operation</b> - <b>Betreuung</b></p>
                    <p>und bedeutet  für Sie gröstmögliche Sicherheit vor Behandlungsfehlern durch mangelhafte Aufklärung und Unterrichtung, fehlende Zuständigkeit im Krankenhaus, Fehlentscheidungen durch  Informationsverluste zwischen ambulantem und stationärem Sektor . Es bedeutet auch, den roten (Behandlungs)Faden nie zu verlieren. Es bedeutet für Sie, sich Wege und Zeit zu sparen.
                        Deshalb bin ich und mein Praxisteam <b>vor</b>, <b>während</b> und auch <b>nach</b> einer OP für Sie da und erreichbar.  </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
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
        return "Default/philosophy.html.twig";
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
        return array (  89 => 20,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/philosophie.jpg\") }}'); background-position: top left!important;\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-md-offset-6 text-left\" style=\"color: #ffffff; font-size: 1.5em\">
                                    <p class=\"text-justify\">
                                        Ich vertrete das Prinzip der <b>ungeteilten persönlichen Verantwortung</b> des Arztes in freier Niederlassung bei einer operativen Therapie, bestehend aus den Etappen
                                    </p>
                                    <br />
                                    <p class=\"btn_wa\"><b class=\"btn btn-neurospine\">Diagnostik</b> – <b class=\"btn btn-neurospine\">Operation</b> – <b class=\"btn btn-neurospine\">Nachsorge</b></p>
                                    <br />
                                    <p>
                                        <img src=\"{{ asset(\"assets/img/unterschrift.png\") }}\" alt=\"Unterschrift Dr. Krug\" style=\"max-width: 300px\" />
                                    </p>
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
                    <div class=\"layer single-page\">
                        <h5 class=\"text-center\">Prinzipien  der Praxisführung</h5>
                        <h2 class=\"section_header text-uppercase text-center\">Praxisphilosophie</h2>
                        <div class=\"row\">
                            <div class=\"col-md-offset-2 col-md-8 bullet\">
                                <p>Die Bedürfnisse des Patienten stehen an erster Stelle. Nur ein gut aufgeklärter Patient kann für sich eine Entscheidung treffen und damit eigenverantwortlich handeln. Dabei berät der Arzt und entwickelt mit dem Patienten eine individuelle Behandlungsstrategie. </p>
                                <p>Beurteilung des Erfolges an qualitativen, nicht an quantitativen Kriterien</p>
                                <p>Patientenorientierte Kommunikation und Verständlichkeit unter Einbezug einer ganzheitlichen Sichtweise in Diagnostik und Therapie </p>
                                <p>Interdisziplinäre Zusammenarbeit mit Fachärzten und Kliniken zum Wohle des Patienten</p>
                                <hr />
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"modal-pra-box\">
                                            <a data-toggle=\"modal\" data-target=\"#davor\">Kommt Ihnen das bekannt vor<span class=\"h3\"><b>?</b></span></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"modal-pra-box\">
                                            <a data-toggle=\"modal\" data-target=\"#danach\">Das geht besser<span class=\"h3\"><b>!</b></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class=\"modal fade\" id=\"davor\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"davor\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Kommt Ihnen das bekannt vor?</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <p>Assistenzarzt <b>X</b> berät Sie in der Kliniksambulanz und bespricht vorab wichtige Details mit Ihnen zum geplanten Eingriff ….</p>
                    <p>Oberarzt <b>Y</b> operiert Sie – hat Sie noch nie gesehen. Wird Sie auch nie mehr sehen. Wird auch nie wissen, wie es Ihnen später geht.</p>
                    <p>Chefarzt <b>W</b> lernen Sie zur Visite und nur kurz kennen – muss dringend in OP. Hat kaum Zeit</p>
                    <p>Zum Entlassungstag fehlt die Zeit für ein Entlassungsgespräch mit dem Stationsarzt – der hatte Bereitschaft und muss früh nach Hause. Ihre Fragen beantworten Krankenschwestern – die sind sehr nett. Im Entlassungsbrief steht, dass sich ihre Schmerzen deutlich gebessert haben, dass stimmt aber so nicht, finden Sie, als Sie beim Hausarzt sitzen – wegen der Krankschreibung.</p>
                    <p>auf Assistenzarzt <b>Z</b> treffen Sie Wochen später in der Kliniksambulanz letztmalig zur Nachkontrolle, dieser hat weder Kenntnis von ihren Beschwerden vor der OP, noch von wichtigen Besonderheiten in der OP, welche bei der Nachbehandlung Beachtung finden sollten. Verordnungen oder Rezepte als auch Rehaanträge ausstellen soll der Hausarzt, dem dies per Brief mitgeteilt wird. Wieder Termin dort, Warten … Erklären.</p>
                </div>
                <div class=\"modal-footer\">
                    <a data-toggle=\"modal\" data-target=\"#danach\" data-dismiss=\"modal\" class=\"h4 text-left\">Geht das wirklich nicht besser?</a>

                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"danach\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"davor\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Das geht besser!</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <p>Das Prinzip der ungeteilten persönlichen Verantwortung des Arztes in freier Niederlassung erstreckt sich über die Behandlungsetappen</p>
                    <p><b>Diagnostik</b> - <b>Operation</b> - <b>Betreuung</b></p>
                    <p>und bedeutet  für Sie gröstmögliche Sicherheit vor Behandlungsfehlern durch mangelhafte Aufklärung und Unterrichtung, fehlende Zuständigkeit im Krankenhaus, Fehlentscheidungen durch  Informationsverluste zwischen ambulantem und stationärem Sektor . Es bedeutet auch, den roten (Behandlungs)Faden nie zu verlieren. Es bedeutet für Sie, sich Wege und Zeit zu sparen.
                        Deshalb bin ich und mein Praxisteam <b>vor</b>, <b>während</b> und auch <b>nach</b> einer OP für Sie da und erreichbar.  </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "Default/philosophy.html.twig", "/Users/mmueller/Downloads/website_web/templates/Default/philosophy.html.twig");
    }
}
