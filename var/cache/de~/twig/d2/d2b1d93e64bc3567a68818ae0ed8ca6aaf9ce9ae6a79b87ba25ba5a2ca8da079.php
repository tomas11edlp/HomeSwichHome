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

/* subasta/pujasSubasta.html.twig */
class __TwigTemplate_75b2d33e245c060df592f5199f28a044bfd8463b119cddf7f5bb98e9f39f4c50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/pujasSubasta.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/pujasSubasta.html.twig"));

        // line 1
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 1, $this->source); })()), "pujas", [], "any", false, false, false, 1)) > 0)) {
            // line 2
            echo "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th scope=\"col\">Monto</th>
                <th scope=\"col\">Usuario</th>
            </tr>
        </thead>
        <tbody>
                ";
            // line 10
            $context["cant"] = 0;
            // line 11
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["subasta"]) || array_key_exists("subasta", $context) ? $context["subasta"] : (function () { throw new RuntimeError('Variable "subasta" does not exist.', 11, $this->source); })()), "pujas", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 12
                echo "                    ";
                if (((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 12, $this->source); })()) < 3)) {
                    // line 13
                    echo "                        <tr>
                            <td>";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "monto", [], "any", false, false, false, 14), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "usuario", [], "any", false, false, false, 15), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                // line 18
                echo "
                    ";
                // line 19
                $context["cant"] = ((isset($context["cant"]) || array_key_exists("cant", $context) ? $context["cant"] : (function () { throw new RuntimeError('Variable "cant" does not exist.', 19, $this->source); })()) + 1);
                // line 20
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </tbody>
    </table>
";
        } else {
            // line 24
            echo "    <hr>
    <span class=\"text-danger\"> No hay pujas por el momento </span><br>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "subasta/pujasSubasta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 21,  81 => 20,  79 => 19,  76 => 18,  70 => 15,  66 => 14,  63 => 13,  60 => 12,  55 => 11,  53 => 10,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if subasta.pujas|length > 0 %}
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
                            <td>{{p.monto}}</td>
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
{% endif %}", "subasta/pujasSubasta.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/subasta/pujasSubasta.html.twig");
    }
}
