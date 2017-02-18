<?php

/* AddressBookBundle:Person:show_index.html.twig */
class __TwigTemplate_dc73eeab2a28c3461c781d27c83b381b972a0ac61a7cd5257c8b057977c816ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:show_index.html.twig", 1);
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
        $__internal_dd2facb1899ff0216b46c00a317a94bb14d7f121408a5031a3b588edce207baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2facb1899ff0216b46c00a317a94bb14d7f121408a5031a3b588edce207baf->enter($__internal_dd2facb1899ff0216b46c00a317a94bb14d7f121408a5031a3b588edce207baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:show_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd2facb1899ff0216b46c00a317a94bb14d7f121408a5031a3b588edce207baf->leave($__internal_dd2facb1899ff0216b46c00a317a94bb14d7f121408a5031a3b588edce207baf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89abb3a4ec4a67707fc312b9e091170733a2966eec62e4bae09c901045739c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89abb3a4ec4a67707fc312b9e091170733a2966eec62e4bae09c901045739c84->enter($__internal_89abb3a4ec4a67707fc312b9e091170733a2966eec62e4bae09c901045739c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show People";
        
        $__internal_89abb3a4ec4a67707fc312b9e091170733a2966eec62e4bae09c901045739c84->leave($__internal_89abb3a4ec4a67707fc312b9e091170733a2966eec62e4bae09c901045739c84_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_215be095fa5d857a52c2558bcb0005e633794763047963c0fc764f933e833781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215be095fa5d857a52c2558bcb0005e633794763047963c0fc764f933e833781->enter($__internal_215be095fa5d857a52c2558bcb0005e633794763047963c0fc764f933e833781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <h1>Welcome to the Show People page</h1>
    <p><strong>Number of people: ";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons"))), "html", null, true);
        echo "</strong></p>
        <table class=\"table\">
            <tr>
                <th> Name </th>
                <th> Surname </th>
                <th> Description </th>  
                <th> Action </th>
            </tr>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_showperson", array("id" => $this->getAttribute(            // line 19
$context["person"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "
                </a></td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_showperson", array("id" => $this->getAttribute(            // line 23
$context["person"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo "
                </a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_showperson", array("id" => $this->getAttribute(            // line 29
$context["person"], "id", array()))), "html", null, true);
            echo "\">
                        <button class=\"btn btn-primary\"> 
                            Show 
                        </button>
                    </a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </table>
    </div>
";
        
        $__internal_215be095fa5d857a52c2558bcb0005e633794763047963c0fc764f933e833781->leave($__internal_215be095fa5d857a52c2558bcb0005e633794763047963c0fc764f933e833781_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:show_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  101 => 29,  100 => 28,  95 => 26,  90 => 24,  86 => 23,  85 => 22,  80 => 20,  76 => 19,  75 => 18,  72 => 17,  68 => 16,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Show People{% endblock %}

{% block body %}
    <div class=\"container\">
    <h1>Welcome to the Show People page</h1>
    <p><strong>Number of people: {{ persons | length }}</strong></p>
        <table class=\"table\">
            <tr>
                <th> Name </th>
                <th> Surname </th>
                <th> Description </th>  
                <th> Action </th>
            </tr>
            {% for person in persons %}
            <tr>
                <td><a href=\"{{ path(\"addressbook_person_showperson\", 
                        {\"id\":person.id}) }}\">
                    {{ person.name }}
                </a></td>
                <td><a href=\"{{ path(\"addressbook_person_showperson\", 
                        {\"id\":person.id}) }}\">
                    {{ person.surname }}
                </a></td>
                <td>{{ person.description }}</td>
                <td>
                    <a href=\"{{ path(\"addressbook_person_showperson\", 
                        {\"id\":person.id}) }}\">
                        <button class=\"btn btn-primary\"> 
                            Show 
                        </button>
                    </a>
                </td>
            </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
", "AddressBookBundle:Person:show_index.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/show_index.html.twig");
    }
}
