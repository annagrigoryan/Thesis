<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7329bfa7287e7c184c66e29f11125cf88c72e564b8c6aa6c767b21f5d32f7503 extends Twig_Template
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
        $__internal_3e6e8621358189e81e5c3605067e211634914fef428df7025559062cd33aae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6e8621358189e81e5c3605067e211634914fef428df7025559062cd33aae38->enter($__internal_3e6e8621358189e81e5c3605067e211634914fef428df7025559062cd33aae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a9f824c1832fabeed6496bd158aac1a75bb47688f25faf88b2589a046ccaaf24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f824c1832fabeed6496bd158aac1a75bb47688f25faf88b2589a046ccaaf24->enter($__internal_a9f824c1832fabeed6496bd158aac1a75bb47688f25faf88b2589a046ccaaf24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e6e8621358189e81e5c3605067e211634914fef428df7025559062cd33aae38->leave($__internal_3e6e8621358189e81e5c3605067e211634914fef428df7025559062cd33aae38_prof);

        
        $__internal_a9f824c1832fabeed6496bd158aac1a75bb47688f25faf88b2589a046ccaaf24->leave($__internal_a9f824c1832fabeed6496bd158aac1a75bb47688f25faf88b2589a046ccaaf24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
