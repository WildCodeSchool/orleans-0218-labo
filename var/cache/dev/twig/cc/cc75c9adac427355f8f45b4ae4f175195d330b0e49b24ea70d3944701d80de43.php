<?php

/* reservation/new.html.twig */
class __TwigTemplate_68013c33f7991f985e21c8db5c2d7e61f56287bd436737a3d3e46fc76f9983c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutMain.html.twig", "reservation/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => "form/fields.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/flatpickr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_layout($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 7
        echo "
    <section class=\"container-fluid staff-reservation\">
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-xs-offset-1 col-xs-10\">
                <div class=\"row reservation-infos\">
                    <div class=\"col-sm-3 col-xs-12\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "staff", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reservationStart", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reservationEnd", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "society", array()), 'row');
        echo "
                        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"container-fluid\">
                <div class=\"row reservation-equipment\">
                    <div class=\"col-md-12\">
                        <div class=\"container-button text-center\">
                            <button type=\"button\" id=\"room-button\" class=\"btn btn-danger btn-reservation\">Salles</button>
                            <button type=\"button\" id=\"equipment-button\" class=\"btn btn-danger btn-reservation\">Équipements</button>
                        </div>
                    </div>
                    <div class=\"col-xs-10 col-xs-offset-1 res-col pre-scrollable\">
                        <div class=\"row\">
                            <section id=\"room\">
                                <div class=\"container container-room\">
                                    <div class=\"row\">
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "room", array()), 'row');
        echo "
                                    </div>
                                </div>
                            </section>
                            <div id=\"equipment\">
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reservationEquipments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservationEquipment"]) {
            // line 51
            echo "                                <div class=\"col-sm-3 col-xs-12 text-center\">
                                    <div class=\"equipment\">
                                        <p>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "vars", array()), "value", array()), "equipment", array()), "name", array()), "html", null, true);
            echo "</p>
                                        <img class=\"img-circle\" alt=\"image de l'équipement\"
                                             src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "vars", array()), "value", array()), "equipment", array()), "picture", array()), "html", null, true);
            echo "\"/>
                                        <div class=\"row equipment-btns\">
                                            <div class=\"col-xs-4 row equipment-btns\">
                                                <input type=\"button\" class=\"minus\" value=\"-\"
                                                       data-element=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "quantity", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
                                            </div>
                                            <div class=\"col-xs-4 row equipment-btns text-center\">
                                                ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["reservationEquipment"], 'widget');
            echo "
                                            </div>
                                            <div class=\"col-xs-4 row equipment-btns\">
                                                <input type=\"button\" class=\"plus\" value=\"+\"
                                                       data-element=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "quantity", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservationEquipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\"/>
            </div>
        </div>
        ";
        // line 85
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/reservation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 89,  221 => 88,  208 => 85,  193 => 72,  181 => 66,  174 => 62,  168 => 59,  161 => 55,  156 => 53,  152 => 51,  148 => 50,  140 => 45,  118 => 26,  114 => 25,  108 => 22,  104 => 21,  98 => 18,  94 => 17,  88 => 14,  80 => 9,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  35 => 1,  33 => 2,  11 => 1,);
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
{% form_theme form 'form/fields.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/flatpickr.css') }}\">
{% endblock %}
{% block layout %}

    <section class=\"container-fluid staff-reservation\">
        {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-xs-offset-1 col-xs-10\">
                <div class=\"row reservation-infos\">
                    <div class=\"col-sm-3 col-xs-12\">
                        {{ form_row(form.staff) }}
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        {{ form_row(form.lastName) }}
                        {{ form_row(form.reservationStart) }}
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        {{ form_row(form.firstName) }}
                        {{ form_row(form.reservationEnd) }}
                    </div>
                    <div class=\"col-sm-3 col-xs-12\">
                        {{ form_row(form.society) }}
                        {{ form_row(form.email) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"container-fluid\">
                <div class=\"row reservation-equipment\">
                    <div class=\"col-md-12\">
                        <div class=\"container-button text-center\">
                            <button type=\"button\" id=\"room-button\" class=\"btn btn-danger btn-reservation\">Salles</button>
                            <button type=\"button\" id=\"equipment-button\" class=\"btn btn-danger btn-reservation\">Équipements</button>
                        </div>
                    </div>
                    <div class=\"col-xs-10 col-xs-offset-1 res-col pre-scrollable\">
                        <div class=\"row\">
                            <section id=\"room\">
                                <div class=\"container container-room\">
                                    <div class=\"row\">
                                        {{ form_row(form.room) }}
                                    </div>
                                </div>
                            </section>
                            <div id=\"equipment\">
                            {% for reservationEquipment in form.reservationEquipments %}
                                <div class=\"col-sm-3 col-xs-12 text-center\">
                                    <div class=\"equipment\">
                                        <p>{{ reservationEquipment.vars.value.equipment.name }}</p>
                                        <img class=\"img-circle\" alt=\"image de l'équipement\"
                                             src=\"{{ reservationEquipment.vars.value.equipment.picture }}\"/>
                                        <div class=\"row equipment-btns\">
                                            <div class=\"col-xs-4 row equipment-btns\">
                                                <input type=\"button\" class=\"minus\" value=\"-\"
                                                       data-element=\"{{ reservationEquipment.quantity.vars.id }}\"/>
                                            </div>
                                            <div class=\"col-xs-4 row equipment-btns text-center\">
                                                {{ form_widget(reservationEquipment) }}
                                            </div>
                                            <div class=\"col-xs-4 row equipment-btns\">
                                                <input type=\"button\" class=\"plus\" value=\"+\"
                                                       data-element=\"{{ reservationEquipment.quantity.vars.id }}\"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12 text-center\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Valider\"/>
            </div>
        </div>
        {{ form_end(form) }}
    </section>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('build/reservation.js') }}\"></script>
{% endblock %}", "reservation/new.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/reservation/new.html.twig");
    }
}
