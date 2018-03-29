<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_1953145247d6fc143c1e28ca9c9158a04a26fcc42d9e873f1d0fe86a808c1ba6 extends Twig_Template
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
        $__internal_1e8dc6f8096633c2f7e60865a46634d12816fc24b3589de6b541e068c9de9c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8dc6f8096633c2f7e60865a46634d12816fc24b3589de6b541e068c9de9c00->enter($__internal_1e8dc6f8096633c2f7e60865a46634d12816fc24b3589de6b541e068c9de9c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_5d7fb2e5392a09d2c3eabacf8f8743b482b9a6ecb9ac31243ae7c22885fc1b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7fb2e5392a09d2c3eabacf8f8743b482b9a6ecb9ac31243ae7c22885fc1b68->enter($__internal_5d7fb2e5392a09d2c3eabacf8f8743b482b9a6ecb9ac31243ae7c22885fc1b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_1e8dc6f8096633c2f7e60865a46634d12816fc24b3589de6b541e068c9de9c00->leave($__internal_1e8dc6f8096633c2f7e60865a46634d12816fc24b3589de6b541e068c9de9c00_prof);

        
        $__internal_5d7fb2e5392a09d2c3eabacf8f8743b482b9a6ecb9ac31243ae7c22885fc1b68->leave($__internal_5d7fb2e5392a09d2c3eabacf8f8743b482b9a6ecb9ac31243ae7c22885fc1b68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
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
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
