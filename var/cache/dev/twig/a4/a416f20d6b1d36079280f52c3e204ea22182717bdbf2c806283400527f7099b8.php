<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2e2e414d7ed93eee47b8cdc64fd2bc459e651aff6704c74d9a4c8806c2a8c704 extends Twig_Template
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
        $__internal_e78d207152c1d8c826f61718025095d388c21775b389d31d027beb9608ed680e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78d207152c1d8c826f61718025095d388c21775b389d31d027beb9608ed680e->enter($__internal_e78d207152c1d8c826f61718025095d388c21775b389d31d027beb9608ed680e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_635218ab8e4e350029031e814caa99fb1fa715b4808f1606d76898e3e742291e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635218ab8e4e350029031e814caa99fb1fa715b4808f1606d76898e3e742291e->enter($__internal_635218ab8e4e350029031e814caa99fb1fa715b4808f1606d76898e3e742291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e78d207152c1d8c826f61718025095d388c21775b389d31d027beb9608ed680e->leave($__internal_e78d207152c1d8c826f61718025095d388c21775b389d31d027beb9608ed680e_prof);

        
        $__internal_635218ab8e4e350029031e814caa99fb1fa715b4808f1606d76898e3e742291e->leave($__internal_635218ab8e4e350029031e814caa99fb1fa715b4808f1606d76898e3e742291e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
