<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f89f1a446613edad90c53734c970903a28d8d368d65bc8bf99faca8650cc9675 extends Twig_Template
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
        $__internal_20bd197bf938102a25af8e798c286bbd9907f98bba7d1a056f7845ba99e1fa64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bd197bf938102a25af8e798c286bbd9907f98bba7d1a056f7845ba99e1fa64->enter($__internal_20bd197bf938102a25af8e798c286bbd9907f98bba7d1a056f7845ba99e1fa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_20bd197bf938102a25af8e798c286bbd9907f98bba7d1a056f7845ba99e1fa64->leave($__internal_20bd197bf938102a25af8e798c286bbd9907f98bba7d1a056f7845ba99e1fa64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
