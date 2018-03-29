<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_e9ee2d3886b4692ee9cfb4532242784b5880bbb5a9b149c4bf56c791eb5526fc extends Twig_Template
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
        $__internal_56d16a156146a66b8fa7e52d346629f4c826d7353e33d4c5c299bca9ba80dcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d16a156146a66b8fa7e52d346629f4c826d7353e33d4c5c299bca9ba80dcdc->enter($__internal_56d16a156146a66b8fa7e52d346629f4c826d7353e33d4c5c299bca9ba80dcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_630600f961ee9d7868cd15954d1657c31b247ac44734b05e919e5da89fc05619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630600f961ee9d7868cd15954d1657c31b247ac44734b05e919e5da89fc05619->enter($__internal_630600f961ee9d7868cd15954d1657c31b247ac44734b05e919e5da89fc05619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_56d16a156146a66b8fa7e52d346629f4c826d7353e33d4c5c299bca9ba80dcdc->leave($__internal_56d16a156146a66b8fa7e52d346629f4c826d7353e33d4c5c299bca9ba80dcdc_prof);

        
        $__internal_630600f961ee9d7868cd15954d1657c31b247ac44734b05e919e5da89fc05619->leave($__internal_630600f961ee9d7868cd15954d1657c31b247ac44734b05e919e5da89fc05619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
