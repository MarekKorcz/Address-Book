<?php

/* AddressBookBundle:Person:new_person.html.twig */
class __TwigTemplate_2683b69db375a8f3832222cd218e5888752f18d2b0d54d84dd7c802f3ab53b0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:new_person.html.twig", 1);
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
        $__internal_0a79402823fd747e5dfe972d17027a46a35edf5844a57d353a43475db675a2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a79402823fd747e5dfe972d17027a46a35edf5844a57d353a43475db675a2cb->enter($__internal_0a79402823fd747e5dfe972d17027a46a35edf5844a57d353a43475db675a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:new_person.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a79402823fd747e5dfe972d17027a46a35edf5844a57d353a43475db675a2cb->leave($__internal_0a79402823fd747e5dfe972d17027a46a35edf5844a57d353a43475db675a2cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8650ce0db83e8e5afa12e16e0feded27dcfa5db55b3b90bfb33435ddac65e947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8650ce0db83e8e5afa12e16e0feded27dcfa5db55b3b90bfb33435ddac65e947->enter($__internal_8650ce0db83e8e5afa12e16e0feded27dcfa5db55b3b90bfb33435ddac65e947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Name";
        
        $__internal_8650ce0db83e8e5afa12e16e0feded27dcfa5db55b3b90bfb33435ddac65e947->leave($__internal_8650ce0db83e8e5afa12e16e0feded27dcfa5db55b3b90bfb33435ddac65e947_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be91c6f78dc530c1f8cac2bafd890e4f199884a2a6c931d2f2c8d7ab6c8ac1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be91c6f78dc530c1f8cac2bafd890e4f199884a2a6c931d2f2c8d7ab6c8ac1fa->enter($__internal_be91c6f78dc530c1f8cac2bafd890e4f199884a2a6c931d2f2c8d7ab6c8ac1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h2>Add new Person</h2>
        <div class=\"form\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form\">
                    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "<br>
                    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                </div>
                <div class=\"form\">
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'label');
        echo "<br>
                    ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'widget');
        echo "
                </div>
                <div class=\"form\">
                    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "<br>
                    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </div>
            ";
        // line 22
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_be91c6f78dc530c1f8cac2bafd890e4f199884a2a6c931d2f2c8d7ab6c8ac1fa->leave($__internal_be91c6f78dc530c1f8cac2bafd890e4f199884a2a6c931d2f2c8d7ab6c8ac1fa_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:new_person.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  67 => 12,  63 => 11,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
        <h2>Add new Person</h2>
        <div class=\"form\">
            {{ form_start(form) }}
                <div class=\"form\">
                    {{ form_label(form.name) }}<br>
                    {{ form_widget(form.name) }}
                </div>
                <div class=\"form\">
                    {{ form_label(form.surname) }}<br>
                    {{ form_widget(form.surname) }}
                </div>
                <div class=\"form\">
                    {{ form_label(form.description) }}<br>
                    {{ form_widget(form.description) }}
                </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "AddressBookBundle:Person:new_person.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Person/new_person.html.twig");
    }
}
