<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_2bfb75e08608b80fd7d0ebc415cab16d9067623b3d221fdd9dfac42cbcdb60e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21ddbcdf49515db604e846ab5107edcfd3ae60336866c82e1ff60430e357b5cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ddbcdf49515db604e846ab5107edcfd3ae60336866c82e1ff60430e357b5cb->enter($__internal_21ddbcdf49515db604e846ab5107edcfd3ae60336866c82e1ff60430e357b5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_11b91f1ca32c05bcd7d07f4894680b9e3d05ed450c957d9b1b6acac6ec961646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b91f1ca32c05bcd7d07f4894680b9e3d05ed450c957d9b1b6acac6ec961646->enter($__internal_11b91f1ca32c05bcd7d07f4894680b9e3d05ed450c957d9b1b6acac6ec961646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ddbcdf49515db604e846ab5107edcfd3ae60336866c82e1ff60430e357b5cb->leave($__internal_21ddbcdf49515db604e846ab5107edcfd3ae60336866c82e1ff60430e357b5cb_prof);

        
        $__internal_11b91f1ca32c05bcd7d07f4894680b9e3d05ed450c957d9b1b6acac6ec961646->leave($__internal_11b91f1ca32c05bcd7d07f4894680b9e3d05ed450c957d9b1b6acac6ec961646_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c0e8b75b18ed1d06dcbf34bf9d68b22896246393f0cdd0be8926027e9d469ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e8b75b18ed1d06dcbf34bf9d68b22896246393f0cdd0be8926027e9d469ae6->enter($__internal_c0e8b75b18ed1d06dcbf34bf9d68b22896246393f0cdd0be8926027e9d469ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_97b8cc6a232db5b0cc7ab68cbf16ad207ee2f3ca81a68e2729faa210fc65cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97b8cc6a232db5b0cc7ab68cbf16ad207ee2f3ca81a68e2729faa210fc65cc23->enter($__internal_97b8cc6a232db5b0cc7ab68cbf16ad207ee2f3ca81a68e2729faa210fc65cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_97b8cc6a232db5b0cc7ab68cbf16ad207ee2f3ca81a68e2729faa210fc65cc23->leave($__internal_97b8cc6a232db5b0cc7ab68cbf16ad207ee2f3ca81a68e2729faa210fc65cc23_prof);

        
        $__internal_c0e8b75b18ed1d06dcbf34bf9d68b22896246393f0cdd0be8926027e9d469ae6->leave($__internal_c0e8b75b18ed1d06dcbf34bf9d68b22896246393f0cdd0be8926027e9d469ae6_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f1eaacc81534da4fbfbd283d0eecf35c24d62217d1a152846fd2f584ae67357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1eaacc81534da4fbfbd283d0eecf35c24d62217d1a152846fd2f584ae67357->enter($__internal_2f1eaacc81534da4fbfbd283d0eecf35c24d62217d1a152846fd2f584ae67357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f16e1fd6b917103e345bd515987435ad48b1d3515f88558199df12033daaa5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16e1fd6b917103e345bd515987435ad48b1d3515f88558199df12033daaa5ae->enter($__internal_f16e1fd6b917103e345bd515987435ad48b1d3515f88558199df12033daaa5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f16e1fd6b917103e345bd515987435ad48b1d3515f88558199df12033daaa5ae->leave($__internal_f16e1fd6b917103e345bd515987435ad48b1d3515f88558199df12033daaa5ae_prof);

        
        $__internal_2f1eaacc81534da4fbfbd283d0eecf35c24d62217d1a152846fd2f584ae67357->leave($__internal_2f1eaacc81534da4fbfbd283d0eecf35c24d62217d1a152846fd2f584ae67357_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
