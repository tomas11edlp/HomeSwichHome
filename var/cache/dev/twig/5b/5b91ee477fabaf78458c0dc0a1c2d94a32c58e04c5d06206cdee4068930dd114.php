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

/* propiedad/showPublico.html.twig */
class __TwigTemplate_221f99bea2a182ae2ebd0d41d9e6cdc15ff639ab0569e27e171990de1010bca3 extends \Twig\Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/showPublico.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propiedad/showPublico.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propiedad/showPublico.html.twig", 1);
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
        <h2> Ver Propiedad </h2>
    </div>

<div class=\"container-fluid\">
    <div class=\"card  pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 16, $this->source); })()), "titulo", [], "any", false, false, false, 16), "html", null, true);
        echo " </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-8 mb-3\">
                        <h4> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 21, $this->source); })()), "descripcion", [], "any", false, false, false, 21), "html", null, true);
        echo " </h4>
                        <h5> Descripci&oacute;n </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 26, $this->source); })()), "pais", [], "any", false, false, false, 26), "html", null, true);
        echo " </h4>
                        <h5> Pais </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 31, $this->source); })()), "provincia", [], "any", false, false, false, 31), "html", null, true);
        echo " </h4>
                        <h5> Provincia </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 36, $this->source); })()), "localidad", [], "any", false, false, false, 36), "html", null, true);
        echo " </h4>
                        <h5> Localidad </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 41, $this->source); })()), "domicilio", [], "any", false, false, false, 41), "html", null, true);
        echo " </h4>
                        <h5> Domicilio </h5>
                    </div>


                    <div class=\"col-4\">
                        <h4> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propiedad"]) || array_key_exists("propiedad", $context) ? $context["propiedad"] : (function () { throw new RuntimeError('Variable "propiedad" does not exist.', 47, $this->source); })()), "precio", [], "any", false, false, false, 47), "html", null, true);
        echo " </h4>
                        <h5> Precio </h5>
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["propiedad"] ?? null), "foto", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["propiedad"] ?? null), "foto", [], "any", false, false, false, 58), "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")) : ("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")), "html", null, true);
        echo "\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index_publico");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propiedad/showPublico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  142 => 58,  128 => 47,  119 => 41,  111 => 36,  103 => 31,  95 => 26,  87 => 21,  79 => 16,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"mb-4 text-center\">
        <h2> Ver Propiedad </h2>
    </div>

<div class=\"container-fluid\">
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
    
        <a class=\"btn btn-outline-secondary\" href=\"{{ path('propiedad_index_publico') }}\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>
</div>

{% endblock %}
", "propiedad/showPublico.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/propiedad/showPublico.html.twig");
    }
}
