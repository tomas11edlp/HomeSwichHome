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

/* header.html.twig */
class __TwigTemplate_529df4ee626d8db6fa9fd475e089aed1f870cb5cdc9bf16c03236fef81962381 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand navbar-dark bg-dark\">
    <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"#\">
    </a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li>
            <!-- <li class=\"nav-item dropdown\">
                <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Doe</a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"#\" class=\"dropdown-item\">Logout</a>
                </div>
            </li> -->
            <li class=\"nav-item\">
                <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_emulado_admin");
        echo "\" class=\"nav-link\"><i class=\"fa fa-person\"></i> Ingresar</a>
            </li>
        </ul>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand navbar-dark bg-dark\">
    <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a>
    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"#\">
    </a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li>
            <!-- <li class=\"nav-item dropdown\">
                <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> John Doe</a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"#\" class=\"dropdown-item\">Logout</a>
                </div>
            </li> -->
            <li class=\"nav-item\">
                <a href=\"{{ path('login_emulado_admin') }}\" class=\"nav-link\"><i class=\"fa fa-person\"></i> Ingresar</a>
            </li>
        </ul>
    </div>
</nav>", "header.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/header.html.twig");
    }
}
