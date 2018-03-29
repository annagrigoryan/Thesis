<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_159a0c9c3e6c3e6adf01483916a2e303e6221351145eef98ea4824969f56a609 extends Twig_Template
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
        $__internal_189f321054099153102f3af49cdcb2c0ebf7a7d86a7b664e590beac56d7f36a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189f321054099153102f3af49cdcb2c0ebf7a7d86a7b664e590beac56d7f36a2->enter($__internal_189f321054099153102f3af49cdcb2c0ebf7a7d86a7b664e590beac56d7f36a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_74f415a7c168f730d18093e95a5b374f6b2724afc40dab0eb2e06e977280a08a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f415a7c168f730d18093e95a5b374f6b2724afc40dab0eb2e06e977280a08a->enter($__internal_74f415a7c168f730d18093e95a5b374f6b2724afc40dab0eb2e06e977280a08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_189f321054099153102f3af49cdcb2c0ebf7a7d86a7b664e590beac56d7f36a2->leave($__internal_189f321054099153102f3af49cdcb2c0ebf7a7d86a7b664e590beac56d7f36a2_prof);

        
        $__internal_74f415a7c168f730d18093e95a5b374f6b2724afc40dab0eb2e06e977280a08a->leave($__internal_74f415a7c168f730d18093e95a5b374f6b2724afc40dab0eb2e06e977280a08a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
