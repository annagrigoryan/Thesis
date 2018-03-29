<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e5faec2d88d1ae61b8c20baf28c015fb3d1ac591803367f48b57493a6b70fa6f extends Twig_Template
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
        $__internal_a0a6a5671c705d3a6a8dcc81b84a71ecb9ff2bc61ea088ee4d3d6826e6262ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a6a5671c705d3a6a8dcc81b84a71ecb9ff2bc61ea088ee4d3d6826e6262ae9->enter($__internal_a0a6a5671c705d3a6a8dcc81b84a71ecb9ff2bc61ea088ee4d3d6826e6262ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_561c26278a33c7c57e6304fce8becbabfcef81e8540713cd555da01865a0d142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561c26278a33c7c57e6304fce8becbabfcef81e8540713cd555da01865a0d142->enter($__internal_561c26278a33c7c57e6304fce8becbabfcef81e8540713cd555da01865a0d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a0a6a5671c705d3a6a8dcc81b84a71ecb9ff2bc61ea088ee4d3d6826e6262ae9->leave($__internal_a0a6a5671c705d3a6a8dcc81b84a71ecb9ff2bc61ea088ee4d3d6826e6262ae9_prof);

        
        $__internal_561c26278a33c7c57e6304fce8becbabfcef81e8540713cd555da01865a0d142->leave($__internal_561c26278a33c7c57e6304fce8becbabfcef81e8540713cd555da01865a0d142_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
