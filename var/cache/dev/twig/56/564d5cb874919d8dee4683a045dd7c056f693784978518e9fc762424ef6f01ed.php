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

/* @Pg/Paginator/components/rows_page.html.twig */
class __TwigTemplate_7264843cf174a19ba1a4e5e3f41d06e66b53817c141565664823ae1586348638 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/rows_page.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/rows_page.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "filterTheme", [], "any", false, false, false, 1) == "inline")) {
            // line 2
            echo "\t<div class=\"col text-right align-self-end small ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "hide", [], "any", false, false, false, 2), "rowsPerPage", [], "any", false, false, false, 2)) ? ("invisible") : (""));
            echo "\">
\t    ";
            // line 3
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "form", [], "any", false, false, false, 3), "rowsPerPage", [], "any", false, false, false, 3), 'label');
            echo "
\t    ";
            // line 4
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), "rowsPerPage", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "btn btn-outline-secondary btn-navbar btn-sm"]]);
            echo "
\t</div>
";
        } else {
            // line 7
            echo "\t<div class=\"col-sm-4 text-right ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "hide", [], "any", false, false, false, 7), "rowsPerPage", [], "any", false, false, false, 7)) ? ("invisible") : (""));
            echo "\">
\t    ";
            // line 8
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "form", [], "any", false, false, false, 8), "rowsPerPage", [], "any", false, false, false, 8), 'label');
            echo "
\t    ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "form", [], "any", false, false, false, 9), "rowsPerPage", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "btn btn-outline-secondary btn-navbar btn-sm"]]);
            echo "
\t</div>
";
        }
        // line 12
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/rows_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 12,  67 => 9,  63 => 8,  58 => 7,  52 => 4,  48 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if paginator.filterTheme == 'inline' %}
\t<div class=\"col text-right align-self-end small {{ paginator.hide.rowsPerPage ? 'invisible' : '' }}\">
\t    {{ form_label(paginator.form.rowsPerPage, null) }}
\t    {{ form_widget(paginator.form.rowsPerPage, { 'attr': {'class': 'btn btn-outline-secondary btn-navbar btn-sm'} }) }}
\t</div>
{% else %}
\t<div class=\"col-sm-4 text-right {{ paginator.hide.rowsPerPage ? 'invisible' : '' }}\">
\t    {{ form_label(paginator.form.rowsPerPage, null) }}
\t    {{ form_widget(paginator.form.rowsPerPage, { 'attr': {'class': 'btn btn-outline-secondary btn-navbar btn-sm'} }) }}
\t</div>
{% endif %}


{# <div class=\"col align-self-end {{ paginator.exports|length == 0 ? 'col-sm-offset-2' : '' }} small {{ paginator.hide.rowsPerPage ? 'invisible' : '' }}\"> #}", "@Pg/Paginator/components/rows_page.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/rows_page.html.twig");
    }
}
