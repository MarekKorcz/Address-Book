<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0e1e24fbc08b7639bd6870856be6d9e7baa85aa7904333914290bf1adcfa1850 extends Twig_Template
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
        $__internal_293fea10d6283bd7fe093b0a1365fc8cd3f253f44243e47a8d44ed4f8a6c4d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293fea10d6283bd7fe093b0a1365fc8cd3f253f44243e47a8d44ed4f8a6c4d53->enter($__internal_293fea10d6283bd7fe093b0a1365fc8cd3f253f44243e47a8d44ed4f8a6c4d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_293fea10d6283bd7fe093b0a1365fc8cd3f253f44243e47a8d44ed4f8a6c4d53->leave($__internal_293fea10d6283bd7fe093b0a1365fc8cd3f253f44243e47a8d44ed4f8a6c4d53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
