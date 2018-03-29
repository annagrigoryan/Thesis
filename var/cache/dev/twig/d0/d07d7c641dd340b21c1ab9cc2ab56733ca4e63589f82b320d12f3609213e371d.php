<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2277fc959b3f9b26a50e11d4371051694e61a9362520a01770dd50378c67e1ab extends Twig_Template
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
        $__internal_85c3a740b589e91f8218de076ae91bcc4c8372a094cfea99d766d0885e163c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c3a740b589e91f8218de076ae91bcc4c8372a094cfea99d766d0885e163c43->enter($__internal_85c3a740b589e91f8218de076ae91bcc4c8372a094cfea99d766d0885e163c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_19045be9e2d665d167c40f0ea9eadc34f2c5a1762ab450b8e72fb320ae6518e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19045be9e2d665d167c40f0ea9eadc34f2c5a1762ab450b8e72fb320ae6518e4->enter($__internal_19045be9e2d665d167c40f0ea9eadc34f2c5a1762ab450b8e72fb320ae6518e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_85c3a740b589e91f8218de076ae91bcc4c8372a094cfea99d766d0885e163c43->leave($__internal_85c3a740b589e91f8218de076ae91bcc4c8372a094cfea99d766d0885e163c43_prof);

        
        $__internal_19045be9e2d665d167c40f0ea9eadc34f2c5a1762ab450b8e72fb320ae6518e4->leave($__internal_19045be9e2d665d167c40f0ea9eadc34f2c5a1762ab450b8e72fb320ae6518e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
