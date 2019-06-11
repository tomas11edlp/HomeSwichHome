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

/* propiedad/edit.html.twig */
class __TwigTemplate_87e5731c585738d2cd336faa691083f7a97ccf9eed42680e8b9fa84e704c4914 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "propiedad/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"mb-4 text-center\">
        <h2> Modificar Propiedad </h2>
    </div>

    <div class=\"card pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"col-4\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 16, $this->source); })()), "titulo", [], "any", false, false, false, 16), 'label');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 17, $this->source); })()), "titulo", [], "any", false, false, false, 17), 'widget');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 18, $this->source); })()), "titulo", [], "any", false, false, false, 18), 'errors');
        echo "
                    </div>

                    <div class=\"col-8 mb-3\">
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 22, $this->source); })()), "descripcion", [], "any", false, false, false, 22), 'label');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), "descripcion", [], "any", false, false, false, 23), 'widget');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 24, $this->source); })()), "descripcion", [], "any", false, false, false, 24), 'errors');
        echo "
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 28, $this->source); })()), "pais", [], "any", false, false, false, 28), 'label');
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 29, $this->source); })()), "pais", [], "any", false, false, false, 29), 'widget');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 30, $this->source); })()), "pais", [], "any", false, false, false, 30), 'errors');
        echo "                   
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 34, $this->source); })()), "provincia", [], "any", false, false, false, 34), 'label');
        echo "
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 35, $this->source); })()), "provincia", [], "any", false, false, false, 35), 'widget');
        echo "
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 36, $this->source); })()), "provincia", [], "any", false, false, false, 36), 'errors');
        echo "
                    </div>

                    <div class=\"col-4 mb-3\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 40, $this->source); })()), "localidad", [], "any", false, false, false, 40), 'label');
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 41, $this->source); })()), "localidad", [], "any", false, false, false, 41), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 42, $this->source); })()), "localidad", [], "any", false, false, false, 42), 'errors');
        echo "
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 46, $this->source); })()), "domicilio", [], "any", false, false, false, 46), 'label');
        echo "
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })()), "domicilio", [], "any", false, false, false, 47), 'widget');
        echo "
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 48, $this->source); })()), "domicilio", [], "any", false, false, false, 48), 'errors');
        echo "
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 52, $this->source); })()), "precio", [], "any", false, false, false, 52), 'label');
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 53, $this->source); })()), "precio", [], "any", false, false, false, 53), 'widget');
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 54, $this->source); })()), "precio", [], "any", false, false, false, 54), 'errors');
        echo "
                    </div>

                    <div class=\"col-4\">
                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 58, $this->source); })()), "foto", [], "any", false, false, false, 58), 'label');
        echo "
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 59, $this->source); })()), "foto", [], "any", false, false, false, 59), 'widget');
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 60, $this->source); })()), "foto", [], "any", false, false, false, 60), 'errors');
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>
        </div>

        <div class=\"col-6 mt-5 text-right\">
            <input class=\"btn btn-outline-success\" type=\"submit\" name=\"\" value=\"Guardar\">
        </div>
    </div>
    
    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propiedad/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 82,  212 => 74,  195 => 60,  191 => 59,  187 => 58,  180 => 54,  176 => 53,  172 => 52,  165 => 48,  161 => 47,  157 => 46,  150 => 42,  146 => 41,  142 => 40,  135 => 36,  131 => 35,  127 => 34,  120 => 30,  116 => 29,  112 => 28,  105 => 24,  101 => 23,  97 => 22,  90 => 18,  86 => 17,  82 => 16,  76 => 13,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"mb-4 text-center\">
        <h2> Modificar Propiedad </h2>
    </div>

    <div class=\"card pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                {{ form_start(edit_form) }}
                <div class=\"row\">
                    <div class=\"col-4\">
                        {{form_label(edit_form.titulo)}}
                        {{form_widget(edit_form.titulo)}}
                        {{form_errors(edit_form.titulo)}}
                    </div>

                    <div class=\"col-8 mb-3\">
                        {{form_label(edit_form.descripcion)}}
                        {{form_widget(edit_form.descripcion)}}
                        {{form_errors(edit_form.descripcion)}}
                    </div>

                    <div class=\"col-4\">
                        {{form_label(edit_form.pais)}}
                        {{form_widget(edit_form.pais)}}
                        {{form_errors(edit_form.pais)}}                   
                    </div>

                    <div class=\"col-4\">
                        {{form_label(edit_form.provincia)}}
                        {{form_widget(edit_form.provincia)}}
                        {{form_errors(edit_form.provincia)}}
                    </div>

                    <div class=\"col-4 mb-3\">
                        {{form_label(edit_form.localidad)}}
                        {{form_widget(edit_form.localidad)}}
                        {{form_errors(edit_form.localidad)}}
                    </div>

                    <div class=\"col-4\">
                        {{form_label(edit_form.domicilio)}}
                        {{form_widget(edit_form.domicilio)}}
                        {{form_errors(edit_form.domicilio)}}
                    </div>

                    <div class=\"col-4\">
                        {{form_label(edit_form.precio)}}
                        {{form_widget(edit_form.precio)}}
                        {{form_errors(edit_form.precio)}}
                    </div>

                    <div class=\"col-4\">
                        {{form_label(edit_form.foto)}}
                        {{form_widget(edit_form.foto)}}
                        {{form_errors(edit_form.foto)}}
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
    
    {{ form_end(edit_form) }}

{% endblock %}
", "propiedad/edit.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/propiedad/edit.html.twig");
    }
}
