<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/PanelControllerTop.html.twig */
class __TwigTemplate_c76443fece4b708f6b9911d516251bd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/PanelControllerTop.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    ";
        // line 24
        $context["pageData"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        yield "    ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        yield "    <div class=\"container-fluid d-print-none\">
        <div class=\"form-row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        yield "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)), "html", null, true);
        yield "</a>
                        </li>
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            yield "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)), "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        // line 40
        yield "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", ["list"], "method", false, false, false, 41), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)), "html", null, true);
        yield "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 44)) {
            // line 45
            yield "                                ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 45), "primaryDescription", [], "method", false, false, false, 45);
            yield "
                            ";
        } else {
            // line 47
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "
                            ";
        }
        // line 49
        yield "                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"form-row\">
            ";
        // line 56
        yield "            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", ["list"], "method", false, false, false, 58), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        yield "</span>
                    </a>
                    <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 62), "url", ["edit"], "method", false, false, false, 62), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\"
                       title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 68
        yield "                ";
        yield CoreExtension::callMacro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 68, $context, $this->getSourceContext());
        yield "
                ";
        // line 70
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 70), "btnNew", [], "any", false, false, false, 70))) {
            // line 71
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 71), "url", ["new"], "method", false, false, false, 71), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        // line 76
        yield "                ";
        // line 77
        yield "                ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getRow", ["actions"], "method", false, false, false, 77), "renderTop", [], "method", false, false, false, 77);
        yield "
                ";
        // line 79
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 79) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 79), "btnPrint", [], "any", false, false, false, 79))) {
            // line 80
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 80, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 82
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("PanelControllerTop", "topButtons"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["includeView"]) {
            // line 83
            yield "                    ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/PanelControllerTop.html.twig", 83)->unwrap()->yield($context);
            // line 84
            yield "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['includeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "            </div>
            ";
        // line 87
        yield "            <div class=\"col-md d-none d-md-inline-block text-right\">
                ";
        // line 88
        $context["image"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 88);
        // line 89
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) {
            // line 90
            yield "                    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 90), "html", null, true);
            yield " fa-3x pl-3 float-right\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 92
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 92), "html", null, true);
            yield "\" class=\"img-thumbnail ml-3 mb-2 float-right\"/>
                ";
        }
        // line 94
        yield "                <h1 class=\"h5 mb-0\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 94)), "html", null, true);
        yield "</h1>
                ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 95)) {
            // line 96
            yield "                    <p class=\"text-info mb-3\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 96), "primaryDescription", [], "method", false, false, false, 96);
            yield "</p>
                ";
        } else {
            // line 98
            yield "                    <p class=\"text-info mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</p>
                ";
        }
        // line 100
        yield "            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 104));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 105
            yield "            <li class=\"nav-item\">
                ";
            // line 106
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 106))) ? (" active") : (""));
            // line 107
            yield "                ";
            $context["disable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 107), "active", [], "any", false, false, false, 107)) ? ("") : (" disabled"));
            // line 108
            yield "                <a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" class=\"nav-link";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
            yield "\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\">
                    <i class=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 110), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 111), "html", null, true);
            yield "</span>
                    ";
            // line 112
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 112) > 0)) {
                // line 113
                yield "                        <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 113), 0), "html", null, true);
                yield "</span>
                    ";
            }
            // line 115
            yield "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "    </ul>
";
        return; yield '';
    }

    // line 121
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        yield "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 123));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 124
            yield "            ";
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 124))) ? ("tab-pane show active") : ("tab-pane"));
            // line 125
            yield "            <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" role=\"tabpanel\">
                ";
            // line 126
            CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 126);
            // line 127
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 127));
            yield "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "    </div>
";
        return; yield '';
    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden'])\").first().focus();
            }
        });
    </script>
