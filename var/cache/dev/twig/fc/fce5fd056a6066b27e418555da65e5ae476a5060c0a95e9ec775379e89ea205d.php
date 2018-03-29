<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_54f940c453aa9b168d4963093b5e116252622af847dd3c0b3761084fe0c842d1 extends Twig_Template
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
        $__internal_33bbc09760dde786be70f71e20311c0890394644a0abd22b4f6690c9cc8d087d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bbc09760dde786be70f71e20311c0890394644a0abd22b4f6690c9cc8d087d->enter($__internal_33bbc09760dde786be70f71e20311c0890394644a0abd22b4f6690c9cc8d087d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_03c7ba6471ade4087a9d4b938cf3e34369f2d7972a13e9ddbba8ae02303caaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c7ba6471ade4087a9d4b938cf3e34369f2d7972a13e9ddbba8ae02303caaab->enter($__internal_03c7ba6471ade4087a9d4b938cf3e34369f2d7972a13e9ddbba8ae02303caaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_33bbc09760dde786be70f71e20311c0890394644a0abd22b4f6690c9cc8d087d->leave($__internal_33bbc09760dde786be70f71e20311c0890394644a0abd22b4f6690c9cc8d087d_prof);

        
        $__internal_03c7ba6471ade4087a9d4b938cf3e34369f2d7972a13e9ddbba8ae02303caaab->leave($__internal_03c7ba6471ade4087a9d4b938cf3e34369f2d7972a13e9ddbba8ae02303caaab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
