<?php

/* AddressBookBundle:Person:edit_name.html.twig */
class __TwigTemplate_70aef8ccb9e05c42d6bfa0639ded0ab252936efe7fa7f5411bd9c7be149c5718 extends Twig_Template
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
        $__internal_7186ff3b717f0fb2f01b3ff44f14716a7ebe3cb9442228d0a6f1a3f04e2bfef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7186ff3b717f0fb2f01b3ff44f14716a7ebe3cb9442228d0a6f1a3f04e2bfef5->enter($__internal_7186ff3b717f0fb2f01b3ff44f14716a7ebe3cb9442228d0a6f1a3f04e2bfef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:edit_name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7186ff3b717f0fb2f01b3ff44f14716a7ebe3cb9442228d0a6f1a3f04e2bfef5->leave($__internal_7186ff3b717f0fb2f01b3ff44f14716a7ebe3cb9442228d0a6f1a3f04e2bfef5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89db60e7e6927703c4a655477c184532d56396a76f5ca8c4210ac4572471f42e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89db60e7e6927703c4a655477c184532d56396a76f5ca8c4210ac4572471f42e->enter($__internal_89db60e7e6927703c4a655477c184532d56396a76f5ca8c4210ac4572471f42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Name";
        
        $__internal_89db60e7e6927703c4a655477c184532d56396a76f5ca8c4210ac4572471f42e->leave($__internal_89db60e7e6927703c4a655477c184532d56396a76f5ca8c4210ac4572471f42e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_948040d4a560f682913dbcf3e62d632c9506882cb76a8686aa35aa1c610f82a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948040d4a560f682913dbcf3e62d632c9506882cb76a8686aa35aa1c610f82a5->enter($__internal_948040d4a560f682913dbcf3e62d632c9506882cb76a8686aa35aa1c610f82a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h3>About</h3>
            <table class=\"table\">
                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <tr>
                    <th> Name: </th>
                    <td> ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo " </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo " </td>
                </tr>
                <tr>
                    <td> ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo " </td>
                </tr>
                ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </table>
        </div>
    </div>   
    </div>
";
        
        $__internal_948040d4a560f682913dbcf3e62d632c9506882cb76a8686aa35aa1c610f82a5->leave($__internal_948040d4a560f682913dbcf3e62d632c9506882cb76a8686aa35aa1c610f82a5_prof);

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
        return array (  91 => 27,  86 => 25,  80 => 22,  73 => 18,  66 => 14,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
                {{ form_start(form) }}
                <tr>
                    <th> Name: </th>
                    <td> {{ form_widget(form.name) }} </td>
                </tr>
                <tr>
                    <th> Surname: </th>
                    <td> {{ form_widget(form.surname) }}</td>
                </tr>
                <tr>
                    <th> Description: </th>
                    <td> {{ form_widget(form.description) }} </td>
                </tr>
                <tr>
                    <td> {{ form_widget(form.save) }} </td>
                </tr>
                {{ form_end(form) }}
            </table>
        </div>
    </div>   
    </div>
{% endblock %}
", "AddressBookBundle:Person:edit_name.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/edit_name.html.twig");
    }
}
