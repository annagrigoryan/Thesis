<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_79ac15e968ea85f1aa588c4b21994c9801856b96a95148cf396d2574db8abd94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cac42f7549d092867c825319c7a99baba63f11b61ef14576cb61d3a23d2b38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cac42f7549d092867c825319c7a99baba63f11b61ef14576cb61d3a23d2b38c->enter($__internal_6cac42f7549d092867c825319c7a99baba63f11b61ef14576cb61d3a23d2b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_40e62bcfc856867b268372a5b6dc2fb3934e3ee22cf5c66ae873700f9d04583a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e62bcfc856867b268372a5b6dc2fb3934e3ee22cf5c66ae873700f9d04583a->enter($__internal_40e62bcfc856867b268372a5b6dc2fb3934e3ee22cf5c66ae873700f9d04583a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cac42f7549d092867c825319c7a99baba63f11b61ef14576cb61d3a23d2b38c->leave($__internal_6cac42f7549d092867c825319c7a99baba63f11b61ef14576cb61d3a23d2b38c_prof);

        
        $__internal_40e62bcfc856867b268372a5b6dc2fb3934e3ee22cf5c66ae873700f9d04583a->leave($__internal_40e62bcfc856867b268372a5b6dc2fb3934e3ee22cf5c66ae873700f9d04583a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e93a2e9fc30757cb9d4eac58159a4998696c811327ca71ae31991902bd84cdc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93a2e9fc30757cb9d4eac58159a4998696c811327ca71ae31991902bd84cdc9->enter($__internal_e93a2e9fc30757cb9d4eac58159a4998696c811327ca71ae31991902bd84cdc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aae63dafa81edf236f6fb230d1dd6f18ec3f8944a74754f64b632ddd90feecb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae63dafa81edf236f6fb230d1dd6f18ec3f8944a74754f64b632ddd90feecb9->enter($__internal_aae63dafa81edf236f6fb230d1dd6f18ec3f8944a74754f64b632ddd90feecb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_aae63dafa81edf236f6fb230d1dd6f18ec3f8944a74754f64b632ddd90feecb9->leave($__internal_aae63dafa81edf236f6fb230d1dd6f18ec3f8944a74754f64b632ddd90feecb9_prof);

        
        $__internal_e93a2e9fc30757cb9d4eac58159a4998696c811327ca71ae31991902bd84cdc9->leave($__internal_e93a2e9fc30757cb9d4eac58159a4998696c811327ca71ae31991902bd84cdc9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
