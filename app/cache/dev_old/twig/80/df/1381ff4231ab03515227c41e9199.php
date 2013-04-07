<?php

/* FcpSiteBundle:Player:index.html.twig */
class __TwigTemplate_80df1381ff4231ab03515227c41e9199 extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <h2>Spelers</h2>
        <div style=\"float: right\" class=\"medium danger btn\"><a href=\"";
        // line 7
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
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 25
            echo "                <tr>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "lastName"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            if ($this->getAttribute($this->getContext($context, "entity"), "birthday")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "birthday"), "m/d/Y"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "preferredNumber"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "preferredPosition"), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "boardFunction"), "html", null, true);
            echo "</td>
                    <td>
                        <div clas=\"row\">
                            <div class=\"four columns\">
                                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Toon club\"><i class=\"icon-eye\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\" title=\"Bewerk club\"><i class=\"icon-pencil\"></i></a>
                            </div>
                            <div class=\"four columns\">
                                <a style=\"cursor: pointer\" title=\"Verwijder club\"><i class=\"icon-trash\" onclick=\"confirmDelete('";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "firstName"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "')\"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 48
        echo "            </tbody>
        </table>
    </div>
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
        return array (  124 => 48,  110 => 42,  104 => 39,  98 => 36,  91 => 32,  87 => 31,  83 => 30,  77 => 29,  73 => 28,  69 => 27,  63 => 26,  60 => 25,  56 => 24,  36 => 7,  31 => 4,  28 => 3,);
    }
}
