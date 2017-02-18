<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_599e6cd1ef5a7506c66de32959449abb1331471c17a59d844e9d06e042e11e70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_558777e6e6ece1ae2e0a0f6497f2490afdf6a09d5f2245b374f26244b0ca716f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558777e6e6ece1ae2e0a0f6497f2490afdf6a09d5f2245b374f26244b0ca716f->enter($__internal_558777e6e6ece1ae2e0a0f6497f2490afdf6a09d5f2245b374f26244b0ca716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_558777e6e6ece1ae2e0a0f6497f2490afdf6a09d5f2245b374f26244b0ca716f->leave($__internal_558777e6e6ece1ae2e0a0f6497f2490afdf6a09d5f2245b374f26244b0ca716f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_634ee7736a85dac358c8723d4dad9d36144d4741e9aaa3723aa1e6ef55eed47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634ee7736a85dac358c8723d4dad9d36144d4741e9aaa3723aa1e6ef55eed47b->enter($__internal_634ee7736a85dac358c8723d4dad9d36144d4741e9aaa3723aa1e6ef55eed47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_634ee7736a85dac358c8723d4dad9d36144d4741e9aaa3723aa1e6ef55eed47b->leave($__internal_634ee7736a85dac358c8723d4dad9d36144d4741e9aaa3723aa1e6ef55eed47b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74796c65b2078803eda21237d29a49828197c571ef74d8a745e299b87847b1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74796c65b2078803eda21237d29a49828197c571ef74d8a745e299b87847b1eb->enter($__internal_74796c65b2078803eda21237d29a49828197c571ef74d8a745e299b87847b1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74796c65b2078803eda21237d29a49828197c571ef74d8a745e299b87847b1eb->leave($__internal_74796c65b2078803eda21237d29a49828197c571ef74d8a745e299b87847b1eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6274037abaab6e48fa56af29d591ff926fa175171f8270b923bdde0adf60ed53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6274037abaab6e48fa56af29d591ff926fa175171f8270b923bdde0adf60ed53->enter($__internal_6274037abaab6e48fa56af29d591ff926fa175171f8270b923bdde0adf60ed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6274037abaab6e48fa56af29d591ff926fa175171f8270b923bdde0adf60ed53->leave($__internal_6274037abaab6e48fa56af29d591ff926fa175171f8270b923bdde0adf60ed53_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
