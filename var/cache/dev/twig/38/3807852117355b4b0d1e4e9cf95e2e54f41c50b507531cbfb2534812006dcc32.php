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

/* subasta/indexPublico.html.twig */
class __TwigTemplate_b2945f6a3aac9130800ff06a454fb61e3ff1a28242a1abd6d61645d6a73fec26 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'paginator_table_header' => [$this, 'block_paginator_table_header'],
            'paginator_table_data' => [$this, 'block_paginator_table_data'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Pg/Paginator/tableinline.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/indexPublico.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subasta/indexPublico.html.twig"));

        $this->parent = $this->loadTemplate("@Pg/Paginator/tableinline.html.twig", "subasta/indexPublico.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <h2 class=\"mb-5\"> Subastas en curso </h2>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_paginator_table_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator_table_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator_table_header"));

        // line 8
        echo "    ";
        // line 9
        echo "    <th class=\"col-2\"></th>
    <th class=\"\">Propiedad</th>
    <th class=\"\">Semana a Reservar</th>
    <th class=\"\">Fecha fin de la subasta</th>
    <th class=\"\"> Monto base </th>
    <th class=\"\"> &Uacute;ltima oferta </th>
    <th ></th>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_paginator_table_data($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator_table_data"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "paginator_table_data"));

        // line 19
        echo "    <td class=\"align-middle\">  
        <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "foto", [], "any", true, true, false, 20)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "foto", [], "any", false, false, false, 20), "https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")) : ("https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1")), "html", null, true);
        echo "\" ";
        echo " border=\"0\" style=\"max-width:50%; max-heigth:50%;\">  
    </td>
    <td class=\"align-middle\">
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_show_publico", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "propiedad", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)]), "html", null, true);
        echo "\" title=\"Detalles de la propiedad\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 23, $this->source); })()), "propiedad", [], "any", false, false, false, 23), "html", null, true);
        echo "</a>
    </td>
    <td class=\"align-middle\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "semanaReserva", [], "any", false, false, false, 25), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "anioReserva", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
    <td class=\"align-middle\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "fechaFin", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</td>

    <td class=\"align-middle\"> \$ ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 28, $this->source); })()), "montoBase", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>

    ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "pujaGanadora", [], "any", false, false, false, 30)) {
            // line 31
            echo "        <td class=\"align-middle\">\$ ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "pujaGanadora", [], "any", false, true, false, 31), "monto", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "pujaGanadora", [], "any", false, true, false, 31), "monto", [], "any", false, false, false, 31), " ")) : (" ")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "pujaGanadora", [], "any", false, true, false, 31), "usuario", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "pujaGanadora", [], "any", false, true, false, 31), "usuario", [], "any", false, false, false, 31), " ")) : (" ")), "html", null, true);
            echo "</td>
    ";
        } else {
            // line 33
            echo "        <td class=\"align-middle\"> Sin Pujas </td>
    ";
        }
        // line 35
        echo "    
    <td class=\"align-middle\">
        <a class=\"ml-4 btn btn-outline-primary\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subasta_show_publico", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        echo "\" title=\"Ver\"> Detalles </a>
    </td>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subasta/indexPublico.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 37,  162 => 35,  158 => 33,  150 => 31,  148 => 30,  143 => 28,  138 => 26,  132 => 25,  125 => 23,  118 => 20,  115 => 19,  106 => 18,  89 => 9,  87 => 8,  78 => 7,  67 => 4,  58 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Pg/Paginator/tableinline.html.twig' %}

{% block title %}
    <h2 class=\"mb-5\"> Subastas en curso </h2>
{% endblock %}

{% block paginator_table_header %}
    {# <th></th> #}
    <th class=\"col-2\"></th>
    <th class=\"\">Propiedad</th>
    <th class=\"\">Semana a Reservar</th>
    <th class=\"\">Fecha fin de la subasta</th>
    <th class=\"\"> Monto base </th>
    <th class=\"\"> &Uacute;ltima oferta </th>
    <th ></th>
{% endblock %}

{% block paginator_table_data %}
    <td class=\"align-middle\">  
        <img src=\"{{entity.foto|default('https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fmoorestown-mall.com%2Fnoimage.gif&f=1')}}\" {# width=\"30%\" #} border=\"0\" style=\"max-width:50%; max-heigth:50%;\">  
    </td>
    <td class=\"align-middle\">
        <a href=\"{{path('propiedad_show_publico',{'id':entity.propiedad.id})}}\" title=\"Detalles de la propiedad\">{{ entity.propiedad }}</a>
    </td>
    <td class=\"align-middle\">{{ entity.semanaReserva }}/{{ entity.anioReserva }}</td>
    <td class=\"align-middle\">{{ entity.fechaFin|date('d/m/Y') }}</td>

    <td class=\"align-middle\"> \$ {{ entity.montoBase }}</td>

    {% if entity.pujaGanadora %}
        <td class=\"align-middle\">\$ {{ entity.pujaGanadora.monto|default(' ') }} - {{ entity.pujaGanadora.usuario|default(' ') }}</td>
    {% else %}
        <td class=\"align-middle\"> Sin Pujas </td>
    {% endif %}
    
    <td class=\"align-middle\">
        <a class=\"ml-4 btn btn-outline-primary\" href=\"{{path('subasta_show_publico', {'id':entity.id}) }}\" title=\"Ver\"> Detalles </a>
    </td>
{% endblock %}", "subasta/indexPublico.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/subasta/indexPublico.html.twig");
    }
}
