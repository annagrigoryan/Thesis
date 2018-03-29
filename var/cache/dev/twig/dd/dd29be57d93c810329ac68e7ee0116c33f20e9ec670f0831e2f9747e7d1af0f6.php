<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_791ea4b59784d41bd8065e91c97c849b1053b4f68ce0a2ee71c7b30354c70fdf extends Twig_Template
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
        $__internal_9b8da81e01c0d6151afcb1d8f1840f78772a6731e780f79df22445c6df89fa40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8da81e01c0d6151afcb1d8f1840f78772a6731e780f79df22445c6df89fa40->enter($__internal_9b8da81e01c0d6151afcb1d8f1840f78772a6731e780f79df22445c6df89fa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7d9905895ec1c5fe170b868f7c2bb1da886d8fea21731301117699a48901cac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9905895ec1c5fe170b868f7c2bb1da886d8fea21731301117699a48901cac0->enter($__internal_7d9905895ec1c5fe170b868f7c2bb1da886d8fea21731301117699a48901cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9b8da81e01c0d6151afcb1d8f1840f78772a6731e780f79df22445c6df89fa40->leave($__internal_9b8da81e01c0d6151afcb1d8f1840f78772a6731e780f79df22445c6df89fa40_prof);

        
        $__internal_7d9905895ec1c5fe170b868f7c2bb1da886d8fea21731301117699a48901cac0->leave($__internal_7d9905895ec1c5fe170b868f7c2bb1da886d8fea21731301117699a48901cac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
