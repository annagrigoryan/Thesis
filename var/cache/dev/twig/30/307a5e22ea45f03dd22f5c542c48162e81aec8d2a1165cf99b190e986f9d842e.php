<?php

/* DSSBundle:Default:index.html.twig */
class __TwigTemplate_f50cc5209281e27bc99abada4c83c5fdfa0ae182dee7206b7d0e8cd182212f83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "DSSBundle:Default:index.html.twig", 1);
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
        $__internal_71c93d7b502782d61e3ed21ecf41d42e46476e2127483141bc203b894658141c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71c93d7b502782d61e3ed21ecf41d42e46476e2127483141bc203b894658141c->enter($__internal_71c93d7b502782d61e3ed21ecf41d42e46476e2127483141bc203b894658141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSSBundle:Default:index.html.twig"));

        $__internal_0a129bfaae36e081ee5366c727271a03b11e6ec99920e67e41c48dd2fc1d98c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a129bfaae36e081ee5366c727271a03b11e6ec99920e67e41c48dd2fc1d98c1->enter($__internal_0a129bfaae36e081ee5366c727271a03b11e6ec99920e67e41c48dd2fc1d98c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSSBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c93d7b502782d61e3ed21ecf41d42e46476e2127483141bc203b894658141c->leave($__internal_71c93d7b502782d61e3ed21ecf41d42e46476e2127483141bc203b894658141c_prof);

        
        $__internal_0a129bfaae36e081ee5366c727271a03b11e6ec99920e67e41c48dd2fc1d98c1->leave($__internal_0a129bfaae36e081ee5366c727271a03b11e6ec99920e67e41c48dd2fc1d98c1_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d5079e3643d784ca1b8f6705add38ecad89a58bf9898d9905b4baab8fe60b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5079e3643d784ca1b8f6705add38ecad89a58bf9898d9905b4baab8fe60b9a->enter($__internal_3d5079e3643d784ca1b8f6705add38ecad89a58bf9898d9905b4baab8fe60b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0fd7069dd20589c1aded590897d573ddfa56d6c69a77aba068bf3136a3c34b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd7069dd20589c1aded590897d573ddfa56d6c69a77aba068bf3136a3c34b3c->enter($__internal_0fd7069dd20589c1aded590897d573ddfa56d6c69a77aba068bf3136a3c34b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Product List</h1>
";
        
        $__internal_0fd7069dd20589c1aded590897d573ddfa56d6c69a77aba068bf3136a3c34b3c->leave($__internal_0fd7069dd20589c1aded590897d573ddfa56d6c69a77aba068bf3136a3c34b3c_prof);

        
        $__internal_3d5079e3643d784ca1b8f6705add38ecad89a58bf9898d9905b4baab8fe60b9a->leave($__internal_3d5079e3643d784ca1b8f6705add38ecad89a58bf9898d9905b4baab8fe60b9a_prof);

    }

    public function getTemplateName()
    {
        return "DSSBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
    <h1>Product List</h1>
{% endblock %}



", "DSSBundle:Default:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/src/DSSBundle/Resources/views/Default/index.html.twig");
    }
}
