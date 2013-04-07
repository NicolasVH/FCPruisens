<?php

/* FcpSiteBundle:Player:statistics.html.twig */
class __TwigTemplate_37ed9cdc35566f9daca3435b4bca43f4 extends Twig_Template
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

<div class=\"row statistics\">
        <h2>Statistieken</h2>
        <p>Iedereen houdt van statistieken! Hier vind je ze allemaal.</p>
        <div class=\"row\">
            <div class=\"six columns\">
                <h3>Topschutters competitie</h3>
                <p>Een overzicht van alle doelpuntenmakers van wedstrijden binnen de ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "season"), "season"), "html", null, true);
        echo ".</p>
                <ol class=\"topGoalScorers\">
                    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "seasonGoalScorers"));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 15
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
        // line 17
        echo "                </ol>
            </div>
            <div class=\"six columns\">
                <h3>Topschutters beker</h3>
                <p>Een overzicht van alle doelpuntenmakers van bekerwedstrijden binnen de ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cup"), "season"), "html", null, true);
        echo ".</p>
                <ol class=\"topGoalScorers\">
                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cupGoalScorers"));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 24
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
        // line 26
        echo "                </ol>
            </div>
        </div>
       ";
        // line 49
        echo "        <div class=\"row\">
            <div class=\"twelve columns center halloffame\">
                <h2>Topschutters all-time</h2>
                <p>Een overzicht van alle doelpuntenmakers van alle wedstrijden binnen alle competities ooit gespeeld (vanaf seizoen 2012-2013).</p>
                <ul class=\"topGoalScorers\">
                    ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "hallOfFame"));
        foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
            // line 55
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
        // line 57
        echo "                </ul>
            </div>
        </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Player:statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  108 => 55,  104 => 54,  97 => 49,  92 => 26,  79 => 24,  75 => 23,  70 => 21,  64 => 17,  51 => 15,  47 => 14,  42 => 12,  31 => 4,  28 => 3,);
    }
}
