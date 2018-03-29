<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_57afde6759a75c9e80f9cb10bb3c2393489c51f77eb3302c84de020c98a04edd extends Twig_Template
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
        $__internal_1a27eed4a844a57ebd916d30a88f28dafd751bb85d0976c1c3d7930993229ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a27eed4a844a57ebd916d30a88f28dafd751bb85d0976c1c3d7930993229ae7->enter($__internal_1a27eed4a844a57ebd916d30a88f28dafd751bb85d0976c1c3d7930993229ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9a484231001d00c47ae07c97d2119262cc0a9f41de4fa442bd4079030270a6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a484231001d00c47ae07c97d2119262cc0a9f41de4fa442bd4079030270a6cd->enter($__internal_9a484231001d00c47ae07c97d2119262cc0a9f41de4fa442bd4079030270a6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1a27eed4a844a57ebd916d30a88f28dafd751bb85d0976c1c3d7930993229ae7->leave($__internal_1a27eed4a844a57ebd916d30a88f28dafd751bb85d0976c1c3d7930993229ae7_prof);

        
        $__internal_9a484231001d00c47ae07c97d2119262cc0a9f41de4fa442bd4079030270a6cd->leave($__internal_9a484231001d00c47ae07c97d2119262cc0a9f41de4fa442bd4079030270a6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
