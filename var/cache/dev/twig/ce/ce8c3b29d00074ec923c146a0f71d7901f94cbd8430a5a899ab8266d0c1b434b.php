<?php

/* contact/index.html.twig */
class __TwigTemplate_a533373ba8611eace2cbe39ae3fe34f48f4a606b517efa65eedc4648b288755c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_a3cbba2b456c0e0b4bd585f4beb861e81fc9faa7594da8e5b7755d33c3bf6652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cbba2b456c0e0b4bd585f4beb861e81fc9faa7594da8e5b7755d33c3bf6652->enter($__internal_a3cbba2b456c0e0b4bd585f4beb861e81fc9faa7594da8e5b7755d33c3bf6652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_ec7e92f846c897ce30a13a3974a9aa8e50b4e85225e3fbd39782054a268d5142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7e92f846c897ce30a13a3974a9aa8e50b4e85225e3fbd39782054a268d5142->enter($__internal_ec7e92f846c897ce30a13a3974a9aa8e50b4e85225e3fbd39782054a268d5142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cbba2b456c0e0b4bd585f4beb861e81fc9faa7594da8e5b7755d33c3bf6652->leave($__internal_a3cbba2b456c0e0b4bd585f4beb861e81fc9faa7594da8e5b7755d33c3bf6652_prof);

        
        $__internal_ec7e92f846c897ce30a13a3974a9aa8e50b4e85225e3fbd39782054a268d5142->leave($__internal_ec7e92f846c897ce30a13a3974a9aa8e50b4e85225e3fbd39782054a268d5142_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c884d6ab73aa3f7339acb0fe42284c6deb157e10776f930ae87aec65e35f9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c884d6ab73aa3f7339acb0fe42284c6deb157e10776f930ae87aec65e35f9e0->enter($__internal_8c884d6ab73aa3f7339acb0fe42284c6deb157e10776f930ae87aec65e35f9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10d798e4300b6c265dcb6ebb41072f15ba96f8dbb6d1b0c7c519e1ac61f69578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d798e4300b6c265dcb6ebb41072f15ba96f8dbb6d1b0c7c519e1ac61f69578->enter($__internal_10d798e4300b6c265dcb6ebb41072f15ba96f8dbb6d1b0c7c519e1ac61f69578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <h1>Liste des contacts</h1>

                ";
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "flashes", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 14
            echo "                    <p class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
                <p>
                    <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("contact.form");
        echo "\" class=\"btn btn-info\">Ajouter</a>
                </p>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Loisirs</th>
                        <th>Système d'exploitation</th>
                        <th></th>
                        <th></th>
                    </tr>
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) ? $context["results"] : $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 33
            echo "                        <tr>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "lastname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "firstname", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "message", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 40
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "hobbies", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["hobby"]) {
                // line 41
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["hobby"], "name", array()), "html", null, true);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hobby'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </td>
                            <td>
                                ";
            // line 46
            echo "                                ";
            // line 51
            echo "                                ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["value"], "operatingSystem", array(), "any", false, true), "name", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["value"], "operatingSystem", array()), "name", array())) : ("Inconnu")), "html", null, true);
            echo "
                            </td>
                            <td>
<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("contact.update", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </td>
                            <td>
                                <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("contact.delete", array("id" => $this->getAttribute($context["value"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_10d798e4300b6c265dcb6ebb41072f15ba96f8dbb6d1b0c7c519e1ac61f69578->leave($__internal_10d798e4300b6c265dcb6ebb41072f15ba96f8dbb6d1b0c7c519e1ac61f69578_prof);

        
        $__internal_8c884d6ab73aa3f7339acb0fe42284c6deb157e10776f930ae87aec65e35f9e0->leave($__internal_8c884d6ab73aa3f7339acb0fe42284c6deb157e10776f930ae87aec65e35f9e0_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 61,  148 => 57,  142 => 54,  135 => 51,  133 => 46,  129 => 43,  120 => 41,  115 => 40,  110 => 37,  106 => 36,  102 => 35,  98 => 34,  95 => 33,  91 => 32,  74 => 18,  70 => 16,  61 => 14,  56 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
                <h1>Liste des contacts</h1>

                {#
                    app : variable globale donnant accès à des informations de l'application
                    flashes(clé) : raccourci pour accéder aux messages flash de la session
                #}
                {%  for value in app.flashes('notice') %}
                    <p class=\"alert alert-success\">{{ value }}</p>
                {%  endfor %}

                <p>
                    <a href=\"{{ url('contact.form') }}\" class=\"btn btn-info\">Ajouter</a>
                </p>

                <table class=\"table table-striped\">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Loisirs</th>
                        <th>Système d'exploitation</th>
                        <th></th>
                        <th></th>
                    </tr>
                    {% for value in results %}
                        <tr>
                            <td>{{ value.lastname }}</td>
                            <td>{{ value.firstname }}</td>
                            <td>{{ value.email }}</td>
                            <td>{{ value.message }}</td>
                            <td>
                                {# hobbies est un array #}
                                {% for hobby in value.hobbies %}
                                    {{ hobby.name }}
                                {% endfor %}
                            </td>
                            <td>
                                {# one to many renvoie un objet #}
                                {#% if value.operatingSystem.name is defined %}
                                    {{ value.operatingSystem.name }}
                                {% else %}
                                    <p class=\"alert alert-danger\">Inconnu</p>
                                {% endif %#}
                                {{ value.operatingSystem.name is defined ? value.operatingSystem.name : 'Inconnu' }}
                            </td>
                            <td>
<a href=\"{{ url('contact.update', { 'id' : value.id } ) }}\" class=\"btn btn-warning\">Modifier</a>
                            </td>
                            <td>
                                <a href=\"{{ url('contact.delete', { 'id' : value.id } ) }}\" class=\"btn btn-danger\">Supprimer</a>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "contact/index.html.twig", "C:\\wamp64\\www\\hitema_Bachelor-2017\\formation\\app\\Resources\\views\\contact\\index.html.twig");
    }
}
