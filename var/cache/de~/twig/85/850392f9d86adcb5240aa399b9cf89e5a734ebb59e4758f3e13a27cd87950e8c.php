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

/* @Pg/Paginator/components/filter_left.html.twig */
class __TwigTemplate_cc17d7bd8d9bd52a40aeb8b8bea98b1fb75936daf0676975a3f1adc933d283af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_left.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_left.html.twig"));

        // line 1
        echo "<div id=\"filters-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"row\">
\t\t";
        // line 3
        $context["hidden_categoria"] = null;
        // line 4
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 5
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) != "mottapgbundle_paginatorformtype_filters_categoria")) {
                // line 6
                echo "\t\t\t\t<div class=\"col-xs-9\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t";
                // line 7
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget', ["attr" => ["class" => "form-control upper"]]);
                echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"search-";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
                echo "\" type=\"button\" title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t";
                $context["hidden_categoria"] = $context["f"];
                // line 16
                echo "\t\t\t";
            }
            // line 17
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t</div>
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["hidden_categoria"]) || array_key_exists("hidden_categoria", $context) ? $context["hidden_categoria"] : (function () { throw new RuntimeError('Variable "hidden_categoria" does not exist.', 19, $this->source); })()), 'widget');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/filter_left.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 19,  88 => 18,  82 => 17,  79 => 16,  76 => 15,  66 => 10,  60 => 7,  57 => 6,  54 => 5,  49 => 4,  47 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"filters-{{ paginator.id }}\">
\t<div class=\"row\">
\t\t{% set hidden_categoria = null %}
\t\t{% for f in filters %}
\t\t\t{% if f.vars.id != 'mottapgbundle_paginatorformtype_filters_categoria' %}
\t\t\t\t<div class=\"col-xs-9\" style=\"margin-bottom: 10px;\">
\t\t\t\t\t{{ form_widget(f, {\"attr\": {\"class\": \"form-control upper\"} } ) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-3\">
\t\t\t\t\t<button class=\"btn btn-primary\" id=\"search-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Search'|trans }}\">
\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\t\t{% set hidden_categoria = f %}
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
    {{ form_widget(hidden_categoria) }}
</div>
", "@Pg/Paginator/components/filter_left.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/filter_left.html.twig");
    }
}
