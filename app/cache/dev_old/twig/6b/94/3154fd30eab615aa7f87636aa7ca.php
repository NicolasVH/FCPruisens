<?php

/* FcpSiteBundle:Fixture:show.html.twig */
class __TwigTemplate_6b943154fd30eab615aa7f87636aa7ca extends Twig_Template
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"row competitionbar\">
        <div class=\"twelve columns center\">
            <h4>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "fixture"), "competition"), "season"), "html", null, true);
        echo "</h4>
        </div>
    </div>
    <div class=\"row infobar\">
        <div class=\"push_one three columns\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "location"), "html", null, true);
        echo "
        </div>
        <div class=\"push_one three columns\" style=\"margin-left: 55px;\">
            ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "scheduledDate"), "d-m-Y H:i"), "html", null, true);
        echo "
        </div>
        <div class=\"push_one three columns\">
            Ref: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "refereeName"), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"row scorebar\">
        <div class=\"five columns\">
            <h2 class=\"nomobile\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
        echo "</h2>
            <h2 class=\"mobile\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeScore"), "html", null, true);
        echo "</h2>
            ";
        // line 27
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "id") == 1)) {
            // line 28
            echo "                <ul>
                ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "goalScorers"));
            foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
                // line 30
                echo "                    <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "gs"), "player"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "gs"), "player"), "lastName"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "amountScored"), "html", null, true);
                echo ") </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "yellowCarded"));
            foreach ($context['_seq'] as $context["_key"] => $context["yc"]) {
                // line 33
                echo "                    <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "yc"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "yc"), "lastName"), "html", null, true);
                echo " <div class=\"yellow\"></div></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 35
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "redCarded"));
            foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
                // line 36
                echo "                    <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rc"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rc"), "lastName"), "html", null, true);
                echo " <div class=\"red\"></div></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 38
            echo "                </ul>
            ";
        }
        // line 40
        echo "        </div>
        <div class=\"one columns goals home nomobile\">
            <h1>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeScore"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"one columns goals away nomobile\">
            <h1>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayScore"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"push_two three columns\">
            <h2 class=\"nomobile\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
        echo "</h2>
            <h2 class=\"mobile\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayScore"), "html", null, true);
        echo "</h2>
            ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "id") == 1)) {
            // line 51
            echo "                <ul>
                ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "goalScorers"));
            foreach ($context['_seq'] as $context["_key"] => $context["gs"]) {
                // line 53
                echo "                    <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "gs"), "player"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "gs"), "player"), "lastName"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "gs"), "amountScored"), "html", null, true);
                echo ") </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gs'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 55
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "yellowCarded"));
            foreach ($context['_seq'] as $context["_key"] => $context["yc"]) {
                // line 56
                echo "                        <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "yc"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "yc"), "lastName"), "html", null, true);
                echo " <div class=\"yellow\"></div></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['yc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "fixture"), "redCarded"));
            foreach ($context['_seq'] as $context["_key"] => $context["rc"]) {
                // line 59
                echo "                    <li> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rc"), "firstName"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rc"), "lastName"), "html", null, true);
                echo " <div class=\"red\"></div></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rc'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "            </ul>
            ";
        }
        // line 63
        echo "        </div>
    </div>
</div>
<br>
<div class=\"row\">
    <div class=\"eight columns\">
        <h3>Wedstrijdverslag</h3>
        <br>
        <p>";
        // line 71
        echo $this->getAttribute($this->getContext($context, "fixture"), "reportArticle");
        echo "</p>
    </div>
    <div class=\"four columns\">
        <h3>Klassement</h3>
        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Fixture:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 71,  218 => 63,  214 => 61,  203 => 59,  198 => 58,  187 => 56,  182 => 55,  169 => 53,  165 => 52,  162 => 51,  160 => 50,  154 => 49,  150 => 48,  144 => 45,  138 => 42,  134 => 40,  130 => 38,  119 => 36,  114 => 35,  103 => 33,  98 => 32,  85 => 30,  81 => 29,  78 => 28,  76 => 27,  70 => 26,  66 => 25,  58 => 20,  52 => 17,  46 => 14,  38 => 9,  31 => 5,  28 => 4,);
    }
}
