<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_87bbc1c7acba12e0319bf49b38d689f4829bd80e2fa497b42729763e391e9a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_a2377babda6462c838caf4eb4bf1d9e5d67bcbf8b7fba0a776d34144b6863438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2377babda6462c838caf4eb4bf1d9e5d67bcbf8b7fba0a776d34144b6863438->enter($__internal_a2377babda6462c838caf4eb4bf1d9e5d67bcbf8b7fba0a776d34144b6863438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2377babda6462c838caf4eb4bf1d9e5d67bcbf8b7fba0a776d34144b6863438->leave($__internal_a2377babda6462c838caf4eb4bf1d9e5d67bcbf8b7fba0a776d34144b6863438_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4c458e434b907934ae2e366415dc8a5039f81cdd2cd4d0d187493a24769d1228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c458e434b907934ae2e366415dc8a5039f81cdd2cd4d0d187493a24769d1228->enter($__internal_4c458e434b907934ae2e366415dc8a5039f81cdd2cd4d0d187493a24769d1228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4c458e434b907934ae2e366415dc8a5039f81cdd2cd4d0d187493a24769d1228->leave($__internal_4c458e434b907934ae2e366415dc8a5039f81cdd2cd4d0d187493a24769d1228_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df7c9e28cb4ef5c3190a0881873941c7f2b18efc658aa327fd3850cf3ba150e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7c9e28cb4ef5c3190a0881873941c7f2b18efc658aa327fd3850cf3ba150e8->enter($__internal_df7c9e28cb4ef5c3190a0881873941c7f2b18efc658aa327fd3850cf3ba150e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df7c9e28cb4ef5c3190a0881873941c7f2b18efc658aa327fd3850cf3ba150e8->leave($__internal_df7c9e28cb4ef5c3190a0881873941c7f2b18efc658aa327fd3850cf3ba150e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fdfb00d41ab2f9bc2ed69f1080adc195a8aa456096233860fe4b72159358fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdfb00d41ab2f9bc2ed69f1080adc195a8aa456096233860fe4b72159358fdb->enter($__internal_6fdfb00d41ab2f9bc2ed69f1080adc195a8aa456096233860fe4b72159358fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6fdfb00d41ab2f9bc2ed69f1080adc195a8aa456096233860fe4b72159358fdb->leave($__internal_6fdfb00d41ab2f9bc2ed69f1080adc195a8aa456096233860fe4b72159358fdb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
