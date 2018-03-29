<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c389a1e398fd382e41b575edc9a06456a84929b79cd63ac3abb72a60a583c88b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ba6bc8946cde54b81337f2eae8f381067ed24c4a82a8f6d4c6dbd7f5b9560fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba6bc8946cde54b81337f2eae8f381067ed24c4a82a8f6d4c6dbd7f5b9560fcd->enter($__internal_ba6bc8946cde54b81337f2eae8f381067ed24c4a82a8f6d4c6dbd7f5b9560fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_00bf344d7b4ed82ff686a754bd62c081a149e6ceb95a2517e8a7fc53204fcb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bf344d7b4ed82ff686a754bd62c081a149e6ceb95a2517e8a7fc53204fcb0f->enter($__internal_00bf344d7b4ed82ff686a754bd62c081a149e6ceb95a2517e8a7fc53204fcb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba6bc8946cde54b81337f2eae8f381067ed24c4a82a8f6d4c6dbd7f5b9560fcd->leave($__internal_ba6bc8946cde54b81337f2eae8f381067ed24c4a82a8f6d4c6dbd7f5b9560fcd_prof);

        
        $__internal_00bf344d7b4ed82ff686a754bd62c081a149e6ceb95a2517e8a7fc53204fcb0f->leave($__internal_00bf344d7b4ed82ff686a754bd62c081a149e6ceb95a2517e8a7fc53204fcb0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f31e111cd4f2be3909a545bcb162164820e47c2c249201a0965370769bd65910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31e111cd4f2be3909a545bcb162164820e47c2c249201a0965370769bd65910->enter($__internal_f31e111cd4f2be3909a545bcb162164820e47c2c249201a0965370769bd65910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_133abb9b10aa70004f79cf51924fa4b38df16e10ea2e1ec501fa60fe09f9d6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133abb9b10aa70004f79cf51924fa4b38df16e10ea2e1ec501fa60fe09f9d6d1->enter($__internal_133abb9b10aa70004f79cf51924fa4b38df16e10ea2e1ec501fa60fe09f9d6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_133abb9b10aa70004f79cf51924fa4b38df16e10ea2e1ec501fa60fe09f9d6d1->leave($__internal_133abb9b10aa70004f79cf51924fa4b38df16e10ea2e1ec501fa60fe09f9d6d1_prof);

        
        $__internal_f31e111cd4f2be3909a545bcb162164820e47c2c249201a0965370769bd65910->leave($__internal_f31e111cd4f2be3909a545bcb162164820e47c2c249201a0965370769bd65910_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0dcb84574fd7c6ea9856038a972376185b407f4f4005749093cef4fd19f1fd74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcb84574fd7c6ea9856038a972376185b407f4f4005749093cef4fd19f1fd74->enter($__internal_0dcb84574fd7c6ea9856038a972376185b407f4f4005749093cef4fd19f1fd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0177dc585be6c61925438e9f4b17fbae375e64b0475e3dd41e286ef0a663d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0177dc585be6c61925438e9f4b17fbae375e64b0475e3dd41e286ef0a663d3c->enter($__internal_c0177dc585be6c61925438e9f4b17fbae375e64b0475e3dd41e286ef0a663d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c0177dc585be6c61925438e9f4b17fbae375e64b0475e3dd41e286ef0a663d3c->leave($__internal_c0177dc585be6c61925438e9f4b17fbae375e64b0475e3dd41e286ef0a663d3c_prof);

        
        $__internal_0dcb84574fd7c6ea9856038a972376185b407f4f4005749093cef4fd19f1fd74->leave($__internal_0dcb84574fd7c6ea9856038a972376185b407f4f4005749093cef4fd19f1fd74_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a76b8d83006529b1b54897b9e1f1affa0eb97e7ecf53de55714f71f7a845761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a76b8d83006529b1b54897b9e1f1affa0eb97e7ecf53de55714f71f7a845761->enter($__internal_2a76b8d83006529b1b54897b9e1f1affa0eb97e7ecf53de55714f71f7a845761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72b88816c37ba629ab6cad1822b0e107a464cb1ea98e0cef56b3220388538fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b88816c37ba629ab6cad1822b0e107a464cb1ea98e0cef56b3220388538fff->enter($__internal_72b88816c37ba629ab6cad1822b0e107a464cb1ea98e0cef56b3220388538fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_72b88816c37ba629ab6cad1822b0e107a464cb1ea98e0cef56b3220388538fff->leave($__internal_72b88816c37ba629ab6cad1822b0e107a464cb1ea98e0cef56b3220388538fff_prof);

        
        $__internal_2a76b8d83006529b1b54897b9e1f1affa0eb97e7ecf53de55714f71f7a845761->leave($__internal_2a76b8d83006529b1b54897b9e1f1affa0eb97e7ecf53de55714f71f7a845761_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
