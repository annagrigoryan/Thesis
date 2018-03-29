<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_301c428c756d8c8973768ee956378acc33a54acfe12613eb0828191a0cb5e840 extends Twig_Template
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
        $__internal_9133ac029b5cbb042c4064ed2dfb538265c0be12c61740845ba4be781fe44b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9133ac029b5cbb042c4064ed2dfb538265c0be12c61740845ba4be781fe44b56->enter($__internal_9133ac029b5cbb042c4064ed2dfb538265c0be12c61740845ba4be781fe44b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d1052f3e96d76f399424b7bd6f781e0fcaf5ce9bc04de82fac35fe87c625f069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1052f3e96d76f399424b7bd6f781e0fcaf5ce9bc04de82fac35fe87c625f069->enter($__internal_d1052f3e96d76f399424b7bd6f781e0fcaf5ce9bc04de82fac35fe87c625f069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9133ac029b5cbb042c4064ed2dfb538265c0be12c61740845ba4be781fe44b56->leave($__internal_9133ac029b5cbb042c4064ed2dfb538265c0be12c61740845ba4be781fe44b56_prof);

        
        $__internal_d1052f3e96d76f399424b7bd6f781e0fcaf5ce9bc04de82fac35fe87c625f069->leave($__internal_d1052f3e96d76f399424b7bd6f781e0fcaf5ce9bc04de82fac35fe87c625f069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
