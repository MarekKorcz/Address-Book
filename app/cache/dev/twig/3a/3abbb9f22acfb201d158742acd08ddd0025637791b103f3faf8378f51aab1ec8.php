<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b23a40c21bd5ac5110df0ebffeca8306c4dd5b6a212beed3712d8f3ba32e6279 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_ce4a995032e0caac9edcb394054b4e30ce6ed58e7125028d72089683bf3e7675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4a995032e0caac9edcb394054b4e30ce6ed58e7125028d72089683bf3e7675->enter($__internal_ce4a995032e0caac9edcb394054b4e30ce6ed58e7125028d72089683bf3e7675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce4a995032e0caac9edcb394054b4e30ce6ed58e7125028d72089683bf3e7675->leave($__internal_ce4a995032e0caac9edcb394054b4e30ce6ed58e7125028d72089683bf3e7675_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e0ba593ae9e9f1fb6d0d5cb5122e45e4b68981d22905040a9b85f7001c8cc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e0ba593ae9e9f1fb6d0d5cb5122e45e4b68981d22905040a9b85f7001c8cc0d->enter($__internal_6e0ba593ae9e9f1fb6d0d5cb5122e45e4b68981d22905040a9b85f7001c8cc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6e0ba593ae9e9f1fb6d0d5cb5122e45e4b68981d22905040a9b85f7001c8cc0d->leave($__internal_6e0ba593ae9e9f1fb6d0d5cb5122e45e4b68981d22905040a9b85f7001c8cc0d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37a5f1cb15a51261c58cfec7222b8af455c1e16bb7220043aa90ff247cd850af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a5f1cb15a51261c58cfec7222b8af455c1e16bb7220043aa90ff247cd850af->enter($__internal_37a5f1cb15a51261c58cfec7222b8af455c1e16bb7220043aa90ff247cd850af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_37a5f1cb15a51261c58cfec7222b8af455c1e16bb7220043aa90ff247cd850af->leave($__internal_37a5f1cb15a51261c58cfec7222b8af455c1e16bb7220043aa90ff247cd850af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
