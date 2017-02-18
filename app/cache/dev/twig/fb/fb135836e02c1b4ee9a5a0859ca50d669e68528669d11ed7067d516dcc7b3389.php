<?php

/* AddressBookBundle:Person:edit_name.html.twig */
class __TwigTemplate_c1fa09f9a4ba9eb800a1cbe8d06713d192f4594eb0cc3b0acd7f8dd446215884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:edit_name.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7abb7d8ce465dd7315b9aedaabb8429f7e4679335b4df533524274fb9b3b0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7abb7d8ce465dd7315b9aedaabb8429f7e4679335b4df533524274fb9b3b0d5->enter($__internal_c7abb7d8ce465dd7315b9aedaabb8429f7e4679335b4df533524274fb9b3b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:edit_name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7abb7d8ce465dd7315b9aedaabb8429f7e4679335b4df533524274fb9b3b0d5->leave($__internal_c7abb7d8ce465dd7315b9aedaabb8429f7e4679335b4df533524274fb9b3b0d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef8fdbee8fcdcfbc681055def12a877660215a203f1332dcd7ea53e15b08fdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8fdbee8fcdcfbc681055def12a877660215a203f1332dcd7ea53e15b08fdc7->enter($__internal_ef8fdbee8fcdcfbc681055def12a877660215a203f1332dcd7ea53e15b08fdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Name";
        
        $__internal_ef8fdbee8fcdcfbc681055def12a877660215a203f1332dcd7ea53e15b08fdc7->leave($__internal_ef8fdbee8fcdcfbc681055def12a877660215a203f1332dcd7ea53e15b08fdc7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0d5a958892dc9b5493b73e0e90c1534b35e104d18bab03aed4d70168df2467d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d5a958892dc9b5493b73e0e90c1534b35e104d18bab03aed4d70168df2467d->enter($__internal_c0d5a958892dc9b5493b73e0e90c1534b35e104d18bab03aed4d70168df2467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>About</h3>
            <table class=\"table\">
                <tr>
                    <th> Name: </th>
                    <td> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " </td>
                    <td>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath();
        echo "\">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo " </td>
                </tr>
            </table>
        </div>
    </div>   
    </div>
";
        
        $__internal_c0d5a958892dc9b5493b73e0e90c1534b35e104d18bab03aed4d70168df2467d->leave($__internal_c0d5a958892dc9b5493b73e0e90c1534b35e104d18bab03aed4d70168df2467d_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:edit_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  77 => 22,  67 => 15,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Edit Name{% endblock %}

{% block body %}
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>About</h3>
            <table class=\"table\">
                <tr>
                    <th> Name: </th>
                    <td> {{ person.name }} </td>
                    <td>
                        <a href=\"{{ path() }}\">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> {{ person.surname }} </td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> {{ person.description }} </td>
                </tr>
            </table>
        </div>
    </div>   
    </div>
{% endblock %}
", "AddressBookBundle:Person:edit_name.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/edit_name.html.twig");
    }
}
