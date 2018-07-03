<?php

/* reservation/edit.html.twig */
class __TwigTemplate_37d08db81dc93fed55900baa54fcd4c82b9b933f6a41090a35c87b3e05489984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layoutMain.html.twig", "reservation/edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => "form/fields.html.twig"), true);
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
        echo "    <section>
        ";
        // line 68
        echo "
        <section class=\"container-fluid staff-reservation\">
            <h1 class=\"text-center\">Edition de la réservation</h1>
            ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-xs-offset-1 col-xs-10\">
                    <div class=\"row reservation-infos\">
                        <div class=\"col-sm-3 col-xs-12\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "staff", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastName", array()), 'row');
        echo "
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reservationStart", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstName", array()), 'row');
        echo "
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reservationEnd", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "society", array()), 'row');
        echo "
                            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "email", array()), 'row');
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
                                <button type=\"button\" id=\"room-button\" class=\"btn btn-danger btn-reservation\">Salles
                                </button>
                                <button type=\"button\" id=\"equipment-button\" class=\"btn btn-danger btn-reservation\">
                                    Équipements
                                </button>
                            </div>
                        </div>
                        <div class=\"col-xs-10 col-xs-offset-1 res-col pre-scrollable\">
                            <div class=\"row\">
                                <section id=\"room\">
                                    <div class=\"container container-room\">
                                        <div class=\"row\">
                                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "room", array()), 'row');
        echo "
                                        </div>
                                    </div>
                                </section>
                                <div id=\"equipment\">
                                    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "reservationEquipments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservationEquipment"]) {
            // line 116
            echo "                                        <div class=\"col-sm-3 col-xs-12 text-center\">
                                            <div class=\"equipment\">
                                                <p>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "vars", array()), "value", array()), "equipment", array()), "name", array()), "html", null, true);
            echo "</p>
                                                <img class=\"img-circle\" alt=\"image de l'équipement\"
                                                     src=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "vars", array()), "value", array()), "equipment", array()), "picture", array()), "html", null, true);
            echo "\"/>
                                                <div class=\"row equipment-btns\">
                                                    <div class=\"col-xs-4 row equipment-btns\">
                                                        <input type=\"button\" class=\"minus\" value=\"-\"
                                                               data-element=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservationEquipment"], "quantity", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
                                                    </div>
                                                    <div class=\"col-xs-4 row equipment-btns text-center\">
                                                        ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["reservationEquipment"], 'widget');
            echo "
                                                    </div>
                                                    <div class=\"col-xs-4 row equipment-btns\">
                                                        <input type=\"button\" class=\"plus\" value=\"+\"
                                                               data-element=\"";
            // line 131
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
        // line 137
        echo "                                </div>
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
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
        </section>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/reservation.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reservation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 155,  229 => 154,  215 => 150,  200 => 137,  188 => 131,  181 => 127,  175 => 124,  168 => 120,  163 => 118,  159 => 116,  155 => 115,  147 => 110,  122 => 88,  118 => 87,  112 => 84,  108 => 83,  102 => 80,  98 => 79,  92 => 76,  84 => 71,  79 => 68,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  35 => 1,  33 => 2,  11 => 1,);
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
{% form_theme edit_form 'form/fields.html.twig' %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('build/flatpickr.css') }}\">
{% endblock %}
{% block layout %}
    <section>
        {#<div class=\"container-fluid container-title text-center height-titre\">
            <h1>Edition de la réservation</h1>
        </div>
        <div class=\"container\">
            {{ form_start(edit_form) }}
            <div class=\"row\">
                <div class=\"col-xs-2\">
                    {{ form_row(edit_form.staff) }}
                </div>
                <div class=\"col-xs-3 col-xs-offset-1\">
                    {{ form_row(edit_form.lastName) }}
                </div>
                <div class=\"col-xs-3\">
                    {{ form_row(edit_form.firstName) }}
                </div>
                <div class=\"col-xs-3\">
                    {{ form_row(edit_form.society) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-3 col-xs-offset-3\">
                    {{ form_row(edit_form.reservationStart)}}
                </div>
                <div class=\"col-xs-3\">
                    {{ form_row(edit_form.reservationEnd)  }}
                </div>
                <div class=\"col-xs-3\">
                    {{ form_row(edit_form.email) }}
                </div>
            </div>

            <div class=\"row\" >
                <div class=\"col-xs-12 separator-border\">
                    {{ form_row(edit_form.room) }}
                </div>
            </div>


            <div class=\"row separator-border margin-fixed-bottom\">
                {% for reservationEquipment in edit_form.reservationEquipments %}
                <div class=\"col-xs-2 col-xs-offset-1\">
                    {{ form_row(reservationEquipment, { 'label': reservationEquipment.vars.value.equipment.name })}}
                </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"container-fluid navbar-fixed-bottom style-fixed-bot\">
            <div class=\"row\">
                <div class=\"col-xs-2 col-xs-offset-2\">
                    <a href=\"{{ path('reservation_index') }}\">
                        <img src=\"/images/arrow-circle-left.svg\" class = \"icon\"
                             alt=\"retour en arrière\"></a>
                </div>
                <div class=\"col-xs-2 col-xs-offset-6\">
                    <input role=\"button\" class=\"btn btn-warning widhtButton\"
                           type=\"submit\" value=\"Edit\" />
                    {{ form_end(edit_form) }}
                </div>
            </div>
        </div>#}

        <section class=\"container-fluid staff-reservation\">
            <h1 class=\"text-center\">Edition de la réservation</h1>
            {{ form_start(edit_form) }}
            <div class=\"row\">
                <div class=\"col-xs-offset-1 col-xs-10\">
                    <div class=\"row reservation-infos\">
                        <div class=\"col-sm-3 col-xs-12\">
                            {{ form_row(edit_form.staff) }}
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            {{ form_row(edit_form.lastName) }}
                            {{ form_row(edit_form.reservationStart) }}
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            {{ form_row(edit_form.firstName) }}
                            {{ form_row(edit_form.reservationEnd) }}
                        </div>
                        <div class=\"col-sm-3 col-xs-12\">
                            {{ form_row(edit_form.society) }}
                            {{ form_row(edit_form.email) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"container-fluid\">
                    <div class=\"row reservation-equipment\">
                        <div class=\"col-md-12\">
                            <div class=\"container-button text-center\">
                                <button type=\"button\" id=\"room-button\" class=\"btn btn-danger btn-reservation\">Salles
                                </button>
                                <button type=\"button\" id=\"equipment-button\" class=\"btn btn-danger btn-reservation\">
                                    Équipements
                                </button>
                            </div>
                        </div>
                        <div class=\"col-xs-10 col-xs-offset-1 res-col pre-scrollable\">
                            <div class=\"row\">
                                <section id=\"room\">
                                    <div class=\"container container-room\">
                                        <div class=\"row\">
                                            {{ form_row(edit_form.room) }}
                                        </div>
                                    </div>
                                </section>
                                <div id=\"equipment\">
                                    {% for reservationEquipment in edit_form.reservationEquipments %}
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
            {{ form_end(edit_form) }}
        </section>
    </section>
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('build/reservation.js') }}\"></script>
{% endblock %}", "reservation/edit.html.twig", "/home/wilder19/Documents/projets/projet3/orleans-0218-labo/app/Resources/views/reservation/edit.html.twig");
    }
}
