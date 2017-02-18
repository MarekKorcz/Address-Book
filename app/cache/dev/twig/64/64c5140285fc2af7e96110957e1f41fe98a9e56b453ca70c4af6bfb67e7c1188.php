<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3b3a6c9a47a81928afb3d7cf123548a9d693694c4bc297d8283deeb33b620f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1458fca4049094ccd51da438049001352421a5e23c0506d61c0d08d820bea5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1458fca4049094ccd51da438049001352421a5e23c0506d61c0d08d820bea5b7->enter($__internal_1458fca4049094ccd51da438049001352421a5e23c0506d61c0d08d820bea5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1458fca4049094ccd51da438049001352421a5e23c0506d61c0d08d820bea5b7->leave($__internal_1458fca4049094ccd51da438049001352421a5e23c0506d61c0d08d820bea5b7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_61bd39ed519e0cdcfd8a7aed5a744b2aed412d2c54e84b38f1413cc88612ffb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bd39ed519e0cdcfd8a7aed5a744b2aed412d2c54e84b38f1413cc88612ffb7->enter($__internal_61bd39ed519e0cdcfd8a7aed5a744b2aed412d2c54e84b38f1413cc88612ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_61bd39ed519e0cdcfd8a7aed5a744b2aed412d2c54e84b38f1413cc88612ffb7->leave($__internal_61bd39ed519e0cdcfd8a7aed5a744b2aed412d2c54e84b38f1413cc88612ffb7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/mark/Workspace/AddressBook/Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
