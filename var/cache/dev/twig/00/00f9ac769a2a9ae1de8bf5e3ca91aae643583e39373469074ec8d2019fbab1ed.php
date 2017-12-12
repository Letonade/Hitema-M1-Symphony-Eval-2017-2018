<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_f74d976ddb2f30ad1a3fc5ab4b371af877ab21ab4a96b576add21bfa1423d282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74d976ddb2f30ad1a3fc5ab4b371af877ab21ab4a96b576add21bfa1423d282->enter($__internal_f74d976ddb2f30ad1a3fc5ab4b371af877ab21ab4a96b576add21bfa1423d282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_456b2ecd13e6184244607549cc65bb6073416cce7d073ec55bcbeab512b0fefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456b2ecd13e6184244607549cc65bb6073416cce7d073ec55bcbeab512b0fefa->enter($__internal_456b2ecd13e6184244607549cc65bb6073416cce7d073ec55bcbeab512b0fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_f74d976ddb2f30ad1a3fc5ab4b371af877ab21ab4a96b576add21bfa1423d282->leave($__internal_f74d976ddb2f30ad1a3fc5ab4b371af877ab21ab4a96b576add21bfa1423d282_prof);

        
        $__internal_456b2ecd13e6184244607549cc65bb6073416cce7d073ec55bcbeab512b0fefa->leave($__internal_456b2ecd13e6184244607549cc65bb6073416cce7d073ec55bcbeab512b0fefa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5157599f97a4d228e838f9f1c0f32244a0b42368b3e3d794c734120e9eda6a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5157599f97a4d228e838f9f1c0f32244a0b42368b3e3d794c734120e9eda6a8->enter($__internal_f5157599f97a4d228e838f9f1c0f32244a0b42368b3e3d794c734120e9eda6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b62a7a003f19da21a4d77d4922ca78d487a546a8db3a6b77b3fac2b11a16378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b62a7a003f19da21a4d77d4922ca78d487a546a8db3a6b77b3fac2b11a16378->enter($__internal_1b62a7a003f19da21a4d77d4922ca78d487a546a8db3a6b77b3fac2b11a16378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1b62a7a003f19da21a4d77d4922ca78d487a546a8db3a6b77b3fac2b11a16378->leave($__internal_1b62a7a003f19da21a4d77d4922ca78d487a546a8db3a6b77b3fac2b11a16378_prof);

        
        $__internal_f5157599f97a4d228e838f9f1c0f32244a0b42368b3e3d794c734120e9eda6a8->leave($__internal_f5157599f97a4d228e838f9f1c0f32244a0b42368b3e3d794c734120e9eda6a8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d86636e32defb9aeea8a78df5b566ee3071b0c328a737a9e72b9db520f2826ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d86636e32defb9aeea8a78df5b566ee3071b0c328a737a9e72b9db520f2826ca->enter($__internal_d86636e32defb9aeea8a78df5b566ee3071b0c328a737a9e72b9db520f2826ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d06c81024c087bd8af87961dad319c9c580f82d07dc63647dd962f45c3c552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d06c81024c087bd8af87961dad319c9c580f82d07dc63647dd962f45c3c552f->enter($__internal_4d06c81024c087bd8af87961dad319c9c580f82d07dc63647dd962f45c3c552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4d06c81024c087bd8af87961dad319c9c580f82d07dc63647dd962f45c3c552f->leave($__internal_4d06c81024c087bd8af87961dad319c9c580f82d07dc63647dd962f45c3c552f_prof);

        
        $__internal_d86636e32defb9aeea8a78df5b566ee3071b0c328a737a9e72b9db520f2826ca->leave($__internal_d86636e32defb9aeea8a78df5b566ee3071b0c328a737a9e72b9db520f2826ca_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a280205aeeb485b5ec161204c61f21b662b994c8fed98467bc6bd6f56f3d0a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a280205aeeb485b5ec161204c61f21b662b994c8fed98467bc6bd6f56f3d0a62->enter($__internal_a280205aeeb485b5ec161204c61f21b662b994c8fed98467bc6bd6f56f3d0a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8124d44e5b0a07a8124861ac4962c7030454d6d8eabb2f8d8e97f5d78a63de7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8124d44e5b0a07a8124861ac4962c7030454d6d8eabb2f8d8e97f5d78a63de7a->enter($__internal_8124d44e5b0a07a8124861ac4962c7030454d6d8eabb2f8d8e97f5d78a63de7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8124d44e5b0a07a8124861ac4962c7030454d6d8eabb2f8d8e97f5d78a63de7a->leave($__internal_8124d44e5b0a07a8124861ac4962c7030454d6d8eabb2f8d8e97f5d78a63de7a_prof);

        
        $__internal_a280205aeeb485b5ec161204c61f21b662b994c8fed98467bc6bd6f56f3d0a62->leave($__internal_a280205aeeb485b5ec161204c61f21b662b994c8fed98467bc6bd6f56f3d0a62_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
