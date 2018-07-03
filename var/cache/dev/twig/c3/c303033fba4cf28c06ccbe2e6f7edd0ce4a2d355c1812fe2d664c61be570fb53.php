<?php

/* admin/room/index.html.twig */
class __TwigTemplate_cbf202c12ad34e6e595b028ee6e7251e71900bb2ceb7310a84debd9373d011f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layoutAdmin.html.twig", "admin/room/index.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/room/index.html.twig"));

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
        <div class=\"container-fluid container-title\">
            <h1>Gestion des salles</h1>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Nom de la salle</th>
                        <th class=\"text-center\">Double</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rooms"] ?? $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 21
            echo "                        <tr class=\"admin-listing\">
                            <td class=\"name\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "name", array()), "html", null, true);
            echo "</td>
                            <td class=\"double text-center\"> ";
            // line 23
            if (($this->getAttribute($context["room"], "doors", array()) == 1)) {
                echo " <i
                                        class=\"fas fa-check\"></i> ";
            }
            // line 24
            echo "</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_edit", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                            </td>
                            <td class=\"delete\">
                                <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_delete", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["delete_forms"] ?? $this->getContext($context, "delete_forms")), $this->getAttribute($context["room"], "id", array()), array(), "array"), 'widget');
            echo "
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"icon-trash\"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <a role=\"button\" class=\"btn btn-primary\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_new");
        echo "\">Ajouter une salle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  114 => 41,  99 => 32,  94 => 30,  88 => 27,  83 => 24,  78 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'admin/layoutAdmin.html.twig' %}

{% block layout %}
    <section class=\"admin-listing-room\">
        <div class=\"container-fluid container-title\">
            <h1>Gestion des salles</h1>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>Nom de la salle</th>
                        <th class=\"text-center\">Double</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for room in rooms %}
                        <tr class=\"admin-listing\">
                            <td class=\"name\">{{ room.name }}</td>
                            <td class=\"double text-center\"> {% if room.doors == 1 %} <i
                                        class=\"fas fa-check\"></i> {% endif %}</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"{{ path('room_edit', { 'id': room.id }) }}\">Modifier</a>
                            </td>
                            <td class=\"delete\">
                                <form action=\"{{ path('room_delete', { 'id': room.id }) }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
                                    {{ form_widget(delete_forms[room.id]) }}
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"icon-trash\"></i>
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <a role=\"button\" class=\"btn btn-primary\" href=\"{{ path('room_new') }}\">Ajouter une salle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "admin/room/index.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/admin/room/index.html.twig");
    }
}
