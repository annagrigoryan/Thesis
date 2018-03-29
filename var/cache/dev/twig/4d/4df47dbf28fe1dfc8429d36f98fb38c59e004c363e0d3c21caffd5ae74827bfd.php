<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_7d990a49aac4e88899108b33e354886b4a84ebf07c5e44ee75bc0eb82bdda8bd extends Twig_Template
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
        $__internal_0ccc8f5e668e4ce6be5e4e4b03218e1a55f2335d2b223b51f20b080ae488d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ccc8f5e668e4ce6be5e4e4b03218e1a55f2335d2b223b51f20b080ae488d695->enter($__internal_0ccc8f5e668e4ce6be5e4e4b03218e1a55f2335d2b223b51f20b080ae488d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_83c3f6fee93f52fac886af7a8c857b91e34443afe032af46436c493bac8095e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c3f6fee93f52fac886af7a8c857b91e34443afe032af46436c493bac8095e8->enter($__internal_83c3f6fee93f52fac886af7a8c857b91e34443afe032af46436c493bac8095e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_0ccc8f5e668e4ce6be5e4e4b03218e1a55f2335d2b223b51f20b080ae488d695->leave($__internal_0ccc8f5e668e4ce6be5e4e4b03218e1a55f2335d2b223b51f20b080ae488d695_prof);

        
        $__internal_83c3f6fee93f52fac886af7a8c857b91e34443afe032af46436c493bac8095e8->leave($__internal_83c3f6fee93f52fac886af7a8c857b91e34443afe032af46436c493bac8095e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
