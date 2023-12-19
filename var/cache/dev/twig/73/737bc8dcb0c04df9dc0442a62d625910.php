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

/* Service/index.html.twig */
class __TwigTemplate_0388f60ef04a1dcd70b96110826dc621 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Service/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Service/index.html.twig", 1);
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service.jpg"), "html", null, true);
        echo "')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
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
                        <h2 class=\"section_header text-uppercase text-center\">Ganzheitliche Betreuung</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                <p>Etwa 90% aller Patienten meiner Neurochirurgischen Facharztpraxis müssen nicht operiert werden, denn es gibt hochmoderne und schonende Verfahren für jedes spezielle Problem im Bereich Hals – Brust – Lendenwirbelsäule, welche eine Operation oftmals vermeiden können.</p>
                                <p>Ganzheitliche Betreuung heißt auch: wir kümmern uns um Ursachen und Störfelder ausserhalb der Wirbelsäule, denn die Analyse und die Korrektur von Körperhaltung, Optimierung des Körperlots wie auch die Reduktion von Übergewicht entlasten große Gelenke – und helfen damit ihrer Wirbelsäule oft nachhaltiger als eine vorschnelle Operation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"timeline-centered layer\">

                    <article class=\"timeline-entry\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Erstgespräch</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec0\">
                                <i class=\"entypo-feather\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>...wenn es auf eine exakte Diagnose ankommt:</h5>
                                <h2 class=\"section_header text-uppercase\">Diagnostik</h2>
                                
                                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/diagnostik.jpg"), "html", null, true);
        echo "\" alt=\"Diagnostik\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Untersuchung, Diagnostik und Beratung neurochirurgischer Erkrankungen</p>
                                    <p>Differentialdiagnose und Elektrophysiologische Diagnostik (EMG/ENG/SSEP/MEP/FAEP) bei neurologischen Erkrankungen</p>
                                    <p>präoperative invasive Diagnostik / Myelographie</p>
                                    <p>Aufklärung, Feststellung Grundproblem, Beratung</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_diagnostik");
        echo "\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry left-aligned\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 1</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec1\">
                                <i class=\"entypo-suitcase\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>...wenn NICHTS tun zu wenig und Operieren zu viel ist:</h5>
                                <h2 class=\"section_header text-uppercase\">Konservative Therapie</h2>
                                
                                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/konservative-therapie.jpg"), "html", null, true);
        echo "\" alt=\"Konservative Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Optimierung und Korrektur von Körperhaltung, Körperachsen</p>
                                    <p>Gezielte Kräftigung der Muskulatur , der natürlichen Stütze ihrer Wirbelsäule</p>
                                    <p>individuelle Physiotherapie / Anleitung zur Selbsthilfe im Einzeltraining/ ganzheitliche</p>
                                    <p>Einleitung Multimodaler Schmerztherapie bei chronischen, multiplen Schmerzursachen</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_konservativetherapie");
        echo "\">Mehr erfahren »</a></button>
                                    <button class=\"btn btn-neurospine\"><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_stosswellentherapie");
        echo "\">Zur Stoßwellentherapie »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>

                    <article class=\"timeline-entry\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 2</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec2\">
                                <i class=\"entypo-feather\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>….wenn Präzision und zielpunktgenaue Wirkung gefragt ist:</h5>
                                <h2 class=\"section_header text-uppercase\">Minimalinvasive Therapie</h2>
                                
                                <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/minimalinvasive-therapie.jpg"), "html", null, true);
        echo "\" alt=\"Minimalinvasive Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <div>2. spezielle Schmerztherapie</div>
                                    <p>CT – gestützte periradikuläre Therapie (CT-PRT)</p>
                                    <p>CT – gestützte Facetttenblockaden (CT-FB)</p>
                                    <p>Epidurale Injektionen, Radiofrequenztherapie</p>
                                    <p>Neuromodulation / SCS –Schmerzsonden</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_minimalinvasivetherapie");
        echo "\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry left-aligned\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 3</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i><br />Nachbehandlung</span></div>

                            <div class=\"timeline-icon bg-sec3\">
                                <i class=\"entypo-suitcase\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>... unsere Kernkompetenz:</h5>
                                <h2 class=\"section_header text-uppercase\">Operative Therapie/ Mikrochirurgie</h2>
                                
                                <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service/operative-therapie.jpg"), "html", null, true);
        echo "\" alt=\"Operative Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Mikrochirurgische Eingriffe bei Erkrankungen der Bandscheibe, Wirbelgelenke und Spinalkanal</p>
                                    <p>Tumore und Metastasen an Wirbelsäule und peripheren Nerven</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("service_operativetherapie");
        echo "\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry begin\">

                        <div class=\"timeline-entry-inner\">

                            <div class=\"timeline-icon\" style=\"-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);\">
                                <i class=\"entypo-flight\"></i>
                            </div>

                        </div>

                    </article>

                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div style=\"background: #f9f1e4; padding-top: 10vh;\" class=\"layer\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-md-offset-3\">
                                    <h2 class=\"section_header text-uppercase text-center\">Service</h2>
                                    <p>Sie sind mit jedem Anliegen bei uns richtig. Auch, wenn sich herausstellt, dass ihre gesundheitlichen Einschränkungen einem anderen Fachgebiet, als dem der Neurochirurgie zugeordnet sind, vermitteln wir Sie zu dem jeweiligen Spezialisten. Sie auf dem Weg der Beseitigung ihrer Beschwerden einen Schritt weiter zu bringen, ist unser Anspruch.</p>
                                    <p>Für unsere Patienten kümmern wir uns deshalb bei einer Überweisung  um notwendige Anschlusstermine bei anderen Fachärzten und Termine in Kliniken. Service, wie wir ihn verstehen.</p>
                                </div>
                            </div>
                        </div>
                        
                            <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/service-2.jpg"), "html", null, true);
        echo "\" />
                        
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
        return "Service/index.html.twig";
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
        return array (  287 => 191,  247 => 154,  237 => 147,  213 => 126,  200 => 116,  177 => 96,  173 => 95,  161 => 86,  137 => 65,  125 => 56,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div id=\"service\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <div class=\"header-cover-img big\" style=\"background-image: url('{{ asset(\"assets/img/service.jpg\") }}')\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
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
                        <h2 class=\"section_header text-uppercase text-center\">Ganzheitliche Betreuung</h2>
                        <div class=\"row\">
                            <div class=\"col-md-8 col-md-offset-2\">
                                <p>Etwa 90% aller Patienten meiner Neurochirurgischen Facharztpraxis müssen nicht operiert werden, denn es gibt hochmoderne und schonende Verfahren für jedes spezielle Problem im Bereich Hals – Brust – Lendenwirbelsäule, welche eine Operation oftmals vermeiden können.</p>
                                <p>Ganzheitliche Betreuung heißt auch: wir kümmern uns um Ursachen und Störfelder ausserhalb der Wirbelsäule, denn die Analyse und die Korrektur von Körperhaltung, Optimierung des Körperlots wie auch die Reduktion von Übergewicht entlasten große Gelenke – und helfen damit ihrer Wirbelsäule oft nachhaltiger als eine vorschnelle Operation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"timeline-centered layer\">

                    <article class=\"timeline-entry\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Erstgespräch</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec0\">
                                <i class=\"entypo-feather\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>...wenn es auf eine exakte Diagnose ankommt:</h5>
                                <h2 class=\"section_header text-uppercase\">Diagnostik</h2>
                                
                                <img src=\"{{ asset(\"assets/img/service/diagnostik.jpg\") }}\" alt=\"Diagnostik\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Untersuchung, Diagnostik und Beratung neurochirurgischer Erkrankungen</p>
                                    <p>Differentialdiagnose und Elektrophysiologische Diagnostik (EMG/ENG/SSEP/MEP/FAEP) bei neurologischen Erkrankungen</p>
                                    <p>präoperative invasive Diagnostik / Myelographie</p>
                                    <p>Aufklärung, Feststellung Grundproblem, Beratung</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"{{ path('service_diagnostik') }}\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry left-aligned\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 1</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec1\">
                                <i class=\"entypo-suitcase\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>...wenn NICHTS tun zu wenig und Operieren zu viel ist:</h5>
                                <h2 class=\"section_header text-uppercase\">Konservative Therapie</h2>
                                
                                <img src=\"{{ asset(\"assets/img/service/konservative-therapie.jpg\") }}\" alt=\"Konservative Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Optimierung und Korrektur von Körperhaltung, Körperachsen</p>
                                    <p>Gezielte Kräftigung der Muskulatur , der natürlichen Stütze ihrer Wirbelsäule</p>
                                    <p>individuelle Physiotherapie / Anleitung zur Selbsthilfe im Einzeltraining/ ganzheitliche</p>
                                    <p>Einleitung Multimodaler Schmerztherapie bei chronischen, multiplen Schmerzursachen</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"{{ path('service_konservativetherapie') }}\">Mehr erfahren »</a></button>
                                    <button class=\"btn btn-neurospine\"><a href=\"{{ path('service_stosswellentherapie') }}\">Zur Stoßwellentherapie »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>

                    <article class=\"timeline-entry\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 2</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i></span></div>

                            <div class=\"timeline-icon bg-sec2\">
                                <i class=\"entypo-feather\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>….wenn Präzision und zielpunktgenaue Wirkung gefragt ist:</h5>
                                <h2 class=\"section_header text-uppercase\">Minimalinvasive Therapie</h2>
                                
                                <img src=\"{{ asset(\"assets/img/service/minimalinvasive-therapie.jpg\") }}\" alt=\"Minimalinvasive Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <div>2. spezielle Schmerztherapie</div>
                                    <p>CT – gestützte periradikuläre Therapie (CT-PRT)</p>
                                    <p>CT – gestützte Facetttenblockaden (CT-FB)</p>
                                    <p>Epidurale Injektionen, Radiofrequenztherapie</p>
                                    <p>Neuromodulation / SCS –Schmerzsonden</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"{{ path('service_minimalinvasivetherapie') }}\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry left-aligned\">

                        <div class=\"timeline-entry-inner\">
                            <div class=\"timeline-time\"><span>Stufe 3</span><span><i class=\"fa fa-arrow-down fa-2x\" aria-hidden=\"true\"></i><br />Nachbehandlung</span></div>

                            <div class=\"timeline-icon bg-sec3\">
                                <i class=\"entypo-suitcase\"></i>
                            </div>

                            <div class=\"timeline-label\">
                                <h5>... unsere Kernkompetenz:</h5>
                                <h2 class=\"section_header text-uppercase\">Operative Therapie/ Mikrochirurgie</h2>
                                
                                <img src=\"{{ asset(\"assets/img/service/operative-therapie.jpg\") }}\" alt=\"Operative Therapie\" />
                                
                                <div class=\"timeline-entry-content\">
                                    <p>Mikrochirurgische Eingriffe bei Erkrankungen der Bandscheibe, Wirbelgelenke und Spinalkanal</p>
                                    <p>Tumore und Metastasen an Wirbelsäule und peripheren Nerven</p>
                                </div>
                                <div class=\"timeline-entry-content\">
                                    <button class=\"btn btn-neurospine\"><a href=\"{{ path('service_operativetherapie') }}\">Mehr erfahren »</a></button>
                                </div>
                            </div>
                        </div>

                    </article>


                    <article class=\"timeline-entry begin\">

                        <div class=\"timeline-entry-inner\">

                            <div class=\"timeline-icon\" style=\"-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);\">
                                <i class=\"entypo-flight\"></i>
                            </div>

                        </div>

                    </article>

                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div style=\"background: #f9f1e4; padding-top: 10vh;\" class=\"layer\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-md-offset-3\">
                                    <h2 class=\"section_header text-uppercase text-center\">Service</h2>
                                    <p>Sie sind mit jedem Anliegen bei uns richtig. Auch, wenn sich herausstellt, dass ihre gesundheitlichen Einschränkungen einem anderen Fachgebiet, als dem der Neurochirurgie zugeordnet sind, vermitteln wir Sie zu dem jeweiligen Spezialisten. Sie auf dem Weg der Beseitigung ihrer Beschwerden einen Schritt weiter zu bringen, ist unser Anspruch.</p>
                                    <p>Für unsere Patienten kümmern wir uns deshalb bei einer Überweisung  um notwendige Anschlusstermine bei anderen Fachärzten und Termine in Kliniken. Service, wie wir ihn verstehen.</p>
                                </div>
                            </div>
                        </div>
                        
                            <img src=\"{{ asset(\"assets/img/service-2.jpg\") }}\" />
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "Service/index.html.twig", "/Users/mmueller/Downloads/website_web/templates/Service/index.html.twig");
    }
}
