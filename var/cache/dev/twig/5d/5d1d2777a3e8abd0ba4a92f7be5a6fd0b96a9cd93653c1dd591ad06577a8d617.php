<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_273d02771944ff5e374eba02c2cb1f40bfbaacd54c2becbec43d641e47bb1c36 extends Twig_Template
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
        $__internal_739aa79b90774f23e4131c79a415e98b110645db4aecf2c39248043e56b3e11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739aa79b90774f23e4131c79a415e98b110645db4aecf2c39248043e56b3e11e->enter($__internal_739aa79b90774f23e4131c79a415e98b110645db4aecf2c39248043e56b3e11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b57327601fa28d784db3e5955889e2c6ef35e30e783ea4415558d8d19cd9cdf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57327601fa28d784db3e5955889e2c6ef35e30e783ea4415558d8d19cd9cdf7->enter($__internal_b57327601fa28d784db3e5955889e2c6ef35e30e783ea4415558d8d19cd9cdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_739aa79b90774f23e4131c79a415e98b110645db4aecf2c39248043e56b3e11e->leave($__internal_739aa79b90774f23e4131c79a415e98b110645db4aecf2c39248043e56b3e11e_prof);

        
        $__internal_b57327601fa28d784db3e5955889e2c6ef35e30e783ea4415558d8d19cd9cdf7->leave($__internal_b57327601fa28d784db3e5955889e2c6ef35e30e783ea4415558d8d19cd9cdf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
