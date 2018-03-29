<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d93d95fb96d4cf0c34e4fbd7bac29b927a97c71d6bd79a5ebf94f28fefa0ddbc extends Twig_Template
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
        $__internal_4138dcdac3b2f099ba00aa788fae28ef75811299cd2f3f8994251e51c5c25bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4138dcdac3b2f099ba00aa788fae28ef75811299cd2f3f8994251e51c5c25bc4->enter($__internal_4138dcdac3b2f099ba00aa788fae28ef75811299cd2f3f8994251e51c5c25bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7046a5c948605b965fc0eb98baedc8e6056cb45faa4108c118733f34c042152e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7046a5c948605b965fc0eb98baedc8e6056cb45faa4108c118733f34c042152e->enter($__internal_7046a5c948605b965fc0eb98baedc8e6056cb45faa4108c118733f34c042152e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4138dcdac3b2f099ba00aa788fae28ef75811299cd2f3f8994251e51c5c25bc4->leave($__internal_4138dcdac3b2f099ba00aa788fae28ef75811299cd2f3f8994251e51c5c25bc4_prof);

        
        $__internal_7046a5c948605b965fc0eb98baedc8e6056cb45faa4108c118733f34c042152e->leave($__internal_7046a5c948605b965fc0eb98baedc8e6056cb45faa4108c118733f34c042152e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
