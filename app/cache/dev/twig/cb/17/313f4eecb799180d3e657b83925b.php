<?php

/* FcpSiteBundle:Player:topGoalScorers.html.twig */
class __TwigTemplate_cb17313f4eecb799180d3e657b83925b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"row\">
    <div class=\"twelve columns\">
        <h2>Statistieken</h2>
        <p>Iedereen houdt van statistieken! Hier vind je ze allemaal.</p>
        <div class=\"row\">
            <div class=\"six columns\">
                <h3>Topschutters competitie</h3>
                <p>Een overzicht van alle doelpuntenmakers van wedstrijden binnen de ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "season"), "season"), "html", null, true);
        echo ".</p>
                <ol class=\"topGoalScorers\">
                    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "seasonGoalScorers"));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 16
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "lastName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "AmountScored"), "html", null, true);
            echo " doelpunten</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "                </ol>
            </div>
            <div class=\"six columns\">
                <h3>Topschutters beker</h3>
                <p>Een overzicht van alle doelpuntenmakers van bekerwedstrijden binnen de ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cup"), "season"), "html", null, true);
        echo ".</p>
                <ol class=\"topGoalScorers\">
                    ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cupGoalScorers"));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 25
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "lastName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "AmountScored"), "html", null, true);
            echo " doelpunten</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "                </ol>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Player:topGoalScorers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  80 => 25,  76 => 24,  71 => 22,  65 => 18,  52 => 16,  48 => 15,  43 => 13,  31 => 4,  28 => 3,);
    }
}
