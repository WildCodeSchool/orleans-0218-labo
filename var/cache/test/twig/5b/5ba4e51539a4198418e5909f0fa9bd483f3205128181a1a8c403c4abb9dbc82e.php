<?php

/* admin/navbar.html.twig */
class __TwigTemplate_d0f1431a296a59aaaa63974b33d5f5dfa7722c78996c7740a93de706eb706905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "    <nav class=\"navbar navbar-default admin-nav\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"/images/lab-o-logo.png\" alt=\"Logo du lab'O\">
                </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-container\">
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("equipment_index");
        echo "\"><span class=\"white\"> Équipements </span>
                            <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("room_index");
        echo "\"><span class=\"white\"> Salles </span></a></li>
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("staff_index");
        echo "\"><span class=\"white\"> Personnel </span></a></li>
                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 13,  55 => 11,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block navbar %}
    <nav class=\"navbar navbar-default admin-nav\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"/images/lab-o-logo.png\" alt=\"Logo du lab'O\">
                </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-container\">
                    <li><a href=\"{{ path(\"equipment_index\") }}\"><span class=\"white\"> Équipements </span>
                            <span class=\"sr-only\">(current)</span></a></li>
                    <li><a href=\"{{ path(\"room_index\") }}\"><span class=\"white\"> Salles </span></a></li>
                    <li><a href=\"{{ path(\"staff_index\") }}\"><span class=\"white\"> Personnel </span></a></li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}", "admin/navbar.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/admin/navbar.html.twig");
    }
}
