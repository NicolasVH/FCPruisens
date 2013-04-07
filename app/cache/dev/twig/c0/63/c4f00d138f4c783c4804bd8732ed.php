<?php

/* FcpSiteBundle:Competition:create.html.twig */
class __TwigTemplate_c063c4f00d138f4c783c4804bd8732ed extends Twig_Template
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "FcpSiteBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"eight columns\">
        <div class=\"medium default btn icon-left entypo icon-left-open\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition"), "html", null, true);
        echo "\">Terug</a>
        </div>
        <h3>Nieuwe competitie toevoegen</h3>
        <form novalidate action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            <br>
            <div class=\"medium info btn\">
                <input type=\"submit\" />
            </div>
        </form>
    </div>
    <div class=\"four columns nomobile\">
        <h3>Alle competities</h3>
        <ul>
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "competitions"));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 25
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "competition"), "season"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "        </ul>
    </div>
</div>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
    \$('select#fcp_sitebundle_competitiontype_clubs').css('width','200px');
    \$('select#fcp_sitebundle_competitiontype_clubs').css('height','200px');
</script>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Competition:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  86 => 31,  79 => 27,  70 => 25,  66 => 24,  53 => 14,  47 => 13,  41 => 10,  34 => 6,  31 => 5,  26 => 3,);
    }
}
