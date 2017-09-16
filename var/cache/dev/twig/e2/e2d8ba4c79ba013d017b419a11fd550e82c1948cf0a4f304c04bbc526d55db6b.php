<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_791db1028c84bce7c678c54cb25a9243934f13daeecc68fca3bef5db983e45ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791db1028c84bce7c678c54cb25a9243934f13daeecc68fca3bef5db983e45ab->enter($__internal_791db1028c84bce7c678c54cb25a9243934f13daeecc68fca3bef5db983e45ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eac0bebd75b2ce4969dea3f3787d7b4c492218f13b89f855ee400c26e858c56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac0bebd75b2ce4969dea3f3787d7b4c492218f13b89f855ee400c26e858c56f->enter($__internal_eac0bebd75b2ce4969dea3f3787d7b4c492218f13b89f855ee400c26e858c56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_791db1028c84bce7c678c54cb25a9243934f13daeecc68fca3bef5db983e45ab->leave($__internal_791db1028c84bce7c678c54cb25a9243934f13daeecc68fca3bef5db983e45ab_prof);

        
        $__internal_eac0bebd75b2ce4969dea3f3787d7b4c492218f13b89f855ee400c26e858c56f->leave($__internal_eac0bebd75b2ce4969dea3f3787d7b4c492218f13b89f855ee400c26e858c56f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05d90a3a7af07b920c35f45de10aca5c47ae53e0d13e517257296cd71bf4c2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d90a3a7af07b920c35f45de10aca5c47ae53e0d13e517257296cd71bf4c2f3->enter($__internal_05d90a3a7af07b920c35f45de10aca5c47ae53e0d13e517257296cd71bf4c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21ae126c0fa2386336f07c442db7a0458fac6759b8f6572d0c91d6eb070eb49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ae126c0fa2386336f07c442db7a0458fac6759b8f6572d0c91d6eb070eb49e->enter($__internal_21ae126c0fa2386336f07c442db7a0458fac6759b8f6572d0c91d6eb070eb49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_21ae126c0fa2386336f07c442db7a0458fac6759b8f6572d0c91d6eb070eb49e->leave($__internal_21ae126c0fa2386336f07c442db7a0458fac6759b8f6572d0c91d6eb070eb49e_prof);

        
        $__internal_05d90a3a7af07b920c35f45de10aca5c47ae53e0d13e517257296cd71bf4c2f3->leave($__internal_05d90a3a7af07b920c35f45de10aca5c47ae53e0d13e517257296cd71bf4c2f3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4bcc851e23bf12ac2dd541838adf3da50e0b987a7b58caa212076fc48d706e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4bcc851e23bf12ac2dd541838adf3da50e0b987a7b58caa212076fc48d706e8->enter($__internal_f4bcc851e23bf12ac2dd541838adf3da50e0b987a7b58caa212076fc48d706e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_435d31d1fa411f916262863fb3b5bc5b40aacf1091421edc64455f42aecc6e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435d31d1fa411f916262863fb3b5bc5b40aacf1091421edc64455f42aecc6e64->enter($__internal_435d31d1fa411f916262863fb3b5bc5b40aacf1091421edc64455f42aecc6e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_435d31d1fa411f916262863fb3b5bc5b40aacf1091421edc64455f42aecc6e64->leave($__internal_435d31d1fa411f916262863fb3b5bc5b40aacf1091421edc64455f42aecc6e64_prof);

        
        $__internal_f4bcc851e23bf12ac2dd541838adf3da50e0b987a7b58caa212076fc48d706e8->leave($__internal_f4bcc851e23bf12ac2dd541838adf3da50e0b987a7b58caa212076fc48d706e8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8e4046c4e7f6dd4575ae1862a89e89c60fe9219702b8f9d88d16fe68ba37d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e4046c4e7f6dd4575ae1862a89e89c60fe9219702b8f9d88d16fe68ba37d94->enter($__internal_c8e4046c4e7f6dd4575ae1862a89e89c60fe9219702b8f9d88d16fe68ba37d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44502163e7963188ea2cc3f7708d0e41dc91865a8558fab4c59fbe7ebac80a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44502163e7963188ea2cc3f7708d0e41dc91865a8558fab4c59fbe7ebac80a43->enter($__internal_44502163e7963188ea2cc3f7708d0e41dc91865a8558fab4c59fbe7ebac80a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44502163e7963188ea2cc3f7708d0e41dc91865a8558fab4c59fbe7ebac80a43->leave($__internal_44502163e7963188ea2cc3f7708d0e41dc91865a8558fab4c59fbe7ebac80a43_prof);

        
        $__internal_c8e4046c4e7f6dd4575ae1862a89e89c60fe9219702b8f9d88d16fe68ba37d94->leave($__internal_c8e4046c4e7f6dd4575ae1862a89e89c60fe9219702b8f9d88d16fe68ba37d94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/basic-backend-interview-test/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
