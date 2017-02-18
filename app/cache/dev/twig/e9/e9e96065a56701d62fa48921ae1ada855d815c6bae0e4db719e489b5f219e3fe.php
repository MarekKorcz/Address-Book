<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_74c515b383288517b37af0814dc0dfe8430f16c71d16d4601d13c7283cf89d5f extends Twig_Template
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
        $__internal_cb62b3d9f24819b24e741ed15a916855014a0640bdb1b72141567316f0f5dfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb62b3d9f24819b24e741ed15a916855014a0640bdb1b72141567316f0f5dfa9->enter($__internal_cb62b3d9f24819b24e741ed15a916855014a0640bdb1b72141567316f0f5dfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cb62b3d9f24819b24e741ed15a916855014a0640bdb1b72141567316f0f5dfa9->leave($__internal_cb62b3d9f24819b24e741ed15a916855014a0640bdb1b72141567316f0f5dfa9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
