<?php

/* admin/equipment/index.html.twig */
class __TwigTemplate_15655931a710de4904c369c6a243392e77866ac275f008d7c970e86551f06d0b extends Twig_Template
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
        <div class=\"container-fluid\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                        <div class=\"alert alert-danger text-center\" role=\"alert\">
                            ";
                // line 15
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>

        <div class=\"container margin-fixed-bottom\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["equipments"] ?? $this->getContext($context, "equipments")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["equipment"]) {
            // line 27
            echo "                        <tr class=\"admin-listing\">
                            <td class=\"arrow\">
                                ";
            // line 29
            if (($this->getAttribute($context["loop"], "index0", array()) != 0)) {
                // line 30
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_up_order_edit", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
                echo "\">
                                        <img src=\"/images/angle-up.svg\" width=\"20\" alt=\"up\" class=\"m-4\"></a>
                                ";
            }
            // line 33
            echo "                            </td>
                            <td class=\"arrow\">
                                ";
            // line 35
            if (($this->getAttribute($context["loop"], "index0", array()) < (twig_length_filter($this->env, ($context["equipments"] ?? $this->getContext($context, "equipments"))) - 1))) {
                // line 36
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_down_order_edit", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
                echo "\">
                                        <img src=\"/images/angle-down.svg\" width=\"20\" alt=\"down\"></a>
                                ";
            }
            // line 39
            echo "                            </td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["equipment"], "name", array()), "html", null, true);
            echo "</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-primary\"
                                   href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_show", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
                            </td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_edit", array("id" => $this->getAttribute($context["equipment"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                            </td>

                            <td class=\"delete\">
                                ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForms"] ?? $this->getContext($context, "deleteForms")), $this->getAttribute($context["equipment"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i>
                                    Supprimer
                                </button>
                                ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForms"] ?? $this->getContext($context, "deleteForms")), $this->getAttribute($context["equipment"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </tbody>
                </table>

                <div class=\"row navbar-fixed-bottom style-fixed-bot\">
                    <div class=\"col-xs-12 text-center\">
                        <a role=\"button\" class=\"btn btn-primary\" href=\"";
        // line 65
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
        return array (  194 => 65,  187 => 60,  169 => 56,  161 => 51,  154 => 47,  147 => 43,  141 => 40,  138 => 39,  131 => 36,  129 => 35,  125 => 33,  118 => 30,  116 => 29,  112 => 27,  95 => 26,  86 => 19,  80 => 18,  71 => 15,  68 => 14,  63 => 13,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"container-fluid\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                {% for label, messages in app.flashes %}
                    {% for message in messages %}
                        <div class=\"alert alert-danger text-center\" role=\"alert\">
                            {{ message }}
                        </div>
                    {% endfor %}
                {% endfor %}
            </div>
        </div>

        <div class=\"container margin-fixed-bottom\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    {% for equipment in equipments %}
                        <tr class=\"admin-listing\">
                            <td class=\"arrow\">
                                {% if loop.index0 != 0 %}
                                    <a href=\"{{ path('equipment_up_order_edit', { 'id': equipment.id }) }}\">
                                        <img src=\"/images/angle-up.svg\" width=\"20\" alt=\"up\" class=\"m-4\"></a>
                                {% endif %}
                            </td>
                            <td class=\"arrow\">
                                {% if loop.index0 < (equipments|length)-1 %}
                                    <a href=\"{{ path('equipment_down_order_edit', { 'id': equipment.id }) }}\">
                                        <img src=\"/images/angle-down.svg\" width=\"20\" alt=\"down\"></a>
                                {% endif %}
                            </td>
                            <td>{{ equipment.name }}</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-primary\"
                                   href=\"{{ path('equipment_show', { 'id': equipment.id }) }}\">Détails</a>
                            </td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"{{ path('equipment_edit', { 'id': equipment.id }) }}\">Modifier</a>
                            </td>

                            <td class=\"delete\">
                                {{ form_start(deleteForms[equipment.id]) }}
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"icon-trash\"></i>
                                    Supprimer
                                </button>
                                {{ form_end(deleteForms[equipment.id]) }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

                <div class=\"row navbar-fixed-bottom style-fixed-bot\">
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
