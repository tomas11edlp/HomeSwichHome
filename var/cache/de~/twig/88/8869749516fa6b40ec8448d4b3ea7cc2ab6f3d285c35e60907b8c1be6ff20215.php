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

/* @Pg/Paginator/components/filter_myinline.html.twig */
class __TwigTemplate_bbdf4eb38529a0f8482aa70be828564d541754912f015bc69c1125124e5f7833 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_myinline.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_myinline.html.twig"));

        // line 1
        echo "<div id=\"filters-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"row\">
        ";
        // line 3
        $context["hidden_categoria"] = null;
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 5
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) != "mottapgbundle_paginatorformtype_filters_categoria")) {
                // line 6
                echo "\t\t\t<div class=\"col-sm-6\" style=\"margin-bottom: 10px;\">
\t\t\t\t";
                // line 7
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget', ["attr" => ["class" => "form-control upper"]]);
                echo "
\t\t\t</div>
            ";
            } else {
                // line 10
                echo "                ";
                $context["hidden_categoria"] = $context["f"];
                // line 11
                echo "            ";
            }
            // line 12
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t<div class=\"col-sm-6\">
\t\t\t<button class=\"btn btn-info\" id=\"search-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\" type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\">
\t            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "
\t        </button>
\t        ";
        // line 20
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/filter_myinline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  87 => 15,  81 => 14,  78 => 13,  72 => 12,  69 => 11,  66 => 10,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"filters-{{ paginator.id }}\">
\t<div class=\"row\">
        {% set hidden_categoria = null %}
        {% for f in filters %}
            {% if f.vars.id != 'mottapgbundle_paginatorformtype_filters_categoria' %}
\t\t\t<div class=\"col-sm-6\" style=\"margin-bottom: 10px;\">
\t\t\t\t{{ form_widget(f, {\"attr\": {\"class\": \"form-control upper\"} } ) }}
\t\t\t</div>
            {% else %}
                {% set hidden_categoria = f %}
            {% endif %}
\t\t{% endfor %}
\t\t<div class=\"col-sm-6\">
\t\t\t<button class=\"btn btn-info\" id=\"search-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Search'|trans }}\">
\t            {{ 'Search'|trans }}
\t        </button>
\t        {#<button class=\"btn btn-default\" id=\"clean-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Clean'|trans }}\">
\t            {{ 'Clean'|trans }}
\t        </button>#}
\t\t</div>
\t</div>
</div>
", "@Pg/Paginator/components/filter_myinline.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/filter_myinline.html.twig");
    }
}
