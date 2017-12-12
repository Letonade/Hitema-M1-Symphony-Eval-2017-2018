<?php

/* base.html.twig */
class __TwigTemplate_740b20c196b34746a479cf25c06ce43ebcb1ad6c85615731c4beb8bca454675d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfe9325c484dd5b30d70be99eb88738545cc532e0856a93ad1c2691ab0068233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe9325c484dd5b30d70be99eb88738545cc532e0856a93ad1c2691ab0068233->enter($__internal_bfe9325c484dd5b30d70be99eb88738545cc532e0856a93ad1c2691ab0068233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_382172369b48a7270f14034bb2c5cfb560f9242383419df345f2fc9f08dedab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382172369b48a7270f14034bb2c5cfb560f9242383419df345f2fc9f08dedab1->enter($__internal_382172369b48a7270f14034bb2c5cfb560f9242383419df345f2fc9f08dedab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bfe9325c484dd5b30d70be99eb88738545cc532e0856a93ad1c2691ab0068233->leave($__internal_bfe9325c484dd5b30d70be99eb88738545cc532e0856a93ad1c2691ab0068233_prof);

        
        $__internal_382172369b48a7270f14034bb2c5cfb560f9242383419df345f2fc9f08dedab1->leave($__internal_382172369b48a7270f14034bb2c5cfb560f9242383419df345f2fc9f08dedab1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a43e0027a88ea16ef914b1e4f334d17bd93abe2a61628ce9af5e80f24d97e761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43e0027a88ea16ef914b1e4f334d17bd93abe2a61628ce9af5e80f24d97e761->enter($__internal_a43e0027a88ea16ef914b1e4f334d17bd93abe2a61628ce9af5e80f24d97e761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7c2e45a0bf8023929f369a823b96f29e00a123572442183f2b1a89d61185998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c2e45a0bf8023929f369a823b96f29e00a123572442183f2b1a89d61185998->enter($__internal_d7c2e45a0bf8023929f369a823b96f29e00a123572442183f2b1a89d61185998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d7c2e45a0bf8023929f369a823b96f29e00a123572442183f2b1a89d61185998->leave($__internal_d7c2e45a0bf8023929f369a823b96f29e00a123572442183f2b1a89d61185998_prof);

        
        $__internal_a43e0027a88ea16ef914b1e4f334d17bd93abe2a61628ce9af5e80f24d97e761->leave($__internal_a43e0027a88ea16ef914b1e4f334d17bd93abe2a61628ce9af5e80f24d97e761_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d219ab6963fc903a209e720c77d9fb4c5de137ab20f7e12a004bb3383a43c57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d219ab6963fc903a209e720c77d9fb4c5de137ab20f7e12a004bb3383a43c57d->enter($__internal_d219ab6963fc903a209e720c77d9fb4c5de137ab20f7e12a004bb3383a43c57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_11b7514f50c2bdc097ed36d29095f10fbf1fb0b847888004a4b506e3fc9e8170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b7514f50c2bdc097ed36d29095f10fbf1fb0b847888004a4b506e3fc9e8170->enter($__internal_11b7514f50c2bdc097ed36d29095f10fbf1fb0b847888004a4b506e3fc9e8170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11b7514f50c2bdc097ed36d29095f10fbf1fb0b847888004a4b506e3fc9e8170->leave($__internal_11b7514f50c2bdc097ed36d29095f10fbf1fb0b847888004a4b506e3fc9e8170_prof);

        
        $__internal_d219ab6963fc903a209e720c77d9fb4c5de137ab20f7e12a004bb3383a43c57d->leave($__internal_d219ab6963fc903a209e720c77d9fb4c5de137ab20f7e12a004bb3383a43c57d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c148727f464c3ffd718ee247103b198cf5d9ee6c5d98e79a5369bec09d9fc8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c148727f464c3ffd718ee247103b198cf5d9ee6c5d98e79a5369bec09d9fc8d6->enter($__internal_c148727f464c3ffd718ee247103b198cf5d9ee6c5d98e79a5369bec09d9fc8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6745b9574c9935549774073a0471670119f5882f495780e27c90735abfa2f2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6745b9574c9935549774073a0471670119f5882f495780e27c90735abfa2f2d9->enter($__internal_6745b9574c9935549774073a0471670119f5882f495780e27c90735abfa2f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6745b9574c9935549774073a0471670119f5882f495780e27c90735abfa2f2d9->leave($__internal_6745b9574c9935549774073a0471670119f5882f495780e27c90735abfa2f2d9_prof);

        
        $__internal_c148727f464c3ffd718ee247103b198cf5d9ee6c5d98e79a5369bec09d9fc8d6->leave($__internal_c148727f464c3ffd718ee247103b198cf5d9ee6c5d98e79a5369bec09d9fc8d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ba3e6da5c92575d56b623194ecdf18e9a394d051f3be4350ebb78d9ca977686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba3e6da5c92575d56b623194ecdf18e9a394d051f3be4350ebb78d9ca977686->enter($__internal_5ba3e6da5c92575d56b623194ecdf18e9a394d051f3be4350ebb78d9ca977686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45852ef2fd2ae34d3c263b4ece3682ab8fc09fb9215b8b7db4a20d9e2af9c7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45852ef2fd2ae34d3c263b4ece3682ab8fc09fb9215b8b7db4a20d9e2af9c7e0->enter($__internal_45852ef2fd2ae34d3c263b4ece3682ab8fc09fb9215b8b7db4a20d9e2af9c7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45852ef2fd2ae34d3c263b4ece3682ab8fc09fb9215b8b7db4a20d9e2af9c7e0->leave($__internal_45852ef2fd2ae34d3c263b4ece3682ab8fc09fb9215b8b7db4a20d9e2af9c7e0_prof);

        
        $__internal_5ba3e6da5c92575d56b623194ecdf18e9a394d051f3be4350ebb78d9ca977686->leave($__internal_5ba3e6da5c92575d56b623194ecdf18e9a394d051f3be4350ebb78d9ca977686_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\app\\Resources\\views\\base.html.twig");
    }
}
