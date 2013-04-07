<?php

/* FcpSiteBundle:Fixture/admin:admin.html.twig */
class __TwigTemplate_afeb5711fc57ac9052e617730a01f1ae extends Twig_Template
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
        <div class=\"warning alert mobile\">
            Het administrator paneel is niet gebouwd om gebruikt te worden op kleine toestellen zoals een smartphone. Voor een optimale ervaring, beheer je de website best via een tablet of PC.
        </div>
        <h2>Wedstrijden</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture_create"), "html", null, true);
        echo "\">Wedstrijd toevoegen</a></div>
        <p>In het wedstrijd administatie paneel kan je nieuwe wedstrijden toevoegen, bewerken en verwijderen. Gebruik de tool-icoontjes om de gewenste
        actie uit te voeren.</p>
        <table class=\"records_list\">
            <thead>
                <tr>
                    <th width=\"50\">ID</th>
                    <th width=\"120\">Thuisploeg</th>
                    <th width=\"120\">Uitploeg</th>
                    <th width=\"170\">Locatie</th>
                    <th>Datum</th>
                    <th>Score</th>
                    <th>Scheidsrechter</th>
                    <th>Verslag</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fixtures"));
        foreach ($context['_seq'] as $context["_key"] => $context["fixture"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "location"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            if ($this->getAttribute($this->getContext($context, "fixture"), "scheduledDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "scheduledDate"), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeScore"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayScore"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "refereeName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            if ($this->getAttribute($this->getContext($context, "fixture", true), "reportArticle", array(), "any", true, true)) {
                echo " ";
                echo "V";
                echo " ";
            } else {
                echo " ";
                echo "X";
                echo " ";
            }
            echo "</td>
                    <td>
                        <div clas=\"row\">
                            <div class=\"four columns\">
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Toon wedstrijd\"><i class=\"icon-eye\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture_edit", array("id" => $this->getAttribute($this->getContext($context, "fixture"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk wedstrijd\"><i class=\"icon-pencil\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a style=\"cursor: pointer\" title=\"Verwijder wedstrijd\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "id"), "html", null, true);
            echo "')\"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixture'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "            </tbody>
        </table>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmDelete(fixtureName, fixtureId) {
            if(confirm('Weet je zeker dat je ' + fixtureName + ' wilt verwijderen?')) {
                \$.ajax({
                    url: \"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture_delete"), "html", null, true);
        echo "\",
                    type: \"POST\",
                    data: { \"fixture_id\" : fixtureId },
                    success: function(data) {
                       location.reload(true);
                    }
                });
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Fixture/admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 63,  154 => 58,  151 => 57,  145 => 54,  129 => 48,  123 => 45,  117 => 42,  102 => 38,  98 => 37,  92 => 36,  86 => 35,  82 => 34,  78 => 33,  74 => 32,  70 => 31,  67 => 30,  63 => 29,  42 => 11,  32 => 4,  29 => 3,);
    }
}
