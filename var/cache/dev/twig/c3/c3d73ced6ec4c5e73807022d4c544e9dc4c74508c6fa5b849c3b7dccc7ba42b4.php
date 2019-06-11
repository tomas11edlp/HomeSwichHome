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

/* @Pg/Paginator/modal.html.twig */
class __TwigTemplate_24d45ed8a24a24a44ebf4ea5454e81665b55ab07774ad325e98aebce5361618c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'modal_body' => [$this, 'block_modal_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["modalId"]) || array_key_exists("modalId", $context) ? $context["modalId"] : (function () { throw new RuntimeError('Variable "modalId" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["modalTitle"]) || array_key_exists("modalTitle", $context) ? $context["modalTitle"] : (function () { throw new RuntimeError('Variable "modalTitle" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 9
        $this->displayBlock('modal_body', $context, $blocks);
        // line 10
        echo "            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default modal-cancel-";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginador"]) || array_key_exists("paginador", $context) ? $context["paginador"] : (function () { throw new RuntimeError('Variable "paginador" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        echo "</button>
                ";
        // line 13
        $context["form"] = ("#" . twig_get_attribute($this->env, $this->source, (isset($context["paginador"]) || array_key_exists("paginador", $context) ? $context["paginador"] : (function () { throw new RuntimeError('Variable "paginador" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13));
        // line 14
        echo "                <button type=\"button\" class=\"btn btn-ba\" onclick=\"\$('";
        echo twig_escape_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "').submit();\">";
        echo twig_escape_filter($this->env, (isset($context["modalSubmit"]) || array_key_exists("modalSubmit", $context) ? $context["modalSubmit"] : (function () { throw new RuntimeError('Variable "modalSubmit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_modal_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal_body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 9,  71 => 14,  69 => 13,  63 => 12,  59 => 10,  57 => 9,  51 => 6,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"{{ modalId }}\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">{{ modalTitle }}</h4>
            </div>
            <div class=\"modal-body\">
                {% block modal_body %}{% endblock %}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default modal-cancel-{{ paginador.id }}\" data-dismiss=\"modal\">{{ 'Cancel'|trans }}</button>
                {% set form = '#'~ paginador.id %}
                <button type=\"button\" class=\"btn btn-ba\" onclick=\"\$('{{ form }}').submit();\">{{ modalSubmit }}</button>
            </div>
        </div>
    </div>
</div>
", "@Pg/Paginator/modal.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/modal.html.twig");
    }
}
