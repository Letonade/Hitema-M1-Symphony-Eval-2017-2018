<?php

/* twig/layout.html.twig */
class __TwigTemplate_39afeb101cdca79cd61d26a1085354a1decce09f92c9f6ce1714c2c952ed3a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("parent.html.twig", "twig/layout.html.twig", 2);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'style' => array($this, 'block_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "parent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5280f293a77000a9bd9af4211c8be81e8a4971178ded7fbe6af2841f72b02ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5280f293a77000a9bd9af4211c8be81e8a4971178ded7fbe6af2841f72b02ca->enter($__internal_f5280f293a77000a9bd9af4211c8be81e8a4971178ded7fbe6af2841f72b02ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig/layout.html.twig"));

        $__internal_86f3fb6529bb4578e94bc3135b328d2557c3c5243035bebce04247449e18d236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f3fb6529bb4578e94bc3135b328d2557c3c5243035bebce04247449e18d236->enter($__internal_86f3fb6529bb4578e94bc3135b328d2557c3c5243035bebce04247449e18d236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "twig/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5280f293a77000a9bd9af4211c8be81e8a4971178ded7fbe6af2841f72b02ca->leave($__internal_f5280f293a77000a9bd9af4211c8be81e8a4971178ded7fbe6af2841f72b02ca_prof);

        
        $__internal_86f3fb6529bb4578e94bc3135b328d2557c3c5243035bebce04247449e18d236->leave($__internal_86f3fb6529bb4578e94bc3135b328d2557c3c5243035bebce04247449e18d236_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_a44a3aa49d2cc0629c4606d114703e40e47fb9a18e53bde008d5f79bf143c03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44a3aa49d2cc0629c4606d114703e40e47fb9a18e53bde008d5f79bf143c03f->enter($__internal_a44a3aa49d2cc0629c4606d114703e40e47fb9a18e53bde008d5f79bf143c03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_10d900b696b3df49149e594036569f185aad37df357e810b8a65807cf19230d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d900b696b3df49149e594036569f185aad37df357e810b8a65807cf19230d4->enter($__internal_10d900b696b3df49149e594036569f185aad37df357e810b8a65807cf19230d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>Titre</h1>
";
        
        $__internal_10d900b696b3df49149e594036569f185aad37df357e810b8a65807cf19230d4->leave($__internal_10d900b696b3df49149e594036569f185aad37df357e810b8a65807cf19230d4_prof);

        
        $__internal_a44a3aa49d2cc0629c4606d114703e40e47fb9a18e53bde008d5f79bf143c03f->leave($__internal_a44a3aa49d2cc0629c4606d114703e40e47fb9a18e53bde008d5f79bf143c03f_prof);

    }

    // line 10
    public function block_style($context, array $blocks = array())
    {
        $__internal_ed580fed8098b336c5ec0e9ca6244739c6e8301409653d4a1a04b38fb33d1776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed580fed8098b336c5ec0e9ca6244739c6e8301409653d4a1a04b38fb33d1776->enter($__internal_ed580fed8098b336c5ec0e9ca6244739c6e8301409653d4a1a04b38fb33d1776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_33d0d206e8711fbc28392e6aa51be84e2d289f00c89c5f18e3823afa43896b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d0d206e8711fbc28392e6aa51be84e2d289f00c89c5f18e3823afa43896b88->enter($__internal_33d0d206e8711fbc28392e6aa51be84e2d289f00c89c5f18e3823afa43896b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 11
        echo "    <style>
        h1{ color: orange; }
    </style>
";
        
        $__internal_33d0d206e8711fbc28392e6aa51be84e2d289f00c89c5f18e3823afa43896b88->leave($__internal_33d0d206e8711fbc28392e6aa51be84e2d289f00c89c5f18e3823afa43896b88_prof);

        
        $__internal_ed580fed8098b336c5ec0e9ca6244739c6e8301409653d4a1a04b38fb33d1776->leave($__internal_ed580fed8098b336c5ec0e9ca6244739c6e8301409653d4a1a04b38fb33d1776_prof);

    }

    public function getTemplateName()
    {
        return "twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  61 => 10,  50 => 6,  41 => 5,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# extends : étendre un modèle parent (fichier situé à la racine du dossier views) #}
{% extends 'parent.html.twig' %}

{# bloc main défini dans parent.html.twig #}
{% block main %}
    <h1>Titre</h1>
{% endblock %}

{# bloc style #}
{% block style %}
    <style>
        h1{ color: orange; }
    </style>
{% endblock %}", "twig/layout.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formationEvaluation\\app\\Resources\\views\\twig\\layout.html.twig");
    }
}
