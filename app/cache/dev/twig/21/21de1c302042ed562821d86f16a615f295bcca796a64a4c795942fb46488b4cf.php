<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7ea2f7cf503859b1231ae225aca0055dcde690b6fd211cdbbb4f1d26e163f912 extends Twig_Template
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
        $__internal_9593f7d0d51637d6166a0a76b9616b484bb41b6f6eabfc0615b7ce15f5684580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9593f7d0d51637d6166a0a76b9616b484bb41b6f6eabfc0615b7ce15f5684580->enter($__internal_9593f7d0d51637d6166a0a76b9616b484bb41b6f6eabfc0615b7ce15f5684580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9593f7d0d51637d6166a0a76b9616b484bb41b6f6eabfc0615b7ce15f5684580->leave($__internal_9593f7d0d51637d6166a0a76b9616b484bb41b6f6eabfc0615b7ce15f5684580_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
