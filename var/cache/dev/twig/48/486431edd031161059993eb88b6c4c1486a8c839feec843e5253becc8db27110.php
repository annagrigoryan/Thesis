<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_2d010d0a15c9c45c2acbde23d6c7e93030d8e3faaf1cec0e0e44b3f3b2f5c6d7 extends Twig_Template
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
        $__internal_9e0b4c67bc0a85427e62645f4c59b8efa3e5c94cd0aba9f48801468fe47d9c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0b4c67bc0a85427e62645f4c59b8efa3e5c94cd0aba9f48801468fe47d9c9e->enter($__internal_9e0b4c67bc0a85427e62645f4c59b8efa3e5c94cd0aba9f48801468fe47d9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d14e332829566d0561fdd03f0b99c7f8e8ed6cb04890bc27c1de934aba018ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14e332829566d0561fdd03f0b99c7f8e8ed6cb04890bc27c1de934aba018ec7->enter($__internal_d14e332829566d0561fdd03f0b99c7f8e8ed6cb04890bc27c1de934aba018ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9e0b4c67bc0a85427e62645f4c59b8efa3e5c94cd0aba9f48801468fe47d9c9e->leave($__internal_9e0b4c67bc0a85427e62645f4c59b8efa3e5c94cd0aba9f48801468fe47d9c9e_prof);

        
        $__internal_d14e332829566d0561fdd03f0b99c7f8e8ed6cb04890bc27c1de934aba018ec7->leave($__internal_d14e332829566d0561fdd03f0b99c7f8e8ed6cb04890bc27c1de934aba018ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
