<?php

/* base.html.twig */
class __TwigTemplate_e98c39d4be99e3e1c0e1e16e13ce288e0d4197caba55b0c8c1cab4c08e206588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87d921f7fc83c2b69013a6f43baaf60b24f15efaeb9d49516dd1188df72c717f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d921f7fc83c2b69013a6f43baaf60b24f15efaeb9d49516dd1188df72c717f->enter($__internal_87d921f7fc83c2b69013a6f43baaf60b24f15efaeb9d49516dd1188df72c717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_236f40062e288717358bd7012acbf05f33e046e0c0bf39bf662c795659e0de00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f40062e288717358bd7012acbf05f33e046e0c0bf39bf662c795659e0de00->enter($__internal_236f40062e288717358bd7012acbf05f33e046e0c0bf39bf662c795659e0de00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-toggle collapsed\" href=\"#\">Decision Support System</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
            </ul>
        </div>
    </div>
</nav>
<div style=\"margin-top:60px; margin-left: 50px\" >
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["flash_messages"]) {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["flash_messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
                // line 28
                echo "            <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 29
                echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['flash_messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "</div>
</body>
</html>";
        
        $__internal_87d921f7fc83c2b69013a6f43baaf60b24f15efaeb9d49516dd1188df72c717f->leave($__internal_87d921f7fc83c2b69013a6f43baaf60b24f15efaeb9d49516dd1188df72c717f_prof);

        
        $__internal_236f40062e288717358bd7012acbf05f33e046e0c0bf39bf662c795659e0de00->leave($__internal_236f40062e288717358bd7012acbf05f33e046e0c0bf39bf662c795659e0de00_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe23015a82b386759626b551da0e2d8a5b8f8164dd06deddb334adf2dad489d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe23015a82b386759626b551da0e2d8a5b8f8164dd06deddb334adf2dad489d->enter($__internal_7fe23015a82b386759626b551da0e2d8a5b8f8164dd06deddb334adf2dad489d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f03109acb4866b5457d56871d8d106be5c282b569ddf5c78d54bb52c1fdf71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f03109acb4866b5457d56871d8d106be5c282b569ddf5c78d54bb52c1fdf71c->enter($__internal_9f03109acb4866b5457d56871d8d106be5c282b569ddf5c78d54bb52c1fdf71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Decision Support System";
        
        $__internal_9f03109acb4866b5457d56871d8d106be5c282b569ddf5c78d54bb52c1fdf71c->leave($__internal_9f03109acb4866b5457d56871d8d106be5c282b569ddf5c78d54bb52c1fdf71c_prof);

        
        $__internal_7fe23015a82b386759626b551da0e2d8a5b8f8164dd06deddb334adf2dad489d->leave($__internal_7fe23015a82b386759626b551da0e2d8a5b8f8164dd06deddb334adf2dad489d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_40b3e219b780a152248b3de3149dda8dc0965be2d9d1c4579dfb5e85545a14df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b3e219b780a152248b3de3149dda8dc0965be2d9d1c4579dfb5e85545a14df->enter($__internal_40b3e219b780a152248b3de3149dda8dc0965be2d9d1c4579dfb5e85545a14df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bd99a1929212c6bfc751c63d768e37ccbffc8dbbed8fa32b4c50d1eb6dd5c439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd99a1929212c6bfc751c63d768e37ccbffc8dbbed8fa32b4c50d1eb6dd5c439->enter($__internal_bd99a1929212c6bfc751c63d768e37ccbffc8dbbed8fa32b4c50d1eb6dd5c439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd99a1929212c6bfc751c63d768e37ccbffc8dbbed8fa32b4c50d1eb6dd5c439->leave($__internal_bd99a1929212c6bfc751c63d768e37ccbffc8dbbed8fa32b4c50d1eb6dd5c439_prof);

        
        $__internal_40b3e219b780a152248b3de3149dda8dc0965be2d9d1c4579dfb5e85545a14df->leave($__internal_40b3e219b780a152248b3de3149dda8dc0965be2d9d1c4579dfb5e85545a14df_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee4eb272e1ceba153dde2510fd19a1df722059c56e677cd1b3b900fc1d72490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee4eb272e1ceba153dde2510fd19a1df722059c56e677cd1b3b900fc1d72490->enter($__internal_cee4eb272e1ceba153dde2510fd19a1df722059c56e677cd1b3b900fc1d72490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d035e50e391168f3d8d818e08f54830b0e602b39b0e06afcd21e4ee67213892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d035e50e391168f3d8d818e08f54830b0e602b39b0e06afcd21e4ee67213892->enter($__internal_2d035e50e391168f3d8d818e08f54830b0e602b39b0e06afcd21e4ee67213892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d035e50e391168f3d8d818e08f54830b0e602b39b0e06afcd21e4ee67213892->leave($__internal_2d035e50e391168f3d8d818e08f54830b0e602b39b0e06afcd21e4ee67213892_prof);

        
        $__internal_cee4eb272e1ceba153dde2510fd19a1df722059c56e677cd1b3b900fc1d72490->leave($__internal_cee4eb272e1ceba153dde2510fd19a1df722059c56e677cd1b3b900fc1d72490_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  125 => 11,  107 => 7,  95 => 35,  93 => 34,  90 => 33,  84 => 32,  75 => 29,  70 => 28,  65 => 27,  61 => 26,  45 => 12,  43 => 11,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Decision Support System{% endblock %}</title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <a class=\"navbar-toggle collapsed\" href=\"#\">Decision Support System</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
            </ul>
        </div>
    </div>
</nav>
<div style=\"margin-top:60px; margin-left: 50px\" >
    {% for type, flash_messages in app.session.flashBag.all %}
        {% for flash_message in flash_messages %}
            <div class=\"flash-{{ type }}\">
                {{ flash_message }}
            </div>
        {% endfor %}
    {% endfor %}

    {% block body %}{% endblock %}
</div>
</body>
</html>", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/app/Resources/views/base.html.twig");
    }
}
