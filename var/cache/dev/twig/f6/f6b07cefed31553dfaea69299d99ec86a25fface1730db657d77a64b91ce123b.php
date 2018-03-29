<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8b1f25f347aaaa5acf5767250f53ea83ca9cd0141c83101ffd958c041309003 extends Twig_Template
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
        $__internal_31c2e133569c4fbf76bcefbace05e748eeda2e34a7bd8d6814b4cbbc4bd4b52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c2e133569c4fbf76bcefbace05e748eeda2e34a7bd8d6814b4cbbc4bd4b52d->enter($__internal_31c2e133569c4fbf76bcefbace05e748eeda2e34a7bd8d6814b4cbbc4bd4b52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_fea4041a3cf50a3963eeec1de1f69329fd5a9ab87f72be91a8403a14bc7926bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea4041a3cf50a3963eeec1de1f69329fd5a9ab87f72be91a8403a14bc7926bd->enter($__internal_fea4041a3cf50a3963eeec1de1f69329fd5a9ab87f72be91a8403a14bc7926bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_31c2e133569c4fbf76bcefbace05e748eeda2e34a7bd8d6814b4cbbc4bd4b52d->leave($__internal_31c2e133569c4fbf76bcefbace05e748eeda2e34a7bd8d6814b4cbbc4bd4b52d_prof);

        
        $__internal_fea4041a3cf50a3963eeec1de1f69329fd5a9ab87f72be91a8403a14bc7926bd->leave($__internal_fea4041a3cf50a3963eeec1de1f69329fd5a9ab87f72be91a8403a14bc7926bd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
