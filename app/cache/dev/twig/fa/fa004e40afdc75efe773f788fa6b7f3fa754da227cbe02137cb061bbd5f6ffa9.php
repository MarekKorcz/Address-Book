<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_badff3b1559b9ff34df330bc5ffb849abeb293f517a52127b32fe1fcd5ef8e78 extends Twig_Template
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
        $__internal_9c541ded7fa1bb0f2e09fd53bc2a6c727c74d43a0cfe7186e874d131df7c3210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c541ded7fa1bb0f2e09fd53bc2a6c727c74d43a0cfe7186e874d131df7c3210->enter($__internal_9c541ded7fa1bb0f2e09fd53bc2a6c727c74d43a0cfe7186e874d131df7c3210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9c541ded7fa1bb0f2e09fd53bc2a6c727c74d43a0cfe7186e874d131df7c3210->leave($__internal_9c541ded7fa1bb0f2e09fd53bc2a6c727c74d43a0cfe7186e874d131df7c3210_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
