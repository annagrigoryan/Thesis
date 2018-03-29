<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f60da722db710d71ecef3fe8551aae27fa963cde8fb0305951de75abd4dfc8ae extends Twig_Template
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
        $__internal_6cf79db31b3614a141e93dc91eb265198c7d60adf560a8cada7e48379f326f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf79db31b3614a141e93dc91eb265198c7d60adf560a8cada7e48379f326f99->enter($__internal_6cf79db31b3614a141e93dc91eb265198c7d60adf560a8cada7e48379f326f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_93923928ebfcc5b370056d06a5bdad3ef7fcc41a0600d982cfb33aa86a07c055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93923928ebfcc5b370056d06a5bdad3ef7fcc41a0600d982cfb33aa86a07c055->enter($__internal_93923928ebfcc5b370056d06a5bdad3ef7fcc41a0600d982cfb33aa86a07c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_6cf79db31b3614a141e93dc91eb265198c7d60adf560a8cada7e48379f326f99->leave($__internal_6cf79db31b3614a141e93dc91eb265198c7d60adf560a8cada7e48379f326f99_prof);

        
        $__internal_93923928ebfcc5b370056d06a5bdad3ef7fcc41a0600d982cfb33aa86a07c055->leave($__internal_93923928ebfcc5b370056d06a5bdad3ef7fcc41a0600d982cfb33aa86a07c055_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
