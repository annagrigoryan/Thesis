<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4f5f10f96b25bfb7f8557e8f6de93deea6cb79642fe3aaf128fe92d85a3816c6 extends Twig_Template
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
        $__internal_b2f15883e1249908f5acffb2e76773e276b10b2ca40ebd17b506fa57b1dd7d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f15883e1249908f5acffb2e76773e276b10b2ca40ebd17b506fa57b1dd7d67->enter($__internal_b2f15883e1249908f5acffb2e76773e276b10b2ca40ebd17b506fa57b1dd7d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_6a2ddf9d1db85ae73e02a674d230fb77efdf7a3b9d9829065e6e4807874eeee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2ddf9d1db85ae73e02a674d230fb77efdf7a3b9d9829065e6e4807874eeee5->enter($__internal_6a2ddf9d1db85ae73e02a674d230fb77efdf7a3b9d9829065e6e4807874eeee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_b2f15883e1249908f5acffb2e76773e276b10b2ca40ebd17b506fa57b1dd7d67->leave($__internal_b2f15883e1249908f5acffb2e76773e276b10b2ca40ebd17b506fa57b1dd7d67_prof);

        
        $__internal_6a2ddf9d1db85ae73e02a674d230fb77efdf7a3b9d9829065e6e4807874eeee5->leave($__internal_6a2ddf9d1db85ae73e02a674d230fb77efdf7a3b9d9829065e6e4807874eeee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
