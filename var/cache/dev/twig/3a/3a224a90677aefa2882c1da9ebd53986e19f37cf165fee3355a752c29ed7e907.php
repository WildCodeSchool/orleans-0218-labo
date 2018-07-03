<?php

/* reservation/index.html.twig */
class __TwigTemplate_ce1f1f3c0c1aa30bb41dc5614baa8e370547d6c0cdecd13555ee8d37cd0edf20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutMain.html.twig", "reservation/index.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layoutMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

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
        echo "    <section class=\"admin-listing-room\">
    <div class=\"container-fluid container-title text-center\">
        <div class=\"col-xs-8 col-xs-offset-2\">
            <h1>Liste des réservations</h1>
        </div>
        <div class=\"col-xs-2\">
            <a class=\"btn btn-warning\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_archive");
        echo "\">Archive</a>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th class=\"text-center\">Accueil</th>
                    <th class=\"text-center\">Société</th>
                    <th class=\"text-center\">Nom / Prénom du client</th>
                    <th class=\"text-center\">Salle</th>
                    <th class=\"text-center\">Date de pret</th>
                    <th class=\"text-center\">Date de retour</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 28
            echo "                    <tr class=\"admin-listing\">
                        <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "staff", array()), "lastname", array()), "html", null, true);
            echo "
                            - ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "staff", array()), "firstname", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "society", array()), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "lastName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "firstName", array()), "html", null, true);
            echo "</td>

                        ";
            // line 34
            if ( !(null === $this->getAttribute($context["reservation"], "room", array()))) {
                // line 35
                echo "                            <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "room", array()), "name", array()), "html", null, true);
                echo "</td>
                        ";
            } else {
                // line 37
                echo "                            <td class=\"text-center\"></td>
                        ";
            }
            // line 39
            echo "
                        <td class=\"text-center\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "reservationStart", array()), "date", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "reservationEnd", array()), "date", array()), "d/m/Y H:i"), "html", null, true);
            echo "</td>

                        <td class=\"edit\">
                            <a role=\"button\" class=\"btn btn-warning\"
                               href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_details", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Details</a>
                        </td>

                        <td class=\"edit\">
                            <a role=\"button\" class=\"btn btn-warning\"
                               href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_restitution", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Restitution</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 54,  137 => 50,  129 => 45,  122 => 41,  118 => 40,  115 => 39,  111 => 37,  105 => 35,  103 => 34,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  81 => 28,  77 => 27,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"admin-listing-room\">
    <div class=\"container-fluid container-title text-center\">
        <div class=\"col-xs-8 col-xs-offset-2\">
            <h1>Liste des réservations</h1>
        </div>
        <div class=\"col-xs-2\">
            <a class=\"btn btn-warning\" href=\"{{ path('reservation_archive')}}\">Archive</a>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th class=\"text-center\">Accueil</th>
                    <th class=\"text-center\">Société</th>
                    <th class=\"text-center\">Nom / Prénom du client</th>
                    <th class=\"text-center\">Salle</th>
                    <th class=\"text-center\">Date de pret</th>
                    <th class=\"text-center\">Date de retour</th>
                </tr>
                </thead>
                <tbody>
                {% for reservation in reservations %}
                    <tr class=\"admin-listing\">
                        <td class=\"text-center\">{{ reservation.staff.lastname }}
                            - {{ reservation.staff.firstname }}</td>
                        <td class=\"text-center\">{{ reservation.society }}</td>
                        <td class=\"text-center\">{{ reservation.lastName }} - {{ reservation.firstName }}</td>

                        {% if reservation.room is not null %}
                            <td class=\"text-center\">{{ reservation.room.name }}</td>
                        {% else %}
                            <td class=\"text-center\"></td>
                        {% endif %}

                        <td class=\"text-center\">{{ reservation.reservationStart.date|date('d/m/Y H:i') }}</td>
                        <td class=\"text-center\">{{ reservation.reservationEnd.date|date('d/m/Y H:i') }}</td>

                        <td class=\"edit\">
                            <a role=\"button\" class=\"btn btn-warning\"
                               href=\"{{ path('reservation_details', { 'id': reservation.id }) }}\">Details</a>
                        </td>

                        <td class=\"edit\">
                            <a role=\"button\" class=\"btn btn-warning\"
                               href=\"{{ path('reservation_restitution', { 'id': reservation.id }) }}\">Restitution</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}

", "reservation/index.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/reservation/index.html.twig");
    }
}
