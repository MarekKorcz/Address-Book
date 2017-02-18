<?php

/* ::base.html.twig */
class __TwigTemplate_8c574b2cd07997c67feb95440e9fbcac5a26e98453a48814b91963c6fbd261d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bec7c9d887fd4f38beb50d8421ee05c00fdeb009506542a193324a8a676f8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bec7c9d887fd4f38beb50d8421ee05c00fdeb009506542a193324a8a676f8ae->enter($__internal_1bec7c9d887fd4f38beb50d8421ee05c00fdeb009506542a193324a8a676f8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    
    </head>
    <body>
        ";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_1bec7c9d887fd4f38beb50d8421ee05c00fdeb009506542a193324a8a676f8ae->leave($__internal_1bec7c9d887fd4f38beb50d8421ee05c00fdeb009506542a193324a8a676f8ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4573adf7bf7e29e672c01d4885d3a1ba496d3a33a64b667b6819be9294b3bc00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4573adf7bf7e29e672c01d4885d3a1ba496d3a33a64b667b6819be9294b3bc00->enter($__internal_4573adf7bf7e29e672c01d4885d3a1ba496d3a33a64b667b6819be9294b3bc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4573adf7bf7e29e672c01d4885d3a1ba496d3a33a64b667b6819be9294b3bc00->leave($__internal_4573adf7bf7e29e672c01d4885d3a1ba496d3a33a64b667b6819be9294b3bc00_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fe2e439c82e035b7c1ac82d8b99d0e60f3a2409131c452bbf2071ac3db29348f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe2e439c82e035b7c1ac82d8b99d0e60f3a2409131c452bbf2071ac3db29348f->enter($__internal_fe2e439c82e035b7c1ac82d8b99d0e60f3a2409131c452bbf2071ac3db29348f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fe2e439c82e035b7c1ac82d8b99d0e60f3a2409131c452bbf2071ac3db29348f->leave($__internal_fe2e439c82e035b7c1ac82d8b99d0e60f3a2409131c452bbf2071ac3db29348f_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_359965a53578b32339caf10f5f69aad80457ee32c350a44b9938955ad49d3c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359965a53578b32339caf10f5f69aad80457ee32c350a44b9938955ad49d3c64->enter($__internal_359965a53578b32339caf10f5f69aad80457ee32c350a44b9938955ad49d3c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_359965a53578b32339caf10f5f69aad80457ee32c350a44b9938955ad49d3c64->leave($__internal_359965a53578b32339caf10f5f69aad80457ee32c350a44b9938955ad49d3c64_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e48294c027f6e60fef2414a01f172c72a344e60af07f67ab4c81f0f14eaff8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e48294c027f6e60fef2414a01f172c72a344e60af07f67ab4c81f0f14eaff8a->enter($__internal_2e48294c027f6e60fef2414a01f172c72a344e60af07f67ab4c81f0f14eaff8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2e48294c027f6e60fef2414a01f172c72a344e60af07f67ab4c81f0f14eaff8a->leave($__internal_2e48294c027f6e60fef2414a01f172c72a344e60af07f67ab4c81f0f14eaff8a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 21,  92 => 20,  81 => 6,  69 => 5,  60 => 22,  57 => 21,  55 => 20,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
    
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/app/Resources/views/base.html.twig");
    }
}
