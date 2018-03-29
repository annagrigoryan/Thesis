<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cf95fc4e7b207aa4960b6f439359343171537ef0edf335f88a4a9aed3861b3f6 extends Twig_Template
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
        $__internal_90292c5fa6fad2f7017682ba185783a69075cd2e8b257688e5d4d6eab5879f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90292c5fa6fad2f7017682ba185783a69075cd2e8b257688e5d4d6eab5879f3a->enter($__internal_90292c5fa6fad2f7017682ba185783a69075cd2e8b257688e5d4d6eab5879f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1c4dffc27d967ac0ad1169945a36b483fd91be4857378fbf40b9e9fdacf77e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4dffc27d967ac0ad1169945a36b483fd91be4857378fbf40b9e9fdacf77e16->enter($__internal_1c4dffc27d967ac0ad1169945a36b483fd91be4857378fbf40b9e9fdacf77e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_90292c5fa6fad2f7017682ba185783a69075cd2e8b257688e5d4d6eab5879f3a->leave($__internal_90292c5fa6fad2f7017682ba185783a69075cd2e8b257688e5d4d6eab5879f3a_prof);

        
        $__internal_1c4dffc27d967ac0ad1169945a36b483fd91be4857378fbf40b9e9fdacf77e16->leave($__internal_1c4dffc27d967ac0ad1169945a36b483fd91be4857378fbf40b9e9fdacf77e16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
