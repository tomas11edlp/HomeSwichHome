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

/* @Pg/Paginator/components/mass_actions.html.twig */
class __TwigTemplate_9e03c1fdacc41c9cd388a837652a4246060d59e0a6ee275e8e528c2a71dd328a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/mass_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/mass_actions.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 1, $this->source); })()), "form", [], "any", false, false, false, 1), "massIds", [], "any", false, false, false, 1), 'row');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 2, $this->source); })()), "form", [], "any", false, false, false, 2), "massAll", [], "any", false, false, false, 2), 'row');
        echo "
";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "filterTheme", [], "any", false, false, false, 3) == "inline")) {
            // line 4
            echo "    <div class=\"col align-self-start justify-content-center\">
        <div class=\"dropdown text-left\">
            ";
            // line 6
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "massActions", [], "any", false, false, false, 6)) > 0)) {
                // line 7
                echo "            \t";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "massActions", [], "any", false, false, false, 7)) > 1)) {
                    // line 8
                    echo "                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMassActions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
                    echo " <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMassActions\">
                        ";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "massActions", [], "any", false, false, false, 13));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 14
                        echo "                            <li>
                                <a href=\"#\" id=\"";
                        // line 15
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 15), "html", null, true);
                        echo "\" modal=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "confirmationModal", [], "any", false, false, false, 15), "html", null, true);
                        echo "\" class=\"action\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 15), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "                    </ul>
                ";
                } else {
                    // line 20
                    echo "                \t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 20, $this->source); })()), "massActions", [], "any", false, false, false, 20));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 21
                        echo "                        <a href=\"#\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 21), "html", null, true);
                        echo "\" modal=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "confirmationModal", [], "any", false, false, false, 21), "html", null, true);
                        echo "\" class=\"btn btn-primary action\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 21), "html", null, true);
                        echo "</a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "            \t";
                }
                // line 24
                echo "                <span id=\"selected\">
                    <strong>";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
                echo ":</strong> <span id=\"selected-count\"></span>
                </span>
            ";
            }
            // line 28
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
            echo ":</strong> <span id=\"totalRows-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "totalRows", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        } else {
            // line 32
            echo "    <div class=\"col-sm-4 text-left\">
        <div class=\"dropdown text-left\">
            ";
            // line 34
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 34, $this->source); })()), "massActions", [], "any", false, false, false, 34)) > 0)) {
                // line 35
                echo "                ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 35, $this->source); })()), "massActions", [], "any", false, false, false, 35)) > 1)) {
                    // line 36
                    echo "                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMassActions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
                    echo " <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMassActions\">
                        ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 41, $this->source); })()), "massActions", [], "any", false, false, false, 41));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 42
                        echo "                            <li>
                                <a href=\"#\" id=\"";
                        // line 43
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 43), "html", null, true);
                        echo "\" modal=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "confirmationModal", [], "any", false, false, false, 43), "html", null, true);
                        echo "\" class=\"action\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 43), "html", null, true);
                        echo "</a>
                            </li>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                    </ul>
                ";
                } else {
                    // line 48
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 48, $this->source); })()), "massActions", [], "any", false, false, false, 48));
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 49
                        echo "                        <a href=\"#\" id=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "id", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" modal=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "confirmationModal", [], "any", false, false, false, 49), "html", null, true);
                        echo "\" class=\"btn btn-primary action\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "title", [], "any", false, false, false, 49), "html", null, true);
                        echo "</a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                ";
                }
                // line 52
                echo "                <span id=\"selected\">
                    <strong>";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Selected"), "html", null, true);
                echo ":</strong> <span id=\"selected-count\"></span>
                </span>
            ";
            }
            // line 56
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
            echo ":</strong> <span id=\"totalRows-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 56, $this->source); })()), "totalRows", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/mass_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 56,  203 => 53,  200 => 52,  197 => 51,  184 => 49,  179 => 48,  175 => 46,  162 => 43,  159 => 42,  155 => 41,  149 => 38,  145 => 36,  142 => 35,  140 => 34,  136 => 32,  124 => 28,  118 => 25,  115 => 24,  112 => 23,  99 => 21,  94 => 20,  90 => 18,  77 => 15,  74 => 14,  70 => 13,  64 => 10,  60 => 8,  57 => 7,  55 => 6,  51 => 4,  49 => 3,  45 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_row(paginator.form.massIds) }}
{{ form_row(paginator.form.massAll) }}
{% if paginator.filterTheme == 'inline' %}
    <div class=\"col align-self-start justify-content-center\">
        <div class=\"dropdown text-left\">
            {% if paginator.massActions|length > 0 %}
            \t{% if paginator.massActions|length > 1 %}
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMassActions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        {{ 'Actions'|trans }} <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMassActions\">
                        {% for action in paginator.massActions %}
                            <li>
                                <a href=\"#\" id=\"{{ action.id }}\" modal=\"{{ action.confirmationModal }}\" class=\"action\">{{ action.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                \t{% for action in paginator.massActions %}
                        <a href=\"#\" id=\"{{ action.id }}\" modal=\"{{ action.confirmationModal }}\" class=\"btn btn-primary action\">{{ action.title }}</a>
                    {% endfor %}
            \t{% endif %}
                <span id=\"selected\">
                    <strong>{{ 'Selected'|trans }}:</strong> <span id=\"selected-count\"></span>
                </span>
            {% endif %}
            <strong>{{ 'Total'|trans }}:</strong> <span id=\"totalRows-{{ paginator.id }}\">{{ paginator.totalRows }}</span>
        </div>
    </div>
{% else %}
    <div class=\"col-sm-4 text-left\">
        <div class=\"dropdown text-left\">
            {% if paginator.massActions|length > 0 %}
                {% if paginator.massActions|length > 1 %}
                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\" id=\"dropdownMassActions\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                        {{ 'Actions'|trans }} <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMassActions\">
                        {% for action in paginator.massActions %}
                            <li>
                                <a href=\"#\" id=\"{{ action.id }}\" modal=\"{{ action.confirmationModal }}\" class=\"action\">{{ action.title }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                {% else %}
                    {% for action in paginator.massActions %}
                        <a href=\"#\" id=\"{{ action.id }}\" modal=\"{{ action.confirmationModal }}\" class=\"btn btn-primary action\">{{ action.title }}</a>
                    {% endfor %}
                {% endif %}
                <span id=\"selected\">
                    <strong>{{ 'Selected'|trans }}:</strong> <span id=\"selected-count\"></span>
                </span>
            {% endif %}
            <strong>{{ 'Total'|trans }}:</strong> <span id=\"totalRows-{{ paginator.id }}\">{{ paginator.totalRows }}</span>
        </div>
    </div>
{% endif %}
", "@Pg/Paginator/components/mass_actions.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/mass_actions.html.twig");
    }
}
