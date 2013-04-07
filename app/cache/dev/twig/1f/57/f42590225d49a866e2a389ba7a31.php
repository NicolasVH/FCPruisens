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
            'submenu' => array($this, 'block_submenu'),
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
                <li>Home</li>
                <li><a href=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_statistics"), "html", null, true);
        echo ">Spelers</a></li>
                <li>Klassement</li>
                <li>Wedstrijden</li>
                <li>Bestuur</li>
                <li>Overig</li>
                ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                    <li class=\"admin\">Admin</li>
                ";
        }
        // line 26
        echo "            </ul>
        </div>
        
        <div id=\"submenu\">
           ";
        // line 30
        $this->displayBlock('submenu', $context, $blocks);
        // line 32
        echo "        </div>   
            
        <div class=\"container\">
            ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            <div class=\"row\">
                    <div id=\"footer\">
                        <h4><small>&copy; FCPruisens.be - Alle rechten voorbehouden.</small></h4>
                    </div>
            </div>
        </div>        
        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
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

    // line 30
    public function block_submenu($context, array $blocks = array())
    {
        // line 31
        echo "           ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "                    <div class=\"row\">
                        <li class=\"success alert\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                        </li>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "            ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/libs/jquery-1.9.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                    <script>
                        \$('#menu li a').each(function() {
                            if(\$(this).attr('href') === window.location.pathname) {
                                \$(this).parent().addClass('selected');
                            }; 
                          });
                          
                          
                         /* \$(document).ready(function() {
                            \$(\".admin\").hover(
                                function () {
                                    \$('ul#adminmenu').slideDown('medium');
                                }, 
                                function () {
                                   \$('ul#adminmenu').slideUp('medium');
                                }
                            );
                         }) */
                    </script>
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
        return array (  152 => 51,  149 => 50,  145 => 43,  135 => 39,  131 => 37,  126 => 36,  123 => 35,  119 => 31,  116 => 30,  110 => 9,  105 => 8,  102 => 7,  96 => 6,  90 => 72,  88 => 50,  80 => 44,  78 => 35,  73 => 32,  71 => 30,  65 => 26,  61 => 24,  59 => 23,  51 => 18,  45 => 15,  37 => 11,  35 => 7,  31 => 6,  24 => 1,);
    }
}
