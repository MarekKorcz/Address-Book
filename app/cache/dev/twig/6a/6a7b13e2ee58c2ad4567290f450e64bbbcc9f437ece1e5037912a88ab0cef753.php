<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_88389321ea49ce64d40295ac6eab6a112ce85f19fa9f65eca369a5a46e5fe473 extends Twig_Template
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
        $__internal_579f1f8b35d3c711f58e69f9a03f51d2f382fa5a7c2328a57356a2cf81a10d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_579f1f8b35d3c711f58e69f9a03f51d2f382fa5a7c2328a57356a2cf81a10d07->enter($__internal_579f1f8b35d3c711f58e69f9a03f51d2f382fa5a7c2328a57356a2cf81a10d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_579f1f8b35d3c711f58e69f9a03f51d2f382fa5a7c2328a57356a2cf81a10d07->leave($__internal_579f1f8b35d3c711f58e69f9a03f51d2f382fa5a7c2328a57356a2cf81a10d07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
