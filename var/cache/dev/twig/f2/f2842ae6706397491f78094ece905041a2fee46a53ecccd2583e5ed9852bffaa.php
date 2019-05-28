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

/* @Pg/Paginator/components/filter_inline.html.twig */
class __TwigTemplate_6371436c97d5b94e2258473a3efe8b642ee71e3b61046a73b2a392b5d6f1db8a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_inline.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_inline.html.twig"));

        // line 1
        echo "<div id=\"filters-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"row justify-content-end align-conten-center mr-5\">
\t\t<div class=\"col-sm-auto\">
\t\t\t<h3>Filtrar por:</h3>
\t\t</div>
        ";
        // line 6
        $context["hidden_categoria"] = null;
        // line 7
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 8
            echo "            ";
            // line 9
            echo "\t\t\t<div class=\"col-sm-auto\" style=\"margin-bottom: 10px;\">
\t\t\t\t";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
            echo "
\t\t\t</div>
            ";
            // line 15
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t<div class=\"col-sm-auto\">
\t\t\t<button class=\"btn btn-info\" id=\"search-";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\" type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\">
\t            ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "
\t        </button>
\t        ";
        // line 23
        echo "\t\t</div>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/filter_inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  82 => 18,  76 => 17,  73 => 16,  67 => 15,  62 => 10,  59 => 9,  57 => 8,  52 => 7,  50 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"filters-{{ paginator.id }}\">
\t<div class=\"row justify-content-end align-conten-center mr-5\">
\t\t<div class=\"col-sm-auto\">
\t\t\t<h3>Filtrar por:</h3>
\t\t</div>
        {% set hidden_categoria = null %}
        {% for f in filters %}
            {# {% if f.vars.id != 'mottapgbundle_paginatorformtype_filters_categoria' %} #}
\t\t\t<div class=\"col-sm-auto\" style=\"margin-bottom: 10px;\">
\t\t\t\t{{ form_widget(f) }}
\t\t\t</div>
            {# {% else %}
                {% set hidden_categoria = f %}
            {% endif %} #}
\t\t{% endfor %}
\t\t<div class=\"col-sm-auto\">
\t\t\t<button class=\"btn btn-info\" id=\"search-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Search'|trans }}\">
\t            {{ 'Search'|trans }}
\t        </button>
\t        {#<button class=\"btn btn-default\" id=\"clean-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Clean'|trans }}\">
\t            {{ 'Clean'|trans }}
\t        </button>#}
\t\t</div>
\t</div>
</div>
", "@Pg/Paginator/components/filter_inline.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/filter_inline.html.twig");
    }
}
