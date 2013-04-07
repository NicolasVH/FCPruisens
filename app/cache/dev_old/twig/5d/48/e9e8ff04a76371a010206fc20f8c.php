<?php

/* FcpSiteBundle:Admin:clubs.html.twig */
class __TwigTemplate_5d48e9e8ff04a76371a010206fc20f8c extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"twelve columns\">
        <h2>Clubs</h2>
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
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clubs"));
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 19
            echo "                    <tr>
                        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "clubName"), "html", null, true);
            echo "</td>
                        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "club"), "defaultLocation"), "html", null, true);
            echo "</td>
                        <td>
                            <div clas=\"row\">
                                <div class=\"four columns\">
                                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club", array("id" => $this->getAttribute($this->getContext($context, "club"), "id"))), "html", null, true);
            echo "\" title=\"Toon club\"><i class=\"icon-eye\"></i></a>
                                </div>
                                <div class=\"four columns\">
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club_edit", array("id" => $this->getAttribute($this->getContext($context, "club"), "id"))), "html", null, true);
            echo "\" title=\"Bewerken\"><i class=\"icon-pencil\"></i></a>
                                </div>
                                <div class=\"four columns\">
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club", array("id" => $this->getAttribute($this->getContext($context, "club"), "id"))), "html", null, true);
            echo "\" title=\"Verwijder\"><i class=\"icon-trash\"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['club'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "            </tbody>
        </table>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Admin:clubs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  82 => 32,  76 => 29,  70 => 26,  63 => 22,  59 => 21,  55 => 20,  52 => 19,  48 => 18,  31 => 3,  28 => 2,);
    }
}
