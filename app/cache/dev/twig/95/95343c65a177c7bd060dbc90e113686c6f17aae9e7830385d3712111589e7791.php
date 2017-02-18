<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_590bedb686c0934df5d6704e564c981e4a841b9e71c275323f574a707c2ffae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_448bf9974d62aaa49d94dd0df85831f63685b910f3003680ac4ff3d7e5e14c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448bf9974d62aaa49d94dd0df85831f63685b910f3003680ac4ff3d7e5e14c57->enter($__internal_448bf9974d62aaa49d94dd0df85831f63685b910f3003680ac4ff3d7e5e14c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448bf9974d62aaa49d94dd0df85831f63685b910f3003680ac4ff3d7e5e14c57->leave($__internal_448bf9974d62aaa49d94dd0df85831f63685b910f3003680ac4ff3d7e5e14c57_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_db3be0fe0e85836a5fdb6f98d9f05bca8a59ff500a3e14bf3d9308de8e67deed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3be0fe0e85836a5fdb6f98d9f05bca8a59ff500a3e14bf3d9308de8e67deed->enter($__internal_db3be0fe0e85836a5fdb6f98d9f05bca8a59ff500a3e14bf3d9308de8e67deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_db3be0fe0e85836a5fdb6f98d9f05bca8a59ff500a3e14bf3d9308de8e67deed->leave($__internal_db3be0fe0e85836a5fdb6f98d9f05bca8a59ff500a3e14bf3d9308de8e67deed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a91187c09f0dd7db07d6e55f5692818bce50cf3cc2314a7bd7674b33a53cf7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91187c09f0dd7db07d6e55f5692818bce50cf3cc2314a7bd7674b33a53cf7aa->enter($__internal_a91187c09f0dd7db07d6e55f5692818bce50cf3cc2314a7bd7674b33a53cf7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a91187c09f0dd7db07d6e55f5692818bce50cf3cc2314a7bd7674b33a53cf7aa->leave($__internal_a91187c09f0dd7db07d6e55f5692818bce50cf3cc2314a7bd7674b33a53cf7aa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bb8c7836462f663a3aebbcdf2c6e4d6094dff62b57d582ae5d7ac5c482323d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb8c7836462f663a3aebbcdf2c6e4d6094dff62b57d582ae5d7ac5c482323d6->enter($__internal_2bb8c7836462f663a3aebbcdf2c6e4d6094dff62b57d582ae5d7ac5c482323d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2bb8c7836462f663a3aebbcdf2c6e4d6094dff62b57d582ae5d7ac5c482323d6->leave($__internal_2bb8c7836462f663a3aebbcdf2c6e4d6094dff62b57d582ae5d7ac5c482323d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
