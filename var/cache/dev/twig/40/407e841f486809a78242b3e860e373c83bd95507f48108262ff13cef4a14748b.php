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

/* @Pg/Paginator/components/exports.html.twig */
class __TwigTemplate_27f3ce628bb5eaa3d51ed99520875b1e7884398cf71da89fd363851925942a8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/exports.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/exports.html.twig"));

        // line 1
        echo "<div class=\"col-lg-2  col-md-2 ";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "hide", [], "any", false, false, false, 1), "rowsPerPage", [], "any", false, false, false, 1)) ? ("col-offset-1") : (""));
        echo " small ";
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "exports", [], "any", false, false, false, 1)) > 0)) ? ("") : ("invisible"));
        echo "\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "exports", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["export"]) {
            // line 3
            echo "        <a class=\"btn btn-sm btn-";
            echo (((twig_get_attribute($this->env, $this->source, $context["export"], "type", [], "any", false, false, false, 3) == "excel")) ? ("success") : ("danger"));
            echo " export\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["export"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\" href=\"?export=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["export"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["export"], "tooltip", [], "any", false, false, false, 3), "html", null, true);
            echo "\">
            <i class=\"fa fa-file-";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["export"], "type", [], "any", false, false, false, 4), "html", null, true);
            echo "-o\" style=\"font-size: 14px;\"></i>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['export'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/exports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 7,  63 => 4,  52 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-2  col-md-2 {{ paginator.hide.rowsPerPage ? 'col-offset-1' : '' }} small {{ paginator.exports|length > 0 ? '' : 'invisible' }}\">
    {% for export in paginator.exports %}
        <a class=\"btn btn-sm btn-{{ export.type == 'excel' ? 'success' : 'danger' }} export\" id=\"{{ export.id }}\" href=\"?export={{ export.id }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"{{ export.tooltip }}\">
            <i class=\"fa fa-file-{{ export.type }}-o\" style=\"font-size: 14px;\"></i>
        </a>
    {% endfor %}
</div>
", "@Pg/Paginator/components/exports.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/exports.html.twig");
    }
}
