<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a77bdeff5e30bfd0363eeacd904d0a901b1ec9d20fa8818a243f099be455e4b6 extends Twig_Template
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
        $__internal_af8fc55c708a446c5ce503e520ad0b4de4ac19b3272d9a0a7a7609edde1e5045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8fc55c708a446c5ce503e520ad0b4de4ac19b3272d9a0a7a7609edde1e5045->enter($__internal_af8fc55c708a446c5ce503e520ad0b4de4ac19b3272d9a0a7a7609edde1e5045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4d8c2e376464ab8c1fc191b1fa1b589e50d1ef8b7f6b8804a1acfa48bde16842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8c2e376464ab8c1fc191b1fa1b589e50d1ef8b7f6b8804a1acfa48bde16842->enter($__internal_4d8c2e376464ab8c1fc191b1fa1b589e50d1ef8b7f6b8804a1acfa48bde16842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_af8fc55c708a446c5ce503e520ad0b4de4ac19b3272d9a0a7a7609edde1e5045->leave($__internal_af8fc55c708a446c5ce503e520ad0b4de4ac19b3272d9a0a7a7609edde1e5045_prof);

        
        $__internal_4d8c2e376464ab8c1fc191b1fa1b589e50d1ef8b7f6b8804a1acfa48bde16842->leave($__internal_4d8c2e376464ab8c1fc191b1fa1b589e50d1ef8b7f6b8804a1acfa48bde16842_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
