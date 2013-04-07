<?php

/* FcpSiteBundle:Player:create.html.twig */
class __TwigTemplate_751619ecff7a3f0a3a2abd6c7bbb906d extends Twig_Template
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
    <div class=\"eight columns\">
        <div class=\"medium default btn icon-left entypo icon-left-open\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player"), "html", null, true);
        echo "\">Terug</a>
        </div>
        <h3>Speler toevoegen</h3>
        <form novalidate action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <div class=\"medium info btn\">
                <button type=\"submit\">Aanmaken</button>
            </div>
        </form>
    </div>
    <div class=\"four columns nomobile\">
        <h3>Alle spelers</h3>
        <ul>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "players"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 23
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 25
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Player:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  68 => 23,  64 => 22,  52 => 13,  46 => 12,  40 => 9,  33 => 5,  30 => 4,  25 => 2,);
    }
}