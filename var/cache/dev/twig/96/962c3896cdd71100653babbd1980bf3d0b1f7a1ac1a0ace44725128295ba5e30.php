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

/* admin_menu.html.twig */
class __TwigTemplate_7a7dd838b51b2e5a4cd337a8270b331ebfd1cfcff8ff34ba7a05b41503cbbf81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_menu.html.twig"));

        // line 1
        echo "<div class=\"sidebar sidebar-dark bg-dark\">
    <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index");
        echo "\"><i class=\"fa fa-fw fa-link\"></i> Propiedades</a></li>
        <li>
            <a href=\"#sm_expand_1\" data-toggle=\"collapse\">
                <i class=\"fa fa-fw fa-link\"></i> Expandable Menu Item
            </a>
            <ul id=\"sm_expand_1\" class=\"list-unstyled collapse\">
                <li><a href=\"#\">Submenu Item</a></li>
                <li><a href=\"#\">Submenu Item</a></li>
            </ul>
        </li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar sidebar-dark bg-dark\">
    <ul class=\"list-unstyled\">
        <li><a href=\"{{path('propiedad_index')}}\"><i class=\"fa fa-fw fa-link\"></i> Propiedades</a></li>
        <li>
            <a href=\"#sm_expand_1\" data-toggle=\"collapse\">
                <i class=\"fa fa-fw fa-link\"></i> Expandable Menu Item
            </a>
            <ul id=\"sm_expand_1\" class=\"list-unstyled collapse\">
                <li><a href=\"#\">Submenu Item</a></li>
                <li><a href=\"#\">Submenu Item</a></li>
            </ul>
        </li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
        <li><a href=\"#\"><i class=\"fa fa-fw fa-link\"></i> Menu Item</a></li>
    </ul>
</div>", "admin_menu.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/admin_menu.html.twig");
    }
}
