<?php

/* AddressBookBundle:Person:show_person.html.twig */
class __TwigTemplate_28ff934feb4c8d041350cc0c4250fbd799704133e9e8bd0a905cfa1a4b6868a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:show_person.html.twig", 1);
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
        $__internal_14f3a0c030a01e36df88be7867cab1c83bdf8d4486660470788c45b791e9e1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f3a0c030a01e36df88be7867cab1c83bdf8d4486660470788c45b791e9e1f2->enter($__internal_14f3a0c030a01e36df88be7867cab1c83bdf8d4486660470788c45b791e9e1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:show_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f3a0c030a01e36df88be7867cab1c83bdf8d4486660470788c45b791e9e1f2->leave($__internal_14f3a0c030a01e36df88be7867cab1c83bdf8d4486660470788c45b791e9e1f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a7f2482b9edbd04b3a2dfe37797398c7033452943420b05bafe7d2a234d2a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7f2482b9edbd04b3a2dfe37797398c7033452943420b05bafe7d2a234d2a3d->enter($__internal_7a7f2482b9edbd04b3a2dfe37797398c7033452943420b05bafe7d2a234d2a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Person";
        
        $__internal_7a7f2482b9edbd04b3a2dfe37797398c7033452943420b05bafe7d2a234d2a3d->leave($__internal_7a7f2482b9edbd04b3a2dfe37797398c7033452943420b05bafe7d2a234d2a3d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d9a2e88e93c7608684314a0f3ee09329e24321ca08fd3a82a0ffc15f8cb4d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9a2e88e93c7608684314a0f3ee09329e24321ca08fd3a82a0ffc15f8cb4d4b->enter($__internal_1d9a2e88e93c7608684314a0f3ee09329e24321ca08fd3a82a0ffc15f8cb4d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <h1>Welcome To Edit Name Page</h1>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>About</h3>
            <table class=\"table\">
                <tr>
                    <th> Name: </th>
                    <td> 
                        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_editname", array("id" => $this->getAttribute(        // line 17
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
                            Edit
                        </a>
                    </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo " </td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo " </td>
                </tr>
            </table>
        </div>
    </div>
    <div class=\"row\">
        
        
        <div class=\"col-md-4\">
            <h3>Phones</h3>
            ";
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phones", array())) > 0)) {
            // line 39
            echo "                <table class=\"table\">
                <tr>
                    <th> Phones: </th>
                </tr>
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 44
                echo "                    <tr>
                        <td> ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo " </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </table>
            ";
        } else {
            // line 49
            echo " 
                <p>There is no phones</p>
            ";
        }
        // line 52
        echo "        </div>
        
        
        <div class=\"col-md-4\">
            <h3>Addresses</h3>
            ";
        // line 57
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "addresses", array())) > 0)) {
            // line 58
            echo "                <table class=\"table\">
                <tr>
                    <th> City: </th>
                    <th> Street </th>
                </tr>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 64
                echo "                    <tr>
                        <td>
                            ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                echo "
                        </td>
                        <td> 
                            ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
                echo ",
                            ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "houseNo", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "flatNo", array()), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </table>
            ";
        } else {
            // line 75
            echo " 
                <p>There is no addresses</p>
            ";
        }
        // line 78
        echo "        </div>
        
        
    </div>
";
        
        $__internal_1d9a2e88e93c7608684314a0f3ee09329e24321ca08fd3a82a0ffc15f8cb4d4b->leave($__internal_1d9a2e88e93c7608684314a0f3ee09329e24321ca08fd3a82a0ffc15f8cb4d4b_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:show_person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 78,  182 => 75,  178 => 74,  166 => 70,  162 => 69,  156 => 66,  152 => 64,  148 => 63,  141 => 58,  139 => 57,  132 => 52,  127 => 49,  123 => 48,  114 => 45,  111 => 44,  107 => 43,  101 => 39,  99 => 38,  86 => 28,  79 => 24,  69 => 17,  68 => 16,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Edit Person{% endblock %}

{% block body %}
    <div class=\"container\">
    <h1>Welcome To Edit Name Page</h1>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>About</h3>
            <table class=\"table\">
                <tr>
                    <th> Name: </th>
                    <td> 
                        {{ person.name }} &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"{{ path(\"addressbook_person_editname\", 
                            {\"id\":person.id}) }}\">
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
    <div class=\"row\">
        
        
        <div class=\"col-md-4\">
            <h3>Phones</h3>
            {% if person.phones | length > 0 %}
                <table class=\"table\">
                <tr>
                    <th> Phones: </th>
                </tr>
                {% for phone in person.phones %}
                    <tr>
                        <td> {{ phone.number }} </td>
                    </tr>
                {% endfor %}
                </table>
            {% else %} 
                <p>There is no phones</p>
            {% endif %}
        </div>
        
        
        <div class=\"col-md-4\">
            <h3>Addresses</h3>
            {% if person.addresses | length > 0 %}
                <table class=\"table\">
                <tr>
                    <th> City: </th>
                    <th> Street </th>
                </tr>
                {% for address in person.addresses %}
                    <tr>
                        <td>
                            {{ address.city }}
                        </td>
                        <td> 
                            {{ address.street }},
                            {{ address.houseNo }}, {{ address.flatNo }}
                        </td>
                    </tr>
                {% endfor %}
                </table>
            {% else %} 
                <p>There is no addresses</p>
            {% endif %}
        </div>
        
        
    </div>
{% endblock %}
", "AddressBookBundle:Person:show_person.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/show_person.html.twig");
    }
}
