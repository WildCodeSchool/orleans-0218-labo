<?php

/* admin/equipment/index.html.twig */
class __TwigTemplate_5ba93d74bfdc8f67e92371c63d2edc1ab0e47a0e1832134c321599599264980a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layoutAdmin.html.twig", "admin/equipment/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/equipment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/equipment/index.html.twig"));

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
        echo "
    <section class=\"admin-listing-room\">
        <div class=\"container-fluid container-title text-center\">
            <h1>Gestion des équipements</h1>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipments"] ?? $this->getContext($context, "equipments")));
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 15
            echo "                        <tr class=\"admin-listing\">

                            <td class=\"name\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipment"], "name", array()), "html", null, true);
            echo "</td>

                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-primary\"
                                   href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_show", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
                            </td>

                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_edit", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                            </td>

                            <td class=\"delete\">
                                ";
            // line 30
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["delete_forms"] ?? $this->getContext($context, "delete_forms")), $this->getAttribute($context["equipment"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i>
                                    Supprimer
                                </button>
                                ";
            // line 35
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["delete_forms"] ?? $this->getContext($context, "delete_forms")), $this->getAttribute($context["equipment"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </tbody>
                </table>

                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <a role=\"button\" class=\"btn btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_new");
        echo "\">
                            Ajouter un équipement</a>
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
        return "admin/equipment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  109 => 39,  99 => 35,  91 => 30,  84 => 26,  76 => 21,  69 => 17,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"container-fluid container-title text-center\">
            <h1>Gestion des équipements</h1>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    {% for equipment in equipments %}
                        <tr class=\"admin-listing\">

                            <td class=\"name\">{{ equipment.name }}</td>

                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-primary\"
                                   href=\"{{ path('equipment_show', { 'id': equipment.id }) }}\">Détails</a>
                            </td>

                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"{{ path('equipment_edit', { 'id': equipment.id }) }}\">Modifier</a>
                            </td>

                            <td class=\"delete\">
                                {{ form_start(delete_forms[equipment.id]) }}
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i>
                                    Supprimer
                                </button>
                                {{ form_end(delete_forms[equipment.id]) }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <a role=\"button\" class=\"btn btn-primary\" href=\"{{ path('equipment_new') }}\">
                            Ajouter un équipement</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}

", "admin/equipment/index.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/admin/equipment/index.html.twig");
    }
}
