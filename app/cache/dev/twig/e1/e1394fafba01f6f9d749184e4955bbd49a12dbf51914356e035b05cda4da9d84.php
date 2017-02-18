<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0067a5744c24b6a52503299469f48b4768e631a6476d22c7bf88c05d38c56f48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_900f64ae150ada86f3ef3bfa4494e869a61f8b988f14ebc6aa06258535731717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900f64ae150ada86f3ef3bfa4494e869a61f8b988f14ebc6aa06258535731717->enter($__internal_900f64ae150ada86f3ef3bfa4494e869a61f8b988f14ebc6aa06258535731717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_900f64ae150ada86f3ef3bfa4494e869a61f8b988f14ebc6aa06258535731717->leave($__internal_900f64ae150ada86f3ef3bfa4494e869a61f8b988f14ebc6aa06258535731717_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
