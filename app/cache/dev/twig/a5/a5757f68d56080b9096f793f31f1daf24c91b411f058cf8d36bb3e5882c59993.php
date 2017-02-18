<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9240386522abba5ee29e0eaa234b162710b76ac727da2f70a8a6d65c8348094f extends Twig_Template
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
        $__internal_ba101379691c6518f804139329c5ea3ae3cd45a802784efd5e98d3ac51e68311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba101379691c6518f804139329c5ea3ae3cd45a802784efd5e98d3ac51e68311->enter($__internal_ba101379691c6518f804139329c5ea3ae3cd45a802784efd5e98d3ac51e68311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ba101379691c6518f804139329c5ea3ae3cd45a802784efd5e98d3ac51e68311->leave($__internal_ba101379691c6518f804139329c5ea3ae3cd45a802784efd5e98d3ac51e68311_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
