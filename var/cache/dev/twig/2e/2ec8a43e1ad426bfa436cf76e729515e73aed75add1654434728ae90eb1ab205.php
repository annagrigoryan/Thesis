<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8a75d4a98aeac0c4b653ef2bfa7d48b56d7c5a64772d7828bb097898e22549d4 extends Twig_Template
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
        $__internal_50bc07c98ad698d7d84767c021a4506b785c2bbae1f4a619d202b0002205d774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50bc07c98ad698d7d84767c021a4506b785c2bbae1f4a619d202b0002205d774->enter($__internal_50bc07c98ad698d7d84767c021a4506b785c2bbae1f4a619d202b0002205d774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_473dd7b537ae4208d1df63f3e095dcc359d48f97b7149c80c5f48177e29bcbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473dd7b537ae4208d1df63f3e095dcc359d48f97b7149c80c5f48177e29bcbbc->enter($__internal_473dd7b537ae4208d1df63f3e095dcc359d48f97b7149c80c5f48177e29bcbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_50bc07c98ad698d7d84767c021a4506b785c2bbae1f4a619d202b0002205d774->leave($__internal_50bc07c98ad698d7d84767c021a4506b785c2bbae1f4a619d202b0002205d774_prof);

        
        $__internal_473dd7b537ae4208d1df63f3e095dcc359d48f97b7149c80c5f48177e29bcbbc->leave($__internal_473dd7b537ae4208d1df63f3e095dcc359d48f97b7149c80c5f48177e29bcbbc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
