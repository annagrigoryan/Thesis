<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cc646a4c6dcfe1d2ae63b119690a15c996c578c2bb52f951f547eb71fa2bedb3 extends Twig_Template
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
        $__internal_3025e493ce094e5d44e2456d4700fce99f1a815b8f2d6a104321ce9788abe1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3025e493ce094e5d44e2456d4700fce99f1a815b8f2d6a104321ce9788abe1e9->enter($__internal_3025e493ce094e5d44e2456d4700fce99f1a815b8f2d6a104321ce9788abe1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c52f7fe784a7247f0ba0ee9dca8c7292831a7540b5f0cd2fd2b25b133b336064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52f7fe784a7247f0ba0ee9dca8c7292831a7540b5f0cd2fd2b25b133b336064->enter($__internal_c52f7fe784a7247f0ba0ee9dca8c7292831a7540b5f0cd2fd2b25b133b336064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3025e493ce094e5d44e2456d4700fce99f1a815b8f2d6a104321ce9788abe1e9->leave($__internal_3025e493ce094e5d44e2456d4700fce99f1a815b8f2d6a104321ce9788abe1e9_prof);

        
        $__internal_c52f7fe784a7247f0ba0ee9dca8c7292831a7540b5f0cd2fd2b25b133b336064->leave($__internal_c52f7fe784a7247f0ba0ee9dca8c7292831a7540b5f0cd2fd2b25b133b336064_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
