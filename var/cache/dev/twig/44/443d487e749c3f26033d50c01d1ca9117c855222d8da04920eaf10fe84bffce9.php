<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_e7ea2e57a0b8fcfb819a6057aaf137ae4f296a183613d0342409619d1aaedb45 extends Twig_Template
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
        $__internal_ff2b8660ba91b262bf0f260462728419b1f12c3bfd4f83b88a64beb9a1046687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2b8660ba91b262bf0f260462728419b1f12c3bfd4f83b88a64beb9a1046687->enter($__internal_ff2b8660ba91b262bf0f260462728419b1f12c3bfd4f83b88a64beb9a1046687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_e6664a4ebdea4034115e21b38553374a5c8be91f3505e2941503524bbb4beed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6664a4ebdea4034115e21b38553374a5c8be91f3505e2941503524bbb4beed2->enter($__internal_e6664a4ebdea4034115e21b38553374a5c8be91f3505e2941503524bbb4beed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>
";
        
        $__internal_ff2b8660ba91b262bf0f260462728419b1f12c3bfd4f83b88a64beb9a1046687->leave($__internal_ff2b8660ba91b262bf0f260462728419b1f12c3bfd4f83b88a64beb9a1046687_prof);

        
        $__internal_e6664a4ebdea4034115e21b38553374a5c8be91f3505e2941503524bbb4beed2->leave($__internal_e6664a4ebdea4034115e21b38553374a5c8be91f3505e2941503524bbb4beed2_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
