<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_29ccb847ee67d18e428eafe8ce6881f3a5769d8ece4f250e646eeb379e63a970 extends Twig_Template
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
        $__internal_c6e15b91cbb8e690609d961d55667e1aac399e7e9b97f69bc5b63045f5a40302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e15b91cbb8e690609d961d55667e1aac399e7e9b97f69bc5b63045f5a40302->enter($__internal_c6e15b91cbb8e690609d961d55667e1aac399e7e9b97f69bc5b63045f5a40302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c6e15b91cbb8e690609d961d55667e1aac399e7e9b97f69bc5b63045f5a40302->leave($__internal_c6e15b91cbb8e690609d961d55667e1aac399e7e9b97f69bc5b63045f5a40302_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
