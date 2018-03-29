<?php

/* DSSBundle::index.html.twig */
class __TwigTemplate_d8d86049332359507eb8ca37b037555931613a987710b2182afc92e5820e0ebd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "DSSBundle::index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40d83984b18889acb53cd222c839592a24318bfac714e95a96cfffbd3f00411f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d83984b18889acb53cd222c839592a24318bfac714e95a96cfffbd3f00411f->enter($__internal_40d83984b18889acb53cd222c839592a24318bfac714e95a96cfffbd3f00411f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSSBundle::index.html.twig"));

        $__internal_f09ca292bf49216c7ed7be4a1b2026e14b555071bc3b83ee8e4c0f4a9aef15fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09ca292bf49216c7ed7be4a1b2026e14b555071bc3b83ee8e4c0f4a9aef15fb->enter($__internal_f09ca292bf49216c7ed7be4a1b2026e14b555071bc3b83ee8e4c0f4a9aef15fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DSSBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d83984b18889acb53cd222c839592a24318bfac714e95a96cfffbd3f00411f->leave($__internal_40d83984b18889acb53cd222c839592a24318bfac714e95a96cfffbd3f00411f_prof);

        
        $__internal_f09ca292bf49216c7ed7be4a1b2026e14b555071bc3b83ee8e4c0f4a9aef15fb->leave($__internal_f09ca292bf49216c7ed7be4a1b2026e14b555071bc3b83ee8e4c0f4a9aef15fb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f21016a5287c25f9f68d5d082b386e6ffa13d060c9fb554d2cd87bd6b810018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f21016a5287c25f9f68d5d082b386e6ffa13d060c9fb554d2cd87bd6b810018->enter($__internal_1f21016a5287c25f9f68d5d082b386e6ffa13d060c9fb554d2cd87bd6b810018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bdc99ee6129203f37f712b57f63c42335cc042c276a5725bd3974e48352b2add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc99ee6129203f37f712b57f63c42335cc042c276a5725bd3974e48352b2add->enter($__internal_bdc99ee6129203f37f712b57f63c42335cc042c276a5725bd3974e48352b2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Product List</h1>
    <div>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dss_index");
        echo "\">
            <input type=\"search\"  name=\"query\" placeholder=\"Search\" required=\"required\"/>
            <input type=\"submit\"
                   class=\"btn btn-success\" />
        </form>
    </div>

    <table class=\"table table-condensed table-hover\" style=\"width:100%\">
        <tr>

            <th>";
        // line 17
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 17, $this->getSourceContext()); })()), "Name", "name");
        echo "</th>
            <th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 18, $this->getSourceContext()); })()), "Category", "category");
        echo "</th>
            <th>";
        // line 19
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 19, $this->getSourceContext()); })()), "Description", "description");
        echo "</th>
            <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 20, $this->getSourceContext()); })()), "Price", "price");
        echo "</th>
        </tr>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 22, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-lg btn-success\" type=\"submit\">Edit</a>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn btn-lg btn-danger\" type=\"submit\">Delete</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </table>



    <div class=\"navigation text-center\">
        ";
        // line 41
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new Twig_Error_Runtime('Variable "paginator" does not exist.', 41, $this->getSourceContext()); })()));
        echo "
    </div>
";
        
        $__internal_bdc99ee6129203f37f712b57f63c42335cc042c276a5725bd3974e48352b2add->leave($__internal_bdc99ee6129203f37f712b57f63c42335cc042c276a5725bd3974e48352b2add_prof);

        
        $__internal_1f21016a5287c25f9f68d5d082b386e6ffa13d060c9fb554d2cd87bd6b810018->leave($__internal_1f21016a5287c25f9f68d5d082b386e6ffa13d060c9fb554d2cd87bd6b810018_prof);

    }

    public function getTemplateName()
    {
        return "DSSBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  123 => 36,  112 => 31,  107 => 29,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  87 => 23,  83 => 22,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  53 => 7,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
    <h1>Product List</h1>
    <div>
        <form action=\"{{ path('dss_index') }}\">
            <input type=\"search\"  name=\"query\" placeholder=\"Search\" required=\"required\"/>
            <input type=\"submit\"
                   class=\"btn btn-success\" />
        </form>
    </div>

    <table class=\"table table-condensed table-hover\" style=\"width:100%\">
        <tr>

            <th>{{ knp_pagination_sortable(paginator, 'Name', 'name')}}</th>
            <th>{{ knp_pagination_sortable(paginator, 'Category', 'category')}}</th>
            <th>{{ knp_pagination_sortable(paginator, 'Description', 'description')}}</th>
            <th>{{ knp_pagination_sortable(paginator, 'Price', 'price')}}</th>
        </tr>
        {% for item in paginator %}
            <tr>
                <td>{{ item.name }}</td>
                <td>{{ item.category }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.price }}</td>
                <td>
                    <a href=\"{{ path('product_edit', {id:item.id}) }}\"
                       class=\"btn btn-lg btn-success\" type=\"submit\">Edit</a>
                    <a href=\"{{ path('product_delete', {id:item.id}) }}\"
                       class=\"btn btn-lg btn-danger\" type=\"submit\">Delete</a>
                </td>
            </tr>
        {% endfor %}
    </table>



    <div class=\"navigation text-center\">
        {{ knp_pagination_render(paginator) }}
    </div>
{% endblock %}



", "DSSBundle::index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/src/DSSBundle/Resources/views/index.html.twig");
    }
}
