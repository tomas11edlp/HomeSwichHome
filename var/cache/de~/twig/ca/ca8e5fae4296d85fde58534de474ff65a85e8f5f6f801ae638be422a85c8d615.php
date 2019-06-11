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

/* @Pg/Paginator/components/js.html.twig */
class __TwigTemplate_d26f05c18b46f7cdcc4b60f987056df35121f9f9b48b8167fbf402c5e7be2f4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/components/js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(function () {
        validatePageButtons()

        \$('#prevPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(+\$(\"#\"+form+\" #\"+pageForm).val() - 1)
            pgsubmit()
        })
        \$('#nextPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(+\$(\"#\"+form+\" #\"+pageForm).val() + 1)
            pgsubmit()
        })
        \$('#firstPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit()
        })
        \$('#lastPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(totalPages)
            pgsubmit()
        })
        \$(\"#\"+form+\" #\"+cantForm).change(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit()
        })
        \$('#sort-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit(true)
        })

        function search() {
            loaderButton()
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            cleanMassIds()
            pgsubmit()
        }
        \$('#search-'+form).click(function () {
            search();
        })
        \$('#clean-'+form).click(function () {
            \$('#filters-'+form+' :input').val('')
            \$(\"#\"+form+\" #\"+cleanForm).val(true)
            cleanVal = true
            search()
        })
        \$('#filters-'+form+' :input').keypress(function (e) {
            if (e.keyCode == 13) {
            \tcleanMassIds()
                search()
            }
        })

        \$('th.sortable').each(function () {
            var by = \$(this).attr('sort')
            if (by == orderByVal) {
                \$(this).attr('order', directionVal)
                \$(this).append('<i class=\"fa fa-sort-'+directionVal+'\"></i>')
            }
        })
        \$('th.sortable').click(function () {
            var by = \$(this).attr('sort')
            var order = \$(this).attr('order')
            \$(\"#\"+orderByForm).val(by)
            \$(\"#\"+pageForm).val(1)
            if (order) {
                \$(this).find('i.fa').toggleClass('fa-sort-asc fa-sort-desc')
                order = order == 'asc' ? 'desc' : 'asc'
            \t\$(this).attr('order', order)
                \$(\"#\"+directionForm).val(order)
            }
            else {
            \t\$('th.sortable').removeAttr('order')
                \$('th.sortable i.fa').remove()
                \$(this).attr('orden', directionVal)
                \$(\"#\"+directionForm).val(directionVal)
                \$(this).append('<i class=\"fa fa-sort-'+directionVal+'\"></i>')
            }
            pgsubmit()
        });

        checkselected()

        \$(\"#panel-filter-";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82), "html", null, true);
        echo "\").click(function () {
            \$(\"#arrow-";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "html", null, true);
        echo "\").toggleClass('fa-chevron-down fa-chevron-up')
        })

        \$('[data-toggle=\"tooltip\"]').tooltip()

        \$(document).on('click', '.massaction',function (e) {
            var value = \$(this).val()
            if (\$(this).is(':checked')) {
                \$('#'+form+' #'+massIdsForm).val(\$('#'+form+' #'+massIdsForm).val()+'#'+value)
                var count = parseInt(\$('#selected-count').text()) + 1
            }
            else {
                var arr = []
                if (\$('#'+form+' #'+massAllForm).val() == 'true') {
                    \$('#'+form+' #'+massAllForm).val(false)
                    \$('#massaction-all')[0].checked = false
                }
                arr = \$('#'+form+' #'+massIdsForm).val().split('#')
                var index = arr.indexOf(value)
                arr.splice(index, 1)
                var count = arr.length
                if (arr.length > 0 && arr[0] == \"\") {
                    count--
                }
                var result = arr.join('#')
                \$('#'+form+' #'+massIdsForm).val(result)
            }
            \$('#'+form+' #selected-count').text(count)
        })

        \$(document).on('click', '#massaction-all', function (e) {
            var acc = this.checked ? true : false
            \$('#'+form+' #'+massAllForm).val(acc)
            massAllVal = acc
            if (acc) {
                \$('#'+form+' .massaction:not(:checked)').trigger(\"click\")
            } else {
                \$('#'+form+' .massaction:checked').trigger(\"click\")
            }
        })

        \$(document).on('click', '.dropdown .action', function (e) {
            e.preventDefault()
            if (\$('#'+form+' #selected-count').text() == '0') {
                \$('#'+form+' #mass-count-error').removeClass('invisible')
                setTimeout(function () {
                    \$('#'+form+' #mass-count-error').addClass('invisible')
                }, 2500)
            } else {
                var modal = \$(this).attr('modal')
                var action = pgroute +\"?mass=\" + \$(this).attr('id')
                var x = \$('#'+form).attr('action')
                var i = x.indexOf('?')
                if (i > -1) {
                    x = x.substr(0, i)
                }
                \$('#'+form).attr('action', x+action)
                if (modal != '') {
                    \$('#'+modal).modal('show')
                } else {
                    \$('#'+form).submit()
                }
            }
        })

        \$(\".modal-cancel-";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148), "html", null, true);
        echo "\").click(function () {
            var action = \$('#'+form).attr('action')
            var i = action.indexOf('?')
            if (i > -1) {
                action = action.substr(0, i)
            }
            \$('#'+form).attr('action', action)
        })
    });
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/components/js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 148,  128 => 83,  124 => 82,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(function () {
        validatePageButtons()

        \$('#prevPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(+\$(\"#\"+form+\" #\"+pageForm).val() - 1)
            pgsubmit()
        })
        \$('#nextPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(+\$(\"#\"+form+\" #\"+pageForm).val() + 1)
            pgsubmit()
        })
        \$('#firstPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit()
        })
        \$('#lastPage-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(totalPages)
            pgsubmit()
        })
        \$(\"#\"+form+\" #\"+cantForm).change(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit()
        })
        \$('#sort-'+form).click(function () {
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            pgsubmit(true)
        })

        function search() {
            loaderButton()
            \$(\"#\"+form+\" #\"+pageForm).val(1)
            cleanMassIds()
            pgsubmit()
        }
        \$('#search-'+form).click(function () {
            search();
        })
        \$('#clean-'+form).click(function () {
            \$('#filters-'+form+' :input').val('')
            \$(\"#\"+form+\" #\"+cleanForm).val(true)
            cleanVal = true
            search()
        })
        \$('#filters-'+form+' :input').keypress(function (e) {
            if (e.keyCode == 13) {
            \tcleanMassIds()
                search()
            }
        })

        \$('th.sortable').each(function () {
            var by = \$(this).attr('sort')
            if (by == orderByVal) {
                \$(this).attr('order', directionVal)
                \$(this).append('<i class=\"fa fa-sort-'+directionVal+'\"></i>')
            }
        })
        \$('th.sortable').click(function () {
            var by = \$(this).attr('sort')
            var order = \$(this).attr('order')
            \$(\"#\"+orderByForm).val(by)
            \$(\"#\"+pageForm).val(1)
            if (order) {
                \$(this).find('i.fa').toggleClass('fa-sort-asc fa-sort-desc')
                order = order == 'asc' ? 'desc' : 'asc'
            \t\$(this).attr('order', order)
                \$(\"#\"+directionForm).val(order)
            }
            else {
            \t\$('th.sortable').removeAttr('order')
                \$('th.sortable i.fa').remove()
                \$(this).attr('orden', directionVal)
                \$(\"#\"+directionForm).val(directionVal)
                \$(this).append('<i class=\"fa fa-sort-'+directionVal+'\"></i>')
            }
            pgsubmit()
        });

        checkselected()

        \$(\"#panel-filter-{{ paginator.id }}\").click(function () {
            \$(\"#arrow-{{ paginator.id }}\").toggleClass('fa-chevron-down fa-chevron-up')
        })

        \$('[data-toggle=\"tooltip\"]').tooltip()

        \$(document).on('click', '.massaction',function (e) {
            var value = \$(this).val()
            if (\$(this).is(':checked')) {
                \$('#'+form+' #'+massIdsForm).val(\$('#'+form+' #'+massIdsForm).val()+'#'+value)
                var count = parseInt(\$('#selected-count').text()) + 1
            }
            else {
                var arr = []
                if (\$('#'+form+' #'+massAllForm).val() == 'true') {
                    \$('#'+form+' #'+massAllForm).val(false)
                    \$('#massaction-all')[0].checked = false
                }
                arr = \$('#'+form+' #'+massIdsForm).val().split('#')
                var index = arr.indexOf(value)
                arr.splice(index, 1)
                var count = arr.length
                if (arr.length > 0 && arr[0] == \"\") {
                    count--
                }
                var result = arr.join('#')
                \$('#'+form+' #'+massIdsForm).val(result)
            }
            \$('#'+form+' #selected-count').text(count)
        })

        \$(document).on('click', '#massaction-all', function (e) {
            var acc = this.checked ? true : false
            \$('#'+form+' #'+massAllForm).val(acc)
            massAllVal = acc
            if (acc) {
                \$('#'+form+' .massaction:not(:checked)').trigger(\"click\")
            } else {
                \$('#'+form+' .massaction:checked').trigger(\"click\")
            }
        })

        \$(document).on('click', '.dropdown .action', function (e) {
            e.preventDefault()
            if (\$('#'+form+' #selected-count').text() == '0') {
                \$('#'+form+' #mass-count-error').removeClass('invisible')
                setTimeout(function () {
                    \$('#'+form+' #mass-count-error').addClass('invisible')
                }, 2500)
            } else {
                var modal = \$(this).attr('modal')
                var action = pgroute +\"?mass=\" + \$(this).attr('id')
                var x = \$('#'+form).attr('action')
                var i = x.indexOf('?')
                if (i > -1) {
                    x = x.substr(0, i)
                }
                \$('#'+form).attr('action', x+action)
                if (modal != '') {
                    \$('#'+modal).modal('show')
                } else {
                    \$('#'+form).submit()
                }
            }
        })

        \$(\".modal-cancel-{{ paginator.id }}\").click(function () {
            var action = \$('#'+form).attr('action')
            var i = action.indexOf('?')
            if (i > -1) {
                action = action.substr(0, i)
            }
            \$('#'+form).attr('action', action)
        })
    });
</script>
", "@Pg/Paginator/components/js.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/components/js.html.twig");
    }
}
