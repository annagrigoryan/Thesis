<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_35c4726fac86b1939db2b1044b7873946b70cabd7fd2a57e849b2092b131d5c7 extends Twig_Template
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
        $__internal_03aa1294de6c075aa1e15cd80f943b411078bea473d0dc313c98f254cfc9eb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03aa1294de6c075aa1e15cd80f943b411078bea473d0dc313c98f254cfc9eb46->enter($__internal_03aa1294de6c075aa1e15cd80f943b411078bea473d0dc313c98f254cfc9eb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_56d74c39f9084ae41c915053aa7bcefb7840ac74c085d0dbb2e800ad4db91d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d74c39f9084ae41c915053aa7bcefb7840ac74c085d0dbb2e800ad4db91d04->enter($__internal_56d74c39f9084ae41c915053aa7bcefb7840ac74c085d0dbb2e800ad4db91d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_03aa1294de6c075aa1e15cd80f943b411078bea473d0dc313c98f254cfc9eb46->leave($__internal_03aa1294de6c075aa1e15cd80f943b411078bea473d0dc313c98f254cfc9eb46_prof);

        
        $__internal_56d74c39f9084ae41c915053aa7bcefb7840ac74c085d0dbb2e800ad4db91d04->leave($__internal_56d74c39f9084ae41c915053aa7bcefb7840ac74c085d0dbb2e800ad4db91d04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
