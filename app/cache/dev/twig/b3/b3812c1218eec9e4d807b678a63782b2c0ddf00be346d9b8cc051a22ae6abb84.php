<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_9c3c086e1422a803428e214def63075ca30a302202077dc4bbb7f2d8ca519c9e extends Twig_Template
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
        $__internal_b9ea4ee5c1b852aeb9a8f4b35a3b9bbb851bcd6600004a1174a08ccfb217fb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ea4ee5c1b852aeb9a8f4b35a3b9bbb851bcd6600004a1174a08ccfb217fb70->enter($__internal_b9ea4ee5c1b852aeb9a8f4b35a3b9bbb851bcd6600004a1174a08ccfb217fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b9ea4ee5c1b852aeb9a8f4b35a3b9bbb851bcd6600004a1174a08ccfb217fb70->leave($__internal_b9ea4ee5c1b852aeb9a8f4b35a3b9bbb851bcd6600004a1174a08ccfb217fb70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
