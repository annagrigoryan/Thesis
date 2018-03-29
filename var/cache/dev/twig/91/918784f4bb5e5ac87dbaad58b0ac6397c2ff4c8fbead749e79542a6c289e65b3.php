<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c5bd9d95c8a1a4ad389499c99289c8cfc14ae260069de01c408672a4598e47af extends Twig_Template
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
        $__internal_11c2b3fe412c44ff1bd8691269b0a96005a03e69efeaf34bf5fda877d988cc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c2b3fe412c44ff1bd8691269b0a96005a03e69efeaf34bf5fda877d988cc36->enter($__internal_11c2b3fe412c44ff1bd8691269b0a96005a03e69efeaf34bf5fda877d988cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_6f463df70be993632aaace0737c95e38314c48f2e4968bd3ad0ba1bb39a10aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f463df70be993632aaace0737c95e38314c48f2e4968bd3ad0ba1bb39a10aa5->enter($__internal_6f463df70be993632aaace0737c95e38314c48f2e4968bd3ad0ba1bb39a10aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11c2b3fe412c44ff1bd8691269b0a96005a03e69efeaf34bf5fda877d988cc36->leave($__internal_11c2b3fe412c44ff1bd8691269b0a96005a03e69efeaf34bf5fda877d988cc36_prof);

        
        $__internal_6f463df70be993632aaace0737c95e38314c48f2e4968bd3ad0ba1bb39a10aa5->leave($__internal_6f463df70be993632aaace0737c95e38314c48f2e4968bd3ad0ba1bb39a10aa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
