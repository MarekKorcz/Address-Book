<?php

/* AddressBookBundle:Person:show_index.html.twig */
class __TwigTemplate_abc904ea475642ed72dbecdd51bb35a9ca1f63728ce9be10cf13d09b2b90517b extends Twig_Template
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
        $__internal_ea0ed72fd5c55f0f0b8b186cc42ffc2b1d9de0bf1d9a49b7403854feadc720f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0ed72fd5c55f0f0b8b186cc42ffc2b1d9de0bf1d9a49b7403854feadc720f8->enter($__internal_ea0ed72fd5c55f0f0b8b186cc42ffc2b1d9de0bf1d9a49b7403854feadc720f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:show_index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea0ed72fd5c55f0f0b8b186cc42ffc2b1d9de0bf1d9a49b7403854feadc720f8->leave($__internal_ea0ed72fd5c55f0f0b8b186cc42ffc2b1d9de0bf1d9a49b7403854feadc720f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a596837e88dcb8da9eb5fb1bd2ee6ad51877ce442fa626a7afca044b1fcf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a596837e88dcb8da9eb5fb1bd2ee6ad51877ce442fa626a7afca044b1fcf49->enter($__internal_89a596837e88dcb8da9eb5fb1bd2ee6ad51877ce442fa626a7afca044b1fcf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Show People";
        
        $__internal_89a596837e88dcb8da9eb5fb1bd2ee6ad51877ce442fa626a7afca044b1fcf49->leave($__internal_89a596837e88dcb8da9eb5fb1bd2ee6ad51877ce442fa626a7afca044b1fcf49_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19b64ab984e1bf863c8ba1de1a2ae7dbbfdccb08d549b38ad6a343734d4e4888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b64ab984e1bf863c8ba1de1a2ae7dbbfdccb08d549b38ad6a343734d4e4888->enter($__internal_19b64ab984e1bf863c8ba1de1a2ae7dbbfdccb08d549b38ad6a343734d4e4888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <strong>Show</strong>
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
        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_createnewperson");
        echo "\"
            <button class=\"btn btn-success\">
                <strong>Add new</strong>
            </button>
        </a>
    </div>
";
        
        $__internal_19b64ab984e1bf863c8ba1de1a2ae7dbbfdccb08d549b38ad6a343734d4e4888->leave($__internal_19b64ab984e1bf863c8ba1de1a2ae7dbbfdccb08d549b38ad6a343734d4e4888_prof);

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
        return array (  118 => 38,  115 => 37,  101 => 29,  100 => 28,  95 => 26,  90 => 24,  86 => 23,  85 => 22,  80 => 20,  76 => 19,  75 => 18,  72 => 17,  68 => 16,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                            <strong>Show</strong>
                        </button>
                    </a>
                </td>
            </tr>
            {% endfor %}
        </table>
        <a href=\"{{ path('addressbook_person_createnewperson') }}\"
            <button class=\"btn btn-success\">
                <strong>Add new</strong>
            </button>
        </a>
    </div>
{% endblock %}
", "AddressBookBundle:Person:show_index.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/show_index.html.twig");
    }
}
