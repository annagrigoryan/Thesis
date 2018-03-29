<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_79409a737d3a9d38708c78e54063bc74b5d09f92d6e971c4d4ae4ee7098a5f95 extends Twig_Template
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
        $__internal_c4a052c6af9a7b051db7c1eea1da2991fe2fffd71c1e77a08ad76bea6b2ee10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a052c6af9a7b051db7c1eea1da2991fe2fffd71c1e77a08ad76bea6b2ee10a->enter($__internal_c4a052c6af9a7b051db7c1eea1da2991fe2fffd71c1e77a08ad76bea6b2ee10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_81e437f04197dc6884e0645f38b215cd15866b29858407db3c040faa5a1c4825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e437f04197dc6884e0645f38b215cd15866b29858407db3c040faa5a1c4825->enter($__internal_81e437f04197dc6884e0645f38b215cd15866b29858407db3c040faa5a1c4825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c4a052c6af9a7b051db7c1eea1da2991fe2fffd71c1e77a08ad76bea6b2ee10a->leave($__internal_c4a052c6af9a7b051db7c1eea1da2991fe2fffd71c1e77a08ad76bea6b2ee10a_prof);

        
        $__internal_81e437f04197dc6884e0645f38b215cd15866b29858407db3c040faa5a1c4825->leave($__internal_81e437f04197dc6884e0645f38b215cd15866b29858407db3c040faa5a1c4825_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
