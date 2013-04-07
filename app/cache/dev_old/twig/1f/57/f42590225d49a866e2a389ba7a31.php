<?php

/* ::base.html.twig */
class __TwigTemplate_1f57f42590225d49a866e2a389ba7a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"menu\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/emblem.png"), "html", null, true);
        echo "\" alt=\"FC Pruisens\" />
            <ul>
                <li class=\"selected\">Home</li>
                <li>Spelers</li>
                <li>Klassement</li>
                <li>Verslagen</li>
                <li>Bestuur</li>
                <li>Overig</li>
            </ul>
        </div>
        <div class=\"container\">
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "            <div class=\"row\">
                ";
        // line 36
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                    <div id=\"adminmenu\">
                        <ul>
                            <li class=\"primary badge\"><a href=";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club"), "html", null, true);
            echo ">Clubs</a></li>
                            <li class=\"primary badge\"><a href=";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player"), "html", null, true);
            echo ">Spelers</a></li>
                            <li class=\"primary badge\"><a href=";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture"), "html", null, true);
            echo ">Wedstrijden</a></li>
                            <li class=\"primary badge\"><a href=";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_competition"), "html", null, true);
            echo ">Competities</a></li>
                        </ul>
                    </div>
                ";
        }
        // line 46
        echo "                    <div id=\"footer\">
                        <h4><small>&copy; FCPruisens.be - Alle rechten voorbehouden.</small></h4>
                    </div>
            </div>
        </div>        
        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "FC Pruisens";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/gumby.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
             <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fcp.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "                    <div class=\"row\">
                        <li class=\"success alert\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                        </li>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "            ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.9.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 52,  149 => 51,  145 => 34,  135 => 30,  131 => 28,  126 => 27,  123 => 26,  117 => 9,  112 => 8,  109 => 7,  103 => 6,  97 => 54,  95 => 51,  88 => 46,  81 => 42,  77 => 41,  73 => 40,  69 => 39,  65 => 37,  63 => 36,  60 => 35,  58 => 26,  44 => 15,  36 => 11,  34 => 7,  30 => 6,  23 => 1,);
    }
}
