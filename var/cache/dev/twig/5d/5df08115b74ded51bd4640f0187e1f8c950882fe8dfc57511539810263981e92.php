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
        echo "<nav class=\"navbar navbar-expand navbar-dark bg-secondary\">
    <!-- <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a> -->
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Logos/HSH-Logo.svg"), "html", null, true);
        echo "\"/>
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Logos/HSH-Text.svg"), "html", null, true);
        echo "\"/>
    </a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"mr-4 text-left nav-item\"> <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propiedad_index_publico");
        echo "\" class=\"text-white\"> Propiedades </a> </li>
            <li class=\"mr-4 text-left nav-item\"> <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subasta_index_publico");
        echo "\" class=\"text-white\"> Subastas </a> </li>
            <!-- <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li> -->
            ";
        // line 20
        echo " 
            ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "has", [0 => "user"], "method", false, false, false, 21) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "has", [0 => "useradmin"], "method", false, false, false, 21))) {
            // line 22
            echo "                <li class=\"nav-item\">
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, false, 23), "has", [0 => "user"], "method", false, false, false, 23)) {
                // line 24
                echo "                        <div class=\"btn-group\">
                            <button class=\"btn btn-outline-light btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user\"> </i> ";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", [0 => "user"], "method", false, false, false, 26), "html", null, true);
                echo "
                            </button>
                            <div class=\"dropdown-menu text-center\" style='margin-left:-60px'>
                            Some action
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item text-danger\" href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clearsession");
                echo "\">Cerrar Sesi&oacute;n</a>
                            </div>
                        </div>
                    ";
            } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 34
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "session", [], "any", false, false, false, 34), "has", [0 => "useradmin"], "method", false, false, false, 34)) {
                // line 35
                echo "                        <div class=\"btn-group\">
                            <button class=\"btn btn-outline-light btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user\"> </i> ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "session", [], "any", false, false, false, 37), "get", [0 => "useradmin"], "method", false, false, false, 37), "html", null, true);
                echo "
                            </button>
                            <div class=\"dropdown-menu text-center\" style='margin-left:-60px'>
                                <a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminpage");
                echo "\">Administraci&oacute;n</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item text-danger\" href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("clearsession");
                echo "\">Cerrar Sesi&oacute;n</a>
                            </div>
                        </div>
                    ";
            }
            // line 46
            echo "                </li>
            ";
        } else {
            // line 48
            echo "                <li id=\"btnIngresar\" class=\"nav-item\">
                    <a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_emulado", ["tipo" => "C"]);
            echo "\" class=\"nav-link\"><i class=\"fas fa-fingerprint\"></i> Ingresar</a>
                </li>
            ";
        }
        // line 52
        echo "        </ul>
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
        return array (  136 => 52,  130 => 49,  127 => 48,  123 => 46,  116 => 42,  111 => 40,  105 => 37,  101 => 35,  99 => 34,  93 => 31,  85 => 26,  81 => 24,  79 => 23,  76 => 22,  74 => 21,  71 => 20,  65 => 11,  61 => 10,  53 => 5,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand navbar-dark bg-secondary\">
    <!-- <a class=\"sidebar-toggle mr-3\" href=\"#\"><i class=\"fa fa-bars\"></i></a> -->
    <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"{{asset('Logos/HSH-Logo.svg')}}\"/>
        <img alt=\"Porto\" width=\"120\" height=\"55\" src=\"{{asset('Logos/HSH-Text.svg')}}\"/>
    </a>

    <div class=\"navbar-collapse collapse\">
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"mr-4 text-left nav-item\"> <a href=\"{{path('propiedad_index_publico')}}\" class=\"text-white\"> Propiedades </a> </li>
            <li class=\"mr-4 text-left nav-item\"> <a href=\"{{path('subasta_index_publico')}}\" class=\"text-white\"> Subastas </a> </li>
            <!-- <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-envelope\"></i> 5</a></li>
            <li class=\"nav-item\"><a href=\"#\" class=\"nav-link\"><i class=\"fa fa-bell\"></i> 3</a></li> -->
            {#  <li class=\"nav-item dropdown\">
                <a href=\"#\" id=\"dd_user\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\"></i> John Doe</a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dd_user\">
                    <a href=\"#\" class=\"dropdown-item\">Profile</a>
                    <a href=\"#\" class=\"dropdown-item\">Logout</a>
                </div>
            </li> #} 
            {% if app.session.has('user') or app.session.has('useradmin') %}
                <li class=\"nav-item\">
                    {% if app.session.has('user') %}
                        <div class=\"btn-group\">
                            <button class=\"btn btn-outline-light btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user\"> </i> {{app.session.get('user')}}
                            </button>
                            <div class=\"dropdown-menu text-center\" style='margin-left:-60px'>
                            Some action
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item text-danger\" href=\"{{path('clearsession')}}\">Cerrar Sesi&oacute;n</a>
                            </div>
                        </div>
                    {% elseif app.session.has('useradmin') %}
                        <div class=\"btn-group\">
                            <button class=\"btn btn-outline-light btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-user\"> </i> {{app.session.get('useradmin')}}
                            </button>
                            <div class=\"dropdown-menu text-center\" style='margin-left:-60px'>
                                <a href=\"{{path('adminpage')}}\">Administraci&oacute;n</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item text-danger\" href=\"{{path('clearsession')}}\">Cerrar Sesi&oacute;n</a>
                            </div>
                        </div>
                    {% endif %}
                </li>
            {% else %}
                <li id=\"btnIngresar\" class=\"nav-item\">
                    <a href=\"{{ path('login_emulado',{'tipo':'C'}) }}\" class=\"nav-link\"><i class=\"fas fa-fingerprint\"></i> Ingresar</a>
                </li>
            {% endif %}
        </ul>
    </div>
</nav>", "header.html.twig", "/var/www/html/HomeSwichHome/app/Resources/views/header.html.twig");
    }
}
