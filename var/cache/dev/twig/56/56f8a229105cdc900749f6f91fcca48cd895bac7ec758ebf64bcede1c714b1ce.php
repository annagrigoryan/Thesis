<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_67ea8f708d27b6ea7b05ee00cb288b6d315ac91074c64f86099e92f8226db8b3 extends Twig_Template
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
        $__internal_3ee492ac41cb7e95ca1423687af8ca46b947e02dd3d6966bccb96269c3d2f26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee492ac41cb7e95ca1423687af8ca46b947e02dd3d6966bccb96269c3d2f26b->enter($__internal_3ee492ac41cb7e95ca1423687af8ca46b947e02dd3d6966bccb96269c3d2f26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1d3ae355e1d54af615b6270e1d4d386c019e1f919e3cb629c69c3b0cf643a744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3ae355e1d54af615b6270e1d4d386c019e1f919e3cb629c69c3b0cf643a744->enter($__internal_1d3ae355e1d54af615b6270e1d4d386c019e1f919e3cb629c69c3b0cf643a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_3ee492ac41cb7e95ca1423687af8ca46b947e02dd3d6966bccb96269c3d2f26b->leave($__internal_3ee492ac41cb7e95ca1423687af8ca46b947e02dd3d6966bccb96269c3d2f26b_prof);

        
        $__internal_1d3ae355e1d54af615b6270e1d4d386c019e1f919e3cb629c69c3b0cf643a744->leave($__internal_1d3ae355e1d54af615b6270e1d4d386c019e1f919e3cb629c69c3b0cf643a744_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
