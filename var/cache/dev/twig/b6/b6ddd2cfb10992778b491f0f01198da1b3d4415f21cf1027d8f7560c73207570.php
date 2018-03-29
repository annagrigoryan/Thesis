<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c17e1e3fafd22322a6c48d3d51efb9305795579ea04ab5e6389faea576859482 extends Twig_Template
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
        $__internal_0e287e6d4f4af99378c8354343d221e2b948876645acf5059012f841198b5559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e287e6d4f4af99378c8354343d221e2b948876645acf5059012f841198b5559->enter($__internal_0e287e6d4f4af99378c8354343d221e2b948876645acf5059012f841198b5559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9f9a177dbf02f2b08af2b84c288e12d6dd08e05444fabf1bcfebf1623a98247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9a177dbf02f2b08af2b84c288e12d6dd08e05444fabf1bcfebf1623a98247a->enter($__internal_9f9a177dbf02f2b08af2b84c288e12d6dd08e05444fabf1bcfebf1623a98247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0e287e6d4f4af99378c8354343d221e2b948876645acf5059012f841198b5559->leave($__internal_0e287e6d4f4af99378c8354343d221e2b948876645acf5059012f841198b5559_prof);

        
        $__internal_9f9a177dbf02f2b08af2b84c288e12d6dd08e05444fabf1bcfebf1623a98247a->leave($__internal_9f9a177dbf02f2b08af2b84c288e12d6dd08e05444fabf1bcfebf1623a98247a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
