<?php

/* AddressBookBundle:Phone:new_phone.html.twig */
class __TwigTemplate_a0b5282c4ce9e60991da44e75407fc6b98fa1f43fc2f8145e37c51d44365bda7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Phone:new_phone.html.twig", 1);
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
        $__internal_2896b59d30663a7099ba873bafa2d1c465208fb493022f371de9b77409fb3955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2896b59d30663a7099ba873bafa2d1c465208fb493022f371de9b77409fb3955->enter($__internal_2896b59d30663a7099ba873bafa2d1c465208fb493022f371de9b77409fb3955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Phone:new_phone.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2896b59d30663a7099ba873bafa2d1c465208fb493022f371de9b77409fb3955->leave($__internal_2896b59d30663a7099ba873bafa2d1c465208fb493022f371de9b77409fb3955_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f1540719d2c73bd9caf12cca4f4e293d3d1b2cbda69c977cd50f8ea25884ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f1540719d2c73bd9caf12cca4f4e293d3d1b2cbda69c977cd50f8ea25884ab->enter($__internal_c1f1540719d2c73bd9caf12cca4f4e293d3d1b2cbda69c977cd50f8ea25884ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Phone";
        
        $__internal_c1f1540719d2c73bd9caf12cca4f4e293d3d1b2cbda69c977cd50f8ea25884ab->leave($__internal_c1f1540719d2c73bd9caf12cca4f4e293d3d1b2cbda69c977cd50f8ea25884ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e138b108f8fff80eb4b1ef49e00f391f16c2669860ffaebc3689d364073d5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e138b108f8fff80eb4b1ef49e00f391f16c2669860ffaebc3689d364073d5ac->enter($__internal_4e138b108f8fff80eb4b1ef49e00f391f16c2669860ffaebc3689d364073d5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h2>Add new Phone</h2>
        <div class=\"form\">
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_4e138b108f8fff80eb4b1ef49e00f391f16c2669860ffaebc3689d364073d5ac->leave($__internal_4e138b108f8fff80eb4b1ef49e00f391f16c2669860ffaebc3689d364073d5ac_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Phone:new_phone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Edit Phone{% endblock %}

{% block body %}
    <div class=\"container\">
        <h2>Add new Phone</h2>
        <div class=\"form\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "AddressBookBundle:Phone:new_phone.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/src/AddressBookBundle/Resources/views/Phone/new_phone.html.twig");
    }
}
