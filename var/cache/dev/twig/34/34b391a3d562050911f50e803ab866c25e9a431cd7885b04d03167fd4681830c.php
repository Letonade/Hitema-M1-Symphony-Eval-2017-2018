<?php

/* default/index.html.twig */
class __TwigTemplate_3600cc78cdcca7057e0183a9a66b5240574c75abd7c4d631bf37f423c420b88a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26559acdd8477cd1577e2dc451c13860fddc369c70fefb142dd633276ab04a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26559acdd8477cd1577e2dc451c13860fddc369c70fefb142dd633276ab04a3d->enter($__internal_26559acdd8477cd1577e2dc451c13860fddc369c70fefb142dd633276ab04a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_b13b506111e46b16bdb89e9862e990e2f0b7daf572b56ca402ddccbcfc41820e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13b506111e46b16bdb89e9862e990e2f0b7daf572b56ca402ddccbcfc41820e->enter($__internal_b13b506111e46b16bdb89e9862e990e2f0b7daf572b56ca402ddccbcfc41820e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26559acdd8477cd1577e2dc451c13860fddc369c70fefb142dd633276ab04a3d->leave($__internal_26559acdd8477cd1577e2dc451c13860fddc369c70fefb142dd633276ab04a3d_prof);

        
        $__internal_b13b506111e46b16bdb89e9862e990e2f0b7daf572b56ca402ddccbcfc41820e->leave($__internal_b13b506111e46b16bdb89e9862e990e2f0b7daf572b56ca402ddccbcfc41820e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fa58378a54c501d89a5facdc05ae37a2fb46603ffb4430bfe88199cca9d3836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa58378a54c501d89a5facdc05ae37a2fb46603ffb4430bfe88199cca9d3836->enter($__internal_3fa58378a54c501d89a5facdc05ae37a2fb46603ffb4430bfe88199cca9d3836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa9462ec02f3bba6d5ee7ae9dde9c61df21d346e49c72c1b8fd1ee67d7c689bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9462ec02f3bba6d5ee7ae9dde9c61df21d346e49c72c1b8fd1ee67d7c689bc->enter($__internal_fa9462ec02f3bba6d5ee7ae9dde9c61df21d346e49c72c1b8fd1ee67d7c689bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Coucou
";
        
        $__internal_fa9462ec02f3bba6d5ee7ae9dde9c61df21d346e49c72c1b8fd1ee67d7c689bc->leave($__internal_fa9462ec02f3bba6d5ee7ae9dde9c61df21d346e49c72c1b8fd1ee67d7c689bc_prof);

        
        $__internal_3fa58378a54c501d89a5facdc05ae37a2fb46603ffb4430bfe88199cca9d3836->leave($__internal_3fa58378a54c501d89a5facdc05ae37a2fb46603ffb4430bfe88199cca9d3836_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Coucou
{% endblock %}
", "default/index.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\app\\Resources\\views\\default\\index.html.twig");
    }
}
