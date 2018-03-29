<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_473101214b62f9525d2bac5313f380766282de8eaa1024d05b70db90c33a794b extends Twig_Template
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
        $__internal_2a6b77f8aa8933127c315c3ec12eef8b4544faa4d8338516694d594256e6a76d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6b77f8aa8933127c315c3ec12eef8b4544faa4d8338516694d594256e6a76d->enter($__internal_2a6b77f8aa8933127c315c3ec12eef8b4544faa4d8338516694d594256e6a76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fb2d83844672b423887a34d3d56fd1d163baa13fca3d68331bbca6b326f3043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb2d83844672b423887a34d3d56fd1d163baa13fca3d68331bbca6b326f3043a->enter($__internal_fb2d83844672b423887a34d3d56fd1d163baa13fca3d68331bbca6b326f3043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2a6b77f8aa8933127c315c3ec12eef8b4544faa4d8338516694d594256e6a76d->leave($__internal_2a6b77f8aa8933127c315c3ec12eef8b4544faa4d8338516694d594256e6a76d_prof);

        
        $__internal_fb2d83844672b423887a34d3d56fd1d163baa13fca3d68331bbca6b326f3043a->leave($__internal_fb2d83844672b423887a34d3d56fd1d163baa13fca3d68331bbca6b326f3043a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
