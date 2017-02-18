<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_d2c9122ac333876fd1d183ed2dae7f3d5f8c6bccb9e0bb3cf665477dacd3f680 extends Twig_Template
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
        $__internal_15df8784ee10789da37ab5ab23ab880a39e11b94d4ea74a54032857b2ffb397f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15df8784ee10789da37ab5ab23ab880a39e11b94d4ea74a54032857b2ffb397f->enter($__internal_15df8784ee10789da37ab5ab23ab880a39e11b94d4ea74a54032857b2ffb397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_15df8784ee10789da37ab5ab23ab880a39e11b94d4ea74a54032857b2ffb397f->leave($__internal_15df8784ee10789da37ab5ab23ab880a39e11b94d4ea74a54032857b2ffb397f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
