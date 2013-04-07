<?php

/* FcpSiteBundle:Competition:edit.html.twig */
class __TwigTemplate_5eda58ba9bee2176f1ade28284cbee01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "FcpSiteBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"seven columns\">
        <div class=\"medium default btn icon-left entypo icon-left-open\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition"), "html", null, true);
        echo "\">Terug</a>
        </div>
        <h3>Competitie bewerken</h3>

        <form novalidate action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <p>
                <div class=\"medium info btn\">
                    <input type=\"submit\" />
                </div>
            </p>
        </form>
    </div>
    <div class=\"push_one four columns nomobile\">
        <h3>Alle competities</h3>
    </div>
</div>
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    \$('select#fcp_sitebundle_competitiontype_clubs').css('width','200px');
    \$('select#fcp_sitebundle_competitiontype_clubs').css('height','200px');
</script>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Competition:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 28,  71 => 27,  54 => 14,  48 => 13,  41 => 9,  34 => 5,  31 => 4,  26 => 2,);
    }
}
