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

/* Default/index.html.twig */
class __TwigTemplate_8856be4890d09064db7d502f33ef92a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Default/index.html.twig", 1);
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
        echo "    <div id=\"home\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home.jpg"), "html", null, true);
        echo "')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h1 class=\"page-header-big\">15 Jahre Neurospine.</h1>
                                    <h3 class=\"page-header-small\" style=\"font-weight: 300\">UNABHÄNGIGKEIT. KOMPETENZ. VERTRAUEN.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t    <!--
            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1 news-feed\">
                            <div class=\"news-fee1d\">
\t\t\t\t\t\t\t<h2 class=\"text-center font-bold\">Unsere Praxis bleibt vom <br />23.12. – 03.01.20 geschlossen.</h2>
\t\t\t\t\t\t\t\t<p class=\"text-left\">Wir wünschen allen unseren Patienten friedvolle und beschwerdefreie Weihnachtstage und ein gesundes Neues Jahr 2020.
Ab 06.01.2020 sind wir wieder für Sie da. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t-->

            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1\"> <!-- col-md-4 col-md-push-8 -->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/focus-urkunde.jpg"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz Focus Award\" class=\"img-responsive\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1\"> <!-- col-md-4 col-md-push-8 -->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/neurospine_intro.png"), "html", null, true);
        echo "\" alt=\"Neurospine Chemnitz\" class=\"img-responsive\" />
                                </div>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <!--
            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1 news-feed\">
                            <div class=\"news-feed\">
