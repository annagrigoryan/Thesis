<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_954595c2bdb9ec445845512a86388c469489037caf889abfbcf3eae2c79da4e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_895183dd82cf778d985c5cc076edcaf15566b65ad0e47563eb7f911bc7a4e103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895183dd82cf778d985c5cc076edcaf15566b65ad0e47563eb7f911bc7a4e103->enter($__internal_895183dd82cf778d985c5cc076edcaf15566b65ad0e47563eb7f911bc7a4e103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4efb0c1dfd54f1c115b1247e43da66cb542116a3c971159905421801083134d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efb0c1dfd54f1c115b1247e43da66cb542116a3c971159905421801083134d9->enter($__internal_4efb0c1dfd54f1c115b1247e43da66cb542116a3c971159905421801083134d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895183dd82cf778d985c5cc076edcaf15566b65ad0e47563eb7f911bc7a4e103->leave($__internal_895183dd82cf778d985c5cc076edcaf15566b65ad0e47563eb7f911bc7a4e103_prof);

        
        $__internal_4efb0c1dfd54f1c115b1247e43da66cb542116a3c971159905421801083134d9->leave($__internal_4efb0c1dfd54f1c115b1247e43da66cb542116a3c971159905421801083134d9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e15b48717729a4a5ad5e4e50e1a6c4dded09442ebc229a210c28924c49c9eba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e15b48717729a4a5ad5e4e50e1a6c4dded09442ebc229a210c28924c49c9eba3->enter($__internal_e15b48717729a4a5ad5e4e50e1a6c4dded09442ebc229a210c28924c49c9eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6826279a6b5f24cd9a1fd50ab9306b6e9e8c0aa9eddc26242daa83443233323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6826279a6b5f24cd9a1fd50ab9306b6e9e8c0aa9eddc26242daa83443233323->enter($__internal_e6826279a6b5f24cd9a1fd50ab9306b6e9e8c0aa9eddc26242daa83443233323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e6826279a6b5f24cd9a1fd50ab9306b6e9e8c0aa9eddc26242daa83443233323->leave($__internal_e6826279a6b5f24cd9a1fd50ab9306b6e9e8c0aa9eddc26242daa83443233323_prof);

        
        $__internal_e15b48717729a4a5ad5e4e50e1a6c4dded09442ebc229a210c28924c49c9eba3->leave($__internal_e15b48717729a4a5ad5e4e50e1a6c4dded09442ebc229a210c28924c49c9eba3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfb6df922210f31571e5f8a6511c049bf9b7ac3d04f7ce32b75fefebf459fb0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfb6df922210f31571e5f8a6511c049bf9b7ac3d04f7ce32b75fefebf459fb0e->enter($__internal_dfb6df922210f31571e5f8a6511c049bf9b7ac3d04f7ce32b75fefebf459fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b46967bd158910bc5b239908bb57f5a81f4eefe050969de3993c1d3f99d1536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b46967bd158910bc5b239908bb57f5a81f4eefe050969de3993c1d3f99d1536->enter($__internal_1b46967bd158910bc5b239908bb57f5a81f4eefe050969de3993c1d3f99d1536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_1b46967bd158910bc5b239908bb57f5a81f4eefe050969de3993c1d3f99d1536->leave($__internal_1b46967bd158910bc5b239908bb57f5a81f4eefe050969de3993c1d3f99d1536_prof);

        
        $__internal_dfb6df922210f31571e5f8a6511c049bf9b7ac3d04f7ce32b75fefebf459fb0e->leave($__internal_dfb6df922210f31571e5f8a6511c049bf9b7ac3d04f7ce32b75fefebf459fb0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
