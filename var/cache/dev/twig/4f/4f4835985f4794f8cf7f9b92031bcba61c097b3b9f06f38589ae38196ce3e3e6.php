<?php

/* contact/form.html.twig */
class __TwigTemplate_aeec5a350277beca97ab02fdd8ddcdf37aa375bc51f6a7b19540cb1f0e373aee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/form.html.twig", 1);
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
        $__internal_1a7837c847f9c3a3c0b1b42b3a0f19b3e452d2e4343f3d3dfa58f7ee8e7a7eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7837c847f9c3a3c0b1b42b3a0f19b3e452d2e4343f3d3dfa58f7ee8e7a7eb5->enter($__internal_1a7837c847f9c3a3c0b1b42b3a0f19b3e452d2e4343f3d3dfa58f7ee8e7a7eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/form.html.twig"));

        $__internal_044656533df39b7689d3fed10033c9f4150637be0bd7236f5eec116857e80906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044656533df39b7689d3fed10033c9f4150637be0bd7236f5eec116857e80906->enter($__internal_044656533df39b7689d3fed10033c9f4150637be0bd7236f5eec116857e80906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7837c847f9c3a3c0b1b42b3a0f19b3e452d2e4343f3d3dfa58f7ee8e7a7eb5->leave($__internal_1a7837c847f9c3a3c0b1b42b3a0f19b3e452d2e4343f3d3dfa58f7ee8e7a7eb5_prof);

        
        $__internal_044656533df39b7689d3fed10033c9f4150637be0bd7236f5eec116857e80906->leave($__internal_044656533df39b7689d3fed10033c9f4150637be0bd7236f5eec116857e80906_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d7b459a5ea8b2db3f3fbec19f201dbdf0df9466ab945aae6270aa3a75dec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2d7b459a5ea8b2db3f3fbec19f201dbdf0df9466ab945aae6270aa3a75dec32->enter($__internal_a2d7b459a5ea8b2db3f3fbec19f201dbdf0df9466ab945aae6270aa3a75dec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa106647780cdcc6d0170a1023c161eb15c4efdadd2fbf709c2e844ff4a57924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa106647780cdcc6d0170a1023c161eb15c4efdadd2fbf709c2e844ff4a57924->enter($__internal_fa106647780cdcc6d0170a1023c161eb15c4efdadd2fbf709c2e844ff4a57924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Contact</h1>
                ";
        // line 21
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
                <p>
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'label', array("label" => "Prénom :"));
        echo "
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label', array("label" => "Nom :"));
        echo "
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email :"));
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'label', array("label" => "Message :"));
        echo "<br>
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hobbies", array()), 'label', array("label" => "Hobbies :"));
        echo "<br>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hobbies", array()), 'widget');
        echo "
                </p>
                <p>
                    <input type=\"submit\" class=\"btn btn-primary\">
                </p>
                ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>


";
        
        $__internal_fa106647780cdcc6d0170a1023c161eb15c4efdadd2fbf709c2e844ff4a57924->leave($__internal_fa106647780cdcc6d0170a1023c161eb15c4efdadd2fbf709c2e844ff4a57924_prof);

        
        $__internal_a2d7b459a5ea8b2db3f3fbec19f201dbdf0df9466ab945aae6270aa3a75dec32->leave($__internal_a2d7b459a5ea8b2db3f3fbec19f201dbdf0df9466ab945aae6270aa3a75dec32_prof);

    }

    public function getTemplateName()
    {
        return "contact/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  124 => 46,  120 => 45,  114 => 42,  110 => 41,  104 => 38,  100 => 37,  94 => 34,  90 => 33,  84 => 30,  80 => 29,  75 => 27,  70 => 25,  66 => 24,  62 => 23,  58 => 22,  55 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Contact</h1>
                {#
                    formulaire
                        form_start : <form>
                        form_end : </form>
                        form_label : <label>
                        form_widget : champ
                        form_errors : erreur
                        nécessaire de créer le bouton submit
                        variable form : provient du contrôleur
                        nom des champs provient de la classe de formulaire Form/...Type

                        attr: attribut HTML
                #}

                {{ form_errors(form.firstname) }}
                {{ form_errors(form.lastname) }}
                {{ form_errors(form.email) }}
                {{ form_errors(form.message) }}

                {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate' } } ) }}
                <p>
                    {{ form_label(form.firstname, 'Prénom :') }}
                    {{ form_widget(form.firstname) }}
                </p>
                <p>
                    {{ form_label(form.lastname, 'Nom :') }}
                    {{ form_widget(form.lastname) }}
                </p>
                <p>
                    {{ form_label(form.email, 'Email :') }}
                    {{ form_widget(form.email) }}
                </p>
                <p>
                    {{ form_label(form.message, 'Message :') }}<br>
                    {{ form_widget(form.message) }}
                </p>
                <p>
                    {{ form_label(form.hobbies, 'Hobbies :') }}<br>
                    {{ form_widget(form.hobbies) }}
                </p>
                <p>
                    <input type=\"submit\" class=\"btn btn-primary\">
                </p>
                {{ form_end(form) }}
            </div>
        </div>
    </div>


{% endblock %}





", "contact/form.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\app\\Resources\\views\\contact\\form.html.twig");
    }
}