\t\t\t\t\t\t\t\t<h2>Zuverlässige/er  FÄ / FA f. Neurochirurgie zur Einarbeitung /Arbeitsteilung /und Praxisübernahme langfristig gesucht.</h2>
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tIhre Bewerbung / Angebot + Informationen unter krug@neurospine-chemnitz.de</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"treatment layer\">
                        <h2 class=\"section_header text-uppercase text-center\">So behandeln wir</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6 treatment_box\">
                                <div class=\"header-cover-img small\" style=\"background: linear-gradient(to right, rgba(51,51,51, 0.4), rgba(51,51,51, 0.4)), url('";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/konservative-therapie.jpg"), "html", null, true);
        echo "')\">
                                    <h2 class=\"page-header-small text-uppercase\"><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_konservativetherapie");
        echo "\">Konservative Therapie</a></h2>
                                </div>
                            </div>
                            <div class=\"col-md-6 treatment_box\">
                                <div class=\"header-cover-img small\" style=\"background: linear-gradient(to right, rgba(51,51,51, 0.4), rgba(51,51,51, 0.4)), url('";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/operative-therapie.jpg"), "html", null, true);
        echo "')\">
                                    <h2 class=\"page-header-small text-uppercase\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_operativetherapie");
        echo "\">Operative Therapie</a></h2>
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
                    <div class=\"layer text-center col-move-section\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-move-column\">
                                <div class=\"box\">
                                    <h2 class=\"text-uppercase h4\">Unsere Sprechzeiten</h2>
                                    <div class=\"news-feed small-feed text-center\" style=\"display: none\">
                                        <h5>Nächste Praxisschließzeit:</h5>
                                    </div>
                                    <br />
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Montag</b>
                                        <p>08.00 Uhr – 17.00 Uhr</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Dienstag</b>
                                        <p>nach Vereinbarung</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Mittwoch</b>
                                        <p>08.00 Uhr – 17.00 Uhr</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Donnerstag</b>
                                        <p>nach Vereinbarung</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Freitag</b>
                                        <p>08.00 Uhr – 13.00 Uhr</p>
                                    </div>
                                    <b>Natürlich beraten wir Sie auch nach Vereinbarung.</b>
                                </div>
                                <div id=\"erfassungsbogen\" class=\"box red-bg\">
                                    <h2 class=\"text-uppercase h4\">Erfassungsbogen für Patienten</h2>
                                    <div class=\"grid-layer\">
                                        <p class=\"text-left\">Um die Dringlichkeit Ihres Anliegens im Vorfeld besser beurteilen zu können, hilft unserm Team ein <b>vollständig</b> und <b>detailliert</b> ausgefüllter Patientenfragebogen sehr.</p>
                                    </div>
                                    <hr />
                                    <div class=\"grid-layer text-left\">
                                        <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Patientenerfassungsbogen.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Patientenerfassungsbogen</a>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_source=Kunden-Homepages&utm_medium=Badges&utm_term=81069776&utm_campaign=Badges&utm_content=ButtonSmall\" target=\"_blank\" style=\"display:block; width:235px; height:29px; margin:10px auto; background-image:url(https://cdn1.jameda-elements.de/_images/badges/fach_teaser_small_neu.gif); background-repeat:no-repeat; border-radius:4px; -moz-border-radius:4px; -moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.5); -webkit-box-shadow: 0px 0px 4px rgba(0,0,0,0.5); box-shadow: 0px 0px 4px rgba(0,0,0,0.5);\"></a>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-move-column\">
                                <div class=\"box grey-bg local_business\">
                                    <h2 class=\"text-uppercase h4\">Termin vereinbaren</h2>
                                    ";
        // line 153
        $this->loadTemplate("_partials/contact.html.twig", "Default/index.html.twig", 153)->display($context);
        // line 154
        echo "                                </div>
                                <div class=\"box\">
                                    <h2 class=\"text-uppercase h4\">Rückruf anfordern</h2>
                                    <div class=\"grid-layer text-left\">
                                        ";
        // line 158
        $this->loadTemplate("flashbag.html.twig", "Default/index.html.twig", 158)->display($context);
        // line 159
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ContactController::callbackAction"));
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer red-bg text-center blog-news\">
                        <h2 class=\"section_header text-uppercase\">Informationen</h2>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"box\">
                                        <h3>Für unsere Patienten</h3>
                                            <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home_patienten.jpg"), "html", null, true);
        echo "\" />
                                        <ul class=\"list-unstyled box-elements\">
                                            <li><a href=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/bv-ct-schmerztherapie.pdf"), "html", null, true);
        echo "\" target=\"_blank\">BV und CT Schmerztherapie</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#Chronischer_Schmerz_SCS-Sonde\">Chronischer Schmerz SCS-Sonde</a></li>
                                            <li><a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/empfehlung_stoßwellentherapie.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Empfehlungen Stoßwellentherapie</a></li>
                                            <li><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/myelographie.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Myelographie</a></li>
                                            <li><a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/empfehlung_hws.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Verhalten nach Operationen HWS</a></li>
                                            <li><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/empfehlung_lws.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Verhalten nach Operationen LWS</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"box\">
                                        <h3>Für Zuweiser/Kollegen</h3>
                                        <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home_kollegen.jpg"), "html", null, true);
        echo "\" />
                                        <ul class=\"list-unstyled box-elements\">
                                            <li><a href=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("news/degenerative-lumbale-spinalkanalstenose.pdf"), "html", null, true);
        echo "\" target=\"_blank\">Spinalkanalstenose LWS</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#LWS_Spondylodese_versus_Dekompression\">LWS Spondylodese versus Dekompression</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#Sagittale_Wirbelsäulenbalance\">Sagittale Wirbelsäulenbalance</a></li>
                                            <li class=\"accordion\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"collapse\" data-target=\"#collapseOne\" style=\"cursor: pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSchmerztherapie SCS - Sonde
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#Schmerztherapie_SCS-Sonde\">SCS - Prinzip und Indikationen</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#Schmerztherapie_SCS-Sonde2\">SCS -Hochfrequenzstimulation HF10</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"Sagittale_Wirbelsäulenbalance\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Sagittale_Wirbelsäulenbalance\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Sagittale Wirbelsäulenbalance</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <p><b>Die sagittale Wirbelsäulenbalance--klinische Bedeutung und radiologische Bemessung.</b> [Sagittal Balance of the Spine--Clinical Importance and Radiographic Assessment]. Decker, S;\tMüller, C W;\tOmar, M;\tKrettek, C;\tSchwab, F;\tTrobisch, P D. Z Orthop Unfall; 154(2): 128-33, 2016 Apr.</p>
                    <br />
                    <p><b>The influence of sagittal  spinal deformity on anteversion of the acetabular component in total hip arthroplasty</b>, D. Phan, S. S. Bederman, R. Schwarzkopf: Bone Joint J 2015;97-B:1017–23</p>
                    <br />
                    <p><b>Die postoperative sagittale Imbalance erhöht das Pseudarthrose Risiko nach Lumbalfusion</b>, R Langmantel, V Karantzoulis, R Ebner, F Vazifehdan, Die Wirbelsäule 2017; 01(01): 66-68</p>
                    <br />
                    <p><b>Eine Studie zur optimierten Planung der postoperativen sagittalen Balance in der Behandlung adulter Deformitäten: Einfluss der Flexibilität der thorakalen Kyphose</b>, S Decker, M Mayer, W Hitzl, A Hempfing, L Ernstbrunner, O Meier, H Koller, Die Wirbelsäule 2017; 01(01): 66-68</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"LWS_Spondylodese_versus_Dekompression\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"LWS Spondylodese versus Dekompression\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">LWS Spondylodese versus Dekompression</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/-9fhkrJKRsQ\"></iframe>
                    </div>
                    <hr />
                    <p>Lurie JD, Tosteson TD, Tosteson A et al. <b>Long-term Outcomes of Lumbar Spinal Stenosis. Eight-Year Results of the Spine Patient Outcomes Research Trial. (SPORT)</b> Spine 2015; 40:63-76</p>
                    <br />
                    <p>Försth P, Olaffson G, Carlsson T et al. <b>A Randomized, Controlled Trial of Fusion Surgery for Lumbar Spinal Stenosis.</b> N Engl J Med 2016; 374; 1413-23</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"Schmerztherapie_SCS-Sonde\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Schmerztherapie SCS - Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">SCS - Prinzip und Indikationen</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/223158389?title=0&byline=0&portrait=0\"></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"Schmerztherapie_SCS-Sonde2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Schmerztherapie SCS - Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">SCS -Hochfrequenzstimulation HF10</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/313206291?title=0&byline=0&portrait=0\"></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"Chronischer_Schmerz_SCS-Sonde\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Chronischer Schmerz SCS-Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Chronischer Schmerz SCS-Sonde</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/223161841?title=0&byline=0&portrait=0\"></iframe>
                    </div>
