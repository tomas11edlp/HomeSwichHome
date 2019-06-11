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

/* @Pg/Paginator/components/page_nav.html.twig */
class __TwigTemplate_32790d026f3e5248db115c48980169d9ee4955d60e0939c46aad38aa0948cd53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/page_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/page_nav.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "filterTheme", [], "any", false, false, false, 1) == "inline")) {
            // line 2
            echo "    <div class=\"col text-center\">
        <div class=\"page-nav ";
            // line 3
            echo ((((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "totalPages", [], "any", false, false, false, 3) <= 1) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "hide", [], "any", false, false, false, 3), "pageNav", [], "any", false, false, false, 3))) ? ("") : (""));
            echo "\">
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"firstPage-";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First page"), "html", null, true);
            echo "\">
                <<
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\"  id=\"prevPage-";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous page"), "html", null, true);
            echo "\">
                <
            </button>
            <span class=\"btn btn-outline-secondary btn-navbar btn-sm\">
                <span id=\"actualPage-";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11), "page", [], "any", false, false, false, 11), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("of"), "html", null, true);
            echo " <span id=\"totalPages-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "totalPages", [], "any", false, false, false, 11), "html", null, true);
            echo "</span> ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "page", [], "any", false, false, false, 11), 'row');
            echo "
            </span>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"nextPage-";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next page"), "html", null, true);
            echo "\">
                >
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"lastPage-";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last page"), "html", null, true);
            echo "\">
                >>
            </button>
        </div>
    </div>
    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "form", [], "any", false, false, false, 21), "clean", [], "any", false, false, false, 21), 'row');
            echo "
";
        } else {
            // line 23
            echo "    <div class=\"col-sm-4 text-center\">
        <div class=\"page-nav ";
            // line 24
            echo ((((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 24, $this->source); })()), "totalPages", [], "any", false, false, false, 24) <= 1) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 24, $this->source); })()), "hide", [], "any", false, false, false, 24), "pageNav", [], "any", false, false, false, 24))) ? ("") : (""));
            echo "\">
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"firstPage-";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First page"), "html", null, true);
            echo "\">
                <<
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\"  id=\"prevPage-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous page"), "html", null, true);
            echo "\">
                <
            </button>
            <span class=\"btn btn-outline-secondary btn-navbar btn-sm\">
                <span id=\"actualPage-";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "form", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "page", [], "any", false, false, false, 32), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("of"), "html", null, true);
            echo " <span id=\"totalPages-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "totalPages", [], "any", false, false, false, 32), "html", null, true);
            echo "</span> ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 32, $this->source); })()), "form", [], "any", false, false, false, 32), "page", [], "any", false, false, false, 32), 'row');
            echo "
            </span>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"nextPage-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next page"), "html", null, true);
            echo "\">
                >
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"lastPage-";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" type=\"button\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last page"), "html", null, true);
            echo "\">
                >>
            </button>
        </div>
    </div>
    ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 42, $this->source); })()), "form", [], "any", false, false, false, 42), "clean", [], "any", false, false, false, 42), 'row');
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/page_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 42,  152 => 37,  144 => 34,  129 => 32,  120 => 28,  112 => 25,  108 => 24,  105 => 23,  100 => 21,  90 => 16,  82 => 13,  67 => 11,  58 => 7,  50 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paginator.filterTheme == 'inline' %}
    <div class=\"col text-center\">
        <div class=\"page-nav {{ ( paginator.totalPages <= 1 and not paginator.hide.pageNav ) ? '' : '' }}\">
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"firstPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'First page'|trans }}\">
                <<
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\"  id=\"prevPage-{{ paginator.id }}\" type=\"button\" title=\"{{'Previous page'|trans}}\">
                <
            </button>
            <span class=\"btn btn-outline-secondary btn-navbar btn-sm\">
                <span id=\"actualPage-{{ paginator.id }}\">{{ paginator.form.vars.value.page }}</span> {{ 'of'|trans }} <span id=\"totalPages-{{ paginator.id }}\">{{ paginator.totalPages }}</span> {{ form_row(paginator.form.page) }}
            </span>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"nextPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Next page'|trans }}\">
                >
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"lastPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Last page'|trans }}\">
                >>
            </button>
        </div>
    </div>
    {{ form_row(paginator.form.clean) }}
{% else %}
    <div class=\"col-sm-4 text-center\">
        <div class=\"page-nav {{ ( paginator.totalPages <= 1 and not paginator.hide.pageNav ) ? '' : '' }}\">
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"firstPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'First page'|trans }}\">
                <<
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\"  id=\"prevPage-{{ paginator.id }}\" type=\"button\" title=\"{{'Previous page'|trans}}\">
                <
            </button>
            <span class=\"btn btn-outline-secondary btn-navbar btn-sm\">
                <span id=\"actualPage-{{ paginator.id }}\">{{ paginator.form.vars.value.page }}</span> {{ 'of'|trans }} <span id=\"totalPages-{{ paginator.id }}\">{{ paginator.totalPages }}</span> {{ form_row(paginator.form.page) }}
            </span>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"nextPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Next page'|trans }}\">
                >
            </button>
            <button class=\"btn btn-outline-secondary btn-navbar btn-sm\" id=\"lastPage-{{ paginator.id }}\" type=\"button\" title=\"{{ 'Last page'|trans }}\">
                >>
            </button>
        </div>
    </div>
    {{ form_row(paginator.form.clean) }}
{% endif %}", "@Pg/Paginator/components/page_nav.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/page_nav.html.twig");
    }
}
