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

/* Updater.html.twig */
class __TwigTemplate_e498453952a7842621823231a0f337b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        $macros["Utils"] = $this->macros["Utils"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 21)->unwrap();
        // line 22
        $macros["__internal_parse_0"] = $this->macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Updater.html.twig", 22)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Updater.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 24
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        yield "    ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Updater.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 29
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["error", "critical"], "danger"], 29, $context, $this->getSourceContext());
        yield "
                ";
        // line 30
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["warning"], "warning"], 30, $context, $this->getSourceContext());
        yield "
                ";
        // line 31
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["notice"], "success"], 31, $context, $this->getSourceContext());
        yield "
                ";
        // line 32
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_messageCompat", [($context["log"] ?? null), ["info"], "info"], 32, $context, $this->getSourceContext());
        yield "
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("AdminPlugins"), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-arrow-left fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugins"), "html", null, true);
        yield " </span>
                    </a>
                    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 51), "ready", [], "method", false, false, false, 51)) {
            // line 52
            yield "                    <button class=\"btn btn-sm btn-secondary\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("manage-installation"), "html", null, true);
            yield " </span>
                    </button>
                ";
        } else {
            // line 58
            yield "                    <button class=\"btn btn-sm btn-warning\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalTelemetry\">
                        <i class=\"fas fa-registered fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-md-inline-block\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 64
        yield "            </div>
            <div class=\"col-sm-6 text-right\">
                <h1 class=\"h3\">
                    ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
        yield "
                    <small class=\"text-info\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 68), "html", null, true);
        yield "</small>
                    <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm\">
                ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 75), "ready", [], "method", false, false, false, 75) == false)) {
            // line 76
            yield "                    <div class=\"mb-3\">
                        ";
            // line 77
            yield CoreExtension::callMacro($macros["Utils"], "macro_registerInstall", [false], 77, $context, $this->getSourceContext());
            yield "
                    </div>
                ";
        }
        // line 80
        yield "                <div class=\"card shadow-sm mb-4\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <thead>
                            <tr>
                                <th scope=\"col\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("component"), "html", null, true);
        yield "</th>
                                <th scope=\"col\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
        yield "</th>
                                <th scope=\"col\" class=\"text-right\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("action"), "html", null, true);
        yield "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 91));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            yield "                                <tr class=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "stable", [], "any", false, false, false, 92)) ? ("table-success") : ("table-warning"));
            yield "\">
                                    <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                    <td>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 94), "html", null, true);
            yield "</td>
                                    <td class=\"text-right\">
                                        ";
            // line 96
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 96) > CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCoreVersion", [], "method", false, false, false, 96))) {
                // line 97
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("requires-core", ["%version%" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "mincore", [], "any", false, false, false, 97)]), "html", null, true);
                yield "
                                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 98
