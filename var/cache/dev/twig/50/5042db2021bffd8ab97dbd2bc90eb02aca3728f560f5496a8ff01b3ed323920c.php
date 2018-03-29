<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_92647fd0d6766e6acb7b2d77d5ad53be57c1cd0fca070a399100cea832dd9ca2 extends Twig_Template
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
        $__internal_3a0f8610307c2b711b711fbd823a239c993a9568960d5c214efa5d793b2bc572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0f8610307c2b711b711fbd823a239c993a9568960d5c214efa5d793b2bc572->enter($__internal_3a0f8610307c2b711b711fbd823a239c993a9568960d5c214efa5d793b2bc572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_561425bad91944dfea60762b7679a8e4e8e159d1327bf03434a0e8279f1fef36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561425bad91944dfea60762b7679a8e4e8e159d1327bf03434a0e8279f1fef36->enter($__internal_561425bad91944dfea60762b7679a8e4e8e159d1327bf03434a0e8279f1fef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3a0f8610307c2b711b711fbd823a239c993a9568960d5c214efa5d793b2bc572->leave($__internal_3a0f8610307c2b711b711fbd823a239c993a9568960d5c214efa5d793b2bc572_prof);

        
        $__internal_561425bad91944dfea60762b7679a8e4e8e159d1327bf03434a0e8279f1fef36->leave($__internal_561425bad91944dfea60762b7679a8e4e8e159d1327bf03434a0e8279f1fef36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
