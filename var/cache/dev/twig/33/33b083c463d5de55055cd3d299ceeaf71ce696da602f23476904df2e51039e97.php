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

/* estadosubasta/index.html.twig */
class __TwigTemplate_c99e2f04f24e277521f1350759af58be3faf98d137209cfddc231b0f69246e81 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estadosubasta/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "estadosubasta/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "estadosubasta/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estadosubastas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["estadoSubastas"]) || array_key_exists("estadoSubastas", $context) ? $context["estadoSubastas"] : (function () { throw new RuntimeError('Variable "estadoSubastas" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["estadoSubastum"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadosubasta_show", ["id" => twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "estado", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "descripcion", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadosubasta_show", ["id" => twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadosubasta_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["estadoSubastum"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estadoSubastum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estadosubasta_new");
        echo "\">Create a new estadoSubastum</a>
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "estadosubasta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 38,  121 => 33,  109 => 27,  103 => 24,  96 => 20,  92 => 19,  86 => 18,  83 => 17,  79 => 16,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Estadosubastas list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Descripcion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for estadoSubastum in estadoSubastas %}
            <tr>
                <td><a href=\"{{ path('estadosubasta_show', { 'id': estadoSubastum.id }) }}\">{{ estadoSubastum.id }}</a></td>
                <td>{{ estadoSubastum.estado }}</td>
                <td>{{ estadoSubastum.descripcion }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('estadosubasta_show', { 'id': estadoSubastum.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('estadosubasta_edit', { 'id': estadoSubastum.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('estadosubasta_new') }}\">Create a new estadoSubastum</a>
        </li>
    </ul>
{% endblock %}
", "estadosubasta/index.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/estadosubasta/index.html.twig");
    }
}