$context["item"], "downloaded", [], "any", false, false, false, 98)) {
                // line 99
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 99), "html", null, true);
                yield "?action=update&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 99), "html", null, true);
                yield "\" class=\"btn btn-spin-action btn-sm btn-success\" onclick=\"animateSpinner('add')\">
                                                <i class=\"fas fa-rocket fa-fw\" aria-hidden=\"true\"></i> ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                yield "
                                            </a>
                                            <a href=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 102), "html", null, true);
                yield "?action=cancel&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 102), "html", null, true);
                yield "\" class=\"btn btn-spin-action btn-sm btn-warning\" onclick=\"animateSpinner('add')\">
                                                <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i> ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
                yield "
                                            </a>
                                        ";
            } elseif (((CoreExtension::getAttribute($this->env, $this->source,             // line 105
$context["item"], "name", [], "any", false, false, false, 105) == "CORE") && CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 105))) {
                // line 106
                yield "                                            <button type=\"button\" class=\"btn btn-spin-action btn-warning\" data-toggle=\"modal\"
                                                    data-target=\"#coreWarningModal\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                yield "
                                            </button>
                                        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 109
$context["item"], "stable", [], "any", false, false, false, 109)) {
                // line 110
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 110), "html", null, true);
                yield "?action=download&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 110), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-secondary\" onclick=\"animateSpinner('add')\">";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                yield "
                                            </a>
                                        ";
            } else {
                // line 114
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 114), "html", null, true);
                yield "?action=download&item=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 114), "html", null, true);
                yield "\"
                                               class=\"btn btn-spin-action btn-sm btn-outline-warning\" onclick=\"animateSpinner('add')\">";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("beta"), "html", null, true);
                yield "
                                            </a>
                                        ";
            }
            // line 118
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 121
            yield "                                <tr class=\"table-warning\">
                                    <td colspan=\"3\"><b>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
            yield "</b></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalTelemetry\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                ";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 135), "ready", [], "method", false, false, false, 135)) {
            // line 136
            yield "                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-registered mr-1\"></i>
                            ";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("registered-installation", ["%number%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "telemetryManager", [], "any", false, false, false, 139), "id", [], "method", false, false, false, 139)]), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <p>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("registered-installation-p"), "html", null, true);
            yield "</p>
                        <p>";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            yield "</p>
                        <a class=\"btn btn-primary float-left\" href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 148), "html", null, true);
            yield "?action=claim-install\" target=\"_blank\">
                            ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("manage"), "html", null, true);
            yield "
                        </a>
                        <form action=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 151), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                            ";
            // line 152
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                            <input type=\"hidden\" name=\"action\" value=\"unlink\"/>
                            <button type=\"submit\" class=\"btn btn-danger btn-spin-action float-right\">
                                ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("unlink"), "html", null, true);
            yield "
                            </button>
                        </form>
                    </div>
                ";
        } else {
            // line 160
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 160), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
                        ";
            // line 161
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                        <input type=\"hidden\" name=\"action\" value=\"register\"/>
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fas fa-registered mr-1\"></i> ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <p>";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation-p"), "html", null, true);
            yield "</p>
                            <p>";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("telemetry-data-to-send"), "html", null, true);
            yield "</p>
                            <button type=\"submit\" class=\"btn btn-primary btn-spin-action\">
                                ";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("register-installation"), "html", null, true);
            yield "
                            </button>
                        </div>
                    </form>
                ";
        }
        // line 180
        yield "            </div>
        </div>
    </div>
    ";
        // line 183
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 183)) {
            // line 184
            yield "        <div class=\"modal fade\" id=\"coreWarningModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-exclamation-triangle mr-1\" aria-hidden=\"true\"></i>
                            ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("core-update-warning"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"mb-0\">
                            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 198));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 199
                yield "                                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "                        </ul>
                    </div>
                    <div class=\"modal-footer\">
                        ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updaterItems", [], "any", false, false, false, 204));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 205
                yield "                            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 205) == "CORE") && CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 205))) {
                    // line 206
                    yield "                                <div class=\"btn-group\">
                                    <a href=\"";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 207), "html", null, true);
                    yield "?action=download&item=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 207), "html", null, true);
                    yield "&disable=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "coreUpdateWarnings", [], "any", false, false, false, 207)), ","), "html", null, true);
                    yield "\"
                                       class=\"btn btn-spin-action btn-warning\" onclick=\"animateSpinner('add')\">";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("download"), "html", null, true);
                    yield "
                                    </a>
                                    <button type=\"button\" class=\"btn btn-spin-action btn-warning dropdown-toggle dropdown-toggle-split\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                    yield "</span>
                                    </button>
                                    <div class=\"dropdown-menu dropdown-menu-right\">
                                        <a href=\"";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 215), "html", null, true);
                    yield "?action=download&item=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 215), "html", null, true);
                    yield "\"
                                           class=\"btn btn-warning\" onclick=\"animateSpinner('add')\">";
                    // line 216
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("do-not-disable-plugins"), "html", null, true);
                    yield "
                                        </a>
                                    </div>
                                </div>
                            ";
                }
                // line 221
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            yield "                    </div>
                </div>
            </div>
        </div>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Updater.html.twig";
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
        return array (  504 => 222,  498 => 221,  490 => 216,  484 => 215,  478 => 212,  471 => 208,  463 => 207,  460 => 206,  457 => 205,  453 => 204,  448 => 201,  439 => 199,  435 => 198,  424 => 190,  416 => 184,  414 => 183,  409 => 180,  401 => 175,  396 => 173,  392 => 172,  384 => 167,  379 => 165,  372 => 161,  367 => 160,  359 => 155,  353 => 152,  349 => 151,  344 => 149,  340 => 148,  336 => 147,  332 => 146,  324 => 141,  319 => 139,  314 => 136,  312 => 135,  300 => 125,  291 => 122,  288 => 121,  281 => 118,  275 => 115,  268 => 114,  262 => 111,  255 => 110,  253 => 109,  248 => 107,  245 => 106,  243 => 105,  238 => 103,  232 => 102,  227 => 100,  220 => 99,  218 => 98,  213 => 97,  211 => 96,  206 => 94,  202 => 93,  197 => 92,  192 => 91,  185 => 87,  181 => 86,  177 => 85,  170 => 80,  164 => 77,  161 => 76,  159 => 75,  149 => 68,  145 => 67,  140 => 64,  134 => 61,  129 => 58,  123 => 55,  118 => 52,  116 => 51,  107 => 47,  102 => 45,  97 => 43,  91 => 39,  87 => 38,  77 => 32,  73 => 31,  69 => 30,  65 => 29,  60 => 26,  57 => 25,  53 => 24,  48 => 20,  46 => 22,  44 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Updater.html.twig", "/var/www/html/Dinamic/View/Updater.html.twig");
    }
}
