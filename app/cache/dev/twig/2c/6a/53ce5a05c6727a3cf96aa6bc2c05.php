<?php

/* FcpSiteBundle:Competition:admin.html.twig */
class __TwigTemplate_2c6a53ce5a05c6727a3cf96aa6bc2c05 extends Twig_Template
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
        <h2>Competities</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition_create"), "html", null, true);
        echo "\">Competitie toevoegen</a></div>
        <p>In het speler administatie paneel kan je nieuwe competities toevoegen, bewerken en verwijderen. Gebruik de tool-icoontjes om de gewenste
        actie uit te voeren.</p>
        <table class=\"records_list\">
            <thead>
                <tr>
                    <th width=\"100\">ID</th>
                    <th width=\"400\">Naam</th>
                    <th>Clubs</th>
                    <th width=\"200\">Type</th>
                    <th width=\"100\">Startdatum</th>
                    <th widht=\"100\">Einddatum</th>
                    <th width=\"100\">Tools</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "competitions"));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 28
            echo "                <tr>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "id"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "season"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "clubs")), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "competitionType"), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($this->getContext($context, "competition"), "fromDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "fromDate"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 34
            if ($this->getAttribute($this->getContext($context, "competition"), "toDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "toDate"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                     <td>
                        <div clas=\"row\">
                            <div class=\"four columns\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition", array("id" => $this->getAttribute($this->getContext($context, "competition"), "id"))), "html", null, true);
            echo "\" title=\"Toon competitie\"><i class=\"icon-eye\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition_edit", array("id" => $this->getAttribute($this->getContext($context, "competition"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk competitie\"><i class=\"icon-pencil\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a style=\"cursor: pointer\" title=\"Verwijder competitie\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "season"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "id"), "html", null, true);
            echo "')\"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "            </tbody>
        </table>
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmDelete(competitionName, competitionId) {
            if(confirm('Weet je zeker dat je ' + competitionName + ' wilt verwijderen?')) {
                \$.ajax({
                    url: \"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition_delete"), "html", null, true);
        echo "\",
                    type: \"POST\",
                    data: { \"competition_id\" : competitionId },
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
        return "FcpSiteBundle:Competition:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  134 => 54,  131 => 53,  125 => 50,  111 => 44,  105 => 41,  99 => 38,  90 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  68 => 29,  65 => 28,  61 => 27,  42 => 11,  32 => 4,  29 => 3,);
    }
}
