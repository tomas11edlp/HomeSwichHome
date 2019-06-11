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

/* propiedad/show.html.twig */
class __TwigTemplate_8dd32c3099b790f8d7c1cd12e1efac8888f2eadcf157a0f0afa2b11ab83c173e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/show.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "propiedad/show.html.twig", 1);
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
        <h2> Ver Propiedad
            <a class=\"btn btn-outline-success\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">Modificar</a>
            <a class=\"btn btn-outline-danger\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)]), "html", null, true);
        echo "\">Eliminar</a>
        </h2>
    </div>

    <div class=\"card  pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 18, $this->source); })()), "titulo", [], "any", false, false, false, 18), "html", null, true);
        echo " </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-8 mb-3\">
                        <h4> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 23, $this->source); })()), "descripcion", [], "any", false, false, false, 23), "html", null, true);
        echo " </h4>
                        <h5> Descripci&oacute;n </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 28, $this->source); })()), "pais", [], "any", false, false, false, 28), "html", null, true);
        echo " </h4>
                        <h5> Pais </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 33, $this->source); })()), "provincia", [], "any", false, false, false, 33), "html", null, true);
        echo " </h4>
                        <h5> Provincia </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 38, $this->source); })()), "localidad", [], "any", false, false, false, 38), "html", null, true);
        echo " </h4>
                        <h5> Localidad </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 43, $this->source); })()), "domicilio", [], "any", false, false, false, 43), "html", null, true);
        echo " </h4>
                        <h5> Domicilio </h5>
                    </div>


                    <div class=\"col-4\">
                        <h4> ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 49, $this->source); })()), "precio", [], "any", false, false, false, 49), "html", null, true);
        echo " </h4>
                        <h5> Precio </h5>
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["propiedad"] ?? null), "foto", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["propiedad"] ?? null), "foto", [], "any", false, false, false, 60), "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")) : ("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")), "html", null, true);
        echo "\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propiedad/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 70,  150 => 60,  136 => 49,  127 => 43,  119 => 38,  111 => 33,  103 => 28,  95 => 23,  87 => 18,  74 => 8,  70 => 7,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"mb-4 text-center\">
        <h2> Ver Propiedad
            <a class=\"btn btn-outline-success\" href=\"{{ path('propiedad_edit', { 'id': propiedad.id }) }}\">Modificar</a>
            <a class=\"btn btn-outline-danger\" href=\"{{ path('propiedad_delete', { 'id': propiedad.id }) }}\">Eliminar</a>
        </h2>
    </div>

    <div class=\"card  pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> {{propiedad.titulo}} </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-8 mb-3\">
                        <h4> {{propiedad.descripcion}} </h4>
                        <h5> Descripci&oacute;n </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{propiedad.pais}} </h4>
                        <h5> Pais </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{propiedad.provincia}} </h4>
                        <h5> Provincia </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> {{propiedad.localidad}} </h4>
                        <h5> Localidad </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{propiedad.domicilio}} </h4>
                        <h5> Domicilio </h5>
                    </div>


                    <div class=\"col-4\">
                        <h4> {{propiedad.precio}} </h4>
                        <h5> Precio </h5>
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"{{propiedad.foto|default('https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1')}}\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"{{ path('propiedad_index') }}\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>

{% endblock %}
", "propiedad/show.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/propiedad/show.html.twig");
    }
}
