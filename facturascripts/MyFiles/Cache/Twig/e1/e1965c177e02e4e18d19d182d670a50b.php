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

/* Tab/ProductoImagen.html.twig */
class __TwigTemplate_676a1b6bf0548ffd4fc2d15565c9d669 extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 22));
        // line 23
        $context["product"] = CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 23);
        // line 24
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 24);
        // line 25
        yield "
<div class=\"container-fluid\">
    ";
        // line 28
        yield "    <div class=\"row\">
        <div class=\"col\">
            <form id=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((("form" . CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 30)) . "0"), "html", null, true);
        yield "\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "method", false, false, false, 30), "html", null, true);
        yield "\" method=\"post\"
                  enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
                ";
        // line 32
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
                <input type=\"hidden\" name=\"action\" value=\"add-image\"/>
                <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 34), "html", null, true);
        yield "\"/>
                <input type=\"hidden\" name=\"idproducto\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "primaryColumnValue", [], "method", false, false, false, 35), "html", null, true);
        yield "\">
                <div class=\"card border-success shadow mb-3\">
                    <div class=\"card-body p-3\">
                        <div class=\"form-row\">
                            <div class=\"col-sm-2\">
                                ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("variant"), "html", null, true);
        yield "
                                <select name=\"referencia\" class=\"form-control mb-2\">
                                    <option value=\"\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all-variants"), "html", null, true);
        yield "</option>
                                    <option value=\"\">------</option>
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "getVariants", [], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
            // line 45
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "referencia", [], "any", false, false, false, 45), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["variant"], "referencia", [], "any", false, false, false, 45), "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                                </select>
                            </div>
                            <div class=\"col\">
                                ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("images"), "html", null, true);
        yield "
                                <input type=\"file\" name=\"newfiles[]\" class=\"form-control-file\" multiple=\"\"
                                       accept=\"image/png, image/jpeg, image/gif\" required/>
                                <p class=\"text-muted mb-2\">
                                    ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 54), "getMaxFileUpload", [], "method", false, false, false, 54)]), "html", null, true);
        yield "
                                </p>
                            </div>
                            <div class=\"col-auto\">
                                <br/>
                                <button type=\"submit\" class=\"btn btn-success mb-2\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
        yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    ";
        // line 70
        yield "    <div class=\"form-row row-cols-1 row-cols-md-5\" id=\"images-container\">
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["counter"] => $context["image"]) {
            // line 72
            yield "            <div class=\"col mb-4 images-item\" data-image-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("you-can-drag-and-drop-to-sort-the-images"), "html", null, true);
            yield "\">
                ";
            // line 73
            $context["border"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 73)) ? ("") : ("border-primary"));
            // line 74
            yield "                <div class=\"card ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["border"] ?? null), "html", null, true);
            yield " shadow\">
                    <img src=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "url", ["download"], "method", false, false, false, 75)), "html", null, true);
            yield "\" class=\"card-img-top\"
                         alt=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 76), "html", null, true);
            yield "\" loading=\"lazy\">
                    <div lang=\"card-body\"></div>
                    <div class=\"card-footer\">
                        ";
            // line 79
            $context["formName"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 79) . ($context["counter"] + 1));
            // line 80
            yield "                        <form id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("form" . ($context["formName"] ?? null)), "html", null, true);
            yield "\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "method", false, false, false, 80), "html", null, true);
            yield "\" method=\"post\"
                              enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
                            ";
            // line 82
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                            <input type=\"hidden\" name=\"action\" value=\"\"/>
                            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84), "html", null, true);
            yield "\"/>
                            <input type=\"hidden\" name=\"idproducto\" value=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "idproducto", [], "any", false, false, false, 85), "html", null, true);
            yield "\"/>
                            <input type=\"hidden\" name=\"idimage\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\"/>
                            <div class=\"form-row align-items-center\">
                                <div class=\"col text-muted\">
                                    ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 89)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["image"], "referencia", [], "any", false, false, false, 89)) : ($this->env->getFunction('trans')->getCallable()("all-variants"))), "html", null, true);
            yield "
                                </div>
                                <div class=\"col-auto\">
                                    ";
            // line 92
            yield CoreExtension::callMacro($macros["_self"], "macro_buttonDelete", [($context["formName"] ?? null)], 92, $context, $this->getSourceContext());
            yield "
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>
</div>

";
        return; yield '';
    }

    // line 103
    public function macro_buttonDelete($__formName__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "formName" => $__formName__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 104
            yield "    ";
            $context["label"] = $this->env->getFunction('trans')->getCallable()("delete-file");
            // line 105
            yield "    ";
            $context["text"] = $this->env->getFunction('trans')->getCallable()("are-you-sure");
            // line 106
            yield "    ";
            $context["cancel"] = $this->env->getFunction('trans')->getCallable()("cancel");
            // line 107
            yield "    ";
            $context["confirm"] = $this->env->getFunction('trans')->getCallable()("confirm");
            // line 108
            yield "    <button type=\"button\" class=\"btn btn-sm btn-outline-danger p-1\"
            onclick=\"confirmAction('";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["formName"] ?? null), "html", null, true);
            yield "','delete-image','";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            yield "','";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
            yield "','";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["cancel"] ?? null), "html", null, true);
            yield "','";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["confirm"] ?? null), "html", null, true);
            yield "');\">
        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
    </button>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab/ProductoImagen.html.twig";
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
        return array (  250 => 109,  247 => 108,  244 => 107,  241 => 106,  238 => 105,  235 => 104,  223 => 103,  215 => 100,  201 => 92,  195 => 89,  189 => 86,  185 => 85,  181 => 84,  176 => 82,  168 => 80,  166 => 79,  160 => 76,  156 => 75,  151 => 74,  149 => 73,  142 => 72,  138 => 71,  135 => 70,  123 => 60,  114 => 54,  107 => 50,  102 => 47,  91 => 45,  87 => 44,  82 => 42,  77 => 40,  69 => 35,  65 => 34,  60 => 32,  53 => 30,  49 => 28,  45 => 25,  43 => 24,  41 => 23,  39 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/ProductoImagen.html.twig", "/var/www/html/Dinamic/View/Tab/ProductoImagen.html.twig");
    }
}
