<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_88b171f93bce77287844076f3b65047356850a4e136e04d4c4b30806da16998f extends Twig_Template
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
        $__internal_449824b872d92a210d880f3df50886b3cf901c8013bdccb647d4f18706304b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449824b872d92a210d880f3df50886b3cf901c8013bdccb647d4f18706304b93->enter($__internal_449824b872d92a210d880f3df50886b3cf901c8013bdccb647d4f18706304b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4088064ef54a4ad236aa616dcad10dbfecd932e9a5dbe883b66b5caa9144552f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4088064ef54a4ad236aa616dcad10dbfecd932e9a5dbe883b66b5caa9144552f->enter($__internal_4088064ef54a4ad236aa616dcad10dbfecd932e9a5dbe883b66b5caa9144552f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_449824b872d92a210d880f3df50886b3cf901c8013bdccb647d4f18706304b93->leave($__internal_449824b872d92a210d880f3df50886b3cf901c8013bdccb647d4f18706304b93_prof);

        
        $__internal_4088064ef54a4ad236aa616dcad10dbfecd932e9a5dbe883b66b5caa9144552f->leave($__internal_4088064ef54a4ad236aa616dcad10dbfecd932e9a5dbe883b66b5caa9144552f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
