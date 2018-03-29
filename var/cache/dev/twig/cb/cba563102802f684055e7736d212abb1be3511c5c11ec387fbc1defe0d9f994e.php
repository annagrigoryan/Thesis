<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_79ad04bd034aff2e9657fd957f9cfb1af05e29ea735645b55bc3ea0750dca281 extends Twig_Template
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
        $__internal_387eda2562cd6c37dec8ad2ea344c62e6e7110547abef7a3567e7e357cbd24ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387eda2562cd6c37dec8ad2ea344c62e6e7110547abef7a3567e7e357cbd24ee->enter($__internal_387eda2562cd6c37dec8ad2ea344c62e6e7110547abef7a3567e7e357cbd24ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_aa0f3511b41097a05101b1118b3518a09a712638952f2486d21027c9587abdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0f3511b41097a05101b1118b3518a09a712638952f2486d21027c9587abdee->enter($__internal_aa0f3511b41097a05101b1118b3518a09a712638952f2486d21027c9587abdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_387eda2562cd6c37dec8ad2ea344c62e6e7110547abef7a3567e7e357cbd24ee->leave($__internal_387eda2562cd6c37dec8ad2ea344c62e6e7110547abef7a3567e7e357cbd24ee_prof);

        
        $__internal_aa0f3511b41097a05101b1118b3518a09a712638952f2486d21027c9587abdee->leave($__internal_aa0f3511b41097a05101b1118b3518a09a712638952f2486d21027c9587abdee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