\t\t\t\t\t<hr />
                    <div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/ZGDKf9x-RyI\" class=\"embed-responsive-item\"></iframe>
                    </div>
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
        return "Default/index.html.twig";
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
        return array (  314 => 195,  309 => 193,  299 => 186,  295 => 185,  291 => 184,  287 => 183,  282 => 181,  277 => 179,  253 => 159,  251 => 158,  245 => 154,  243 => 153,  230 => 143,  177 => 93,  173 => 92,  166 => 88,  162 => 87,  129 => 57,  112 => 43,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"home\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset('assets/img/home.jpg') }}')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <h1 class=\"page-header-big\">15 Jahre Neurospine.</h1>
                                    <h3 class=\"page-header-small\" style=\"font-weight: 300\">UNABHÄNGIGKEIT. KOMPETENZ. VERTRAUEN.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
\t\t    <!--
            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1 news-feed\">
                            <div class=\"news-fee1d\">
\t\t\t\t\t\t\t<h2 class=\"text-center font-bold\">Unsere Praxis bleibt vom <br />23.12. – 03.01.20 geschlossen.</h2>
\t\t\t\t\t\t\t\t<p class=\"text-left\">Wir wünschen allen unseren Patienten friedvolle und beschwerdefreie Weihnachtstage und ein gesundes Neues Jahr 2020.
Ab 06.01.2020 sind wir wieder für Sie da. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t-->

            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1\"> <!-- col-md-4 col-md-push-8 -->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <img src=\"{{ asset('assets/img/focus-urkunde.jpg') }}\" alt=\"Neurospine Chemnitz Focus Award\" class=\"img-responsive\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1\"> <!-- col-md-4 col-md-push-8 -->
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <img src=\"{{ asset('assets/img/neurospine_intro.png') }}\" alt=\"Neurospine Chemnitz\" class=\"img-responsive\" />
                                </div>
                            </div>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            <!--
            <div class=\"container\">
                <div class=\"layer\">
                    <div class=\"row row-eq-height\">
                        <div class=\"col-md-10 col-md-offset-1 news-feed\">
                            <div class=\"news-feed\">
\t\t\t\t\t\t\t\t<h2>Zuverlässige/er  FÄ / FA f. Neurochirurgie zur Einarbeitung /Arbeitsteilung /und Praxisübernahme langfristig gesucht.</h2>
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tIhre Bewerbung / Angebot + Informationen unter krug@neurospine-chemnitz.de</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"treatment layer\">
                        <h2 class=\"section_header text-uppercase text-center\">So behandeln wir</h2>
                        <div class=\"row\">
                            <div class=\"col-md-6 treatment_box\">
                                <div class=\"header-cover-img small\" style=\"background: linear-gradient(to right, rgba(51,51,51, 0.4), rgba(51,51,51, 0.4)), url('{{ asset('assets/img/service/konservative-therapie.jpg') }}')\">
                                    <h2 class=\"page-header-small text-uppercase\"><a href=\"{{ path('service_konservativetherapie') }}\">Konservative Therapie</a></h2>
                                </div>
                            </div>
                            <div class=\"col-md-6 treatment_box\">
                                <div class=\"header-cover-img small\" style=\"background: linear-gradient(to right, rgba(51,51,51, 0.4), rgba(51,51,51, 0.4)), url('{{ asset('assets/img/service/operative-therapie.jpg') }}')\">
                                    <h2 class=\"page-header-small text-uppercase\"><a href=\"{{ path('service_operativetherapie') }}\">Operative Therapie</a></h2>
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
                    <div class=\"layer text-center col-move-section\">
                        <div class=\"row\">
                            <div class=\"col-md-6 col-move-column\">
                                <div class=\"box\">
                                    <h2 class=\"text-uppercase h4\">Unsere Sprechzeiten</h2>
                                    <div class=\"news-feed small-feed text-center\" style=\"display: none\">
                                        <h5>Nächste Praxisschließzeit:</h5>
                                    </div>
                                    <br />
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Montag</b>
                                        <p>08.00 Uhr – 17.00 Uhr</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Dienstag</b>
                                        <p>nach Vereinbarung</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Mittwoch</b>
                                        <p>08.00 Uhr – 17.00 Uhr</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Donnerstag</b>
                                        <p>nach Vereinbarung</p>
                                    </div>
                                    <div class=\"grid-layer\">
                                        <b class=\"text-uppercase\">Freitag</b>
                                        <p>08.00 Uhr – 13.00 Uhr</p>
                                    </div>
                                    <b>Natürlich beraten wir Sie auch nach Vereinbarung.</b>
                                </div>
                                <div id=\"erfassungsbogen\" class=\"box red-bg\">
                                    <h2 class=\"text-uppercase h4\">Erfassungsbogen für Patienten</h2>
                                    <div class=\"grid-layer\">
                                        <p class=\"text-left\">Um die Dringlichkeit Ihres Anliegens im Vorfeld besser beurteilen zu können, hilft unserm Team ein <b>vollständig</b> und <b>detailliert</b> ausgefüllter Patientenfragebogen sehr.</p>
                                    </div>
                                    <hr />
                                    <div class=\"grid-layer text-left\">
                                        <a href=\"{{ asset('Patientenerfassungsbogen.pdf') }}\" target=\"_blank\">Patientenerfassungsbogen</a>
                                    </div>
                                </div>
                                <div class=\"text-center\">
                                    <a href=\"https://www.jameda.de/chemnitz/aerzte/neurochirurgen/dr-udo-krug/uebersicht/81069776_1/?utm_source=Kunden-Homepages&utm_medium=Badges&utm_term=81069776&utm_campaign=Badges&utm_content=ButtonSmall\" target=\"_blank\" style=\"display:block; width:235px; height:29px; margin:10px auto; background-image:url(https://cdn1.jameda-elements.de/_images/badges/fach_teaser_small_neu.gif); background-repeat:no-repeat; border-radius:4px; -moz-border-radius:4px; -moz-box-shadow: 0px 0px 4px rgba(0,0,0,0.5); -webkit-box-shadow: 0px 0px 4px rgba(0,0,0,0.5); box-shadow: 0px 0px 4px rgba(0,0,0,0.5);\"></a>
                                </div>
                            </div>
                            <div class=\"col-md-6 col-move-column\">
                                <div class=\"box grey-bg local_business\">
                                    <h2 class=\"text-uppercase h4\">Termin vereinbaren</h2>
                                    {% include '_partials/contact.html.twig' %}
                                </div>
                                <div class=\"box\">
                                    <h2 class=\"text-uppercase h4\">Rückruf anfordern</h2>
                                    <div class=\"grid-layer text-left\">
                                        {% include('flashbag.html.twig') %}
                                        {{ render(controller('App\\\\Controller\\\\ContactController::callbackAction')) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"layer red-bg text-center blog-news\">
                        <h2 class=\"section_header text-uppercase\">Informationen</h2>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <div class=\"box\">
                                        <h3>Für unsere Patienten</h3>
                                            <img src=\"{{  asset('assets/img/home_patienten.jpg') }}\" />
                                        <ul class=\"list-unstyled box-elements\">
                                            <li><a href=\"{{ asset('news/bv-ct-schmerztherapie.pdf') }}\" target=\"_blank\">BV und CT Schmerztherapie</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#Chronischer_Schmerz_SCS-Sonde\">Chronischer Schmerz SCS-Sonde</a></li>
                                            <li><a href=\"{{ asset('news/empfehlung_stoßwellentherapie.pdf') }}\" target=\"_blank\">Empfehlungen Stoßwellentherapie</a></li>
                                            <li><a href=\"{{ asset('news/myelographie.pdf') }}\" target=\"_blank\">Myelographie</a></li>
                                            <li><a href=\"{{ asset('news/empfehlung_hws.pdf') }}\" target=\"_blank\">Verhalten nach Operationen HWS</a></li>
                                            <li><a href=\"{{ asset('news/empfehlung_lws.pdf') }}\" target=\"_blank\">Verhalten nach Operationen LWS</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <div class=\"box\">
                                        <h3>Für Zuweiser/Kollegen</h3>
                                        <img src=\"{{  asset('assets/img/home_kollegen.jpg') }}\" />
                                        <ul class=\"list-unstyled box-elements\">
                                            <li><a href=\"{{ asset('news/degenerative-lumbale-spinalkanalstenose.pdf') }}\" target=\"_blank\">Spinalkanalstenose LWS</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#LWS_Spondylodese_versus_Dekompression\">LWS Spondylodese versus Dekompression</a></li>
                                            <li><a data-toggle=\"modal\" data-target=\"#Sagittale_Wirbelsäulenbalance\">Sagittale Wirbelsäulenbalance</a></li>
                                            <li class=\"accordion\">
\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"collapse\" data-target=\"#collapseOne\" style=\"cursor: pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSchmerztherapie SCS - Sonde
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne\" class=\"collapse\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#Schmerztherapie_SCS-Sonde\">SCS - Prinzip und Indikationen</a><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"modal\" data-target=\"#Schmerztherapie_SCS-Sonde2\">SCS -Hochfrequenzstimulation HF10</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"Sagittale_Wirbelsäulenbalance\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Sagittale_Wirbelsäulenbalance\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Sagittale Wirbelsäulenbalance</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <p><b>Die sagittale Wirbelsäulenbalance--klinische Bedeutung und radiologische Bemessung.</b> [Sagittal Balance of the Spine--Clinical Importance and Radiographic Assessment]. Decker, S;\tMüller, C W;\tOmar, M;\tKrettek, C;\tSchwab, F;\tTrobisch, P D. Z Orthop Unfall; 154(2): 128-33, 2016 Apr.</p>
                    <br />
                    <p><b>The influence of sagittal  spinal deformity on anteversion of the acetabular component in total hip arthroplasty</b>, D. Phan, S. S. Bederman, R. Schwarzkopf: Bone Joint J 2015;97-B:1017–23</p>
                    <br />
                    <p><b>Die postoperative sagittale Imbalance erhöht das Pseudarthrose Risiko nach Lumbalfusion</b>, R Langmantel, V Karantzoulis, R Ebner, F Vazifehdan, Die Wirbelsäule 2017; 01(01): 66-68</p>
                    <br />
                    <p><b>Eine Studie zur optimierten Planung der postoperativen sagittalen Balance in der Behandlung adulter Deformitäten: Einfluss der Flexibilität der thorakalen Kyphose</b>, S Decker, M Mayer, W Hitzl, A Hempfing, L Ernstbrunner, O Meier, H Koller, Die Wirbelsäule 2017; 01(01): 66-68</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"LWS_Spondylodese_versus_Dekompression\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"LWS Spondylodese versus Dekompression\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">LWS Spondylodese versus Dekompression</h4>
                </div>
                <div class=\"modal-body text-justify bullet\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/-9fhkrJKRsQ\"></iframe>
                    </div>
                    <hr />
                    <p>Lurie JD, Tosteson TD, Tosteson A et al. <b>Long-term Outcomes of Lumbar Spinal Stenosis. Eight-Year Results of the Spine Patient Outcomes Research Trial. (SPORT)</b> Spine 2015; 40:63-76</p>
                    <br />
                    <p>Försth P, Olaffson G, Carlsson T et al. <b>A Randomized, Controlled Trial of Fusion Surgery for Lumbar Spinal Stenosis.</b> N Engl J Med 2016; 374; 1413-23</p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"Schmerztherapie_SCS-Sonde\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Schmerztherapie SCS - Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">SCS - Prinzip und Indikationen</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/223158389?title=0&byline=0&portrait=0\"></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"Schmerztherapie_SCS-Sonde2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Schmerztherapie SCS - Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">SCS -Hochfrequenzstimulation HF10</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/313206291?title=0&byline=0&portrait=0\"></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"Chronischer_Schmerz_SCS-Sonde\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Chronischer Schmerz SCS-Sonde\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Chronischer Schmerz SCS-Sonde</h4>
                </div>
                <div class=\"modal-body text-justify\">
                    <div class=\"embed-responsive embed-responsive-16by9\">
                        <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/223161841?title=0&byline=0&portrait=0\"></iframe>
                    </div>
\t\t\t\t\t<hr />
                    <div class=\"embed-responsive embed-responsive-16by9\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/ZGDKf9x-RyI\" class=\"embed-responsive-item\"></iframe>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-neurospine\" data-dismiss=\"modal\">Schließen</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Default/index.html.twig", "/Users/mmueller/Downloads/website_web/templates/Default/index.html.twig");
    }
}
