<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5702bd833ff6da00ce948db03c5bfc2da6a90fda5b20bbdf45f1d42ffdd9c674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fc70dac8ccfa86f5a3b63a3ab968cca6c2d1d6462ead12f52fec99080215c4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc70dac8ccfa86f5a3b63a3ab968cca6c2d1d6462ead12f52fec99080215c4cc->enter($__internal_fc70dac8ccfa86f5a3b63a3ab968cca6c2d1d6462ead12f52fec99080215c4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_08bef870ce261fa891fe078544543baded2d94d3f23a55a778aafb7bc1223ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08bef870ce261fa891fe078544543baded2d94d3f23a55a778aafb7bc1223ad7->enter($__internal_08bef870ce261fa891fe078544543baded2d94d3f23a55a778aafb7bc1223ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc70dac8ccfa86f5a3b63a3ab968cca6c2d1d6462ead12f52fec99080215c4cc->leave($__internal_fc70dac8ccfa86f5a3b63a3ab968cca6c2d1d6462ead12f52fec99080215c4cc_prof);

        
        $__internal_08bef870ce261fa891fe078544543baded2d94d3f23a55a778aafb7bc1223ad7->leave($__internal_08bef870ce261fa891fe078544543baded2d94d3f23a55a778aafb7bc1223ad7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cbeb63ab250dc19ce22d66ce6b46d1a2b540da1a46f752c1d2b48fe53a1b4a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbeb63ab250dc19ce22d66ce6b46d1a2b540da1a46f752c1d2b48fe53a1b4a3f->enter($__internal_cbeb63ab250dc19ce22d66ce6b46d1a2b540da1a46f752c1d2b48fe53a1b4a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7132efc04959681acafce118adc3c008bb2e2b33882fcd9931695177f2aa862c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7132efc04959681acafce118adc3c008bb2e2b33882fcd9931695177f2aa862c->enter($__internal_7132efc04959681acafce118adc3c008bb2e2b33882fcd9931695177f2aa862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7132efc04959681acafce118adc3c008bb2e2b33882fcd9931695177f2aa862c->leave($__internal_7132efc04959681acafce118adc3c008bb2e2b33882fcd9931695177f2aa862c_prof);

        
        $__internal_cbeb63ab250dc19ce22d66ce6b46d1a2b540da1a46f752c1d2b48fe53a1b4a3f->leave($__internal_cbeb63ab250dc19ce22d66ce6b46d1a2b540da1a46f752c1d2b48fe53a1b4a3f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88ec3a9cf7e9ed2bddbfa2a15c9bd37cd893db1fe0a39f82c9497e13363bda3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ec3a9cf7e9ed2bddbfa2a15c9bd37cd893db1fe0a39f82c9497e13363bda3a->enter($__internal_88ec3a9cf7e9ed2bddbfa2a15c9bd37cd893db1fe0a39f82c9497e13363bda3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3eae39fb0b9966df13ace9feb924707aca58882a8d8b8672b243a39f1404a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eae39fb0b9966df13ace9feb924707aca58882a8d8b8672b243a39f1404a38->enter($__internal_b3eae39fb0b9966df13ace9feb924707aca58882a8d8b8672b243a39f1404a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3eae39fb0b9966df13ace9feb924707aca58882a8d8b8672b243a39f1404a38->leave($__internal_b3eae39fb0b9966df13ace9feb924707aca58882a8d8b8672b243a39f1404a38_prof);

        
        $__internal_88ec3a9cf7e9ed2bddbfa2a15c9bd37cd893db1fe0a39f82c9497e13363bda3a->leave($__internal_88ec3a9cf7e9ed2bddbfa2a15c9bd37cd893db1fe0a39f82c9497e13363bda3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e34ae5733e4d6a671be668bf7dd369917dcdee67b74d924d4d81af2ae2b632b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e34ae5733e4d6a671be668bf7dd369917dcdee67b74d924d4d81af2ae2b632b->enter($__internal_1e34ae5733e4d6a671be668bf7dd369917dcdee67b74d924d4d81af2ae2b632b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b444dacfeebfe95d0fde0a47531f44330ebae95f875bf568892cb5487ea1d42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b444dacfeebfe95d0fde0a47531f44330ebae95f875bf568892cb5487ea1d42e->enter($__internal_b444dacfeebfe95d0fde0a47531f44330ebae95f875bf568892cb5487ea1d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b444dacfeebfe95d0fde0a47531f44330ebae95f875bf568892cb5487ea1d42e->leave($__internal_b444dacfeebfe95d0fde0a47531f44330ebae95f875bf568892cb5487ea1d42e_prof);

        
        $__internal_1e34ae5733e4d6a671be668bf7dd369917dcdee67b74d924d4d81af2ae2b632b->leave($__internal_1e34ae5733e4d6a671be668bf7dd369917dcdee67b74d924d4d81af2ae2b632b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
