<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_82a5045158aaa947b1226d4ac508510e1359726255bf1fbe8db04c9d80c1c4f7 extends Twig_Template
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
        $__internal_78642696969ddf10f7a3d31b1d6752a6dbb9a442ebaa8a0d2385a527126ceee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78642696969ddf10f7a3d31b1d6752a6dbb9a442ebaa8a0d2385a527126ceee5->enter($__internal_78642696969ddf10f7a3d31b1d6752a6dbb9a442ebaa8a0d2385a527126ceee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0debb93471139427e4bcd65678a74cb3d87744a410fb0c1971587c65ad9ce0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0debb93471139427e4bcd65678a74cb3d87744a410fb0c1971587c65ad9ce0da->enter($__internal_0debb93471139427e4bcd65678a74cb3d87744a410fb0c1971587c65ad9ce0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_78642696969ddf10f7a3d31b1d6752a6dbb9a442ebaa8a0d2385a527126ceee5->leave($__internal_78642696969ddf10f7a3d31b1d6752a6dbb9a442ebaa8a0d2385a527126ceee5_prof);

        
        $__internal_0debb93471139427e4bcd65678a74cb3d87744a410fb0c1971587c65ad9ce0da->leave($__internal_0debb93471139427e4bcd65678a74cb3d87744a410fb0c1971587c65ad9ce0da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
