<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ffec30ae3554126226603dfda3167115e94bb76ec7f99e3a39e756ea0f9bc001 extends Twig_Template
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
        $__internal_062f67952b038beecb7fe4b58d5623fef1cc796c04d0c91f7acc90498d765d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_062f67952b038beecb7fe4b58d5623fef1cc796c04d0c91f7acc90498d765d79->enter($__internal_062f67952b038beecb7fe4b58d5623fef1cc796c04d0c91f7acc90498d765d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_8e100cf498068b36b16e0cc90c63c4b64f89a1575aec7aae4f62f6e8aa372a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e100cf498068b36b16e0cc90c63c4b64f89a1575aec7aae4f62f6e8aa372a2c->enter($__internal_8e100cf498068b36b16e0cc90c63c4b64f89a1575aec7aae4f62f6e8aa372a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_062f67952b038beecb7fe4b58d5623fef1cc796c04d0c91f7acc90498d765d79->leave($__internal_062f67952b038beecb7fe4b58d5623fef1cc796c04d0c91f7acc90498d765d79_prof);

        
        $__internal_8e100cf498068b36b16e0cc90c63c4b64f89a1575aec7aae4f62f6e8aa372a2c->leave($__internal_8e100cf498068b36b16e0cc90c63c4b64f89a1575aec7aae4f62f6e8aa372a2c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
