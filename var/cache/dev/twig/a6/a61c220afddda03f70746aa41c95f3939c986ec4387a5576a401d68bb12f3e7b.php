<?php

/* DoctrineMongoDBBundle:Collector:mongodb.html.twig */
class __TwigTemplate_b68dfcc0251c6a77f135300866a5d9d856996cfd298ee2884b78e99bcfab77df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f3b159015cf4fc12661798ddf0ee24a12c4428b3e4e5bd7a4585f1f5501531a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3b159015cf4fc12661798ddf0ee24a12c4428b3e4e5bd7a4585f1f5501531a->enter($__internal_0f3b159015cf4fc12661798ddf0ee24a12c4428b3e4e5bd7a4585f1f5501531a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $__internal_91d8926b35eb4a23595a4e48cd60646c3296fa0e3c8d6aa67819250e5a77c7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d8926b35eb4a23595a4e48cd60646c3296fa0e3c8d6aa67819250e5a77c7c9->enter($__internal_91d8926b35eb4a23595a4e48cd60646c3296fa0e3c8d6aa67819250e5a77c7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DoctrineMongoDBBundle:Collector:mongodb.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3b159015cf4fc12661798ddf0ee24a12c4428b3e4e5bd7a4585f1f5501531a->leave($__internal_0f3b159015cf4fc12661798ddf0ee24a12c4428b3e4e5bd7a4585f1f5501531a_prof);

        
        $__internal_91d8926b35eb4a23595a4e48cd60646c3296fa0e3c8d6aa67819250e5a77c7c9->leave($__internal_91d8926b35eb4a23595a4e48cd60646c3296fa0e3c8d6aa67819250e5a77c7c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06b2644ff0fac92ca6d8146df3b6473f408d7655a4666a13ffe82f7fba8ded39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b2644ff0fac92ca6d8146df3b6473f408d7655a4666a13ffe82f7fba8ded39->enter($__internal_06b2644ff0fac92ca6d8146df3b6473f408d7655a4666a13ffe82f7fba8ded39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59efae911b6a98b0e1e01195e4c14eef3060db18e02735553f60f6202adc3fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59efae911b6a98b0e1e01195e4c14eef3060db18e02735553f60f6202adc3fd5->enter($__internal_59efae911b6a98b0e1e01195e4c14eef3060db18e02735553f60f6202adc3fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "queryCount", array()) > 0)) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 5, $this->getSourceContext()); })()), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()) == 1)) {
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "@DoctrineMongoDB/Collector/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "queryCount", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 15
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "queryCount", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 22
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", 22)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 22, $this->getSourceContext()); })()))));
            // line 23
            echo "    ";
        }
        
        $__internal_59efae911b6a98b0e1e01195e4c14eef3060db18e02735553f60f6202adc3fd5->leave($__internal_59efae911b6a98b0e1e01195e4c14eef3060db18e02735553f60f6202adc3fd5_prof);

        
        $__internal_06b2644ff0fac92ca6d8146df3b6473f408d7655a4666a13ffe82f7fba8ded39->leave($__internal_06b2644ff0fac92ca6d8146df3b6473f408d7655a4666a13ffe82f7fba8ded39_prof);

    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        $__internal_36be75a558bbf02bec6b2916117f111145c61516966ca15810923a48c764e283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36be75a558bbf02bec6b2916117f111145c61516966ca15810923a48c764e283->enter($__internal_36be75a558bbf02bec6b2916117f111145c61516966ca15810923a48c764e283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3110ccd1a014c47858e5aa5a61de9c1781338a032349bce4070f138020914e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3110ccd1a014c47858e5aa5a61de9c1781338a032349bce4070f138020914e34->enter($__internal_3110ccd1a014c47858e5aa5a61de9c1781338a032349bce4070f138020914e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "queryCount", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
        
        $__internal_3110ccd1a014c47858e5aa5a61de9c1781338a032349bce4070f138020914e34->leave($__internal_3110ccd1a014c47858e5aa5a61de9c1781338a032349bce4070f138020914e34_prof);

        
        $__internal_36be75a558bbf02bec6b2916117f111145c61516966ca15810923a48c764e283->leave($__internal_36be75a558bbf02bec6b2916117f111145c61516966ca15810923a48c764e283_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74983db752ec7481339e30df906179b67c63f84f7767f197e05be658a3103d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74983db752ec7481339e30df906179b67c63f84f7767f197e05be658a3103d55->enter($__internal_74983db752ec7481339e30df906179b67c63f84f7767f197e05be658a3103d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7f97d9286ea1b4837a82ac82601040f6ec3587ea5bf9eb845670f7ff3f1c488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f97d9286ea1b4837a82ac82601040f6ec3587ea5bf9eb845670f7ff3f1c488->enter($__internal_c7f97d9286ea1b4837a82ac82601040f6ec3587ea5bf9eb845670f7ff3f1c488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    <h2>Queries</h2>

    ";
        // line 39
        if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 39, $this->getSourceContext()); })()), "queries", array()))) {
            // line 40
            echo "        <p>
            <em>No queries.</em>
        </p>
    ";
        } else {
            // line 44
            echo "        <ul class=\"alt\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 45, $this->getSourceContext()); })()), "queries", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 46
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <div>
                        <code>";
                // line 48
                echo twig_escape_filter($this->env, $context["query"], "html", null, true);
                echo "</code>
                    </div>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul>
    ";
        }
        
        $__internal_c7f97d9286ea1b4837a82ac82601040f6ec3587ea5bf9eb845670f7ff3f1c488->leave($__internal_c7f97d9286ea1b4837a82ac82601040f6ec3587ea5bf9eb845670f7ff3f1c488_prof);

        
        $__internal_74983db752ec7481339e30df906179b67c63f84f7767f197e05be658a3103d55->leave($__internal_74983db752ec7481339e30df906179b67c63f84f7767f197e05be658a3103d55_prof);

    }

    public function getTemplateName()
    {
        return "DoctrineMongoDBBundle:Collector:mongodb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 52,  189 => 48,  183 => 46,  166 => 45,  163 => 44,  157 => 40,  155 => 39,  151 => 37,  142 => 36,  128 => 31,  122 => 27,  113 => 26,  102 => 23,  99 => 22,  93 => 19,  89 => 17,  86 => 16,  83 => 15,  78 => 13,  73 => 12,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.queryCount > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"20\" height=\"28\" alt=\"Mongo\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            {% else %}
                {{ include('@DoctrineMongoDB/Collector/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.queryCount }}</span>
            {% endif %}
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status\">{{ collector.queryCount }}</span>
            </div>
        {% endset %}
        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Mongo\" /></span>
    <strong>Doctrine MongoDB</strong>
    <span class=\"count\">
        <span>{{ collector.queryCount }}</span>
    </span>
</span>
{% endblock %}

{% block panel %}
    <h2>Queries</h2>

    {% if collector.queries is empty %}
        <p>
            <em>No queries.</em>
        </p>
    {% else %}
        <ul class=\"alt\">
            {% for query in collector.queries %}
                <li class=\"{{ cycle(['odd', 'even'], loop.index) }}\">
                    <div>
                        <code>{{ query }}</code>
                    </div>
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}
", "DoctrineMongoDBBundle:Collector:mongodb.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/doctrine/mongodb-odm-bundle/Resources/views/Collector/mongodb.html.twig");
    }
}
