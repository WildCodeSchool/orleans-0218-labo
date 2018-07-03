<?php

/* reservation/show.html.twig */
class __TwigTemplate_9587049d1cc80d32edf75b7c097121b6a6904476c09abfce7f44d4cd9ee8ebae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutMain.html.twig", "reservation/show.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_layout($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 4
        echo "    <section class=\"container-fluid \">
        <div class=\"row details-reservation\">
            <div class=\"col-xs-12\">
                <div class=\"row container-title text-center\">
                    <div class=\"col-xs-12\">
                        <h1>Détails de la Reservation</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-10 col-xs-offset-1\">
                        <div class=\"row vertical-align\">
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4> Responsable de l'accueil
                                    : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "staff", array()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "staff", array()), "lastName", array()), "html", null, true);
        echo "</h4>
                                <h4>Date de retour : ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "reservationEnd", array()), "date", array()), "d-m-Y H:i"), "html", null, true);
        echo " </h4>
                            </div>
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                ";
        // line 21
        if ( !(null === $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "room", array()))) {
            // line 22
            echo "                                <h4>Salle séléctionnée : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "room", array()), "name", array()), "html", null, true);
            echo " </h4>
                                ";
        }
        // line 24
        echo "                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Clé remise</p>
                                    </div>
                                </div>
                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Double des clés</p>
                                    </div>
                                </div>
                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Formation SSI</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4>Matériel réservé </h4>
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Equipement</th>
                                        <th>Quantité</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "reservationEquipments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 60
            echo "                                        ";
            if (($this->getAttribute($context["equipment"], "quantity", array()) > 0)) {
                // line 61
                echo "                                            <tr>
                                                <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["equipment"], "equipment", array()), "name", array()), "html", null, true);
                echo "</th>
                                                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["equipment"], "quantity", array()), "html", null, true);
                echo "</th>
                                            </tr>
                                        ";
            }
            // line 66
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row \">
                    <div class=\"col-xs-10 col-xs-offset-1\">
                        <div class=\"row vertical-align\">
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4>Société : ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "society", array()), "html", null, true);
        echo "</h4>
                                <h4>Nom : ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "lastName", array()), "html", null, true);
        echo "</h4>
                                <h4>Prénom : ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "firstName", array()), "html", null, true);
        echo "</h4>
                                <h4>Email : ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "email", array()), "html", null, true);
        echo "</h4>
                                <h4>Date : ";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "reservationStart", array()), "date", array()), "d-m-Y H:i"), "html", null, true);
        echo "</h4>
                            </div>
                            <div class=\"col-xs-12 col-md-8 details-col\" id=\"canvas\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container-fluid detail-btn\">
        <div class=\"row row-btn\">
            <div class=\"col-xs-12 col-md-2 col-md-offset-4 text-center\">
                <a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_new");
        echo "\"><button type=\"button\" class=\"btn btn-home\">Retour</button></a>
            </div>
            <div class=\"col-xs-12 col-md-2 text-center\">
                ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <button type=\"submit\" id=\"submit\" class=\"btn btn-home\">Envoyer</button>
                ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/signature.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 107,  223 => 106,  208 => 101,  203 => 99,  199 => 98,  193 => 95,  176 => 81,  172 => 80,  168 => 79,  164 => 78,  160 => 77,  148 => 67,  142 => 66,  136 => 63,  132 => 62,  129 => 61,  126 => 60,  122 => 59,  85 => 24,  79 => 22,  77 => 21,  71 => 18,  65 => 17,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layoutMain.html.twig' %}

{% block layout %}
    <section class=\"container-fluid \">
        <div class=\"row details-reservation\">
            <div class=\"col-xs-12\">
                <div class=\"row container-title text-center\">
                    <div class=\"col-xs-12\">
                        <h1>Détails de la Reservation</h1>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-10 col-xs-offset-1\">
                        <div class=\"row vertical-align\">
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4> Responsable de l'accueil
                                    : {{ reservation.staff.firstName }} {{ reservation.staff.lastName }}</h4>
                                <h4>Date de retour : {{ reservation.reservationEnd.date | date('d-m-Y H:i') }} </h4>
                            </div>
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                {% if reservation.room is not null %}
                                <h4>Salle séléctionnée : {{ reservation.room.name }} </h4>
                                {% endif %}
                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Clé remise</p>
                                    </div>
                                </div>
                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Double des clés</p>
                                    </div>
                                </div>
                                <div class=\"row vertical-align\">
                                    <div class=\"col-xs-1\">
                                        <img src=\"/images/check-circle.svg\" alt=\"checkbox\" class=\"icon\">
                                    </div>
                                    <div class=\"col-xs-11\">
                                        <p>Formation SSI</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4>Matériel réservé </h4>
                                <table class=\"table\">
                                    <thead>
                                    <tr>
                                        <th>Equipement</th>
                                        <th>Quantité</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for equipment in reservation.reservationEquipments %}
                                        {% if (equipment.quantity > 0) %}
                                            <tr>
                                                <th>{{ equipment.equipment.name }}</th>
                                                <th>{{ equipment.quantity }}</th>
                                            </tr>
                                        {% endif %}
                                    {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row \">
                    <div class=\"col-xs-10 col-xs-offset-1\">
                        <div class=\"row vertical-align\">
                            <div class=\"col-xs-12 col-md-4 details-col\">
                                <h4>Société : {{ reservation.society }}</h4>
                                <h4>Nom : {{ reservation.lastName }}</h4>
                                <h4>Prénom : {{ reservation.firstName }}</h4>
                                <h4>Email : {{ reservation.email }}</h4>
                                <h4>Date : {{ reservation.reservationStart.date | date('d-m-Y H:i') }}</h4>
                            </div>
                            <div class=\"col-xs-12 col-md-8 details-col\" id=\"canvas\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container-fluid detail-btn\">
        <div class=\"row row-btn\">
            <div class=\"col-xs-12 col-md-2 col-md-offset-4 text-center\">
                <a href=\"{{ path('reservation_new') }}\"><button type=\"button\" class=\"btn btn-home\">Retour</button></a>
            </div>
            <div class=\"col-xs-12 col-md-2 text-center\">
                {{ form_start(form) }}
                {{ form_widget(form) }}
                <button type=\"submit\" id=\"submit\" class=\"btn btn-home\">Envoyer</button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('build/signature.js') }}\"></script>
{% endblock %}", "reservation/show.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/reservation/show.html.twig");
    }
}
