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

/* @Pg/Paginator/components/footer.html.twig */
class __TwigTemplate_269f78c58c6070f0ae7c0c40332c3eb1bb36bf2100c993ebf018f6ee3b156c23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/footer.html.twig"));

        // line 1
        $this->loadTemplate("@Pg/Paginator/components/mass_actions_form.html.twig", "@Pg/Paginator/components/footer.html.twig", 1)->display($context);
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "filterTheme", [], "any", false, false, false, 2) == "left")) {
            // line 3
            echo "\t<div class=\"row justify-content-center align-items-bottom\">
\t\t<div class=\"col-11\">
\t\t\t<div class=\"row\">
\t\t\t    ";
            // line 6
            $this->loadTemplate("@Pg/Paginator/components/mass_actions.html.twig", "@Pg/Paginator/components/footer.html.twig", 6)->display($context);
            // line 7
            echo "\t\t\t    ";
            // line 8
            echo "\t\t\t    \t";
            $this->loadTemplate("@Pg/Paginator/components/page_nav.html.twig", "@Pg/Paginator/components/footer.html.twig", 8)->display($context);
            // line 9
            echo "\t\t\t    ";
            // line 10
            echo "\t\t\t    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "exports", [], "any", false, false, false, 10)) > 0)) {
                // line 11
                echo "\t\t\t    \t";
                $this->loadTemplate("@Pg/Paginator/components/exports.html.twig", "@Pg/Paginator/components/footer.html.twig", 11)->display($context);
                // line 12
                echo "\t\t\t    ";
            }
            // line 13
            echo "\t\t\t    ";
            $this->loadTemplate("@Pg/Paginator/components/rows_page.html.twig", "@Pg/Paginator/components/footer.html.twig", 13)->display($context);
            // line 14
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        } else {
            // line 18
            echo "\t<div class=\"col-11\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t    ";
            // line 21
            $this->loadTemplate("@Pg/Paginator/components/mass_actions.html.twig", "@Pg/Paginator/components/footer.html.twig", 21)->display($context);
            // line 22
            echo "\t\t\t    ";
            // line 23
            echo "\t\t\t    \t";
            $this->loadTemplate("@Pg/Paginator/components/page_nav.html.twig", "@Pg/Paginator/components/footer.html.twig", 23)->display($context);
            // line 24
            echo "\t\t\t    ";
            // line 25
            echo "\t\t\t    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 25, $this->source); })()), "exports", [], "any", false, false, false, 25)) > 0)) {
                // line 26
                echo "\t\t\t    \t";
                $this->loadTemplate("@Pg/Paginator/components/exports.html.twig", "@Pg/Paginator/components/footer.html.twig", 26)->display($context);
                // line 27
                echo "\t\t\t    ";
            }
            // line 28
            echo "\t\t\t    ";
            $this->loadTemplate("@Pg/Paginator/components/rows_page.html.twig", "@Pg/Paginator/components/footer.html.twig", 28)->display($context);
            // line 29
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 33
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  91 => 25,  89 => 24,  86 => 23,  84 => 22,  82 => 21,  77 => 18,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  57 => 9,  54 => 8,  52 => 7,  50 => 6,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include '@Pg/Paginator/components/mass_actions_form.html.twig' %}
{% if paginator.filterTheme == 'left' %}
\t<div class=\"row justify-content-center align-items-bottom\">
\t\t<div class=\"col-11\">
\t\t\t<div class=\"row\">
\t\t\t    {% include '@Pg/Paginator/components/mass_actions.html.twig' %}
\t\t\t    {# {% if ( paginator.totalPages > 1 and not paginator.hide.pageNav ) %} #}
\t\t\t    \t{% include '@Pg/Paginator/components/page_nav.html.twig' %}
\t\t\t    {# {% endif %} #}
\t\t\t    {% if paginator.exports|length > 0 %}
\t\t\t    \t{% include '@Pg/Paginator/components/exports.html.twig' %}
\t\t\t    {% endif %}
\t\t\t    {% include '@Pg/Paginator/components/rows_page.html.twig' %}
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
\t<div class=\"col-11\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t    {% include '@Pg/Paginator/components/mass_actions.html.twig' %}
\t\t\t    {# {% if ( paginator.totalPages > 1 and not paginator.hide.pageNav ) %} #}
\t\t\t    \t{% include '@Pg/Paginator/components/page_nav.html.twig' %}
\t\t\t    {# {% endif %} #}
\t\t\t    {% if paginator.exports|length > 0 %}
\t\t\t    \t{% include '@Pg/Paginator/components/exports.html.twig' %}
\t\t\t    {% endif %}
\t\t\t    {% include '@Pg/Paginator/components/rows_page.html.twig' %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}

", "@Pg/Paginator/components/footer.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/footer.html.twig");
    }
}
