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

/* @Pg/Paginator/components/order.html.twig */
class __TwigTemplate_c6d4d221d824293fc651fafb0aa507c9ad5ceb879947e64b90bc29199db05d04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/order.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/order.html.twig"));

        // line 1
        echo "<div class=\"col text-center text-right-not-xs ";
        echo ((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "form", [], "any", false, false, false, 1), "orderBy", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "choices", [], "any", false, false, false, 1)) == 0) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "hide", [], "any", false, false, false, 1), "order", [], "any", false, false, false, 1))) ? ("invisible") : (""));
        echo "\">
    ";
        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "form", [], "any", false, false, false, 3), "orderBy", [], "any", false, false, false, 3), 'widget', ["attr" => ["class" => "btn btn-outline-secondary btn-navbar btn-sm"]]);
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), "direction", [], "any", false, false, false, 4), 'widget', ["attr" => ["class" => "btn btn-outline-secondary btn-navbar btn-sm"]]);
        echo "
    <button class=\"btn btn-secondary btn-navbar btn-sm\" id=\"sort-";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" style=\"cursor:pointer\" type=\"button\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort"), "html", null, true);
        echo "\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort"), "html", null, true);
        echo "
    </button>
    
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  55 => 5,  51 => 4,  46 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col text-center text-right-not-xs {{ paginator.form.orderBy.vars.choices|length == 0 or paginator.hide.order ? 'invisible' : ''}}\">
    {# {{ form_label(paginator.form.orderBy, null) }} #}
    {{ form_widget(paginator.form.orderBy, { 'attr': {'class': 'btn btn-outline-secondary btn-navbar btn-sm'} }) }}
    {{ form_widget(paginator.form.direction, { 'attr': {'class': 'btn btn-outline-secondary btn-navbar btn-sm'} }) }}
    <button class=\"btn btn-secondary btn-navbar btn-sm\" id=\"sort-{{ paginator.id }}\" style=\"cursor:pointer\" type=\"button\" title=\"{{ 'Sort'|trans }}\">
        {{ 'Sort'|trans }}
    </button>
    
</div>
", "@Pg/Paginator/components/order.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/order.html.twig");
    }
}
