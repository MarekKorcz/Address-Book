<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a8a4a5fe65d514067006caf1b38434159cd51ed8413450788ffb61ca34069d1a extends Twig_Template
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
        $__internal_3c7f263547e0f916365303c3e1e84c66b5dc07f88edb33f5c01c1419d4379cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7f263547e0f916365303c3e1e84c66b5dc07f88edb33f5c01c1419d4379cc3->enter($__internal_3c7f263547e0f916365303c3e1e84c66b5dc07f88edb33f5c01c1419d4379cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3c7f263547e0f916365303c3e1e84c66b5dc07f88edb33f5c01c1419d4379cc3->leave($__internal_3c7f263547e0f916365303c3e1e84c66b5dc07f88edb33f5c01c1419d4379cc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
