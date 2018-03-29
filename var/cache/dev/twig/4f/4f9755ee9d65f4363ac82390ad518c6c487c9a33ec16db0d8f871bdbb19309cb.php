<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b03233fae25fbf80583ced2016b240dcc47370002d414e1388aac234e96faf0d extends Twig_Template
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
        $__internal_754d90dce05319418fe2b9fd6de2a7312f11362c39c47297a02bcbcd68e922b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754d90dce05319418fe2b9fd6de2a7312f11362c39c47297a02bcbcd68e922b3->enter($__internal_754d90dce05319418fe2b9fd6de2a7312f11362c39c47297a02bcbcd68e922b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e1888e832f87f038dd68dd014a238779050d6166f2c3e85babb6530b432cd09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1888e832f87f038dd68dd014a238779050d6166f2c3e85babb6530b432cd09e->enter($__internal_e1888e832f87f038dd68dd014a238779050d6166f2c3e85babb6530b432cd09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_754d90dce05319418fe2b9fd6de2a7312f11362c39c47297a02bcbcd68e922b3->leave($__internal_754d90dce05319418fe2b9fd6de2a7312f11362c39c47297a02bcbcd68e922b3_prof);

        
        $__internal_e1888e832f87f038dd68dd014a238779050d6166f2c3e85babb6530b432cd09e->leave($__internal_e1888e832f87f038dd68dd014a238779050d6166f2c3e85babb6530b432cd09e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
