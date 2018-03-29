<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_d65d4a72c3f8f62a22a11b6add1c4fe28ba3a0c3560bed0ddfd8d736519698a5 extends Twig_Template
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
        $__internal_4d4d6f1cc5a8354176a8a5da340e96470f058004766e7a144e019c8428d52daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4d6f1cc5a8354176a8a5da340e96470f058004766e7a144e019c8428d52daa->enter($__internal_4d4d6f1cc5a8354176a8a5da340e96470f058004766e7a144e019c8428d52daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bd0d9cb28789c64c07baacc1bb1d97cc5f180633a8e8b454c987e530c49e37f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0d9cb28789c64c07baacc1bb1d97cc5f180633a8e8b454c987e530c49e37f3->enter($__internal_bd0d9cb28789c64c07baacc1bb1d97cc5f180633a8e8b454c987e530c49e37f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4d4d6f1cc5a8354176a8a5da340e96470f058004766e7a144e019c8428d52daa->leave($__internal_4d4d6f1cc5a8354176a8a5da340e96470f058004766e7a144e019c8428d52daa_prof);

        
        $__internal_bd0d9cb28789c64c07baacc1bb1d97cc5f180633a8e8b454c987e530c49e37f3->leave($__internal_bd0d9cb28789c64c07baacc1bb1d97cc5f180633a8e8b454c987e530c49e37f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
