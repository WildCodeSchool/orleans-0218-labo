<?php

/* admin/staff/index.html.twig */
class __TwigTemplate_ebd8a674c1945b6ee0035ad216c09d7f538926ac86c489ee7fa48906588627a7 extends Twig_Template
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
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    <tr class=\"admin-listing\">
                        <th class=\"name\">Prénom</th>
                        <th colspan=3 class=\"name\">Nom</th>
                    </tr>
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["staffMembers"] ?? $this->getContext($context, "staffMembers")));
        foreach ($context['_seq'] as $context["_key"] => $context["staffMember"]) {
            // line 17
            echo "                        <tr class=\"admin-listing\">
                            <td class=\"name\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["staffMember"], "firstName", array()), "html", null, true);
            echo "</td>
                            <td class=\"name\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["staffMember"], "lastName", array()), "html", null, true);
            echo "</td>
                            <td class=\"edit\">
                                <a role=\"button\" class=\"btn btn-warning\"
                                   href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staff_edit", array("id" => $this->getAttribute($context["staffMember"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
                            </td>
                            <td class=\"delete\">
                                ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForm"] ?? $this->getContext($context, "deleteForm")), $this->getAttribute($context["staffMember"], "id", array()), array(), "array"), 'form_start');
            echo "
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    Supprimer
                                </button>
                                ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($this->getAttribute(($context["deleteForm"] ?? $this->getContext($context, "deleteForm")), $this->getAttribute($context["staffMember"], "id", array()), array(), "array"), 'form_end');
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['staffMember'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-12 text-center\">
                    <a role=\"button\" class=\"btn btn-primary\" href=\"";
        // line 38
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
        return array (  110 => 38,  103 => 33,  93 => 29,  86 => 25,  80 => 22,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"container\">
            <div class=\"row\">
                <table class=\"table\">
                    <tbody>
                    <tr class=\"admin-listing\">
                        <th class=\"name\">Prénom</th>
                        <th colspan=3 class=\"name\">Nom</th>
                    </tr>
                    {% for staffMember in staffMembers %}
                        <tr class=\"admin-listing\">
                            <td class=\"name\">{{ staffMember.firstName }}</td>
                            <td class=\"name\">{{ staffMember.lastName }}</td>
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
