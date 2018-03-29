<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_7909dac172189d8f21578776ad0a464cc74bb52f7e000aff7adb655a5dd66ce2 extends Twig_Template
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
        $__internal_e3eceaba2dc1edb8217c1ed3356bf000c94d0a1b35d6d143926e729fe82a59f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3eceaba2dc1edb8217c1ed3356bf000c94d0a1b35d6d143926e729fe82a59f9->enter($__internal_e3eceaba2dc1edb8217c1ed3356bf000c94d0a1b35d6d143926e729fe82a59f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e555d3694211433865fc722f1fdad8a0920797c7a121c22b0429042d78cc7a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e555d3694211433865fc722f1fdad8a0920797c7a121c22b0429042d78cc7a2c->enter($__internal_e555d3694211433865fc722f1fdad8a0920797c7a121c22b0429042d78cc7a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_e3eceaba2dc1edb8217c1ed3356bf000c94d0a1b35d6d143926e729fe82a59f9->leave($__internal_e3eceaba2dc1edb8217c1ed3356bf000c94d0a1b35d6d143926e729fe82a59f9_prof);

        
        $__internal_e555d3694211433865fc722f1fdad8a0920797c7a121c22b0429042d78cc7a2c->leave($__internal_e555d3694211433865fc722f1fdad8a0920797c7a121c22b0429042d78cc7a2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
