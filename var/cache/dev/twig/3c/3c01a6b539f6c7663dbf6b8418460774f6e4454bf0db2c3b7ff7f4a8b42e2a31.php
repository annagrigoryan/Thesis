<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_946b290e414cb710cedb0952a66b5dbbc6ec4e1f1b1d47dc6b56f42c78075f51 extends Twig_Template
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
        $__internal_068dd52ac07a680d18044070706227b232968abd1bbe5f109f892d7cef320ed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_068dd52ac07a680d18044070706227b232968abd1bbe5f109f892d7cef320ed9->enter($__internal_068dd52ac07a680d18044070706227b232968abd1bbe5f109f892d7cef320ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a6a30d8dd00bcc9c61dd5d886d112db4920fa957ab5b9bf7c6c69f41766427a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a30d8dd00bcc9c61dd5d886d112db4920fa957ab5b9bf7c6c69f41766427a2->enter($__internal_a6a30d8dd00bcc9c61dd5d886d112db4920fa957ab5b9bf7c6c69f41766427a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_068dd52ac07a680d18044070706227b232968abd1bbe5f109f892d7cef320ed9->leave($__internal_068dd52ac07a680d18044070706227b232968abd1bbe5f109f892d7cef320ed9_prof);

        
        $__internal_a6a30d8dd00bcc9c61dd5d886d112db4920fa957ab5b9bf7c6c69f41766427a2->leave($__internal_a6a30d8dd00bcc9c61dd5d886d112db4920fa957ab5b9bf7c6c69f41766427a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
