<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_81f39267751bd9bded0cc5d35d7213ebdbd39fed0edb2839fbad27e28dc01dda extends Twig_Template
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
        $__internal_0fb77fc4a522c89ad325b1cf4eb73fc297c2965b408058a59c14f21ce6d1164d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb77fc4a522c89ad325b1cf4eb73fc297c2965b408058a59c14f21ce6d1164d->enter($__internal_0fb77fc4a522c89ad325b1cf4eb73fc297c2965b408058a59c14f21ce6d1164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1251c78020fe09d1cc35de1b54a4f2d2333cfdc02f169494c6fb5d27b37daf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1251c78020fe09d1cc35de1b54a4f2d2333cfdc02f169494c6fb5d27b37daf90->enter($__internal_1251c78020fe09d1cc35de1b54a4f2d2333cfdc02f169494c6fb5d27b37daf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0fb77fc4a522c89ad325b1cf4eb73fc297c2965b408058a59c14f21ce6d1164d->leave($__internal_0fb77fc4a522c89ad325b1cf4eb73fc297c2965b408058a59c14f21ce6d1164d_prof);

        
        $__internal_1251c78020fe09d1cc35de1b54a4f2d2333cfdc02f169494c6fb5d27b37daf90->leave($__internal_1251c78020fe09d1cc35de1b54a4f2d2333cfdc02f169494c6fb5d27b37daf90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
