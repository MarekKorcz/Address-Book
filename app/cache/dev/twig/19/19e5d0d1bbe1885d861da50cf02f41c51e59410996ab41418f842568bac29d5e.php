<?php

/* AddressBookBundle:Person:show_person.html.twig */
class __TwigTemplate_eb30b20edaa50ad67b46cbbb5b1c26171b040537006a51b4fc29491ca26fdd4e extends Twig_Template
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
        $__internal_52af9125748d309fb0642d282c4ef1e666c75636f10610b807a22c84b4a09099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52af9125748d309fb0642d282c4ef1e666c75636f10610b807a22c84b4a09099->enter($__internal_52af9125748d309fb0642d282c4ef1e666c75636f10610b807a22c84b4a09099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:show_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52af9125748d309fb0642d282c4ef1e666c75636f10610b807a22c84b4a09099->leave($__internal_52af9125748d309fb0642d282c4ef1e666c75636f10610b807a22c84b4a09099_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5475d92d0354e31e8818cc0c62b9df3a7206cb89c351f0a3dc716baf283c4acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5475d92d0354e31e8818cc0c62b9df3a7206cb89c351f0a3dc716baf283c4acb->enter($__internal_5475d92d0354e31e8818cc0c62b9df3a7206cb89c351f0a3dc716baf283c4acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Person";
        
        $__internal_5475d92d0354e31e8818cc0c62b9df3a7206cb89c351f0a3dc716baf283c4acb->leave($__internal_5475d92d0354e31e8818cc0c62b9df3a7206cb89c351f0a3dc716baf283c4acb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5587c2a66868c61adbe8259586db61594a8a4e0c0511414737f5965740bb75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5587c2a66868c61adbe8259586db61594a8a4e0c0511414737f5965740bb75b->enter($__internal_b5587c2a66868c61adbe8259586db61594a8a4e0c0511414737f5965740bb75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo "</stron>
                    <td>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_editname", array("id" => $this->getAttribute(        // line 18
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
                    </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> 
                        <strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</strong>
                    </td>
                    <td>
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_editname", array("id" => $this->getAttribute(        // line 33
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> 
                        <strong>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "description", array()), "html", null, true);
        echo "</strong>
                    </td>
                    <td>
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_person_editname", array("id" => $this->getAttribute(        // line 47
(isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "id", array()))), "html", null, true);
        echo "\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
    <div class=\"row\">
        
        <div class=\"col-md-4\">
            <h3>Phones</h3>
            ";
        // line 62
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phones", array())) > 0)) {
            // line 63
            echo "                <table class=\"table\">
                <tr>
                    <th> Phones: </th>
                </tr>
                ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phones", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 68
                echo "                    <tr>
                        <td> ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo " </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </table>
            ";
        } else {
            // line 73
            echo " 
                <p>There is no phones</p>
            ";
        }
        // line 76
        echo "            <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addressbook_phone_createnewphone");
        echo "\"
                <button class=\"btn btn-sm btn-success\">
                    <strong>Add new</strong>
                </button>
            </a>
        </div>
        
        <div class=\"col-md-4\">
            <h3>Addresses</h3>
            ";
        // line 85
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "addresses", array())) > 0)) {
            // line 86
            echo "                <table class=\"table\">
                <tr>
                    <th> City: </th>
                    <th> Street </th>
                </tr>
                ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "addresses", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 92
                echo "                    <tr>
                        <td>
                            ";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
                echo "
                        </td>
                        <td> 
                            ";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
                echo ",
                            ";
                // line 98
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
            // line 102
            echo "                </table>
            ";
        } else {
            // line 103
            echo " 
                <p>There is no addresses</p>
            ";
        }
        // line 106
        echo "        </div>

    </div>
";
        
        $__internal_b5587c2a66868c61adbe8259586db61594a8a4e0c0511414737f5965740bb75b->leave($__internal_b5587c2a66868c61adbe8259586db61594a8a4e0c0511414737f5965740bb75b_prof);

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
        return array (  223 => 106,  218 => 103,  214 => 102,  202 => 98,  198 => 97,  192 => 94,  188 => 92,  184 => 91,  177 => 86,  175 => 85,  162 => 76,  157 => 73,  153 => 72,  144 => 69,  141 => 68,  137 => 67,  131 => 63,  129 => 62,  111 => 47,  110 => 46,  104 => 43,  91 => 33,  90 => 32,  84 => 29,  70 => 18,  69 => 17,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                        <strong>{{ person.name }}</stron>
                    <td>
                        <a href=\"{{ path(\"addressbook_person_editname\", 
                            {\"id\":person.id}) }}\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
                    </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> 
                        <strong>{{ person.surname }}</strong>
                    </td>
                    <td>
                        <a href=\"{{ path(\"addressbook_person_editname\", 
                            {\"id\":person.id}) }}\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> 
                        <strong>{{ person.description }}</strong>
                    </td>
                    <td>
                        <a href=\"{{ path(\"addressbook_person_editname\", 
                            {\"id\":person.id}) }}\">
                            <button class=\"btn btn-sm btn-primary\">
                                <strong>Edit</strong>
                            </button>
                        </a>
                    </td>
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
            <a href=\"{{ path('addressbook_phone_createnewphone') }}\"
                <button class=\"btn btn-sm btn-success\">
                    <strong>Add new</strong>
                </button>
            </a>
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
