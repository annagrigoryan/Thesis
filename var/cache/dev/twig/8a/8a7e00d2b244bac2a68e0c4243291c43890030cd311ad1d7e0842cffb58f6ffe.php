<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_aca228b2b6c6190ee44c874f6e3ca303387a36f37e3c519dc4343da0bee9cfc4 extends Twig_Template
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
        $__internal_3e8d24d367440bf7d4885b1076adba6a18ce5b7675dffa74033debbb476f6411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8d24d367440bf7d4885b1076adba6a18ce5b7675dffa74033debbb476f6411->enter($__internal_3e8d24d367440bf7d4885b1076adba6a18ce5b7675dffa74033debbb476f6411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_27cf7078cf883bfcb146c2644e53a6113550f634518545a4a59c66ba0e805e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cf7078cf883bfcb146c2644e53a6113550f634518545a4a59c66ba0e805e00->enter($__internal_27cf7078cf883bfcb146c2644e53a6113550f634518545a4a59c66ba0e805e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3e8d24d367440bf7d4885b1076adba6a18ce5b7675dffa74033debbb476f6411->leave($__internal_3e8d24d367440bf7d4885b1076adba6a18ce5b7675dffa74033debbb476f6411_prof);

        
        $__internal_27cf7078cf883bfcb146c2644e53a6113550f634518545a4a59c66ba0e805e00->leave($__internal_27cf7078cf883bfcb146c2644e53a6113550f634518545a4a59c66ba0e805e00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
