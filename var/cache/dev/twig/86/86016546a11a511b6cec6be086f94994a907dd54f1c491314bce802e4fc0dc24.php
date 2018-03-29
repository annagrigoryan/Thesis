<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ce8a1bec8afe23d7561de054ce0033f9887be4676966760e97ee73b7c8d62182 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7de47fdf42e7d85cb321ccb0556bfa9de61cc5fd0a9143aa4b20f964f617ed34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de47fdf42e7d85cb321ccb0556bfa9de61cc5fd0a9143aa4b20f964f617ed34->enter($__internal_7de47fdf42e7d85cb321ccb0556bfa9de61cc5fd0a9143aa4b20f964f617ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_173f8fdec857afdc0a3c1a4a7d1c4882b7b9cd83d19229aa5e294806d5720d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173f8fdec857afdc0a3c1a4a7d1c4882b7b9cd83d19229aa5e294806d5720d27->enter($__internal_173f8fdec857afdc0a3c1a4a7d1c4882b7b9cd83d19229aa5e294806d5720d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7de47fdf42e7d85cb321ccb0556bfa9de61cc5fd0a9143aa4b20f964f617ed34->leave($__internal_7de47fdf42e7d85cb321ccb0556bfa9de61cc5fd0a9143aa4b20f964f617ed34_prof);

        
        $__internal_173f8fdec857afdc0a3c1a4a7d1c4882b7b9cd83d19229aa5e294806d5720d27->leave($__internal_173f8fdec857afdc0a3c1a4a7d1c4882b7b9cd83d19229aa5e294806d5720d27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dce26f996c12548141e4531e0f60a358335163e1025e88fce42e98e13e426d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce26f996c12548141e4531e0f60a358335163e1025e88fce42e98e13e426d83->enter($__internal_dce26f996c12548141e4531e0f60a358335163e1025e88fce42e98e13e426d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33020900d35a18ad3dbd5526890c328d0c3e2aba6c453c42f955252afd603bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33020900d35a18ad3dbd5526890c328d0c3e2aba6c453c42f955252afd603bfb->enter($__internal_33020900d35a18ad3dbd5526890c328d0c3e2aba6c453c42f955252afd603bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_33020900d35a18ad3dbd5526890c328d0c3e2aba6c453c42f955252afd603bfb->leave($__internal_33020900d35a18ad3dbd5526890c328d0c3e2aba6c453c42f955252afd603bfb_prof);

        
        $__internal_dce26f996c12548141e4531e0f60a358335163e1025e88fce42e98e13e426d83->leave($__internal_dce26f996c12548141e4531e0f60a358335163e1025e88fce42e98e13e426d83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_03c6e437b3efdfa97c084681950f8329c53a5284925e3ccc568e3fa6152e7f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c6e437b3efdfa97c084681950f8329c53a5284925e3ccc568e3fa6152e7f9c->enter($__internal_03c6e437b3efdfa97c084681950f8329c53a5284925e3ccc568e3fa6152e7f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c90867be608eea03824c23114abed85a9e47756800765d86854a20c5b8fd33e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90867be608eea03824c23114abed85a9e47756800765d86854a20c5b8fd33e5->enter($__internal_c90867be608eea03824c23114abed85a9e47756800765d86854a20c5b8fd33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c90867be608eea03824c23114abed85a9e47756800765d86854a20c5b8fd33e5->leave($__internal_c90867be608eea03824c23114abed85a9e47756800765d86854a20c5b8fd33e5_prof);

        
        $__internal_03c6e437b3efdfa97c084681950f8329c53a5284925e3ccc568e3fa6152e7f9c->leave($__internal_03c6e437b3efdfa97c084681950f8329c53a5284925e3ccc568e3fa6152e7f9c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