";
        return; yield '';
    }

    // line 144
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 145
            yield "    ";
            $context["show"] = false;
            // line 146
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 146));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 147
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 147), "active", [], "any", false, false, false, 147) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 147)))) {
                    // line 148
                    yield "            ";
                    $context["show"] = true;
                    // line 149
                    yield "        ";
                }
                // line 150
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "    ";
            if ((($context["show"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 151), "btnOptions", [], "any", false, false, false, 151))) {
                // line 152
                yield "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary mr-3 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                yield "</span>
                </button>
                <div class=\"dropdown-menu\">
                    ";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 161
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 161), "active", [], "any", false, false, false, 161) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 161)))) {
                        // line 162
                        yield "                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code=";
                        // line 163
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                        yield "&url=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 163), "url", [], "method", false, false, false, 163)), "html", null, true);
                        yield "\">
                                <i class=\"";
                        // line 164
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 164), "html", null, true);
                        yield " fa-fw\" aria-hidden=\"true\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 164), "html", null, true);
                        yield "
                                ";
                        // line 165
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 165), "customized", [], "any", false, false, false, 165)) {
                            // line 166
                            yield "                                    <i class=\"fas fa-user-pen ml-2\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 168
                        yield "                            </a>
                        ";
                    }
                    // line 170
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                yield "                </div>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 177
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 178
            yield "    <div class=\"btn-group\">
        <a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 179), "url", [], "method", false, false, false, 179), "html", null, true);
            yield "&action=export&option=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 179), "defaultOption", [], "method", false, false, false, 179), "html", null, true);
            yield "\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("print"), "html", null, true);
            yield "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
            yield "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 189), "options", [], "method", false, false, false, 189));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 190
                yield "                ";
                if (($context["key"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 190), "defaultOption", [], "method", false, false, false, 190))) {
                    // line 191
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 191), "url", [], "method", false, false, false, 191), "html", null, true);
                    yield "&action=export&option=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 192), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 193
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 193)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 196
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            yield "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
            </a>
            ";
            // line 202
            $context["tools"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 202), "tools", [], "method", false, false, false, 202);
            // line 203
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["tools"] ?? null))) {
                // line 204
                yield "                <div class=\"dropdown-divider\"></div>
                ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 206
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 206), "html", null, true);
                    yield "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 207), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 208)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                yield "            ";
            }
            // line 212
            yield "        </div>
    </div>
    <form action=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 214), "url", [], "method", false, false, false, 214), "html", null, true);
            yield "\" method=\"post\" class=\"float-left\" target=\"_blank\" onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 231), "options", [], "method", false, false, false, 231));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 232
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 232)), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
            yield "
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 241
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 241), "getFormats", [CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 241)], "method", false, false, false, 241));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 242
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 242), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 242), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("language"), "html", null, true);
            yield "
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 251
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 251));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 252
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            yield "                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            yield "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/PanelControllerTop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  724 => 258,  718 => 254,  707 => 252,  703 => 251,  698 => 249,  693 => 247,  688 => 244,  677 => 242,  673 => 241,  668 => 239,  663 => 237,  658 => 234,  647 => 232,  643 => 231,  631 => 222,  620 => 214,  616 => 212,  613 => 211,  604 => 208,  600 => 207,  595 => 206,  591 => 205,  588 => 204,  585 => 203,  583 => 202,  578 => 200,  573 => 197,  567 => 196,  561 => 193,  557 => 192,  550 => 191,  547 => 190,  543 => 189,  537 => 186,  530 => 182,  522 => 179,  519 => 178,  505 => 177,  495 => 171,  489 => 170,  485 => 168,  479 => 166,  477 => 165,  471 => 164,  465 => 163,  462 => 162,  459 => 161,  455 => 160,  449 => 157,  442 => 152,  439 => 151,  433 => 150,  430 => 149,  427 => 148,  424 => 147,  419 => 146,  416 => 145,  402 => 144,  387 => 134,  383 => 133,  377 => 130,  359 => 127,  357 => 126,  350 => 125,  347 => 124,  330 => 123,  327 => 122,  323 => 121,  317 => 118,  309 => 115,  303 => 113,  301 => 112,  297 => 111,  293 => 110,  289 => 109,  281 => 108,  278 => 107,  276 => 106,  273 => 105,  269 => 104,  263 => 100,  257 => 98,  251 => 96,  249 => 95,  244 => 94,  236 => 92,  230 => 90,  227 => 89,  225 => 88,  222 => 87,  219 => 85,  205 => 84,  202 => 83,  184 => 82,  178 => 80,  175 => 79,  170 => 77,  168 => 76,  162 => 73,  156 => 71,  153 => 70,  148 => 68,  141 => 63,  137 => 62,  132 => 60,  127 => 58,  123 => 56,  115 => 49,  109 => 47,  103 => 45,  101 => 44,  93 => 41,  90 => 40,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  69 => 30,  64 => 26,  61 => 25,  59 => 24,  54 => 23,  50 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelControllerTop.html.twig", "/var/www/html/Dinamic/View/Master/PanelControllerTop.html.twig");
    }
}
