<?php

/* FcpSiteBundle:Club:admin.html.twig */
class __TwigTemplate_481abfce148f1a7718cd56e924c92464 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"twelve columns\">
        <div class=\"warning alert mobile\">
            Het administrator paneel is niet gebouwd om gebruikt te worden op kleine toestellen zoals een smartphone. Voor een optimale ervaring, beheer je de website best via een tablet of PC.
        </div>
        <h2>Clubs</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club_create"), "html", null, true);
        echo "\">Club toevoegen</a></div>
        <p>In het club administatie paneel kan je nieuwe clubs toevoegen, bewerken en verwijderen. Gebruik de tool-icoontjes om de gewenste
        actie uit te voeren.</p>
        <table>
            <thead>
              <tr>
                <th width=\"10%\">ID</th>
                <th width=\"50%\">Clubnaam</th>
                <th width=\"30%\">Locatie</th>
                <th width=\"35%\">Tools</th>
              </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clubs"));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 24
            echo "                    <tr>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "clubName"), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "defaultLocation"), "html", null, true);
            echo "</td>
                        <td>
                            <div clas=\"row\">
                                <div class=\"four columns\">
                                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club", array("id" => $this->getAttribute($this->getContext($context, "club"), "id"))), "html", null, true);
            echo "\" title=\"Toon club\"><i class=\"icon-eye\"></i></a>
                                </div>
                                <div class=\"four columns\">
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club_edit", array("id" => $this->getAttribute($this->getContext($context, "club"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk club\"><i class=\"icon-pencil\"></i></a>
                                </div>
                                <div class=\"four columns\">
                                    <a style=\"cursor: pointer\" title=\"Verwijder club\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "clubName"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "id"), "html", null, true);
            echo "')\"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function confirmDelete(clubName, clubId) {
            if(confirm('Weet je zeker dat je ' + clubName + ' wilt verwijderen?')) {
                \$.ajax({
                    url: \"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club_delete"), "html", null, true);
        echo "\",
                    type: \"POST\",
                    data: { \"club_id\" : clubId },
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
        return "FcpSiteBundle:Club:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 54,  117 => 49,  114 => 48,  106 => 43,  92 => 37,  86 => 34,  80 => 31,  73 => 27,  69 => 26,  65 => 25,  62 => 24,  58 => 23,  42 => 10,  32 => 3,  29 => 2,);
    }
}
