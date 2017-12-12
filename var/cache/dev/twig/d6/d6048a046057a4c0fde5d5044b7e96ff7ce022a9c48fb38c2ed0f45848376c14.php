<?php

/* parent.html.twig */
class __TwigTemplate_0a47f2143d0f715679ffabaa90983697fcdff76bfe29df834093cdc8fd2cfff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2084ffa9a44e5b7bf8e1fb754fed124f6f732d0e5f7269200c8352064f4f751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2084ffa9a44e5b7bf8e1fb754fed124f6f732d0e5f7269200c8352064f4f751->enter($__internal_d2084ffa9a44e5b7bf8e1fb754fed124f6f732d0e5f7269200c8352064f4f751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parent.html.twig"));

        $__internal_df1e28177d3904c454b5cb8f287a55345f3d026fd78e5339759044996fa67885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e28177d3904c454b5cb8f287a55345f3d026fd78e5339759044996fa67885->enter($__internal_df1e28177d3904c454b5cb8f287a55345f3d026fd78e5339759044996fa67885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parent.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <title></title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        // line 8
        $this->displayBlock('style', $context, $blocks);
        // line 9
        echo "</head>
<body>
    <div class=\"container\">
        ";
        // line 12
        $this->loadTemplate("inc/nav.html.twig", "parent.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 14
        echo "    </div>
</body>
</html>";
        
        $__internal_d2084ffa9a44e5b7bf8e1fb754fed124f6f732d0e5f7269200c8352064f4f751->leave($__internal_d2084ffa9a44e5b7bf8e1fb754fed124f6f732d0e5f7269200c8352064f4f751_prof);

        
        $__internal_df1e28177d3904c454b5cb8f287a55345f3d026fd78e5339759044996fa67885->leave($__internal_df1e28177d3904c454b5cb8f287a55345f3d026fd78e5339759044996fa67885_prof);

    }

    // line 8
    public function block_style($context, array $blocks = array())
    {
        $__internal_9ff7e859d998819fde75274f1974889b6b34c7e0047f463793785720bbbd382e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff7e859d998819fde75274f1974889b6b34c7e0047f463793785720bbbd382e->enter($__internal_9ff7e859d998819fde75274f1974889b6b34c7e0047f463793785720bbbd382e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_7dba7a81d01ebbafb84b6b1cf544a285d50b43f9e8d6a0d423c3027e456d22c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dba7a81d01ebbafb84b6b1cf544a285d50b43f9e8d6a0d423c3027e456d22c1->enter($__internal_7dba7a81d01ebbafb84b6b1cf544a285d50b43f9e8d6a0d423c3027e456d22c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        
        $__internal_7dba7a81d01ebbafb84b6b1cf544a285d50b43f9e8d6a0d423c3027e456d22c1->leave($__internal_7dba7a81d01ebbafb84b6b1cf544a285d50b43f9e8d6a0d423c3027e456d22c1_prof);

        
        $__internal_9ff7e859d998819fde75274f1974889b6b34c7e0047f463793785720bbbd382e->leave($__internal_9ff7e859d998819fde75274f1974889b6b34c7e0047f463793785720bbbd382e_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_750b992b55a13b1129de6d1d6d36a97c60ead18a78d0cd46b0e0808e0ad2d8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_750b992b55a13b1129de6d1d6d36a97c60ead18a78d0cd46b0e0808e0ad2d8eb->enter($__internal_750b992b55a13b1129de6d1d6d36a97c60ead18a78d0cd46b0e0808e0ad2d8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3cd50efa80e48b761d93b62ddba8a5185ecc3eb539f1fcff055c8c0fbb1c461a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cd50efa80e48b761d93b62ddba8a5185ecc3eb539f1fcff055c8c0fbb1c461a->enter($__internal_3cd50efa80e48b761d93b62ddba8a5185ecc3eb539f1fcff055c8c0fbb1c461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_3cd50efa80e48b761d93b62ddba8a5185ecc3eb539f1fcff055c8c0fbb1c461a->leave($__internal_3cd50efa80e48b761d93b62ddba8a5185ecc3eb539f1fcff055c8c0fbb1c461a_prof);

        
        $__internal_750b992b55a13b1129de6d1d6d36a97c60ead18a78d0cd46b0e0808e0ad2d8eb->leave($__internal_750b992b55a13b1129de6d1d6d36a97c60ead18a78d0cd46b0e0808e0ad2d8eb_prof);

    }

    public function getTemplateName()
    {
        return "parent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  63 => 8,  51 => 14,  48 => 13,  46 => 12,  41 => 9,  39 => 8,  35 => 7,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <title></title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    {% block style %}{% endblock %}
</head>
<body>
    <div class=\"container\">
        {% include 'inc/nav.html.twig' %}
        {% block main %}{% endblock %}
    </div>
</body>
</html>", "parent.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formationEvaluation\\app\\Resources\\views\\parent.html.twig");
    }
}
