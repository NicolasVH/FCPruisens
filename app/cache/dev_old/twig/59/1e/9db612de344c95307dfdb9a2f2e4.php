<?php

/* FcpSiteBundle:Home:index.html.twig */
class __TwigTemplate_591e9db612de344c95307dfdb9a2f2e4 extends Twig_Template
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
        // line 2
        echo twig_var_dump($this->env, $context, $this->getAttribute($this->getContext($context, "app"), "request"));
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
