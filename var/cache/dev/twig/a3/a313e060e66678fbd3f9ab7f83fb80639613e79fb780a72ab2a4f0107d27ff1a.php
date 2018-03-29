<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cd896a4a17ca59bea27056df5e711d8345d5187ad5fa23eaa9de7593d3490763 extends Twig_Template
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
        $__internal_e6f8526e17bfa8252daa3ecade6c6946bfdcbd90bc3a984fe334f03c182fd0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f8526e17bfa8252daa3ecade6c6946bfdcbd90bc3a984fe334f03c182fd0b1->enter($__internal_e6f8526e17bfa8252daa3ecade6c6946bfdcbd90bc3a984fe334f03c182fd0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_43c2fea2ccc187af161dad3b01b53e89c12a86cc4a6b8d335956ad9021ad3c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c2fea2ccc187af161dad3b01b53e89c12a86cc4a6b8d335956ad9021ad3c17->enter($__internal_43c2fea2ccc187af161dad3b01b53e89c12a86cc4a6b8d335956ad9021ad3c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e6f8526e17bfa8252daa3ecade6c6946bfdcbd90bc3a984fe334f03c182fd0b1->leave($__internal_e6f8526e17bfa8252daa3ecade6c6946bfdcbd90bc3a984fe334f03c182fd0b1_prof);

        
        $__internal_43c2fea2ccc187af161dad3b01b53e89c12a86cc4a6b8d335956ad9021ad3c17->leave($__internal_43c2fea2ccc187af161dad3b01b53e89c12a86cc4a6b8d335956ad9021ad3c17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
