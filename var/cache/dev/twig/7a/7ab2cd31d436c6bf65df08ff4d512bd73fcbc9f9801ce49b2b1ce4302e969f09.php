<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1d51f182c958ce429285c120c348db2b8a9552ebc5b19a3fdbe258e8ff478778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d51f182c958ce429285c120c348db2b8a9552ebc5b19a3fdbe258e8ff478778->enter($__internal_1d51f182c958ce429285c120c348db2b8a9552ebc5b19a3fdbe258e8ff478778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_07ac4cdd711d33910bb480edf73c20b4e81167766991317867f91f8ec9fba957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ac4cdd711d33910bb480edf73c20b4e81167766991317867f91f8ec9fba957->enter($__internal_07ac4cdd711d33910bb480edf73c20b4e81167766991317867f91f8ec9fba957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d51f182c958ce429285c120c348db2b8a9552ebc5b19a3fdbe258e8ff478778->leave($__internal_1d51f182c958ce429285c120c348db2b8a9552ebc5b19a3fdbe258e8ff478778_prof);

        
        $__internal_07ac4cdd711d33910bb480edf73c20b4e81167766991317867f91f8ec9fba957->leave($__internal_07ac4cdd711d33910bb480edf73c20b4e81167766991317867f91f8ec9fba957_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9f48797a378fb1ad5421f74b9d9c71b21706c22bac43633f81449d21cfb8370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f48797a378fb1ad5421f74b9d9c71b21706c22bac43633f81449d21cfb8370->enter($__internal_c9f48797a378fb1ad5421f74b9d9c71b21706c22bac43633f81449d21cfb8370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66453e479da3bfb0e9af275c6b7161ef2f2f4151892d41745effa51905104c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66453e479da3bfb0e9af275c6b7161ef2f2f4151892d41745effa51905104c66->enter($__internal_66453e479da3bfb0e9af275c6b7161ef2f2f4151892d41745effa51905104c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_66453e479da3bfb0e9af275c6b7161ef2f2f4151892d41745effa51905104c66->leave($__internal_66453e479da3bfb0e9af275c6b7161ef2f2f4151892d41745effa51905104c66_prof);

        
        $__internal_c9f48797a378fb1ad5421f74b9d9c71b21706c22bac43633f81449d21cfb8370->leave($__internal_c9f48797a378fb1ad5421f74b9d9c71b21706c22bac43633f81449d21cfb8370_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e19cc375125c12b8a035fd478d7c1123ccd3fc3f1b677d4e940124760efa6d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e19cc375125c12b8a035fd478d7c1123ccd3fc3f1b677d4e940124760efa6d8->enter($__internal_0e19cc375125c12b8a035fd478d7c1123ccd3fc3f1b677d4e940124760efa6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ae86f91a3995fbc26aa2cfa91741547445856350101469f449470f452e451acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae86f91a3995fbc26aa2cfa91741547445856350101469f449470f452e451acb->enter($__internal_ae86f91a3995fbc26aa2cfa91741547445856350101469f449470f452e451acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ae86f91a3995fbc26aa2cfa91741547445856350101469f449470f452e451acb->leave($__internal_ae86f91a3995fbc26aa2cfa91741547445856350101469f449470f452e451acb_prof);

        
        $__internal_0e19cc375125c12b8a035fd478d7c1123ccd3fc3f1b677d4e940124760efa6d8->leave($__internal_0e19cc375125c12b8a035fd478d7c1123ccd3fc3f1b677d4e940124760efa6d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7381a0c9495d6c2199bc860a6a54e54641f547af807192ccde34a3e4b436c543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7381a0c9495d6c2199bc860a6a54e54641f547af807192ccde34a3e4b436c543->enter($__internal_7381a0c9495d6c2199bc860a6a54e54641f547af807192ccde34a3e4b436c543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a9a6b3320e9e89e627f4b2839be371db5b2e00bd773bbd36fa116a1db1e3c2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9a6b3320e9e89e627f4b2839be371db5b2e00bd773bbd36fa116a1db1e3c2a2->enter($__internal_a9a6b3320e9e89e627f4b2839be371db5b2e00bd773bbd36fa116a1db1e3c2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a9a6b3320e9e89e627f4b2839be371db5b2e00bd773bbd36fa116a1db1e3c2a2->leave($__internal_a9a6b3320e9e89e627f4b2839be371db5b2e00bd773bbd36fa116a1db1e3c2a2_prof);

        
        $__internal_7381a0c9495d6c2199bc860a6a54e54641f547af807192ccde34a3e4b436c543->leave($__internal_7381a0c9495d6c2199bc860a6a54e54641f547af807192ccde34a3e4b436c543_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
