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

/* @Pg/Paginator/components/js_init.html.twig */
class __TwigTemplate_08e1684979b5c01223403b8e1070d7077710806d21afd673e964d2e3859a86bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/js_init.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/js_init.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">

\tvar form = \"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    var pageForm = \"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 4, $this->source); })()), "form", [], "any", false, false, false, 4), "page", [], "any", false, false, false, 4), "vars", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
    var pageVal = \"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 5, $this->source); })()), "form", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "value", [], "any", false, false, false, 5), "page", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
    var totalPages = \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "totalPages", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
    var totalRows = \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "totalRows", [], "any", false, false, false, 7), "html", null, true);
        echo "\"
    var cantForm = \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "form", [], "any", false, false, false, 8), "rowsPerPage", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
    var orderByForm = \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "form", [], "any", false, false, false, 9), "orderBy", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
    var orderByVal = \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "form", [], "any", false, false, false, 10), "vars", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10), "orderBy", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
    var directionForm = \"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "direction", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
    var directionVal = \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "form", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "value", [], "any", false, false, false, 12), "direction", [], "any", false, false, false, 12), "html", null, true);
        echo "\"
    var massIdsForm = \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "form", [], "any", false, false, false, 13), "massIds", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
    var massIdsVal = \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "form", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "value", [], "any", false, false, false, 14), "massIds", [], "any", false, false, false, 14), "html", null, true);
        echo "\"
    var massAllForm = \"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), "massAll", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\"
    var massAllVal = \"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "form", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "massAll", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
    var showPageNav = \"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 17, $this->source); })()), "hide", [], "any", false, false, false, 17), "pageNav", [], "any", false, false, false, 17), "html", null, true);
        echo "\"
    var cleanForm = \"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18), "clean", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
    var cleanVal = false
    var hide = \"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 20, $this->source); })()), "hide", [], "any", false, false, false, 20), "list", [], "any", false, false, false, 20), "html", null, true);
        echo "\"

    console.log(cantForm)

    \$(\"#\"+form+\" #\"+cleanForm).val(false)

    function validatePageButtons() {
        if (totalPages <= 1 && !showPageNav) {
            \$('#'+form+\" .page-nav\").addClass('invisible')
        } else {
            \$('#'+form+\" .page-nav\").removeClass('invisible')
        }
        \$('#prevPage-'+form).attr('disabled',
              (+\$(\"#\"+form+\" #\"+pageForm).val() <= 1))
        \$('#nextPage-'+form).attr('disabled',
            ( parseInt(totalPages) <= parseInt(pageVal) ))
        \$('#lastPage-'+form).attr('disabled',
            ( parseInt(totalPages) <= parseInt(pageVal) ))
        \$('#firstPage-'+form).attr('disabled',
            (+\$(\"#\"+form+\" #\"+pageForm).val() <= 1))
    }

    function cleanMassIds() {
        \$(\"#\"+form+\" #\"+massIdsForm).val('')
        massIdsVal = null
        \$(\"#\"+form+\" #\"+massAllForm).val(false)
        massAllVal = false
    }

    function checkselected() {
        if (\$('#'+form+' #'+massIdsForm).val()) {
            var arr = \$('#'+form+' #'+massIdsForm).val().split('#')
            for (var i = 0; i < arr.length; i++) {
                \$('#'+form+' #massaction'+arr[i]).attr('checked', 'checked')
            }
            var count = arr.length
            if (arr.length > 0 && arr[0] == \"\") {
                count--
            }
            \$('#'+form+' #selected-count').text(count)
        }
        else {
            \$('#'+form+' #selected-count').text(0)
        }

        var all = \$('#'+form+' .massaction').length
        var selected = \$('#'+form+' .massaction:checked').length
        var value = all === selected
        var ma = \$('#'+form+' #massaction-all')[0]
        if (ma !== undefined) {
            ma.checked = value
        }
        \$('#'+form+' #'+massAllForm).val(value)
    }

    function loaderButton(active) {

        if (active === undefined) {
            active = true
        }
        var content = active
                        ? '<i class=\"fa fa-spinner fa-spin\"></i>'
                        : '<i class=\"fa fa-search\"></i>'

        \$('#search-'+form).html(content)
    }
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/js_init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">

\tvar form = \"{{ paginator.id }}\"
    var pageForm = \"{{ paginator.form.page.vars.id }}\"
    var pageVal = \"{{ paginator.form.vars.value.page }}\"
    var totalPages = \"{{ paginator.totalPages }}\"
    var totalRows = \"{{ paginator.totalRows }}\"
    var cantForm = \"{{ paginator.form.rowsPerPage.vars.id }}\"
    var orderByForm = \"{{ paginator.form.orderBy.vars.id }}\"
    var orderByVal = \"{{ paginator.form.vars.value.orderBy }}\"
    var directionForm = \"{{ paginator.form.direction.vars.id }}\"
    var directionVal = \"{{ paginator.form.vars.value.direction }}\"
    var massIdsForm = \"{{ paginator.form.massIds.vars.id }}\"
    var massIdsVal = \"{{ paginator.form.vars.value.massIds }}\"
    var massAllForm = \"{{ paginator.form.massAll.vars.id }}\"
    var massAllVal = \"{{ paginator.form.vars.value.massAll }}\"
    var showPageNav = \"{{ paginator.hide.pageNav }}\"
    var cleanForm = \"{{ paginator.form.clean.vars.id }}\"
    var cleanVal = false
    var hide = \"{{ paginator.hide.list }}\"

    console.log(cantForm)

    \$(\"#\"+form+\" #\"+cleanForm).val(false)

    function validatePageButtons() {
        if (totalPages <= 1 && !showPageNav) {
            \$('#'+form+\" .page-nav\").addClass('invisible')
        } else {
            \$('#'+form+\" .page-nav\").removeClass('invisible')
        }
        \$('#prevPage-'+form).attr('disabled',
              (+\$(\"#\"+form+\" #\"+pageForm).val() <= 1))
        \$('#nextPage-'+form).attr('disabled',
            ( parseInt(totalPages) <= parseInt(pageVal) ))
        \$('#lastPage-'+form).attr('disabled',
            ( parseInt(totalPages) <= parseInt(pageVal) ))
        \$('#firstPage-'+form).attr('disabled',
            (+\$(\"#\"+form+\" #\"+pageForm).val() <= 1))
    }

    function cleanMassIds() {
        \$(\"#\"+form+\" #\"+massIdsForm).val('')
        massIdsVal = null
        \$(\"#\"+form+\" #\"+massAllForm).val(false)
        massAllVal = false
    }

    function checkselected() {
        if (\$('#'+form+' #'+massIdsForm).val()) {
            var arr = \$('#'+form+' #'+massIdsForm).val().split('#')
            for (var i = 0; i < arr.length; i++) {
                \$('#'+form+' #massaction'+arr[i]).attr('checked', 'checked')
            }
            var count = arr.length
            if (arr.length > 0 && arr[0] == \"\") {
                count--
            }
            \$('#'+form+' #selected-count').text(count)
        }
        else {
            \$('#'+form+' #selected-count').text(0)
        }

        var all = \$('#'+form+' .massaction').length
        var selected = \$('#'+form+' .massaction:checked').length
        var value = all === selected
        var ma = \$('#'+form+' #massaction-all')[0]
        if (ma !== undefined) {
            ma.checked = value
        }
        \$('#'+form+' #'+massAllForm).val(value)
    }

    function loaderButton(active) {

        if (active === undefined) {
            active = true
        }
        var content = active
                        ? '<i class=\"fa fa-spinner fa-spin\"></i>'
                        : '<i class=\"fa fa-search\"></i>'

        \$('#search-'+form).html(content)
    }
</script>
", "@Pg/Paginator/components/js_init.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/js_init.html.twig");
    }
}
