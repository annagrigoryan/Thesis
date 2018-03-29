<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_3d4203c78698852b7c8163b79aaac0dd74eef28dae41f4bffb897aeabbe56b52 extends Twig_Template
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
        $__internal_e3841ae131cd3b82dd824c2bf92476020492312ce1bbe2aca7a8c1419bcfccd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3841ae131cd3b82dd824c2bf92476020492312ce1bbe2aca7a8c1419bcfccd4->enter($__internal_e3841ae131cd3b82dd824c2bf92476020492312ce1bbe2aca7a8c1419bcfccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_8f65376f36f96ff79b8447a43ad6f640967e399ea42ce65f2f8375cb077b9dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f65376f36f96ff79b8447a43ad6f640967e399ea42ce65f2f8375cb077b9dfe->enter($__internal_8f65376f36f96ff79b8447a43ad6f640967e399ea42ce65f2f8375cb077b9dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e3841ae131cd3b82dd824c2bf92476020492312ce1bbe2aca7a8c1419bcfccd4->leave($__internal_e3841ae131cd3b82dd824c2bf92476020492312ce1bbe2aca7a8c1419bcfccd4_prof);

        
        $__internal_8f65376f36f96ff79b8447a43ad6f640967e399ea42ce65f2f8375cb077b9dfe->leave($__internal_8f65376f36f96ff79b8447a43ad6f640967e399ea42ce65f2f8375cb077b9dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
