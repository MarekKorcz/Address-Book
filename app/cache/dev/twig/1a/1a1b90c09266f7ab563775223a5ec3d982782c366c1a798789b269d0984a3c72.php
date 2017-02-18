<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_8c3ad6c3f49a634b141ae123359218dbaecf69aa900db364709ba850f29b5ea9 extends Twig_Template
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
        $__internal_b61f681bc1b5459c57f40658a89336c18ea2b52c88dbf963df4b975866bdbf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61f681bc1b5459c57f40658a89336c18ea2b52c88dbf963df4b975866bdbf7e->enter($__internal_b61f681bc1b5459c57f40658a89336c18ea2b52c88dbf963df4b975866bdbf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b61f681bc1b5459c57f40658a89336c18ea2b52c88dbf963df4b975866bdbf7e->leave($__internal_b61f681bc1b5459c57f40658a89336c18ea2b52c88dbf963df4b975866bdbf7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
