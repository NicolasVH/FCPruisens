<?php

/* FcpSiteBundle:Club:create.html.twig */
class __TwigTemplate_e1b1a9d5bd5bec9eba73db7dc5642c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "FcpSiteBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"seven columns\">
        <div class=\"medium default btn icon-left entypo icon-left-open\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club"), "html", null, true);
        echo "\">Terug</a>
        </div>
        <h3>Nieuwe club toevoegen</h3>
        <form novalidate action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <br>
            <div class=\"medium info btn\">
                <input type=\"submit\" />
            </div>
        </form>
    </div>
    <div class=\"push_one four columns nomobile\">
        <h3>Alle clubs</h3>
        <ul>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clubs"));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 25
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "clubName"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Club:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  69 => 25,  65 => 24,  52 => 14,  46 => 13,  40 => 10,  33 => 6,  30 => 5,  25 => 3,);
    }
}
