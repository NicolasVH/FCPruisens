<?php

/* FcpSiteBundle:Player/admin:admin.html.twig */
class __TwigTemplate_4187fbeffbc5dc7d9bb6670603c6ce90 extends Twig_Template
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
        <h2>Spelers</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 11
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
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "players"));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($this->getContext($context, "player"), "birthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "birthday"), "m/d/Y"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredNumber"), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredPosition"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "boardFunction"), "html", null, true);
            echo "</td>
                    <td>
                        <div clas=\"row\">
                            <div class=\"four columns\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "player"), "slug"))), "html", null, true);
            echo "\" title=\"Toon speler\"><i class=\"icon-eye\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_edit", array("id" => $this->getAttribute($this->getContext($context, "player"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk speler\"><i class=\"icon-pencil\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a style=\"cursor: pointer\" title=\"Verwijder speler\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 46
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
        // line 52
        echo "            </tbody>
        </table>
    </div>
</div>
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
        function confirmDelete(playerName, playerId) {
            if(confirm('Weet je zeker dat je ' + playerName + ' wilt verwijderen?')) {
                \$.ajax({
                    url: \"";
        // line 63
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
        return "FcpSiteBundle:Player/admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  141 => 58,  138 => 57,  130 => 52,  114 => 46,  108 => 43,  102 => 40,  95 => 36,  91 => 35,  87 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  66 => 29,  62 => 28,  42 => 11,  32 => 4,  29 => 3,);
    }
}
