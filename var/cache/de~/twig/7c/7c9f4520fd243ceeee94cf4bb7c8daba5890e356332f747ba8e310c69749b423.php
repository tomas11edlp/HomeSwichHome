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

/* subasta/show.html.twig */
class __TwigTemplate_b0ff31694604ffeccab76aa9676fd4a51d95505d30fc32f10716bb6857791aa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/show.html.twig"));

        $this->parent = $this->loadTemplate("admin_base.html.twig", "subasta/show.html.twig", 1);
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
        <h2> Subasta
            ";
        // line 8
        echo "            ";
        // line 9
        echo "        </h2>
    </div>

    <div class=\"card  pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 18, $this->source); })()), "propiedad", [], "any", false, false, false, 18), "html", null, true);
        echo " </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 23, $this->source); })()), "semanaReserva", [], "any", false, false, false, 23), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 23, $this->source); })()), "anioReserva", [], "any", false, false, false, 23), "html", null, true);
        echo " </h4>
                        <h5> Semana a reservar </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 28, $this->source); })()), "fechaInicio", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
        echo " </h4>
                        <h5> Fecha Inicio </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 33, $this->source); })()), "fechaFin", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true);
        echo " </h4>
                        <h5> Fecha F&iacute;n </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 38, $this->source); })()), "montoBase", [], "any", false, false, false, 38), "html", null, true);
        echo " </h4>
                        <h5> Monto Inicial </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 43
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "estado", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "estado", [], "any", false, false, false, 43), "-")) : ("-")), "html", null, true);
        echo " </h4>
                        <h5> Estado </h5>
                    </div>

                    <div class=\"col-6 mt-3\">
                        <h5> Pujas  <a class=\"btn btn-outline-success ml-5\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subasta_cerrar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\"> Cerrar Subasta</a></h5>
                        ";
        // line 49
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 49, $this->source); })()), "pujas", [], "any", false, false, false, 49)) > 0)) {
            // line 50
            echo "                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First</th>
                                        <th scope=\"col\">Last</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 59, $this->source); })()), "pujas", [], "any", false, false, false, 59));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 60
                echo "                                        <tr>
                                            <th  scope=\"row\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
                echo "</th>
                                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "monto", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                                            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "usuario", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                                </tbody>
                            </table>
                        ";
        } else {
            // line 69
            echo "                            <hr>
                            <span class=\"text-danger\"> No hay pujas por el momento </span><br>
                        ";
        }
        // line 72
        echo "                    </div>
                    <div class=\"col\">
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "propiedad", [], "any", false, true, false, 83), "foto", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "propiedad", [], "any", false, true, false, 83), "foto", [], "any", false, false, false, 83), "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")) : ("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")), "html", null, true);
        echo "\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subasta_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subasta/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 93,  218 => 83,  205 => 72,  200 => 69,  195 => 66,  178 => 63,  174 => 62,  170 => 61,  167 => 60,  150 => 59,  139 => 50,  137 => 49,  133 => 48,  125 => 43,  117 => 38,  109 => 33,  101 => 28,  91 => 23,  83 => 18,  72 => 9,  70 => 8,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin_base.html.twig' %}

{% block body %}

    <div class=\"mb-4 text-center\">
        <h2> Subasta
            {# <a class=\"btn btn-outline-success\" href=\"{{ path('subasta_edit', { 'id': subasta.id }) }}\">Modificar</a> #}
            {# <a class=\"btn btn-outline-danger\" href=\"{{ path('subasta_delete', { 'id': subasta.id }) }}\">Eliminar</a> #}
        </h2>
    </div>

    <div class=\"card  pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> {{subasta.propiedad}} </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{subasta.semanaReserva}}/{{subasta.anioReserva}} </h4>
                        <h5> Semana a reservar </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{subasta.fechaInicio|date('d-m-Y')}} </h4>
                        <h5> Fecha Inicio </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{subasta.fechaFin|date('d-m-Y')}} </h4>
                        <h5> Fecha F&iacute;n </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> {{subasta.montoBase}} </h4>
                        <h5> Monto Inicial </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> {{subasta.estado|default('-')}} </h4>
                        <h5> Estado </h5>
                    </div>

                    <div class=\"col-6 mt-3\">
                        <h5> Pujas  <a class=\"btn btn-outline-success ml-5\" href=\"{{path('subasta_cerrar',{'id':subasta.id})}}\"> Cerrar Subasta</a></h5>
                        {% if subasta.pujas|length > 0 %}
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">First</th>
                                        <th scope=\"col\">Last</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for p in subasta.pujas %}
                                        <tr>
                                            <th  scope=\"row\">{{loop.index}}</th>
                                            <td>{{p.monto}}</td>
                                            <td>{{p.usuario}}</td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        {% else %}
                            <hr>
                            <span class=\"text-danger\"> No hay pujas por el momento </span><br>
                        {% endif %}
                    </div>
                    <div class=\"col\">
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"{{subasta.propiedad.foto|default('https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1')}}\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"{{ path('subasta_index') }}\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>

{% endblock %}
", "subasta/show.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/subasta/show.html.twig");
    }
}
