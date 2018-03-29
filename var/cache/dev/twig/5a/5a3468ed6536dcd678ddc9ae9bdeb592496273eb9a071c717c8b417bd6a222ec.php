<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_fd823fce35df1edcfb26da0c33a908d58984312facf38a06d0b9f4b9cb26aca1 extends Twig_Template
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
        $__internal_b62634d213db414ee115655224443433473cb55e3699dd353c94e1e151126e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62634d213db414ee115655224443433473cb55e3699dd353c94e1e151126e2c->enter($__internal_b62634d213db414ee115655224443433473cb55e3699dd353c94e1e151126e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7015ef4055d7dac67414d673ce6ccb43445c7766ac0b985f1ece263183332fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7015ef4055d7dac67414d673ce6ccb43445c7766ac0b985f1ece263183332fc6->enter($__internal_7015ef4055d7dac67414d673ce6ccb43445c7766ac0b985f1ece263183332fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b62634d213db414ee115655224443433473cb55e3699dd353c94e1e151126e2c->leave($__internal_b62634d213db414ee115655224443433473cb55e3699dd353c94e1e151126e2c_prof);

        
        $__internal_7015ef4055d7dac67414d673ce6ccb43445c7766ac0b985f1ece263183332fc6->leave($__internal_7015ef4055d7dac67414d673ce6ccb43445c7766ac0b985f1ece263183332fc6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
