<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_909583036b3a47a5aa1de7b82de303883ca5c4c2eafaa44fe90f1c8a11983239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "GuzzleBundle::debug.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c60d3e8c4f48e8e94cdaebee0b9572b55d5e80b7059145c9b688bf562af749e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c60d3e8c4f48e8e94cdaebee0b9572b55d5e80b7059145c9b688bf562af749e->enter($__internal_5c60d3e8c4f48e8e94cdaebee0b9572b55d5e80b7059145c9b688bf562af749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $__internal_50da0d4509cdfc1f734bf1b100580148339c91b99143a56d000a1ed299d0719d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50da0d4509cdfc1f734bf1b100580148339c91b99143a56d000a1ed299d0719d->enter($__internal_50da0d4509cdfc1f734bf1b100580148339c91b99143a56d000a1ed299d0719d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c60d3e8c4f48e8e94cdaebee0b9572b55d5e80b7059145c9b688bf562af749e->leave($__internal_5c60d3e8c4f48e8e94cdaebee0b9572b55d5e80b7059145c9b688bf562af749e_prof);

        
        $__internal_50da0d4509cdfc1f734bf1b100580148339c91b99143a56d000a1ed299d0719d->leave($__internal_50da0d4509cdfc1f734bf1b100580148339c91b99143a56d000a1ed299d0719d_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55c58196369ee116053aedb6f98c86c62a3ad9616d6f75d67fd000af5d8bf008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c58196369ee116053aedb6f98c86c62a3ad9616d6f75d67fd000af5d8bf008->enter($__internal_55c58196369ee116053aedb6f98c86c62a3ad9616d6f75d67fd000af5d8bf008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0767aff25512d77d91c69885cdeed3bc14bbf816b4e057a6cde520fba205fefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0767aff25512d77d91c69885cdeed3bc14bbf816b4e057a6cde520fba205fefa->enter($__internal_0767aff25512d77d91c69885cdeed3bc14bbf816b4e057a6cde520fba205fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 6
        echo "
    ";
        // line 7
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array())) {
            // line 8
            echo "        ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "errorCount", array())) {
                // line 9
                echo "            ";
                $context["color"] = "red";
                // line 10
                echo "        ";
            } else {
                // line 11
                echo "            ";
                $context["color"] = "green";
                // line 12
                echo "        ";
            }
            // line 13
            echo "        ";
            $context["status_color"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "errorCount", array())) ? ("red") : ("normal"));
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            ";
            // line 17
            echo "            ";
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 18
                echo "                ";
                echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
                echo "
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
                echo "\">
                    ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
                echo "
                </span>
            ";
            } else {
                // line 23
                echo "                ";
                echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
                echo "
                <span class=\"sf-toolbar-value\">
                   ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
                echo "
                </span>
            ";
            }
            // line 28
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            ob_start();
            // line 31
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                ";
            // line 39
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) > 1)) {
                // line 40
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
                echo " s</span>
                ";
            } else {
                // line 42
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 44
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 46
            echo "
        ";
            // line 47
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 47)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color")))));
            // line 48
            echo "    ";
        }
        
        $__internal_0767aff25512d77d91c69885cdeed3bc14bbf816b4e057a6cde520fba205fefa->leave($__internal_0767aff25512d77d91c69885cdeed3bc14bbf816b4e057a6cde520fba205fefa_prof);

        
        $__internal_55c58196369ee116053aedb6f98c86c62a3ad9616d6f75d67fd000af5d8bf008->leave($__internal_55c58196369ee116053aedb6f98c86c62a3ad9616d6f75d67fd000af5d8bf008_prof);

    }

    // line 52
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eff5278430f0ba0dc31904fdfc405ad426e565f611835455333be7b8cd9c501e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff5278430f0ba0dc31904fdfc405ad426e565f611835455333be7b8cd9c501e->enter($__internal_eff5278430f0ba0dc31904fdfc405ad426e565f611835455333be7b8cd9c501e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c434d538603dbd1b2b553ec7de0ff5f48c8e77996306ca49b39081ceeead285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c434d538603dbd1b2b553ec7de0ff5f48c8e77996306ca49b39081ceeead285->enter($__internal_1c434d538603dbd1b2b553ec7de0ff5f48c8e77996306ca49b39081ceeead285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 53
        echo "
    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 56
        echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
        echo "
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_1c434d538603dbd1b2b553ec7de0ff5f48c8e77996306ca49b39081ceeead285->leave($__internal_1c434d538603dbd1b2b553ec7de0ff5f48c8e77996306ca49b39081ceeead285_prof);

        
        $__internal_eff5278430f0ba0dc31904fdfc405ad426e565f611835455333be7b8cd9c501e->leave($__internal_eff5278430f0ba0dc31904fdfc405ad426e565f611835455333be7b8cd9c501e_prof);

    }

    // line 66
    public function block_head($context, array $blocks = array())
    {
        $__internal_809a4193a5c5924d58041cc524cc77928defd93b5bc558fb1dfceeff6f980144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809a4193a5c5924d58041cc524cc77928defd93b5bc558fb1dfceeff6f980144->enter($__internal_809a4193a5c5924d58041cc524cc77928defd93b5bc558fb1dfceeff6f980144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c596e24aa82f774a17fb9397fe5a27fc0d69a1b8c2ee62315bec75f4f1938f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c596e24aa82f774a17fb9397fe5a27fc0d69a1b8c2ee62315bec75f4f1938f29->enter($__internal_c596e24aa82f774a17fb9397fe5a27fc0d69a1b8c2ee62315bec75f4f1938f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 67
        echo "
    ";
        // line 68
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/css/main.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c596e24aa82f774a17fb9397fe5a27fc0d69a1b8c2ee62315bec75f4f1938f29->leave($__internal_c596e24aa82f774a17fb9397fe5a27fc0d69a1b8c2ee62315bec75f4f1938f29_prof);

        
        $__internal_809a4193a5c5924d58041cc524cc77928defd93b5bc558fb1dfceeff6f980144->leave($__internal_809a4193a5c5924d58041cc524cc77928defd93b5bc558fb1dfceeff6f980144_prof);

    }

    // line 74
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b1d50f7a7689addd7d470e864ab981fe19981b3865792171042fe1449343f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1d50f7a7689addd7d470e864ab981fe19981b3865792171042fe1449343f72->enter($__internal_6b1d50f7a7689addd7d470e864ab981fe19981b3865792171042fe1449343f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f00849448fec4f761065290f1a249f0236113f13266772921036fc887f529c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f00849448fec4f761065290f1a249f0236113f13266772921036fc887f529c6->enter($__internal_7f00849448fec4f761065290f1a249f0236113f13266772921036fc887f529c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 75
        echo "
    <h2>Logs</h2>

    ";
        // line 78
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 78)->display(array_merge($context, array("collector" => (isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")))));
        
        $__internal_7f00849448fec4f761065290f1a249f0236113f13266772921036fc887f529c6->leave($__internal_7f00849448fec4f761065290f1a249f0236113f13266772921036fc887f529c6_prof);

        
        $__internal_6b1d50f7a7689addd7d470e864ab981fe19981b3865792171042fe1449343f72->leave($__internal_6b1d50f7a7689addd7d470e864ab981fe19981b3865792171042fe1449343f72_prof);

    }

    public function getTemplateName()
    {
        return "GuzzleBundle::debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 78,  247 => 75,  238 => 74,  226 => 71,  222 => 70,  217 => 68,  214 => 67,  205 => 66,  191 => 60,  184 => 56,  179 => 53,  170 => 52,  159 => 48,  157 => 47,  154 => 46,  150 => 44,  144 => 42,  138 => 40,  136 => 39,  128 => 34,  123 => 31,  121 => 30,  118 => 29,  115 => 28,  109 => 25,  103 => 23,  97 => 20,  93 => 19,  88 => 18,  85 => 17,  83 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  58 => 7,  55 => 6,  52 => 5,  43 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebProfilerBundle:Profiler:layout.html.twig\" %}


{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if collector.callCount %}
        {% if collector.errorCount %}
            {% set color = 'red' %}
        {% else %}
            {% set color = 'green' %}
        {% endif %}
        {% set status_color = collector.errorCount ? 'red' : 'normal' %}

        {% set icon %}
            {# Symfony <2.8 toolbar #}
            {% if profiler_markup_version == 1 %}
                {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ color }}\">
                    {{ collector.callCount }}
                </span>
            {% else %}
                {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
                <span class=\"sf-toolbar-value\">
                   {{ collector.callCount }}
                </span>
            {% endif %}
        {% endset %}

        {% set text %}

            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>{{ collector.callCount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                {% if collector.totalTime > 1.0 %}
                    <span>{{ '%0.2f'|format(collector.totalTime) }} s</span>
                {% else %}
                    <span>{{ '%0.0f'|format(collector.totalTime * 1000) }} ms</span>
                {% endif %}
            </div>
        {% endset %}

        {% include \"WebProfilerBundle:Profiler:toolbar_item.html.twig\" with { \"link\": profiler_url, status: status_color } %}
    {% endif %}
{% endblock %}


{% block menu %}

    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>{{ collector.callCount }}</span>
        </span>
    </span>
{% endblock %}


{% block head %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/guzzle/css/main.css') }}\" />
    <script src=\"{{ asset('bundles/guzzle/js/jquery.min.js') }}\"></script>
{% endblock %}

{% block panel %}

    <h2>Logs</h2>

    {% include 'GuzzleBundle::profiler.html.twig' with { 'collector': collector } %}
{% endblock %}
", "GuzzleBundle::debug.html.twig", "/Applications/MAMP/htdocs/basic-backend-interview-test/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/debug.html.twig");
    }
}
