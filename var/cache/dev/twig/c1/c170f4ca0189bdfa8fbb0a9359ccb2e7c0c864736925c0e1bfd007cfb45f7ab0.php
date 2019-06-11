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

/* @Pg/Paginator/components/filter_panel.html.twig */
class __TwigTemplate_54b99448f01bc29263f2cc64c143e02e5816c11efa8bc1fce05edd180697941c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'filters' => [$this, 'block_filters'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/filter_panel.html.twig"));

        // line 1
        echo "<div class=\"panel-group\" id=\"accordion-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne-";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
            <a id=\"panel-filter-";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" data-toggle=\"collapse\" data-parent=\"#accordion-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" href=\"#collapseOne-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\">
                <h4 class=\"text-left panel-title\">
                    <span class=\"fa fa-search\" aria-hidden=\"true\"></span>
                    ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search filters"), "html", null, true);
        echo "
                    <span id=\"arrow-";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"arrow fa fa-chevron-";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "panelState", [], "any", false, false, false, 8) == "open")) ? ("up") : ("down"));
        echo "\"></span>
                </h4>
            </a>
        </div>
        <div id=\"collapseOne-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"panel-collapse collapse ";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "panelState", [], "any", false, false, false, 12) == "open")) ? ("in") : (""));
        echo "\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
            <div class=\"panel-body\" id=\"filters-";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
                ";
        // line 14
        $this->displayBlock('filters', $context, $blocks);
        // line 17
        echo "                <div class=\"col-md-12 small\">
                    <button class=\"btn btn-primary btn-navbar btn-md\" id=\"search-";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\" style=\"cursor:pointer\" type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "
                    </button>
                    <button class=\"btn btn-default btn-navbar btn-md\" id=\"clean-";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "\" style=\"cursor:pointer\" type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clean"), "html", null, true);
        echo "\">
                        ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clean"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_filters($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "filters"));

        // line 15
        echo "                \t";
        $this->loadTemplate("PgBundle/Paginator/components/filter_panel_filters.html.twig", "@Pg/Paginator/components/filter_panel.html.twig", 15)->display($context);
        // line 16
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/filter_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 16,  136 => 15,  127 => 14,  109 => 22,  103 => 21,  98 => 19,  92 => 18,  89 => 17,  87 => 14,  83 => 13,  77 => 12,  68 => 8,  64 => 7,  52 => 4,  48 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"panel-group\" id=\"accordion-{{ paginator.id }}\" role=\"tablist\" aria-multiselectable=\"true\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingOne-{{ paginator.id }}\">
            <a id=\"panel-filter-{{ paginator.id }}\" data-toggle=\"collapse\" data-parent=\"#accordion-{{ paginator.id }}\" href=\"#collapseOne-{{ paginator.id }}\" aria-expanded=\"true\" aria-controls=\"collapseOne-{{ paginator.id }}\">
                <h4 class=\"text-left panel-title\">
                    <span class=\"fa fa-search\" aria-hidden=\"true\"></span>
                    {{ 'Search filters'|trans }}
                    <span id=\"arrow-{{ paginator.id }}\" class=\"arrow fa fa-chevron-{{ paginator.panelState == 'open' ? 'up' : 'down' }}\"></span>
                </h4>
            </a>
        </div>
        <div id=\"collapseOne-{{ paginator.id }}\" class=\"panel-collapse collapse {{ paginator.panelState == 'open' ? 'in' : '' }}\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
            <div class=\"panel-body\" id=\"filters-{{ paginator.id }}\">
                {% block filters %}
                \t{% include 'PgBundle/Paginator/components/filter_panel_filters.html.twig' %}
                {% endblock %}
                <div class=\"col-md-12 small\">
                    <button class=\"btn btn-primary btn-navbar btn-md\" id=\"search-{{ paginator.id }}\" style=\"cursor:pointer\" type=\"button\" title=\"{{ 'Search'|trans }}\">
                        {{ 'Search'|trans }}
                    </button>
                    <button class=\"btn btn-default btn-navbar btn-md\" id=\"clean-{{ paginator.id }}\" style=\"cursor:pointer\" type=\"button\" title=\"{{ 'Clean'|trans }}\">
                        {{ 'Clean'|trans }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
", "@Pg/Paginator/components/filter_panel.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/filter_panel.html.twig");
    }
}
