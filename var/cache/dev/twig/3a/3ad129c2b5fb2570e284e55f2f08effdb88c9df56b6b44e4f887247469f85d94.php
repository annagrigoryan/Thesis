<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_bf625f2d2f02a0c03b7677c390120882bea9a5b2ec9c5ee2fbadfec27900b57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d88154b412b69aa294c3d404f690a9d2690da456adaf1181c7777fae7674a081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88154b412b69aa294c3d404f690a9d2690da456adaf1181c7777fae7674a081->enter($__internal_d88154b412b69aa294c3d404f690a9d2690da456adaf1181c7777fae7674a081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6f00611ff0f29a60ffb37c4484ff7da1493fa770288596ac9556e9719971e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f00611ff0f29a60ffb37c4484ff7da1493fa770288596ac9556e9719971e8ab->enter($__internal_6f00611ff0f29a60ffb37c4484ff7da1493fa770288596ac9556e9719971e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_d88154b412b69aa294c3d404f690a9d2690da456adaf1181c7777fae7674a081->leave($__internal_d88154b412b69aa294c3d404f690a9d2690da456adaf1181c7777fae7674a081_prof);

        
        $__internal_6f00611ff0f29a60ffb37c4484ff7da1493fa770288596ac9556e9719971e8ab->leave($__internal_6f00611ff0f29a60ffb37c4484ff7da1493fa770288596ac9556e9719971e8ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
