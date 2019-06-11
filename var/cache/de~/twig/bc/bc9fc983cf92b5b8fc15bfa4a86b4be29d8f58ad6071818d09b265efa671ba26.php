<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* subasta/new.html.twig */
class __TwigTemplate_77e5956bd540a65f639530d46b34cf5c6d9760469f48daab5ae73108b26fbe76 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/new.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "subasta/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            var weekpicker = \$(\"#weekpicker1\").weekpicker();

            \$('#appbundle_subasta_semanaReserva').val(weekpicker.getWeek());
            \$('#appbundle_subasta_anioReserva').val(weekpicker.getYear());

            var inputField = weekpicker.find(\"input\");
            inputField.datetimepicker().on(\"dp.change\", function() {

                \$('#appbundle_subasta_semanaReserva').val(weekpicker.getWeek());
                \$('#appbundle_subasta_anioReserva').val(weekpicker.getYear());
            })


        //************  AUTOCOMPLETE PROPIEDAD ********************
            \$(\"#appbundle_subasta_propiedadP\").autocomplete({
                source: \"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_autocomplete");
        echo "\",
                minLength: 3,
                autoFocus: true,
                select: function( event, ui ) {
                    \$(\"#appbundle_subasta_propiedad\").val( ui.item.codigo );
                }
            });
            \$(\"#appbundle_subasta_propiedadP\").on('focusin', function(event) {
                \$(\"#appbundle_subasta_propiedadP\").val('');
                \$(\"#appbundle_subasta_propiedad\").val(-1);
            });
        // ***********  FIN AUTOCOMPLETE PROPIEDAD ******************


        });
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "   ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.structure.css"), "html", null, true);
        echo "\">
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "    <div class=\"mb-4 text-center\">
        <h2> Nueva Subasta </h2>
    </div>

    <div class=\"card pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row justify-content-around\">
            <div class=\"col-8 mb-3 text-center\">
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-4\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "propiedad", [], "any", false, false, false, 61), 'label');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "propiedad", [], "any", false, false, false, 62), 'widget');
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "propiedadP", [], "any", false, false, false, 63), 'widget');
        echo "
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "propiedad", [], "any", false, false, false, 64), 'errors');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "propiedadP", [], "any", false, false, false, 65), 'errors');
        echo "
                    </div>

                    <div class=\"col-4\">
                        <label>Semana a reservar</label>
                        <div class=\"input-group align-middle\">
                            <div id=\"weekpicker1\"></div>
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "anioReserva", [], "any", false, false, false, 72), 'errors');
        echo "
                        </div>
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "semanaReserva", [], "any", false, false, false, 74), 'row');
        echo "
                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "anioReserva", [], "any", false, false, false, 75), 'row');
        echo "                 
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "montoBase", [], "any", false, false, false, 79), 'label');
        echo "
                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "montoBase", [], "any", false, false, false, 80), 'widget');
        echo "
                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "montoBase", [], "any", false, false, false, 81), 'errors');
        echo "                   
                    </div>

                </div>

            </div>  

        </div>
    </div>
    </div>  


    <div class=\"row\">
        <div class=\"col-6 mt-5\">
            <a class=\"text-left btn btn-outline-secondary\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>
        </div>

        <div class=\"col-6 mt-5 text-right\">
            <input class=\"btn btn-outline-success\" type=\"submit\" name=\"\" value=\"Guardar\">
        </div>
    </div>
    
    ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subasta/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 103,  241 => 95,  224 => 81,  220 => 80,  216 => 79,  209 => 75,  205 => 74,  200 => 72,  190 => 65,  186 => 64,  182 => 63,  178 => 62,  174 => 61,  168 => 58,  158 => 50,  149 => 49,  136 => 45,  132 => 44,  126 => 42,  117 => 41,  89 => 22,  67 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            var weekpicker = \$(\"#weekpicker1\").weekpicker();

            \$('#appbundle_subasta_semanaReserva').val(weekpicker.getWeek());
            \$('#appbundle_subasta_anioReserva').val(weekpicker.getYear());

            var inputField = weekpicker.find(\"input\");
            inputField.datetimepicker().on(\"dp.change\", function() {

                \$('#appbundle_subasta_semanaReserva').val(weekpicker.getWeek());
                \$('#appbundle_subasta_anioReserva').val(weekpicker.getYear());
            })


        //************  AUTOCOMPLETE PROPIEDAD ********************
            \$(\"#appbundle_subasta_propiedadP\").autocomplete({
                source: \"{{ path('propiedad_autocomplete') }}\",
                minLength: 3,
                autoFocus: true,
                select: function( event, ui ) {
                    \$(\"#appbundle_subasta_propiedad\").val( ui.item.codigo );
                }
            });
            \$(\"#appbundle_subasta_propiedadP\").on('focusin', function(event) {
                \$(\"#appbundle_subasta_propiedadP\").val('');
                \$(\"#appbundle_subasta_propiedad\").val(-1);
            });
        // ***********  FIN AUTOCOMPLETE PROPIEDAD ******************


        });
    </script>
    
{% endblock %}

{% block stylesheets %}
   {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.theme.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.structure.css')}}\">
    
{% endblock %}

{% block body %}
    <div class=\"mb-4 text-center\">
        <h2> Nueva Subasta </h2>
    </div>

    <div class=\"card pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row justify-content-around\">
            <div class=\"col-8 mb-3 text-center\">
                {{ form_start(form) }}
                <div class=\"row\">
                    <div class=\"col-4\">
                        {{form_label(form.propiedad)}}
                        {{form_widget(form.propiedad)}}
                        {{form_widget(form.propiedadP)}}
                        {{form_errors(form.propiedad)}}
                        {{form_errors(form.propiedadP)}}
                    </div>

                    <div class=\"col-4\">
                        <label>Semana a reservar</label>
                        <div class=\"input-group align-middle\">
                            <div id=\"weekpicker1\"></div>
                            {{form_errors(form.anioReserva)}}
                        </div>
                        {{form_row(form.semanaReserva)}}
                        {{form_row(form.anioReserva)}}                 
                    </div>

                    <div class=\"col-4\">
                        {{form_label(form.montoBase)}}
                        {{form_widget(form.montoBase)}}
                        {{form_errors(form.montoBase)}}                   
                    </div>

                </div>

            </div>  

        </div>
    </div>
    </div>  


    <div class=\"row\">
        <div class=\"col-6 mt-5\">
            <a class=\"text-left btn btn-outline-secondary\" href=\"{{ path('propiedad_index') }}\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>
        </div>

        <div class=\"col-6 mt-5 text-right\">
            <input class=\"btn btn-outline-success\" type=\"submit\" name=\"\" value=\"Guardar\">
        </div>
    </div>
    
    {{ form_end(form) }}

{% endblock %}", "subasta/new.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/subasta/new.html.twig");
    }
}
