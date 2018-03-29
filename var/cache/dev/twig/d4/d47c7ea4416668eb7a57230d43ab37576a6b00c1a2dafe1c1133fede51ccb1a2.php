<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_87c05623724b71ee0117229dac1d04dd4c1e0c7300be9d19a7f80c2e4e59ebc8 extends Twig_Template
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
        $__internal_15bcd32c9ae8f5a61ea68bb601812bcf0bd026f635e7937b6c890915c839a21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bcd32c9ae8f5a61ea68bb601812bcf0bd026f635e7937b6c890915c839a21f->enter($__internal_15bcd32c9ae8f5a61ea68bb601812bcf0bd026f635e7937b6c890915c839a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8d8b72bdd7adc834c948718852e1bc954a4de6c9a52fd8f3c8ea97df18e75ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8b72bdd7adc834c948718852e1bc954a4de6c9a52fd8f3c8ea97df18e75ffd->enter($__internal_8d8b72bdd7adc834c948718852e1bc954a4de6c9a52fd8f3c8ea97df18e75ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_15bcd32c9ae8f5a61ea68bb601812bcf0bd026f635e7937b6c890915c839a21f->leave($__internal_15bcd32c9ae8f5a61ea68bb601812bcf0bd026f635e7937b6c890915c839a21f_prof);

        
        $__internal_8d8b72bdd7adc834c948718852e1bc954a4de6c9a52fd8f3c8ea97df18e75ffd->leave($__internal_8d8b72bdd7adc834c948718852e1bc954a4de6c9a52fd8f3c8ea97df18e75ffd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
