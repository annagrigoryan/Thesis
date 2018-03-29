<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f639e94ffa05122babe1cda315752ae82ecf91caf43626cb781131aed9f26b28 extends Twig_Template
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
        $__internal_190900db4099189460166ee3470d564cf0beec7cbc955bef4e9737b718cc29e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190900db4099189460166ee3470d564cf0beec7cbc955bef4e9737b718cc29e8->enter($__internal_190900db4099189460166ee3470d564cf0beec7cbc955bef4e9737b718cc29e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_973a02a2cf47046f2af4aec94227a22269ebbf06d026c42d17c530d3ff28d153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_973a02a2cf47046f2af4aec94227a22269ebbf06d026c42d17c530d3ff28d153->enter($__internal_973a02a2cf47046f2af4aec94227a22269ebbf06d026c42d17c530d3ff28d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_190900db4099189460166ee3470d564cf0beec7cbc955bef4e9737b718cc29e8->leave($__internal_190900db4099189460166ee3470d564cf0beec7cbc955bef4e9737b718cc29e8_prof);

        
        $__internal_973a02a2cf47046f2af4aec94227a22269ebbf06d026c42d17c530d3ff28d153->leave($__internal_973a02a2cf47046f2af4aec94227a22269ebbf06d026c42d17c530d3ff28d153_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
