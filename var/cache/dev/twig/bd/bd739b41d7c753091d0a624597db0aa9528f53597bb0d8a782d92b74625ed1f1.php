<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3bdc21940374a68c2ab8bd7d8ca17c4de7caa48adde16eecc093ae9df986fc90 extends Twig_Template
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
        $__internal_46ad4357c1943aa2227590049af22c396ecef18da24878a8980251f650283829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ad4357c1943aa2227590049af22c396ecef18da24878a8980251f650283829->enter($__internal_46ad4357c1943aa2227590049af22c396ecef18da24878a8980251f650283829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_c484cbe417aba3f9b28322861d72cc8203a424d7f40aa9c0f926eebd24c358ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c484cbe417aba3f9b28322861d72cc8203a424d7f40aa9c0f926eebd24c358ea->enter($__internal_c484cbe417aba3f9b28322861d72cc8203a424d7f40aa9c0f926eebd24c358ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_46ad4357c1943aa2227590049af22c396ecef18da24878a8980251f650283829->leave($__internal_46ad4357c1943aa2227590049af22c396ecef18da24878a8980251f650283829_prof);

        
        $__internal_c484cbe417aba3f9b28322861d72cc8203a424d7f40aa9c0f926eebd24c358ea->leave($__internal_c484cbe417aba3f9b28322861d72cc8203a424d7f40aa9c0f926eebd24c358ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
