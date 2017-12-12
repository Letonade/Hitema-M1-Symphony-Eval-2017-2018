<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd9124d2918174f1ce3029de84e78e34b89c93b34381095fbff25926599351e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd9124d2918174f1ce3029de84e78e34b89c93b34381095fbff25926599351e0->enter($__internal_bd9124d2918174f1ce3029de84e78e34b89c93b34381095fbff25926599351e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c4ac92cef2410893a155feb375989459d25fcca1e31860d7aaa737ce15584c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac92cef2410893a155feb375989459d25fcca1e31860d7aaa737ce15584c77->enter($__internal_c4ac92cef2410893a155feb375989459d25fcca1e31860d7aaa737ce15584c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd9124d2918174f1ce3029de84e78e34b89c93b34381095fbff25926599351e0->leave($__internal_bd9124d2918174f1ce3029de84e78e34b89c93b34381095fbff25926599351e0_prof);

        
        $__internal_c4ac92cef2410893a155feb375989459d25fcca1e31860d7aaa737ce15584c77->leave($__internal_c4ac92cef2410893a155feb375989459d25fcca1e31860d7aaa737ce15584c77_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_48ab0279686e749e3250fd8cb78642ce7c8a246e01904fbe15651ba21292b1bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ab0279686e749e3250fd8cb78642ce7c8a246e01904fbe15651ba21292b1bd->enter($__internal_48ab0279686e749e3250fd8cb78642ce7c8a246e01904fbe15651ba21292b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0aa9d82cff72f676ddb0cebd8ce1ded6dab532d7936cc6928a3cac8193e1e708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa9d82cff72f676ddb0cebd8ce1ded6dab532d7936cc6928a3cac8193e1e708->enter($__internal_0aa9d82cff72f676ddb0cebd8ce1ded6dab532d7936cc6928a3cac8193e1e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_0aa9d82cff72f676ddb0cebd8ce1ded6dab532d7936cc6928a3cac8193e1e708->leave($__internal_0aa9d82cff72f676ddb0cebd8ce1ded6dab532d7936cc6928a3cac8193e1e708_prof);

        
        $__internal_48ab0279686e749e3250fd8cb78642ce7c8a246e01904fbe15651ba21292b1bd->leave($__internal_48ab0279686e749e3250fd8cb78642ce7c8a246e01904fbe15651ba21292b1bd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a8625378cacc08ecd7bddc1f33ce4a725fe6a15ec1dd8706b044d82da8e54ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8625378cacc08ecd7bddc1f33ce4a725fe6a15ec1dd8706b044d82da8e54ce->enter($__internal_9a8625378cacc08ecd7bddc1f33ce4a725fe6a15ec1dd8706b044d82da8e54ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97971319963014a4d190acd65d2e11826c025be4a761d9495ef9b3f5d56d826a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97971319963014a4d190acd65d2e11826c025be4a761d9495ef9b3f5d56d826a->enter($__internal_97971319963014a4d190acd65d2e11826c025be4a761d9495ef9b3f5d56d826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97971319963014a4d190acd65d2e11826c025be4a761d9495ef9b3f5d56d826a->leave($__internal_97971319963014a4d190acd65d2e11826c025be4a761d9495ef9b3f5d56d826a_prof);

        
        $__internal_9a8625378cacc08ecd7bddc1f33ce4a725fe6a15ec1dd8706b044d82da8e54ce->leave($__internal_9a8625378cacc08ecd7bddc1f33ce4a725fe6a15ec1dd8706b044d82da8e54ce_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_98bb322f4134005c56c83457a18d4cd5c28075b6aa936ec5df6356892cfbe851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bb322f4134005c56c83457a18d4cd5c28075b6aa936ec5df6356892cfbe851->enter($__internal_98bb322f4134005c56c83457a18d4cd5c28075b6aa936ec5df6356892cfbe851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b606c50729f55525cfaf868e7c8b39e7eda139c056b4e8d7d55669eef75004dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b606c50729f55525cfaf868e7c8b39e7eda139c056b4e8d7d55669eef75004dc->enter($__internal_b606c50729f55525cfaf868e7c8b39e7eda139c056b4e8d7d55669eef75004dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b606c50729f55525cfaf868e7c8b39e7eda139c056b4e8d7d55669eef75004dc->leave($__internal_b606c50729f55525cfaf868e7c8b39e7eda139c056b4e8d7d55669eef75004dc_prof);

        
        $__internal_98bb322f4134005c56c83457a18d4cd5c28075b6aa936ec5df6356892cfbe851->leave($__internal_98bb322f4134005c56c83457a18d4cd5c28075b6aa936ec5df6356892cfbe851_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
