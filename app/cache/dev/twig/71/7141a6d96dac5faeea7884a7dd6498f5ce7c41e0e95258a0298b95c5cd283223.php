<?php

/* ::base.html.twig */
class __TwigTemplate_44eca496656411cbc03d551b8caeca4d092c006283329737a367b3dbb138c963 extends Twig_Template
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
        $__internal_1e24850b992d267c3c67d5a466df9a45a3aeed131acd157265f37795cae3b3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e24850b992d267c3c67d5a466df9a45a3aeed131acd157265f37795cae3b3a6->enter($__internal_1e24850b992d267c3c67d5a466df9a45a3aeed131acd157265f37795cae3b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_1e24850b992d267c3c67d5a466df9a45a3aeed131acd157265f37795cae3b3a6->leave($__internal_1e24850b992d267c3c67d5a466df9a45a3aeed131acd157265f37795cae3b3a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9606aba6de901fb2ef22fe48e765ca5af9ed9c1527a3597f93a79c7497d6a50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9606aba6de901fb2ef22fe48e765ca5af9ed9c1527a3597f93a79c7497d6a50c->enter($__internal_9606aba6de901fb2ef22fe48e765ca5af9ed9c1527a3597f93a79c7497d6a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9606aba6de901fb2ef22fe48e765ca5af9ed9c1527a3597f93a79c7497d6a50c->leave($__internal_9606aba6de901fb2ef22fe48e765ca5af9ed9c1527a3597f93a79c7497d6a50c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ef12733d9f30582d6587866a043a7434419495311fcf53cb318b125b4ea54c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef12733d9f30582d6587866a043a7434419495311fcf53cb318b125b4ea54c2->enter($__internal_3ef12733d9f30582d6587866a043a7434419495311fcf53cb318b125b4ea54c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ef12733d9f30582d6587866a043a7434419495311fcf53cb318b125b4ea54c2->leave($__internal_3ef12733d9f30582d6587866a043a7434419495311fcf53cb318b125b4ea54c2_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcaff4f9c897519a07315069affc3fca34df182594f4fa5b4adf1f223b7b735f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaff4f9c897519a07315069affc3fca34df182594f4fa5b4adf1f223b7b735f->enter($__internal_bcaff4f9c897519a07315069affc3fca34df182594f4fa5b4adf1f223b7b735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcaff4f9c897519a07315069affc3fca34df182594f4fa5b4adf1f223b7b735f->leave($__internal_bcaff4f9c897519a07315069affc3fca34df182594f4fa5b4adf1f223b7b735f_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5c1656af79d4e35cdafa3e33a255d97f5528e2b347c725a9d8afd1b7a6db271d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1656af79d4e35cdafa3e33a255d97f5528e2b347c725a9d8afd1b7a6db271d->enter($__internal_5c1656af79d4e35cdafa3e33a255d97f5528e2b347c725a9d8afd1b7a6db271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5c1656af79d4e35cdafa3e33a255d97f5528e2b347c725a9d8afd1b7a6db271d->leave($__internal_5c1656af79d4e35cdafa3e33a255d97f5528e2b347c725a9d8afd1b7a6db271d_prof);

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
