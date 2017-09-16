<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d7eacc03632b4c89c5edec22212b46caeb00270c1b1cef01c8821b251f60a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7eacc03632b4c89c5edec22212b46caeb00270c1b1cef01c8821b251f60a27->enter($__internal_4d7eacc03632b4c89c5edec22212b46caeb00270c1b1cef01c8821b251f60a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8ed60bedb9ae1eaa537a1bde0d8f8e392350d67a0a026d5b65e10089d4b5971e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed60bedb9ae1eaa537a1bde0d8f8e392350d67a0a026d5b65e10089d4b5971e->enter($__internal_8ed60bedb9ae1eaa537a1bde0d8f8e392350d67a0a026d5b65e10089d4b5971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7eacc03632b4c89c5edec22212b46caeb00270c1b1cef01c8821b251f60a27->leave($__internal_4d7eacc03632b4c89c5edec22212b46caeb00270c1b1cef01c8821b251f60a27_prof);

        
        $__internal_8ed60bedb9ae1eaa537a1bde0d8f8e392350d67a0a026d5b65e10089d4b5971e->leave($__internal_8ed60bedb9ae1eaa537a1bde0d8f8e392350d67a0a026d5b65e10089d4b5971e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ac06ef5585059a64bd4b4c38544c5b898cd704771bc8c8023c3241dd56dbe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac06ef5585059a64bd4b4c38544c5b898cd704771bc8c8023c3241dd56dbe47->enter($__internal_7ac06ef5585059a64bd4b4c38544c5b898cd704771bc8c8023c3241dd56dbe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1097b8358739b0ab529e35837d2e1d629216908afaf0e91d18241f41fbbcb7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1097b8358739b0ab529e35837d2e1d629216908afaf0e91d18241f41fbbcb7c9->enter($__internal_1097b8358739b0ab529e35837d2e1d629216908afaf0e91d18241f41fbbcb7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1097b8358739b0ab529e35837d2e1d629216908afaf0e91d18241f41fbbcb7c9->leave($__internal_1097b8358739b0ab529e35837d2e1d629216908afaf0e91d18241f41fbbcb7c9_prof);

        
        $__internal_7ac06ef5585059a64bd4b4c38544c5b898cd704771bc8c8023c3241dd56dbe47->leave($__internal_7ac06ef5585059a64bd4b4c38544c5b898cd704771bc8c8023c3241dd56dbe47_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4807697e1bd90377d73bf6255f1d5f486aeb113cf8f9abfc33c6aacaa0b1a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4807697e1bd90377d73bf6255f1d5f486aeb113cf8f9abfc33c6aacaa0b1a49->enter($__internal_c4807697e1bd90377d73bf6255f1d5f486aeb113cf8f9abfc33c6aacaa0b1a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b0cabebc90f9ee808257b8011a36f42a2c8867ccc90e318c8d073783b7aa075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0cabebc90f9ee808257b8011a36f42a2c8867ccc90e318c8d073783b7aa075->enter($__internal_8b0cabebc90f9ee808257b8011a36f42a2c8867ccc90e318c8d073783b7aa075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b0cabebc90f9ee808257b8011a36f42a2c8867ccc90e318c8d073783b7aa075->leave($__internal_8b0cabebc90f9ee808257b8011a36f42a2c8867ccc90e318c8d073783b7aa075_prof);

        
        $__internal_c4807697e1bd90377d73bf6255f1d5f486aeb113cf8f9abfc33c6aacaa0b1a49->leave($__internal_c4807697e1bd90377d73bf6255f1d5f486aeb113cf8f9abfc33c6aacaa0b1a49_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba7088b4adc29e789de794a288f8b07e636b6731d3da5736652e923f02a9c177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7088b4adc29e789de794a288f8b07e636b6731d3da5736652e923f02a9c177->enter($__internal_ba7088b4adc29e789de794a288f8b07e636b6731d3da5736652e923f02a9c177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e442d0f5f1c510cc61e96ffab5d06d074963da0f6f9e2adfd4b67b8e3e70c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e442d0f5f1c510cc61e96ffab5d06d074963da0f6f9e2adfd4b67b8e3e70c2f->enter($__internal_8e442d0f5f1c510cc61e96ffab5d06d074963da0f6f9e2adfd4b67b8e3e70c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8e442d0f5f1c510cc61e96ffab5d06d074963da0f6f9e2adfd4b67b8e3e70c2f->leave($__internal_8e442d0f5f1c510cc61e96ffab5d06d074963da0f6f9e2adfd4b67b8e3e70c2f_prof);

        
        $__internal_ba7088b4adc29e789de794a288f8b07e636b6731d3da5736652e923f02a9c177->leave($__internal_ba7088b4adc29e789de794a288f8b07e636b6731d3da5736652e923f02a9c177_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/basic-backend-interview-test/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
