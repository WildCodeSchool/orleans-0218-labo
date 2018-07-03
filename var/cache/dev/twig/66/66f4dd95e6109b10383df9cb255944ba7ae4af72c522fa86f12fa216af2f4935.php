<?php

/* admin/staff/index.html.twig */
class __TwigTemplate_53991af4bc2102de94baadb8ad774e0ac877f24a879e394dff929e89319b5588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layoutAdmin.html.twig", "admin/staff/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/staff/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/staff/index.html.twig"));

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
        echo "    <section class=\"admin-listing-staff\">
        <div class=\"container-fluid container-title\">
                <h1>Gestion des membres du personnel</h1>
        </div>
        <div class=\"container-fluid\">
            <div class=\"col-xs-6 col-xs-offset-3\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 11
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                        <div class=\"alert alert-danger text-center\" role=\"alert\">
                            ";
                // line 13
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staffMembers"] ?? $this->getContext($context, "staffMembers")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["staffMember"]) {
            // line 36
            echo "                        <tr class=\"admin-listing\">
                            <td class=\"arrow\">
                                ";
            // line 38
            if (($this->getAttribute($context["loop"], "index0", array()) != 0)) {
                // line 39
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("up_order_edit", array("id" => $this->getAttribute($context["staffMember"], "id", array()))), "html", null, true);
                echo "\">
                                        <img src=\"/images/angle-up.svg\" width=\"10\" alt=\"up\"></a>
                                ";
            }
            // line 42
            echo "                            </td>
                            <td class=\"arrow\">
                                ";
            // line 44
            if (($this->getAttribute($context["loop"], "index0", array()) < (twig_length_filter($this->env, ($context["staffMembers"] ?? $this->getContext($context, "staffMembers"))) - 1))) {
                // line 45
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("down_order_edit", array("id" => $this->getAttribute($context["staffMember"], "id", array()))), "html", null, true);
                echo "\">
                                        <img src=\"/images/angle-down.svg\" width=\"10\" alt=\"down\"></a>
                                ";
            }
            // line 48
            echo "                            </td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["staffMember"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["staffMember"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staff_edit", array("id" => $this->getAttribute($context["staffMember"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                            </td>
                            <td class=\"delete\">
                                ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForm"] ?? $this->getContext($context, "deleteForm")), $this->getAttribute($context["staffMember"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                                ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForm"] ?? $this->getContext($context, "deleteForm")), $this->getAttribute($context["staffMember"], "id", array()), array(), "array"), 'form_end');
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staffMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <a role=\"button\" class=\"btn btn-primary\" href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staff_new");
        echo "\">Ajouter un membre</a>
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
        return "admin/staff/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 69,  191 => 64,  173 => 60,  166 => 56,  160 => 53,  154 => 50,  150 => 49,  147 => 48,  140 => 45,  138 => 44,  134 => 42,  127 => 39,  125 => 38,  121 => 36,  104 => 35,  84 => 17,  78 => 16,  69 => 13,  66 => 12,  61 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <section class=\"admin-listing-staff\">
        <div class=\"container-fluid container-title\">
                <h1>Gestion des membres du personnel</h1>
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

        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for staffMember in staffMembers %}
                        <tr class=\"admin-listing\">
                            <td class=\"arrow\">
                                {% if loop.index0 != 0 %}
                                    <a href=\"{{ path('up_order_edit', { 'id': staffMember.id }) }}\">
                                        <img src=\"/images/angle-up.svg\" width=\"10\" alt=\"up\"></a>
                                {% endif %}
                            </td>
                            <td class=\"arrow\">
                                {% if loop.index0 < (staffMembers|length)-1 %}
                                    <a href=\"{{ path('down_order_edit', { 'id': staffMember.id }) }}\">
                                        <img src=\"/images/angle-down.svg\" width=\"10\" alt=\"down\"></a>
                                {% endif %}
                            </td>
                            <td>{{ staffMember.firstName }}</td>
                            <td>{{ staffMember.lastName }}</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"{{ path('staff_edit', { 'id': staffMember.id }) }}\">Modifier</a>
                            </td>
                            <td class=\"delete\">
                                {{ form_start(deleteForm[staffMember.id]) }}
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                                {{ form_end(deleteForm[staffMember.id]) }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <a role=\"button\" class=\"btn btn-primary\" href=\"{{ path('staff_new') }}\">Ajouter un membre</a>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "admin/staff/index.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/admin/staff/index.html.twig");
    }
}
