<?php

/* @IvoryCKEditor/Form/_ckeditor_javascript.html.php */
class __TwigTemplate_c605ef4031bdc5447b4a2b00bc342bfcc3daeceda4150286da797be523047321 extends Twig_Template
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
        $__internal_0b2a69f3a8dc091b09d07951111cf79951ede828c987962435bec88445159b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2a69f3a8dc091b09d07951111cf79951ede828c987962435bec88445159b59->enter($__internal_0b2a69f3a8dc091b09d07951111cf79951ede828c987962435bec88445159b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        $__internal_06509559742cb032ce6ccfb30a1b5cff481001400c620ad91dffacfcf13638c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06509559742cb032ce6ccfb30a1b5cff481001400c620ad91dffacfcf13638c3->enter($__internal_06509559742cb032ce6ccfb30a1b5cff481001400c620ad91dffacfcf13638c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
";
        
        $__internal_0b2a69f3a8dc091b09d07951111cf79951ede828c987962435bec88445159b59->leave($__internal_0b2a69f3a8dc091b09d07951111cf79951ede828c987962435bec88445159b59_prof);

        
        $__internal_06509559742cb032ce6ccfb30a1b5cff481001400c620ad91dffacfcf13638c3->leave($__internal_06509559742cb032ce6ccfb30a1b5cff481001400c620ad91dffacfcf13638c3_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/_ckeditor_javascript.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$autoload) : ?>
    <script type=\"text/javascript\">
        var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
    </script>
    <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php if (\$jquery) : ?>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
    <?php endif; ?>
<?php endif; ?>
<script type=\"text/javascript\">
    <?php if (\$jquery) : ?>
        \$(function () {
    <?php endif; ?>

    <?php if (\$require_js) : ?>
        require(['ckeditor'], function() {
    <?php endif; ?>

    <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

    <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
        <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
    <?php endforeach; ?>

    <?php foreach (\$styles as \$styleName => \$style): ?>
        <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
    <?php endforeach; ?>

    <?php foreach (\$templates as \$templateName => \$template): ?>
        <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
    <?php endforeach; ?>

    <?php \$view['slots']->output('ckeditor_widget_extra', '') ?>

    <?php echo \$view['ivory_ckeditor']->renderWidget(
        \$id,
        \$config,
        [
            'auto_inline'  => \$auto_inline,
            'inline'       => \$inline,
            'input_sync'   => \$input_sync,
            'filebrowsers' => \$filebrowsers,
        ]
    ); ?>

    <?php if (\$require_js) : ?>
        });
    <?php endif; ?>

    <?php if (\$jquery) : ?>
        });
    <?php endif; ?>
</script>
", "@IvoryCKEditor/Form/_ckeditor_javascript.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/egeloen/ckeditor-bundle/Resources/views/Form/_ckeditor_javascript.html.php");
    }
}
