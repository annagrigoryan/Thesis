<?php

/* form_table_layout.html.twig */
class __TwigTemplate_615ea536e6d293d361c595cf23f77014d1981c87b35d6656f1fd176f5f0e667d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bce8e1bf9b569bb5d0f50606e78db2e5e2cc17c63814cf0eb81e671a9e8973b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bce8e1bf9b569bb5d0f50606e78db2e5e2cc17c63814cf0eb81e671a9e8973b->enter($__internal_9bce8e1bf9b569bb5d0f50606e78db2e5e2cc17c63814cf0eb81e671a9e8973b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_cc0bd0851de0bb8bcd65360c17e1dac4004072576d182f5fcc789cfbe65e1cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0bd0851de0bb8bcd65360c17e1dac4004072576d182f5fcc789cfbe65e1cbc->enter($__internal_cc0bd0851de0bb8bcd65360c17e1dac4004072576d182f5fcc789cfbe65e1cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_9bce8e1bf9b569bb5d0f50606e78db2e5e2cc17c63814cf0eb81e671a9e8973b->leave($__internal_9bce8e1bf9b569bb5d0f50606e78db2e5e2cc17c63814cf0eb81e671a9e8973b_prof);

        
        $__internal_cc0bd0851de0bb8bcd65360c17e1dac4004072576d182f5fcc789cfbe65e1cbc->leave($__internal_cc0bd0851de0bb8bcd65360c17e1dac4004072576d182f5fcc789cfbe65e1cbc_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e8631c6534cba2074218584e4c3e818afa4001cda40ef5b87ac06f11f641ab11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8631c6534cba2074218584e4c3e818afa4001cda40ef5b87ac06f11f641ab11->enter($__internal_e8631c6534cba2074218584e4c3e818afa4001cda40ef5b87ac06f11f641ab11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_40e281ff5f70fd5617cae0fb57bf0d85de5e111276bb387051e49aa2f1467ebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e281ff5f70fd5617cae0fb57bf0d85de5e111276bb387051e49aa2f1467ebc->enter($__internal_40e281ff5f70fd5617cae0fb57bf0d85de5e111276bb387051e49aa2f1467ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_40e281ff5f70fd5617cae0fb57bf0d85de5e111276bb387051e49aa2f1467ebc->leave($__internal_40e281ff5f70fd5617cae0fb57bf0d85de5e111276bb387051e49aa2f1467ebc_prof);

        
        $__internal_e8631c6534cba2074218584e4c3e818afa4001cda40ef5b87ac06f11f641ab11->leave($__internal_e8631c6534cba2074218584e4c3e818afa4001cda40ef5b87ac06f11f641ab11_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_522ff803116dd7156ff7e0264d276a8b88ee0b3c7d898a1c219435fc8b96f41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_522ff803116dd7156ff7e0264d276a8b88ee0b3c7d898a1c219435fc8b96f41d->enter($__internal_522ff803116dd7156ff7e0264d276a8b88ee0b3c7d898a1c219435fc8b96f41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7d903f167226cef4ac99cc42de963a5fb36c351f390fb4fd445d919f4139c1a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d903f167226cef4ac99cc42de963a5fb36c351f390fb4fd445d919f4139c1a9->enter($__internal_7d903f167226cef4ac99cc42de963a5fb36c351f390fb4fd445d919f4139c1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7d903f167226cef4ac99cc42de963a5fb36c351f390fb4fd445d919f4139c1a9->leave($__internal_7d903f167226cef4ac99cc42de963a5fb36c351f390fb4fd445d919f4139c1a9_prof);

        
        $__internal_522ff803116dd7156ff7e0264d276a8b88ee0b3c7d898a1c219435fc8b96f41d->leave($__internal_522ff803116dd7156ff7e0264d276a8b88ee0b3c7d898a1c219435fc8b96f41d_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_b825379693fd1399efc527ba82b9dbc1e9ba547feeb8ee0c67a5552a1ac7c310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b825379693fd1399efc527ba82b9dbc1e9ba547feeb8ee0c67a5552a1ac7c310->enter($__internal_b825379693fd1399efc527ba82b9dbc1e9ba547feeb8ee0c67a5552a1ac7c310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fb0791192da7b301d300ea820be2abfdc6b9ffe4bee13a5ab967ffbeb1152065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0791192da7b301d300ea820be2abfdc6b9ffe4bee13a5ab967ffbeb1152065->enter($__internal_fb0791192da7b301d300ea820be2abfdc6b9ffe4bee13a5ab967ffbeb1152065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fb0791192da7b301d300ea820be2abfdc6b9ffe4bee13a5ab967ffbeb1152065->leave($__internal_fb0791192da7b301d300ea820be2abfdc6b9ffe4bee13a5ab967ffbeb1152065_prof);

        
        $__internal_b825379693fd1399efc527ba82b9dbc1e9ba547feeb8ee0c67a5552a1ac7c310->leave($__internal_b825379693fd1399efc527ba82b9dbc1e9ba547feeb8ee0c67a5552a1ac7c310_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_610d90fdfd993cd3d38da657c662b8c11be5b5cb557693eec1ab6b17effe2056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610d90fdfd993cd3d38da657c662b8c11be5b5cb557693eec1ab6b17effe2056->enter($__internal_610d90fdfd993cd3d38da657c662b8c11be5b5cb557693eec1ab6b17effe2056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_b2199e7a4f28d4d3019bd5529ccff53461a9ca1535e273d705359cc1eeb56d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2199e7a4f28d4d3019bd5529ccff53461a9ca1535e273d705359cc1eeb56d50->enter($__internal_b2199e7a4f28d4d3019bd5529ccff53461a9ca1535e273d705359cc1eeb56d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_b2199e7a4f28d4d3019bd5529ccff53461a9ca1535e273d705359cc1eeb56d50->leave($__internal_b2199e7a4f28d4d3019bd5529ccff53461a9ca1535e273d705359cc1eeb56d50_prof);

        
        $__internal_610d90fdfd993cd3d38da657c662b8c11be5b5cb557693eec1ab6b17effe2056->leave($__internal_610d90fdfd993cd3d38da657c662b8c11be5b5cb557693eec1ab6b17effe2056_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/DSS/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
