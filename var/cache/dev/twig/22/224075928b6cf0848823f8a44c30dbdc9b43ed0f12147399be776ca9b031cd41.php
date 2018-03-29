<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_81abd249f206a0d82c437c880ba9522fa1babf5af2b1504fd8f59cde85dba88a extends Twig_Template
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
        $__internal_e298cb10bbea5ed8961014b35256997fbc9815a988a756b9fa6794bfba7cc9df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e298cb10bbea5ed8961014b35256997fbc9815a988a756b9fa6794bfba7cc9df->enter($__internal_e298cb10bbea5ed8961014b35256997fbc9815a988a756b9fa6794bfba7cc9df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_0bb17f368619be733b30f4acccdf3af07ab2703274a15ac6f4abf11ac7982ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb17f368619be733b30f4acccdf3af07ab2703274a15ac6f4abf11ac7982ae6->enter($__internal_0bb17f368619be733b30f4acccdf3af07ab2703274a15ac6f4abf11ac7982ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e298cb10bbea5ed8961014b35256997fbc9815a988a756b9fa6794bfba7cc9df->leave($__internal_e298cb10bbea5ed8961014b35256997fbc9815a988a756b9fa6794bfba7cc9df_prof);

        
        $__internal_0bb17f368619be733b30f4acccdf3af07ab2703274a15ac6f4abf11ac7982ae6->leave($__internal_0bb17f368619be733b30f4acccdf3af07ab2703274a15ac6f4abf11ac7982ae6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
