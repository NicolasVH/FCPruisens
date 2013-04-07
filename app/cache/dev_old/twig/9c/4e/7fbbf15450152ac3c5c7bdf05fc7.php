<?php

/* FcpSiteBundle:Player:admin.html.twig */
class __TwigTemplate_9c4e7fbbf15450152ac3c5c7bdf05fc7 extends Twig_Template
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
        <h2>Spelers</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_create"), "html", null, true);
        echo "\">Speler toevoegen</a></div>
        <p>In het speler administatie paneel kan je nieuwe spelers toevoegen, bewerken en verwijderen. Gebruik de tool-icoontjes om de gewenste
        actie uit te voeren.</p>
        <table>
            <thead>
                <tr>
                    <th width=100>Id</th>
                    <th width=150>Voornaam</th>
                    <th width=150>Achternaam</th>
                    <th>Geboortedatum</th>
                    <th>Nummer</th>
                    <th>Positie</th>
                    <th width=150>Functie</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "players"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            if ($this->getAttribute($this->getContext($context, "player"), "birthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "birthday"), "m/d/Y"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredNumber"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredPosition"), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "boardFunction"), "html", null, true);
            echo "</td>
                    <td>
                        <div clas=\"row\">
                            <div class=\"four columns\">
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player", array("id" => $this->getAttribute($this->getContext($context, "player"), "id"))), "html", null, true);
            echo "\" title=\"Toon speler\"><i class=\"icon-eye\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_edit", array("id" => $this->getAttribute($this->getContext($context, "player"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk speler\"><i class=\"icon-pencil\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a style=\"cursor: pointer\" title=\"Verwijder speler\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "id"), "html", null, true);
            echo "')\"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmDelete(playerName, playerId) {
            if(confirm('Weet je zeker dat je ' + playerName + ' wilt verwijderen?')) {
                \$.ajax({
                    url: \"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_delete"), "html", null, true);
        echo "\",
                    type: \"POST\",
                    data: { \"player_id\" : playerId },
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
        return "FcpSiteBundle:Player:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 60,  138 => 55,  135 => 54,  127 => 49,  111 => 43,  105 => 40,  99 => 37,  92 => 33,  88 => 32,  84 => 31,  78 => 30,  74 => 29,  70 => 28,  66 => 27,  63 => 26,  59 => 25,  39 => 8,  32 => 4,  29 => 3,);
    }
}
