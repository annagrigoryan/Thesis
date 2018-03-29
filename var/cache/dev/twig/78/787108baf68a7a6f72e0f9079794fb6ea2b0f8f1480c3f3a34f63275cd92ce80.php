<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_271945aec0f9f2ab065cbd5642bc15943585fd0420202bf6e909adb5b85f394f extends Twig_Template
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
        $__internal_1ac9f18ae72c4b5d400015c2780c914499572efceb284a0c39df4effd3c82037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac9f18ae72c4b5d400015c2780c914499572efceb284a0c39df4effd3c82037->enter($__internal_1ac9f18ae72c4b5d400015c2780c914499572efceb284a0c39df4effd3c82037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_462c043d80d17ccd1fb11324fa1ea4cb4af85b802f62c505fa7913f102cd66bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_462c043d80d17ccd1fb11324fa1ea4cb4af85b802f62c505fa7913f102cd66bd->enter($__internal_462c043d80d17ccd1fb11324fa1ea4cb4af85b802f62c505fa7913f102cd66bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1ac9f18ae72c4b5d400015c2780c914499572efceb284a0c39df4effd3c82037->leave($__internal_1ac9f18ae72c4b5d400015c2780c914499572efceb284a0c39df4effd3c82037_prof);

        
        $__internal_462c043d80d17ccd1fb11324fa1ea4cb4af85b802f62c505fa7913f102cd66bd->leave($__internal_462c043d80d17ccd1fb11324fa1ea4cb4af85b802f62c505fa7913f102cd66bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
