<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7b0f3e50cfd6dfb52ae2fbb560ac3f0857792ab70200dafec49bbbd9e1badc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd77a08a63bfb807629e39daecb9168c8235e3467a81094960be629d5e8bfc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd77a08a63bfb807629e39daecb9168c8235e3467a81094960be629d5e8bfc3f->enter($__internal_fd77a08a63bfb807629e39daecb9168c8235e3467a81094960be629d5e8bfc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7793c969deb0bb625ecc30b280f2ea64484d6cbd8f308def57fb89d258070fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7793c969deb0bb625ecc30b280f2ea64484d6cbd8f308def57fb89d258070fc4->enter($__internal_7793c969deb0bb625ecc30b280f2ea64484d6cbd8f308def57fb89d258070fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fd77a08a63bfb807629e39daecb9168c8235e3467a81094960be629d5e8bfc3f->leave($__internal_fd77a08a63bfb807629e39daecb9168c8235e3467a81094960be629d5e8bfc3f_prof);

        
        $__internal_7793c969deb0bb625ecc30b280f2ea64484d6cbd8f308def57fb89d258070fc4->leave($__internal_7793c969deb0bb625ecc30b280f2ea64484d6cbd8f308def57fb89d258070fc4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bde508f43dc1b795298cd3858c92cb7b4d6bde150b30dd6b13874d16c8b3a2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde508f43dc1b795298cd3858c92cb7b4d6bde150b30dd6b13874d16c8b3a2a8->enter($__internal_bde508f43dc1b795298cd3858c92cb7b4d6bde150b30dd6b13874d16c8b3a2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e671ce961a154f8630c8d22b8f7e215e8e6c962a446aae554329389a18a1d7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e671ce961a154f8630c8d22b8f7e215e8e6c962a446aae554329389a18a1d7dd->enter($__internal_e671ce961a154f8630c8d22b8f7e215e8e6c962a446aae554329389a18a1d7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e671ce961a154f8630c8d22b8f7e215e8e6c962a446aae554329389a18a1d7dd->leave($__internal_e671ce961a154f8630c8d22b8f7e215e8e6c962a446aae554329389a18a1d7dd_prof);

        
        $__internal_bde508f43dc1b795298cd3858c92cb7b4d6bde150b30dd6b13874d16c8b3a2a8->leave($__internal_bde508f43dc1b795298cd3858c92cb7b4d6bde150b30dd6b13874d16c8b3a2a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
