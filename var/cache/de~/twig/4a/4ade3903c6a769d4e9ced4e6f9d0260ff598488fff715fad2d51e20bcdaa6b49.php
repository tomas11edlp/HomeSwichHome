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

/* @Pg/Paginator/layouts/paginator.html.twig */
class __TwigTemplate_1754728ab89350e89ef20c01f8608f383bd137eefbc79427564f09151ebca302 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Pg/Paginator/layouts/paginator_baseinline.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator.html.twig"));

        $this->parent = $this->loadTemplate("@Pg/Paginator/layouts/paginator_baseinline.html.twig", "@Pg/Paginator/layouts/paginator.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        $this->loadTemplate("@Pg/Paginator/components/js_init.html.twig", "@Pg/Paginator/layouts/paginator.html.twig", 5)->display($context);
        // line 6
        echo "    <script type=\"text/javascript\">
        var pgroute = \"\"
        function pgsubmit(btnSort = false) {

            if (btnSort) {
                var content = true
                    ? '<i class=\"fa fa-spinner fa-spin\"></i>'
                    : '<i class=\"fa fa-search\"></i>'

                \$('#sort-'+form).html(content)

            } else {
                loaderButton();
            }
            \$('#'+form).submit()
        }
    </script>
    ";
        // line 23
        $this->loadTemplate("@Pg/Paginator/components/js.html.twig", "@Pg/Paginator/layouts/paginator.html.twig", 23)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/layouts/paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  72 => 6,  70 => 5,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Pg/Paginator/layouts/paginator_baseinline.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    {% include '@Pg/Paginator/components/js_init.html.twig' %}
    <script type=\"text/javascript\">
        var pgroute = \"\"
        function pgsubmit(btnSort = false) {

            if (btnSort) {
                var content = true
                    ? '<i class=\"fa fa-spinner fa-spin\"></i>'
                    : '<i class=\"fa fa-search\"></i>'

                \$('#sort-'+form).html(content)

            } else {
                loaderButton();
            }
            \$('#'+form).submit()
        }
    </script>
    {% include '@Pg/Paginator/components/js.html.twig' %}
{% endblock %}
", "@Pg/Paginator/layouts/paginator.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/layouts/paginator.html.twig");
    }
}
