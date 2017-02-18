<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b4c2c56e67bdb4926183d09509676052c56e1ff82444fac95681f3e2fbb44a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ed4108fa481dbee72f1e3b28ec981bdd7024231014d91e90c71db42667903a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ed4108fa481dbee72f1e3b28ec981bdd7024231014d91e90c71db42667903a->enter($__internal_d1ed4108fa481dbee72f1e3b28ec981bdd7024231014d91e90c71db42667903a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1ed4108fa481dbee72f1e3b28ec981bdd7024231014d91e90c71db42667903a->leave($__internal_d1ed4108fa481dbee72f1e3b28ec981bdd7024231014d91e90c71db42667903a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3212d614ff2a2baf2b85da0f48d66e7c3744532ea9c6dd209b37100053c752b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3212d614ff2a2baf2b85da0f48d66e7c3744532ea9c6dd209b37100053c752b->enter($__internal_d3212d614ff2a2baf2b85da0f48d66e7c3744532ea9c6dd209b37100053c752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d3212d614ff2a2baf2b85da0f48d66e7c3744532ea9c6dd209b37100053c752b->leave($__internal_d3212d614ff2a2baf2b85da0f48d66e7c3744532ea9c6dd209b37100053c752b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa629e85ec3596c5e4e9129d6e34b8393de2dcb52ecf053fff0d6fba3c8f409d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa629e85ec3596c5e4e9129d6e34b8393de2dcb52ecf053fff0d6fba3c8f409d->enter($__internal_aa629e85ec3596c5e4e9129d6e34b8393de2dcb52ecf053fff0d6fba3c8f409d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aa629e85ec3596c5e4e9129d6e34b8393de2dcb52ecf053fff0d6fba3c8f409d->leave($__internal_aa629e85ec3596c5e4e9129d6e34b8393de2dcb52ecf053fff0d6fba3c8f409d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f9331f95bfd261e02067db46e8f48e4903b127ffad23ff924855fdda5574e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9331f95bfd261e02067db46e8f48e4903b127ffad23ff924855fdda5574e65->enter($__internal_9f9331f95bfd261e02067db46e8f48e4903b127ffad23ff924855fdda5574e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f9331f95bfd261e02067db46e8f48e4903b127ffad23ff924855fdda5574e65->leave($__internal_9f9331f95bfd261e02067db46e8f48e4903b127ffad23ff924855fdda5574e65_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
