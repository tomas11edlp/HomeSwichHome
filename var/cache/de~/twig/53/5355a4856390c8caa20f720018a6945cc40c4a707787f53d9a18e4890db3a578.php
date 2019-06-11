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

/* @Pg/Paginator/layouts/paginator_ajax.html.twig */
class __TwigTemplate_c3c2eeaffad0c15f709a4f81446b12b6bab1f8111bab7ef9101b27fc26fa727d extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'ownJsEnd' => [$this, 'block_ownJsEnd'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "PgBundle:Paginator/layouts/paginator_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator_ajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator_ajax.html.twig"));

        $this->parent = $this->loadTemplate("PgBundle:Paginator/layouts/paginator_base.html.twig", "@Pg/Paginator/layouts/paginator_ajax.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_ownJsEnd($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ownJsEnd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ownJsEnd"));

        // line 4
        echo "    ";
        $this->displayParentBlock("ownJsEnd", $context, $blocks);
        echo "
\t";
        // line 5
        $this->loadTemplate("PgBundle:Paginator/components/js_init.html.twig", "@Pg/Paginator/layouts/paginator_ajax.html.twig", 5)->display($context);
        // line 6
        echo "    <script type=\"text/javascript\">
        var pgroute = \"\"
        function pgsubmit () {
            \$('#loader-'+form).removeClass('invisible')
            \$('#table-'+form+' table').addClass('loading')
            \$.ajax({
                url: \"\",
                type: 'post',
                data: \$('#'+form).serialize(),
            })
            .done(function(data) {
                if (data['totalRows'] == 0 && cleanVal && hide) {
                    \$('#table-container-'+form).addClass('invisible')
                } else {
                    \$('#table-container-'+form).removeClass('invisible')
                }

                \$('#table-body-'+form).html(data['html'])
                \$('#actualPage-'+form).text(\$(\"#\"+form+\" #\"+pageForm).val())
                \$('#totalRows-'+form).text(data['totalRows'])
                \$('#totalPages-'+form).text(data['totalPages'])

                \$(\"#\"+form+\" #\"+cleanForm).val(false)
                cleanVal = false
                totalPages = data['totalPages']
                pageVal = \$(\"#\"+form+\" #\"+pageForm).val()
                validatePageButtons()

                loaderButton(false)

                \$('#loader-'+form).addClass('invisible')
                \$('#table-'+form+' table').removeClass('loading')
                checkselected()
            })
            .fail(function(err) {
                console.error(\"error\", err);
            })
        }
\t</script>
\t";
        // line 45
        $this->loadTemplate("PgBundle:Paginator/components/js.html.twig", "@Pg/Paginator/layouts/paginator_ajax.html.twig", 45)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/layouts/paginator_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  72 => 6,  70 => 5,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'PgBundle:Paginator/layouts/paginator_base.html.twig' %}

{% block ownJsEnd %}
    {{ parent() }}
\t{% include 'PgBundle:Paginator/components/js_init.html.twig' %}
    <script type=\"text/javascript\">
        var pgroute = \"\"
        function pgsubmit () {
            \$('#loader-'+form).removeClass('invisible')
            \$('#table-'+form+' table').addClass('loading')
            \$.ajax({
                url: \"\",
                type: 'post',
                data: \$('#'+form).serialize(),
            })
            .done(function(data) {
                if (data['totalRows'] == 0 && cleanVal && hide) {
                    \$('#table-container-'+form).addClass('invisible')
                } else {
                    \$('#table-container-'+form).removeClass('invisible')
                }

                \$('#table-body-'+form).html(data['html'])
                \$('#actualPage-'+form).text(\$(\"#\"+form+\" #\"+pageForm).val())
                \$('#totalRows-'+form).text(data['totalRows'])
                \$('#totalPages-'+form).text(data['totalPages'])

                \$(\"#\"+form+\" #\"+cleanForm).val(false)
                cleanVal = false
                totalPages = data['totalPages']
                pageVal = \$(\"#\"+form+\" #\"+pageForm).val()
                validatePageButtons()

                loaderButton(false)

                \$('#loader-'+form).addClass('invisible')
                \$('#table-'+form+' table').removeClass('loading')
                checkselected()
            })
            .fail(function(err) {
                console.error(\"error\", err);
            })
        }
\t</script>
\t{% include 'PgBundle:Paginator/components/js.html.twig' %}
{% endblock %}
", "@Pg/Paginator/layouts/paginator_ajax.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/layouts/paginator_ajax.html.twig");
    }
}
