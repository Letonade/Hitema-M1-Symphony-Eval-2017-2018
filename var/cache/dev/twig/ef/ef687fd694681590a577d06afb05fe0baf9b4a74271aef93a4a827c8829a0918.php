<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
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
        $__internal_e044eb6e03a7c7f969279f9cd7d4d3773014bae9c2e0c0832ef470914a7c0de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e044eb6e03a7c7f969279f9cd7d4d3773014bae9c2e0c0832ef470914a7c0de0->enter($__internal_e044eb6e03a7c7f969279f9cd7d4d3773014bae9c2e0c0832ef470914a7c0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2e4718e3fe668cf26f6a1517bd1cd799b8414b69adcc988b59a9d12bd3d041b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4718e3fe668cf26f6a1517bd1cd799b8414b69adcc988b59a9d12bd3d041b5->enter($__internal_2e4718e3fe668cf26f6a1517bd1cd799b8414b69adcc988b59a9d12bd3d041b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e044eb6e03a7c7f969279f9cd7d4d3773014bae9c2e0c0832ef470914a7c0de0->leave($__internal_e044eb6e03a7c7f969279f9cd7d4d3773014bae9c2e0c0832ef470914a7c0de0_prof);

        
        $__internal_2e4718e3fe668cf26f6a1517bd1cd799b8414b69adcc988b59a9d12bd3d041b5->leave($__internal_2e4718e3fe668cf26f6a1517bd1cd799b8414b69adcc988b59a9d12bd3d041b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_663179d119fa3ff4f6537826e1f933f9124d2bbb38f746273227308e2c920fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_663179d119fa3ff4f6537826e1f933f9124d2bbb38f746273227308e2c920fcb->enter($__internal_663179d119fa3ff4f6537826e1f933f9124d2bbb38f746273227308e2c920fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_907d5e30857191918f93aecbb414d0e69bcb1b4825d8238a92f87d70f16ca2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_907d5e30857191918f93aecbb414d0e69bcb1b4825d8238a92f87d70f16ca2a0->enter($__internal_907d5e30857191918f93aecbb414d0e69bcb1b4825d8238a92f87d70f16ca2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_907d5e30857191918f93aecbb414d0e69bcb1b4825d8238a92f87d70f16ca2a0->leave($__internal_907d5e30857191918f93aecbb414d0e69bcb1b4825d8238a92f87d70f16ca2a0_prof);

        
        $__internal_663179d119fa3ff4f6537826e1f933f9124d2bbb38f746273227308e2c920fcb->leave($__internal_663179d119fa3ff4f6537826e1f933f9124d2bbb38f746273227308e2c920fcb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d516c1e05d9355b8db2d14c56e3c35a0686774df588654cf1b4ffe8184a1041f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d516c1e05d9355b8db2d14c56e3c35a0686774df588654cf1b4ffe8184a1041f->enter($__internal_d516c1e05d9355b8db2d14c56e3c35a0686774df588654cf1b4ffe8184a1041f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ec0accbcf759ab4e140168865efcbfca88e43a43a2f0a8f87faf0d80bad00a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0accbcf759ab4e140168865efcbfca88e43a43a2f0a8f87faf0d80bad00a84->enter($__internal_ec0accbcf759ab4e140168865efcbfca88e43a43a2f0a8f87faf0d80bad00a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec0accbcf759ab4e140168865efcbfca88e43a43a2f0a8f87faf0d80bad00a84->leave($__internal_ec0accbcf759ab4e140168865efcbfca88e43a43a2f0a8f87faf0d80bad00a84_prof);

        
        $__internal_d516c1e05d9355b8db2d14c56e3c35a0686774df588654cf1b4ffe8184a1041f->leave($__internal_d516c1e05d9355b8db2d14c56e3c35a0686774df588654cf1b4ffe8184a1041f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2c0b50b3fbd346702df02bc69257f446f68f400f680f9ea383e6a04fa9132c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c0b50b3fbd346702df02bc69257f446f68f400f680f9ea383e6a04fa9132c8->enter($__internal_a2c0b50b3fbd346702df02bc69257f446f68f400f680f9ea383e6a04fa9132c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2df1a46e0d4befc5eedb7ccb28c5d4d746c398e2b3ada6c46bd8d498a4ae36be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df1a46e0d4befc5eedb7ccb28c5d4d746c398e2b3ada6c46bd8d498a4ae36be->enter($__internal_2df1a46e0d4befc5eedb7ccb28c5d4d746c398e2b3ada6c46bd8d498a4ae36be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2df1a46e0d4befc5eedb7ccb28c5d4d746c398e2b3ada6c46bd8d498a4ae36be->leave($__internal_2df1a46e0d4befc5eedb7ccb28c5d4d746c398e2b3ada6c46bd8d498a4ae36be_prof);

        
        $__internal_a2c0b50b3fbd346702df02bc69257f446f68f400f680f9ea383e6a04fa9132c8->leave($__internal_a2c0b50b3fbd346702df02bc69257f446f68f400f680f9ea383e6a04fa9132c8_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
