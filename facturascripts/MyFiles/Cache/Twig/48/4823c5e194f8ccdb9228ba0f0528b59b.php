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

/* Macro/Utils.html.twig */
class __TwigTemplate_fc20dbb47dfd11753f178198b67bf4e1 extends Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 20
        yield "
";
        // line 35
        yield "
";
        // line 49
        yield "
";
        // line 54
        yield "
";
        // line 76
        yield "
";
        return; yield '';
    }

    // line 22
    public function macro_message($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 23
            yield "    ";
            $context["messages"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["master", ($context["levels"] ?? null)], "method", false, false, false, 23), CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", ["database", ($context["levels"] ?? null)], "method", false, false, false, 23));
            // line 24
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["messages"] ?? null)) > 0)) {
                // line 25
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                yield "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["messages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 30
                    yield "                <div>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 30);
                    yield "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                yield "        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function macro_messageCompat($__log__ = null, $__levels__ = null, $__style__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "log" => $__log__,
            "levels" => $__levels__,
            "style" => $__style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 38
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "read", [], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                yield "        ";
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "level", [], "any", false, false, false, 39), ($context["levels"] ?? null)) && (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "channel", [], "any", false, false, false, 39) == "master"))) {
                    // line 40
                    yield "            <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["style"] ?? null), "html", null, true);
                    yield "\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div>";
                    // line 44
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "message", [], "any", false, false, false, 44);
                    yield "</div>
            </div>
        ";
                }
                // line 47
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function macro_popoverTitle($__msg__ = null, $__position__ = "auto", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "msg" => $__msg__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 52
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["msg"] ?? null)) > 0)) {
                yield "data-toggle=\"popover\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["position"] ?? null), "html", null, true);
                yield "\" data-trigger=\"hover\" data-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["msg"] ?? null), "html", null, true);
                yield "\"";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 56
    public function macro_registerInstall($__link__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "link" => $__link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "    <div class=\"card shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h4\">
                <i class=\"fa-solid fa-registered mr-1\"></i> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-install-ad"), "html", null, true);
            yield "
            </div>
            <p class=\"card-text\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-install-ad-p"), "html", null, true);
            yield "</p>
        </div>
        ";
            // line 64
            if (($context["link"] ?? null)) {
                // line 65
                yield "            <div class=\"card-footer p-2\">
                <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Updater"), "html", null, true);
                yield "\" class=\"btn btn-secondary\">
                    ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register"), "html", null, true);
                yield "
                </a>
                <a href=\"https://facturascripts.com/patrocinar\" target=\"_blank\" class=\"btn btn-outline-secondary\">
                    ";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("become-sponsor"), "html", null, true);
                yield "
                </a>
            </div>
        ";
            }
            // line 74
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 78
    public function macro_updateInstall(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 79
            yield "    <div class=\"card bg-warning shadow-sm\">
        <div class=\"card-body\">
            <div class=\"h3\">
                <i class=\"fa-solid fa-cloud-download fa-beat mr-1\"></i> ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-available"), "html", null, true);
            yield "
            </div>
            <p class=\"card-text\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updates-available-p"), "html", null, true);
            yield "</p>
        </div>
        <div class=\"card-footer p-2\">
            <a href=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Updater"), "html", null, true);
            yield "\" class=\"btn btn-secondary\">
                ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
            yield "
            </a>
        </div>
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
        return "Macro/Utils.html.twig";
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
        return array (  264 => 88,  260 => 87,  254 => 84,  249 => 82,  244 => 79,  233 => 78,  226 => 74,  219 => 70,  213 => 67,  209 => 66,  206 => 65,  204 => 64,  199 => 62,  194 => 60,  189 => 57,  177 => 56,  164 => 52,  151 => 51,  141 => 47,  135 => 44,  127 => 40,  124 => 39,  119 => 38,  105 => 37,  97 => 32,  88 => 30,  84 => 29,  76 => 25,  73 => 24,  70 => 23,  56 => 22,  50 => 76,  47 => 54,  44 => 49,  41 => 35,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Utils.html.twig", "/var/www/html/Dinamic/View/Macro/Utils.html.twig");
    }
}
