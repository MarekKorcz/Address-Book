<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d131e07d58d2b074a1531792361aabdf3a7f3e34149801ba14d532285cef52e1 extends Twig_Template
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
        $__internal_d3a3151141b25258d626bfc0e245a925aab578f41b231e61ec36cba164aa0e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a3151141b25258d626bfc0e245a925aab578f41b231e61ec36cba164aa0e65->enter($__internal_d3a3151141b25258d626bfc0e245a925aab578f41b231e61ec36cba164aa0e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_d3a3151141b25258d626bfc0e245a925aab578f41b231e61ec36cba164aa0e65->leave($__internal_d3a3151141b25258d626bfc0e245a925aab578f41b231e61ec36cba164aa0e65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
