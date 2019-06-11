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

/* puja/ultimas_pujas.html.twig */
class __TwigTemplate_95744e34f3a7836899dfb96f4a921eb18f8a615eccc04ed9e67486061c09e365 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "puja/ultimas_pujas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "puja/ultimas_pujas.html.twig"));

        // line 1
        echo "<h5> Pujas 
    <input class=\"col-2 ml-5\" placeholder=\"0.00\" id=\"inputPuja\" type=\"\" name=\"\">
    <button class=\"btn btn-primary\" name=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" id=\"pujar\"> Pujar </button>
</h5>

";
        // line 6
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 6, $this->source); })()), "pujas", [], "any", false, false, false, 6)) > 0)) {
            // line 7
            echo "    <table class=\"table table-striped text-center\">
        <thead>
            <tr>
                <th scope=\"col\">Monto</th>
                <th scope=\"col\">Usuario</th>
            </tr>
        </thead>
        <tbody>
                ";
            // line 15
            $context["cant"] = 0;
            // line 16
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 16, $this->source); })()), "pujas", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 17
                echo "                    ";
                if (((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 17, $this->source); })()) < 3)) {
                    // line 18
                    echo "                        <tr>
                            <td id=\"puja-";
                    // line 19
                    echo twig_escape_filter($this->env, (isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 19, $this->source); })()), "html", null, true);
                    echo "\" data-monto=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "monto", [], "any", false, false, false, 19), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "monto", [], "any", false, false, false, 19), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "usuario", [], "any", false, false, false, 20), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                // line 23
                echo "
                    ";
                // line 24
                $context["cant"] = ((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 24, $this->source); })()) + 1);
                // line 25
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </tbody>
    </table>
";
        } else {
            // line 29
            echo "    <hr>
    <span class=\"text-danger\"> No hay pujas por el momento </span><br>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "puja/ultimas_pujas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  101 => 26,  95 => 25,  93 => 24,  90 => 23,  84 => 20,  76 => 19,  73 => 18,  70 => 17,  65 => 16,  63 => 15,  53 => 7,  51 => 6,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h5> Pujas 
    <input class=\"col-2 ml-5\" placeholder=\"0.00\" id=\"inputPuja\" type=\"\" name=\"\">
    <button class=\"btn btn-primary\" name=\"{{subasta.id}}\" id=\"pujar\"> Pujar </button>
</h5>

{% if subasta.pujas|length > 0 %}
    <table class=\"table table-striped text-center\">
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
                            <td id=\"puja-{{cant}}\" data-monto=\"{{p.monto}}\">{{p.monto}}</td>
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
{% endif %}", "puja/ultimas_pujas.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/puja/ultimas_pujas.html.twig");
    }
}
