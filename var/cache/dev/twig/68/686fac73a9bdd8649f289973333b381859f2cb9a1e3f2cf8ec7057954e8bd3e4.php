<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_44a22d73b1b63c724943da0079a113a4071581a5c98cc4beea00d15f95d05d27 extends Twig_Template
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
        $__internal_0a0ba97d094f614cf069cc5c7168ded74facf4dfc994798aae1cfd9aa829310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0ba97d094f614cf069cc5c7168ded74facf4dfc994798aae1cfd9aa829310f->enter($__internal_0a0ba97d094f614cf069cc5c7168ded74facf4dfc994798aae1cfd9aa829310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_bc601ec63d9c9c860dd6a413699431ed08ca5c5f0d620156f15e156f92cd651b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc601ec63d9c9c860dd6a413699431ed08ca5c5f0d620156f15e156f92cd651b->enter($__internal_bc601ec63d9c9c860dd6a413699431ed08ca5c5f0d620156f15e156f92cd651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0a0ba97d094f614cf069cc5c7168ded74facf4dfc994798aae1cfd9aa829310f->leave($__internal_0a0ba97d094f614cf069cc5c7168ded74facf4dfc994798aae1cfd9aa829310f_prof);

        
        $__internal_bc601ec63d9c9c860dd6a413699431ed08ca5c5f0d620156f15e156f92cd651b->leave($__internal_bc601ec63d9c9c860dd6a413699431ed08ca5c5f0d620156f15e156f92cd651b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
