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

/* subasta/showPublico.html.twig */
class __TwigTemplate_002d0d25c40b9b7eb015ec1a977e95c2a05f867c2f5b9ef43581e4bf5d05977c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/showPublico.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/showPublico.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "subasta/showPublico.html.twig", 1);
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
        <h2 class=\"mb-5\"> Subasta </h2>
    </div>

<div class=\"container-fluid\">
    <div class=\"card pt-5 pb-4\">
        <div class=\"col-12\">
        <div class=\"row\">
            <div class=\"col-8 mb-3\">
                <div class=\"row\">
                    <div class=\"col-4\">
                        <h4> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 16, $this->source); })()), "propiedad", [], "any", false, false, false, 16), "html", null, true);
        echo " </h4>
                        <h5> T&iacute;tulo </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 21, $this->source); })()), "semanaReserva", [], "any", false, false, false, 21), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 21, $this->source); })()), "anioReserva", [], "any", false, false, false, 21), "html", null, true);
        echo " </h4>
                        <h5> Semana a reservar </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 26
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "estado", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "estado", [], "any", false, false, false, 26), "-")) : ("-")), "html", null, true);
        echo " </h4>
                        <h5> Estado </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 31, $this->source); })()), "fechaInicio", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo " </h4>
                        <h5> Fecha Inicio </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 36, $this->source); })()), "fechaFin", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
        echo " </h4>
                        <h5> Fecha F&iacute;n </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 41, $this->source); })()), "montoBase", [], "any", false, false, false, 41), "html", null, true);
        echo " </h4>
                        <h5> Monto Inicial </h5>
                    </div>

                    <div class=\"col-6 mt-3\">
                        <h5> Pujas 
                            <input class=\"col-2 ml-5\" placeholder=\"0.00\" id=\"inputPuja\" type=\"\" name=\"\">
                            <button class=\"btn btn-primary\" name=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\" id=\"pujar\"> Pujar </button>
                        </h5>

                        ";
        // line 51
        if ((twig_length_filter($this->env, (isset($context["pujas"]) || array_key_exists("pujas", $context) ? $context["pujas"] : (function () { throw new RuntimeError('Variable "pujas" does not exist.', 51, $this->source); })())) > 0)) {
            // line 52
            echo "                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Monto</th>
                                        <th scope=\"col\">Usuario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        ";
            // line 60
            $context["cant"] = 0;
            // line 61
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 61, $this->source); })()), "pujas", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 62
                echo "                                            ";
                if (((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 62, $this->source); })()) < 3)) {
                    // line 63
                    echo "                                                <tr>
                                                    <td id=\"";
                    // line 64
                    echo twig_escape_filter($this->env, (isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 64, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "monto", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>
                                                    <td>";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "usuario", [], "any", false, false, false, 65), "html", null, true);
                    echo "</td>
                                                </tr>
                                            ";
                }
                // line 68
                echo "
                                            ";
                // line 69
                $context["cant"] = ((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 69, $this->source); })()) + 1);
                // line 70
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                </tbody>
                            </table>
                        ";
        } else {
            // line 74
            echo "                            <hr>
                            <span class=\"text-danger\"> No hay pujas por el momento </span><br>
                        ";
        }
        // line 77
        echo "
                    </div>
                    <div class=\"col\">
                    </div>

                </div>

            </div>  

            <div class=\"col-4 mb-3\">

                <div class=\"col-12\">
                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "propiedad", [], "any", false, true, false, 89), "foto", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subasta"] ?? null), "propiedad", [], "any", false, true, false, 89), "foto", [], "any", false, false, false, 89), "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")) : ("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")), "html", null, true);
        echo "\" width=\"100%\" border=\"0\">  
                </div>
            
            </div>
        </div>
    </div>
    </div>  

    <div class=\"text-left mt-5\">
    
        <a class=\"btn btn-outline-secondary\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subasta_index");
        echo "\"><i class=\"fas fa-arrow-left\"></i>  Volver al listado</a>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            
            \$('#pujar').on('click', function (e) {
                
                var valorPujado = \$('#inputPuja').val();

                var subasta = \$(this).attr('name');  

                var data = { 
                    valor: valorPujado, 
                    subasta: subasta
                };

                \$.ajax({ 
                    url: \"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("puja_new");
        echo "\",
                    type: 'POST', 
                    data: data, 
                    success: function (datos) { 
                        \$('#inputPuja').val('0.00');
                        console.log(datos.monto);
                    }
                });

            });




        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subasta/showPublico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 124,  248 => 107,  239 => 106,  223 => 99,  210 => 89,  196 => 77,  191 => 74,  186 => 71,  180 => 70,  178 => 69,  175 => 68,  169 => 65,  163 => 64,  160 => 63,  157 => 62,  152 => 61,  150 => 60,  140 => 52,  138 => 51,  132 => 48,  122 => 41,  114 => 36,  106 => 31,  98 => 26,  88 => 21,  80 => 16,  66 => 4,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"mb-4 text-center\">
        <h2 class=\"mb-5\"> Subasta </h2>
    </div>

<div class=\"container-fluid\">
    <div class=\"card pt-5 pb-4\">
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

                    <div class=\"col-4 mb-3\">
                        <h4> {{subasta.estado|default('-')}} </h4>
                        <h5> Estado </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{subasta.fechaInicio|date('d/m/Y')}} </h4>
                        <h5> Fecha Inicio </h5>
                    </div>

                    <div class=\"col-4\">
                        <h4> {{subasta.fechaFin|date('d/m/Y')}} </h4>
                        <h5> Fecha F&iacute;n </h5>
                    </div>

                    <div class=\"col-4 mb-3\">
                        <h4> {{subasta.montoBase}} </h4>
                        <h5> Monto Inicial </h5>
                    </div>

                    <div class=\"col-6 mt-3\">
                        <h5> Pujas 
                            <input class=\"col-2 ml-5\" placeholder=\"0.00\" id=\"inputPuja\" type=\"\" name=\"\">
                            <button class=\"btn btn-primary\" name=\"{{subasta.id}}\" id=\"pujar\"> Pujar </button>
                        </h5>

                        {% if pujas|length > 0 %}
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Monto</th>
                                        <th scope=\"col\">Usuario</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        {% set cant = 0 %}
                                        {% for p in subasta.pujas %}
                                            {% if cant < 3 %}
                                                <tr>
                                                    <td id=\"{{cant}}\">{{p.monto}}</td>
                                                    <td>{{p.usuario}}</td>
                                                </tr>
                                            {% endif %}

                                            {% set cant = cant + 1 %}
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
</div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            
            \$('#pujar').on('click', function (e) {
                
                var valorPujado = \$('#inputPuja').val();

                var subasta = \$(this).attr('name');  

                var data = { 
                    valor: valorPujado, 
                    subasta: subasta
                };

                \$.ajax({ 
                    url: \"{{ path('puja_new') }}\",
                    type: 'POST', 
                    data: data, 
                    success: function (datos) { 
                        \$('#inputPuja').val('0.00');
                        console.log(datos.monto);
                    }
                });

            });




        });
    </script>


{% endblock %}
", "subasta/showPublico.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/subasta/showPublico.html.twig");
    }
}
