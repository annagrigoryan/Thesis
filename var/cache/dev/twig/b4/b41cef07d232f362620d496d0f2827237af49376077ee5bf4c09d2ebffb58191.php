<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_19a224c6c33b964b2d32c7e3bb070a177d58da80fad888cfc8f366f122e9fb6d extends Twig_Template
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
        $__internal_32552e95a6d2c07232e08d9cc8e097a835f8db4a05624cda81e3fc5e7a9d999c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32552e95a6d2c07232e08d9cc8e097a835f8db4a05624cda81e3fc5e7a9d999c->enter($__internal_32552e95a6d2c07232e08d9cc8e097a835f8db4a05624cda81e3fc5e7a9d999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3f83877b1df93f4bc81efe3e358b4ad68cb583f85133bda21f97b30399005068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f83877b1df93f4bc81efe3e358b4ad68cb583f85133bda21f97b30399005068->enter($__internal_3f83877b1df93f4bc81efe3e358b4ad68cb583f85133bda21f97b30399005068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_32552e95a6d2c07232e08d9cc8e097a835f8db4a05624cda81e3fc5e7a9d999c->leave($__internal_32552e95a6d2c07232e08d9cc8e097a835f8db4a05624cda81e3fc5e7a9d999c_prof);

        
        $__internal_3f83877b1df93f4bc81efe3e358b4ad68cb583f85133bda21f97b30399005068->leave($__internal_3f83877b1df93f4bc81efe3e358b4ad68cb583f85133bda21f97b30399005068_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
