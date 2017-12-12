<?php

/* courses/index.html.twig */
class __TwigTemplate_e25a99796288427e32aa963989a005a38f10633e5bdc185cd83247f5024a3290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "courses/index.html.twig", 1);
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
        $__internal_c6c7ca1d9a83e6b80676272e88518147f8d027b87c9679512527bff2b1411490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c7ca1d9a83e6b80676272e88518147f8d027b87c9679512527bff2b1411490->enter($__internal_c6c7ca1d9a83e6b80676272e88518147f8d027b87c9679512527bff2b1411490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

        $__internal_c789eebdca12511e1e95a85815dd5bf204fd6f2b51924012108ea2e4921230ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c789eebdca12511e1e95a85815dd5bf204fd6f2b51924012108ea2e4921230ea->enter($__internal_c789eebdca12511e1e95a85815dd5bf204fd6f2b51924012108ea2e4921230ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "courses/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6c7ca1d9a83e6b80676272e88518147f8d027b87c9679512527bff2b1411490->leave($__internal_c6c7ca1d9a83e6b80676272e88518147f8d027b87c9679512527bff2b1411490_prof);

        
        $__internal_c789eebdca12511e1e95a85815dd5bf204fd6f2b51924012108ea2e4921230ea->leave($__internal_c789eebdca12511e1e95a85815dd5bf204fd6f2b51924012108ea2e4921230ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fba2425b37884ca6e842561b898071354bdbf4538728e847d37139a55306948e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba2425b37884ca6e842561b898071354bdbf4538728e847d37139a55306948e->enter($__internal_fba2425b37884ca6e842561b898071354bdbf4538728e847d37139a55306948e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6347065879765b16618c9fd78b0be9c12bd2d0021f33f456e19a647a7a43e995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6347065879765b16618c9fd78b0be9c12bd2d0021f33f456e19a647a7a43e995->enter($__internal_6347065879765b16618c9fd78b0be9c12bd2d0021f33f456e19a647a7a43e995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Formations</h1>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 9
            echo "                    <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("course.detail", array("slug" => $this->getAttribute($context["course"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
            echo "</a></p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_6347065879765b16618c9fd78b0be9c12bd2d0021f33f456e19a647a7a43e995->leave($__internal_6347065879765b16618c9fd78b0be9c12bd2d0021f33f456e19a647a7a43e995_prof);

        
        $__internal_fba2425b37884ca6e842561b898071354bdbf4538728e847d37139a55306948e->leave($__internal_fba2425b37884ca6e842561b898071354bdbf4538728e847d37139a55306948e_prof);

    }

    public function getTemplateName()
    {
        return "courses/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

{%  block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Formations</h1>
                {% for course in results %}
                    <p><a href=\"{{ url('course.detail', { 'slug' : course.slug } ) }}\">{{ course.name }}</a></p>
                {% endfor %}
            </div>
        </div>
    </div>
{%  endblock %}
", "courses/index.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\app\\Resources\\views\\courses\\index.html.twig");
    }
}
