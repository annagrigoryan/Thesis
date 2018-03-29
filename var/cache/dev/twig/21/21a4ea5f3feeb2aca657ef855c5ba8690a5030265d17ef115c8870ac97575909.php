<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b9dece9728b927a8efb85615844acbc512df6196356fad8c33daaf3e51446473 extends Twig_Template
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
        $__internal_33bf3bafce282c55c21aa272dba814dddbe7f2563344292fc76f4dc519ea4d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bf3bafce282c55c21aa272dba814dddbe7f2563344292fc76f4dc519ea4d51->enter($__internal_33bf3bafce282c55c21aa272dba814dddbe7f2563344292fc76f4dc519ea4d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_cb6ab26a9b8a50af646a0191cc19be67c5a60449c628bff95bdf9f662cb5c48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6ab26a9b8a50af646a0191cc19be67c5a60449c628bff95bdf9f662cb5c48f->enter($__internal_cb6ab26a9b8a50af646a0191cc19be67c5a60449c628bff95bdf9f662cb5c48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_33bf3bafce282c55c21aa272dba814dddbe7f2563344292fc76f4dc519ea4d51->leave($__internal_33bf3bafce282c55c21aa272dba814dddbe7f2563344292fc76f4dc519ea4d51_prof);

        
        $__internal_cb6ab26a9b8a50af646a0191cc19be67c5a60449c628bff95bdf9f662cb5c48f->leave($__internal_cb6ab26a9b8a50af646a0191cc19be67c5a60449c628bff95bdf9f662cb5c48f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
