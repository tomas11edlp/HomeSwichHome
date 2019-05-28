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

/* @Pg/Paginator/layouts/paginator_ajax_simple.html.twig */
class __TwigTemplate_1589f338f5eca993eecb3efc3a59f610cbc5445f9f3e9f090a4e6dc2c09f9940 extends \Twig\Template
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
        return "PgBundle:Paginator/layouts/paginator_simple.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator_ajax_simple.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Pg/Paginator/layouts/paginator_ajax_simple.html.twig"));

        $this->parent = $this->loadTemplate("PgBundle:Paginator/layouts/paginator_simple.html.twig", "@Pg/Paginator/layouts/paginator_ajax_simple.html.twig", 1);
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
    <script type=\"text/javascript\">
        var form = \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
        var pageForm = \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 7, $this->source); })()), "form", [], "any", false, false, false, 7), "page", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\"
        var pageVal = \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 8, $this->source); })()), "form", [], "any", false, false, false, 8), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "page", [], "any", false, false, false, 8), "html", null, true);
        echo "\"
        var totalPages = \"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "totalPages", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
        var totalRows = \"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()), "totalRows", [], "any", false, false, false, 10), "html", null, true);
        echo "\"
        var cantForm = \"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 11, $this->source); })()), "form", [], "any", false, false, false, 11), "rowsPerPage", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\"
        var orderByForm = \"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 12, $this->source); })()), "form", [], "any", false, false, false, 12), "orderBy", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "\"
        var orderByVal = \"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "form", [], "any", false, false, false, 13), "vars", [], "any", false, false, false, 13), "value", [], "any", false, false, false, 13), "orderBy", [], "any", false, false, false, 13), "html", null, true);
        echo "\"
        var directionForm = \"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "form", [], "any", false, false, false, 14), "direction", [], "any", false, false, false, 14), "vars", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        echo "\"
        var directionVal = \"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 15, $this->source); })()), "form", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "value", [], "any", false, false, false, 15), "direction", [], "any", false, false, false, 15), "html", null, true);
        echo "\"
        var massIdsForm = \"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 16, $this->source); })()), "form", [], "any", false, false, false, 16), "massIds", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
        var massIdsVal = \"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 17, $this->source); })()), "form", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "value", [], "any", false, false, false, 17), "massIds", [], "any", false, false, false, 17), "html", null, true);
        echo "\"
        var massAllForm = \"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()), "form", [], "any", false, false, false, 18), "massAll", [], "any", false, false, false, 18), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\"
        var massAllVal = \"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 19, $this->source); })()), "form", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19), "massAll", [], "any", false, false, false, 19), "html", null, true);
        echo "\"
        var showPageNav = \"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 20, $this->source); })()), "hide", [], "any", false, false, false, 20), "pageNav", [], "any", false, false, false, 20), "html", null, true);
        echo "\"
        var cleanForm = \"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 21, $this->source); })()), "form", [], "any", false, false, false, 21), "clean", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "\"
        var cleanVal = false
        var hide = \"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 23, $this->source); })()), "hide", [], "any", false, false, false, 23), "list", [], "any", false, false, false, 23), "html", null, true);
        echo "\"

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
                            ? '<i class=\"fa fa-spinner fa-spin\" ></i>'
                            : \"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "\"
            \$('#search-'+form).html(content)
        }

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
                pgsubmit()
            })

            function search() {
                loaderButton()
                \$(\"#\"+form+\" #\"+pageForm).val(1)
                cleanMassIds()
                pgsubmit()
            }
            \$('#search-'+form).click(function () {
                search()
            })
            \$('#clean-'+form).click(function () {
                \$('#filters-'+form+' :input').val('')
                \$(\"#\"+form+\" #\"+cleanForm).val(true)
                cleanVal = true
                search()
            })
            \$('#filters-'+form+' :input').keypress(function (e) {
                if (e.keyCode == 13) {
                    cleanMassIds()
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
                    \$(this).attr('order', order)
                    \$(\"#\"+directionForm).val(order)
                }
                else {
                    \$('th.sortable').removeAttr('order')
                    \$('th.sortable i.fa').remove()
                    \$(this).attr('orden', directionVal)
                    \$(\"#\"+directionForm).val(directionVal)
                    \$(this).append('<i class=\"fa fa-sort-'+directionVal+'\"></i>')
                }
                pgsubmit()
            });

            checkselected()

            \$(\"#panel-filter-";
        // line 202
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 202, $this->source); })()), "id", [], "any", false, false, false, 202), "html", null, true);
        echo "\").click(function () {
                \$(\"#arrow-";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 203, $this->source); })()), "id", [], "any", false, false, false, 203), "html", null, true);
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
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 268, $this->source); })()), "id", [], "any", false, false, false, 268), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Pg/Paginator/layouts/paginator_ajax_simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 268,  325 => 203,  321 => 202,  198 => 82,  136 => 23,  131 => 21,  127 => 20,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  71 => 6,  65 => 4,  56 => 3,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'PgBundle:Paginator/layouts/paginator_simple.html.twig' %}

{% block ownJsEnd %}
    {{ parent() }}
    <script type=\"text/javascript\">
        var form = \"{{ paginator.id }}\"
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
                            ? '<i class=\"fa fa-spinner fa-spin\" ></i>'
                            : \"{{ 'Search'|trans }}\"
            \$('#search-'+form).html(content)
        }

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
                pgsubmit()
            })

            function search() {
                loaderButton()
                \$(\"#\"+form+\" #\"+pageForm).val(1)
                cleanMassIds()
                pgsubmit()
            }
            \$('#search-'+form).click(function () {
                search()
            })
            \$('#clean-'+form).click(function () {
                \$('#filters-'+form+' :input').val('')
                \$(\"#\"+form+\" #\"+cleanForm).val(true)
                cleanVal = true
                search()
            })
            \$('#filters-'+form+' :input').keypress(function (e) {
                if (e.keyCode == 13) {
                    cleanMassIds()
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
                    \$(this).attr('order', order)
                    \$(\"#\"+directionForm).val(order)
                }
                else {
                    \$('th.sortable').removeAttr('order')
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
{% endblock %}
", "@Pg/Paginator/layouts/paginator_ajax_simple.html.twig", "/var/www/html/HomeSwichHome/src/PgBundle/Resources/views/Paginator/layouts/paginator_ajax_simple.html.twig");
    }
}
