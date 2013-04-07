<?php

/* FcpSiteBundle:Player:index.html.twig */
class __TwigTemplate_80df1381ff4231ab03515227c41e9199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_submenu($context, array $blocks = array())
    {
        // line 3
        echo "     ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 4
            echo "                <ul id=\"adminmenu\">
                    <li><a href=";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club"), "html", null, true);
            echo ">Alle spelers</a></li>
                    <li><a href=";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player"), "html", null, true);
            echo ">Statistieken</a></li>
                </ul>
     ";
        }
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"row\">
    <h2>Spelers FC Pruisens</h2>
    <div class=\"row\">
        <h3>Doelmannen</h3>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "players"), "keeper"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 18
            echo "            <div class=\"three columns image rounded\">
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "player"), "slug"))), "html", null, true);
            echo "\"><img class=\"center\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "player"), "image")), "html", null, true);
            echo "\"/></a>
                <div class=\"photocaption\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "    </div>
    <div class=\"row\">
        <h3>Verdedigers</h3>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "players"), "defender"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 30
            echo "            <div class=\"three columns image rounded\">
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "player"), "slug"))), "html", null, true);
            echo "\"><img class=\"center\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "player"), "image")), "html", null, true);
            echo "\"/></a>
                <div class=\"photocaption\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "    </div>
    <div class=\"row\">
        <h3>Middenvelder</h3>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "players"), "midfielder"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 42
            echo "            <div class=\"three columns image rounded\">
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "player"), "slug"))), "html", null, true);
            echo "\"><img class=\"center\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "player"), "image")), "html", null, true);
            echo "\"/></a>
                <div class=\"photocaption\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "    </div>
    <div class=\"row\">
        <h3>Aanvallers</h3>
        ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "players"), "attacker"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 54
            echo "            <div class=\"three columns image rounded\">
                <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "player"), "slug"))), "html", null, true);
            echo "\"><img class=\"center\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "player"), "image")), "html", null, true);
            echo "\"/></a>
                <div class=\"photocaption\">
                    ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "
                </div>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 62
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Player:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 62,  172 => 57,  165 => 55,  162 => 54,  158 => 53,  153 => 50,  140 => 45,  133 => 43,  130 => 42,  126 => 41,  121 => 38,  108 => 33,  101 => 31,  98 => 30,  94 => 29,  89 => 26,  76 => 21,  69 => 19,  66 => 18,  62 => 17,  53 => 11,  50 => 10,  42 => 6,  38 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
