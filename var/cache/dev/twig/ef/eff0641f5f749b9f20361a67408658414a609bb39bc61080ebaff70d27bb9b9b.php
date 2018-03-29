<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_6d0e47da388705b27f415a621d3262732542b889212918fc005d1d23224dfc41 extends Twig_Template
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
        $__internal_dc558b7aedc7fa63b9b42d983609a734de4bfe96dac4ad937979b957960c6b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc558b7aedc7fa63b9b42d983609a734de4bfe96dac4ad937979b957960c6b6b->enter($__internal_dc558b7aedc7fa63b9b42d983609a734de4bfe96dac4ad937979b957960c6b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_c6ab3892bcc3160fcfd222c994a96499c18c1a659cc9798079dec6896d14c9aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ab3892bcc3160fcfd222c994a96499c18c1a659cc9798079dec6896d14c9aa->enter($__internal_c6ab3892bcc3160fcfd222c994a96499c18c1a659cc9798079dec6896d14c9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_dc558b7aedc7fa63b9b42d983609a734de4bfe96dac4ad937979b957960c6b6b->leave($__internal_dc558b7aedc7fa63b9b42d983609a734de4bfe96dac4ad937979b957960c6b6b_prof);

        
        $__internal_c6ab3892bcc3160fcfd222c994a96499c18c1a659cc9798079dec6896d14c9aa->leave($__internal_c6ab3892bcc3160fcfd222c994a96499c18c1a659cc9798079dec6896d14c9aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
