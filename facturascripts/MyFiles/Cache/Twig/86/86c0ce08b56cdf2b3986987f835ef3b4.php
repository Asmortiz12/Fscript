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

/* MegaSearch.html.twig */
class __TwigTemplate_4b5f91b54a08c99e29de6b7c74704cdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "MegaSearch.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "sections", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 24
            yield "        <script>
            \$(document).ready(function () {
                searchOnSection(\"";
            // line 26
            yield $context["section"];
            yield "\");
            });
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-3\"></div>
            <div class=\"col-sm-6\">
                <form action=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 34), "html", null, true);
        yield "\" method=\"post\" class=\"form\" onsubmit=\"animateSpinner('add')\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"query\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "query", [], "any", false, false, false, 37), "html", null, true);
        yield "\" class=\"form-control form-control-lg\"
                                   autocomplete=\"off\" autofocus=\"\"/>
                            <span class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-spin-action btn-primary\">
                                    <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-3 col-xl-2\">
                <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 52));
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
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 53
            yield "                        ";
            $context["active"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53) == 1)) ? ("nav-link active") : ("nav-link"));
            // line 54
            yield "                        <a class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" data-toggle=\"pill\" href=\"#v-pills-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" role=\"tab\"
                           aria-controls=\"v-pills-";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" aria-expanded=\"true\">
                            <span class=\"badge badge-secondary float-right\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["result"], "results", [], "any", false, false, false, 56)), "html", null, true);
            yield "</span>
                            <i class=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "icon", [], "any", false, false, false, 57), "html", null, true);
            yield " fa-fw\"></i>
                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "title", [], "any", false, false, false, 58)), "html", null, true);
            yield "
                        </a>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                </div>
            </div>
            <div class=\"col-sm-9 col-xl-10\">
                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "results", [], "any", false, false, false, 65));
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
        foreach ($context['_seq'] as $context["key"] => $context["result"]) {
            // line 66
            yield "                        ";
            $context["active"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66) == 1)) ? (" show active") : (""));
            // line 67
            yield "                        <div class=\"tab-pane fade";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"v-pills-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" role=\"tabpanel\"
                             aria-labelledby=\"v-pills-";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "-tab\">
                            <div class=\"card shadow\">
                                ";
            // line 70
            yield CoreExtension::callMacro($macros["_self"], "macro_showSearchResults", [$context["result"]], 70, $context, $this->getSourceContext());
            yield "
                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 80
    public function macro_showSearchResults($__result__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "result" => $__result__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 81
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
            <tr>
                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 86
                yield "                    ";
                if (($context["key"] == "icon")) {
                    // line 87
                    yield "                        <th></th>
                    ";
                } else {
                    // line 89
                    yield "                        <th>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->env->getFunction('trans')->getCallable()($context["column"])), "html", null, true);
                    yield "</th>
                    ";
                }
                // line 91
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "            </tr>
            </thead>
            <tbody>
            ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "results", [], "any", false, false, false, 95));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 96
                yield "                ";
                $context["link"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 96)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["line"], "link", [], "any", false, false, false, 96)) : ("#"));
                // line 97
                yield "                <tr class=\"clickableRow\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\" data-target=\"_blank\">
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "columns", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                    // line 99
                    yield "                        ";
                    if (($context["key"] == "icon")) {
                        // line 100
                        yield "                            <td class=\"text-center\">
                                <i class=\"";
                        // line 101
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = $context["line"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                        yield " fa-fw\"></i>
                            </td>
                        ";
                    } elseif ((                    // line 103
$context["key"] != "link")) {
                        // line 104
                        yield "                            <td>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_1 = $context["line"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null), "html", null, true);
                        yield "</td>
                        ";
                    }
                    // line 106
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "            </tbody>
        </table>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "MegaSearch.html.twig";
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
        return array (  316 => 109,  309 => 107,  303 => 106,  297 => 104,  295 => 103,  290 => 101,  287 => 100,  284 => 99,  280 => 98,  275 => 97,  272 => 96,  268 => 95,  263 => 92,  257 => 91,  251 => 89,  247 => 87,  244 => 86,  240 => 85,  234 => 81,  222 => 80,  213 => 74,  195 => 70,  190 => 68,  183 => 67,  180 => 66,  163 => 65,  157 => 61,  140 => 58,  136 => 57,  132 => 56,  128 => 55,  121 => 54,  118 => 53,  101 => 52,  83 => 37,  77 => 34,  71 => 30,  61 => 26,  57 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "MegaSearch.html.twig", "/var/www/html/Dinamic/View/MegaSearch.html.twig");
    }
}
