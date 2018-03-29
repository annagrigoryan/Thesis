<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8a396b7276d219dbd4adafe600b7990d726755bac2f8122cee5468e52cf49889 extends Twig_Template
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
        $__internal_ac267468d730f15d088780fa8e8abeb6e17feac08948929fce5ba9ab55167581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac267468d730f15d088780fa8e8abeb6e17feac08948929fce5ba9ab55167581->enter($__internal_ac267468d730f15d088780fa8e8abeb6e17feac08948929fce5ba9ab55167581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b663c6782a47c1720c6b2fe62a9c40a18c7983c39b0b7b00437b168d674383b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b663c6782a47c1720c6b2fe62a9c40a18c7983c39b0b7b00437b168d674383b8->enter($__internal_b663c6782a47c1720c6b2fe62a9c40a18c7983c39b0b7b00437b168d674383b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ac267468d730f15d088780fa8e8abeb6e17feac08948929fce5ba9ab55167581->leave($__internal_ac267468d730f15d088780fa8e8abeb6e17feac08948929fce5ba9ab55167581_prof);

        
        $__internal_b663c6782a47c1720c6b2fe62a9c40a18c7983c39b0b7b00437b168d674383b8->leave($__internal_b663c6782a47c1720c6b2fe62a9c40a18c7983c39b0b7b00437b168d674383b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
