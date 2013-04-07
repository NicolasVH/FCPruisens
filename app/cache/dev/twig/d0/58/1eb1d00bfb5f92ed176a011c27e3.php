<?php

/* FcpSiteBundle:Fixture:index.html.twig */
class __TwigTemplate_d0581eb1d00bfb5f92ed176a011c27e3 extends Twig_Template
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
        <h2>Wedstrijden</h2>
        <p>Hier vind je een overzicht van alle wedstrijden.</p>
        <table>
            <thead>
                <th width='200'>Type</th>
                <th width='300'>Wedstrijd</th>
                <th width='200'>Datum</th>
                <th class=\"last\" width='100'>Score</th>
            </thead>
            <tbody>
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fixtures"));
        foreach ($context['_seq'] as $context["_key"] => $context["fixture"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Toon wedstrijd\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "fixture"), "competition"), "competitionType"), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Toon wedstrijd\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
            echo " -  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Toon wedstrijd\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "scheduledDate"), "d-m-Y"), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Toon wedstrijd\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeScore"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayScore"), "html", null, true);
            echo "</a></td>
                        </tr>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixture'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Fixture:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  75 => 23,  69 => 22,  61 => 21,  55 => 20,  52 => 19,  48 => 18,  31 => 4,  28 => 3,);
    }
}
