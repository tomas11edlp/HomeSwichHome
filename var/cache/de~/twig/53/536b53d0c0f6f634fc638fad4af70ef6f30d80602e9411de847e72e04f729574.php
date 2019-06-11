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

/* @Pg/Paginator/components/css.html.twig */
class __TwigTemplate_ec9c9526696119b895550ed11f8e3fdec8244db8374a81f2b276a09f86219596 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/css.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/css.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    #list label.required::after {
        content: '';
    }

    table th {
        font-size: 15px;
    }

    th.sortable {
        cursor: pointer;
    }

    .center {
        text-align: center;
    }

    .fa-sort-asc, .fa-sort-desc {
        color: #9aca3c;
        margin-left: 5px;
    }

    .fa-sort-asc::before {
        vertical-align: -2px;
    }

    .fa-sort-desc::before {
        vertical-align: 2px;
    }

    .panel-title {
        position: relative;
    }

    .panel-title .arrow {
        position: absolute;
        right: 0;
    }

    #selected {
        margin: auto 20px;
    }

    .panel-heading > a {
    \tcolor: black;
    }

    .table-responsive {
    \toverflow: visible;
    }

    .pg-table {
        position: relative;
    }
    .pg-table table.loading {
        opacity: 0.6;
    }
    .table-loader {
        position: absolute;
        top: 45%;
        left: 48%;
        font-size: 32px;
    }

</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/css.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
    #list label.required::after {
        content: '';
    }

    table th {
        font-size: 15px;
    }

    th.sortable {
        cursor: pointer;
    }

    .center {
        text-align: center;
    }

    .fa-sort-asc, .fa-sort-desc {
        color: #9aca3c;
        margin-left: 5px;
    }

    .fa-sort-asc::before {
        vertical-align: -2px;
    }

    .fa-sort-desc::before {
        vertical-align: 2px;
    }

    .panel-title {
        position: relative;
    }

    .panel-title .arrow {
        position: absolute;
        right: 0;
    }

    #selected {
        margin: auto 20px;
    }

    .panel-heading > a {
    \tcolor: black;
    }

    .table-responsive {
    \toverflow: visible;
    }

    .pg-table {
        position: relative;
    }
    .pg-table table.loading {
        opacity: 0.6;
    }
    .table-loader {
        position: absolute;
        top: 45%;
        left: 48%;
        font-size: 32px;
    }

</style>
", "@Pg/Paginator/components/css.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/css.html.twig");
    }
}
