<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_c83a8cc27700f4dd801107a6c7ef0d303dec4669cd2bc0b88c171f00ac2feacc extends Twig_Template
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
        $__internal_bb68ea6af628cc2872ef4e5caf8acbf646af55725276b4aada86dfee6454976c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb68ea6af628cc2872ef4e5caf8acbf646af55725276b4aada86dfee6454976c->enter($__internal_bb68ea6af628cc2872ef4e5caf8acbf646af55725276b4aada86dfee6454976c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_dc1986b0b4b19626027eded12000f4fbc72b41420ab5a6fbd8110d68868e2220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1986b0b4b19626027eded12000f4fbc72b41420ab5a6fbd8110d68868e2220->enter($__internal_dc1986b0b4b19626027eded12000f4fbc72b41420ab5a6fbd8110d68868e2220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_bb68ea6af628cc2872ef4e5caf8acbf646af55725276b4aada86dfee6454976c->leave($__internal_bb68ea6af628cc2872ef4e5caf8acbf646af55725276b4aada86dfee6454976c_prof);

        
        $__internal_dc1986b0b4b19626027eded12000f4fbc72b41420ab5a6fbd8110d68868e2220->leave($__internal_dc1986b0b4b19626027eded12000f4fbc72b41420ab5a6fbd8110d68868e2220_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
