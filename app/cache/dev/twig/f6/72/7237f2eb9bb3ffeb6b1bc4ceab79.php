<?php

/* FcpSiteBundle:Player:profile.html.twig */
class __TwigTemplate_f6727237f2eb9bb3ffeb6b1bc4ceab79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'submenu' => array($this, 'block_submenu'),
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
    public function block_submenu($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "                <ul id=\"adminmenu\">
                    <li><a href=";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_club"), "html", null, true);
            echo ">Alle spelers</a></li>
                    <li><a href=";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_player"), "html", null, true);
            echo ">Statistieken</a></li>
                </ul>
     ";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
   <div class=\"two columns\">
        ";
        // line 15
        if ($this->getContext($context, "previous")) {
            echo " <div class=\"small danger btn icon-left entypo icon-left-open-big\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "previous"), "slug"))), "html", null, true);
            echo "\">Vorige</a></div> ";
        }
        // line 16
        echo "   </div>
   <div class=\"eight columns\">
        <h2 class=\"center playertitle\">";
        // line 18
        if ($this->getAttribute($this->getContext($context, "player"), "preferredNumber")) {
            echo "<i class=\"number\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredNumber"), "html", null, true);
            echo "</i>";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
        echo "</h2>
   </div>
   <div class=\"two columns\" style=\"text-align: right\">
         ";
        // line 21
        if ($this->getContext($context, "next")) {
            echo " <div class=\"small danger btn icon-left entypo icon-right-open-big\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("player_profile", array("slug" => $this->getAttribute($this->getContext($context, "next"), "slug"))), "html", null, true);
            echo "\">Volgende</a></div> ";
        }
        // line 22
        echo "   </div>
   <div class=\"four columns\">     
        <ul class=\"playerinfo\" style=\"text-align: right\">
            <li><h5 class=\"strong\">Voornaam</h5>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "firstName"), "html", null, true);
        echo "</li>
            <li><h5 class=\"strong\">Achternaam</h5>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "lastName"), "html", null, true);
        echo "</li>
            <li><h5 class=\"strong\">Geboortedatum</h5>";
        // line 27
        if ($this->getAttribute($this->getContext($context, "player"), "birthday")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "birthday"), "m/d/Y"), "html", null, true);
        }
        echo "</li>
            <li><h5 class=\"strong\">Positie</h5>";
        // line 28
        if ($this->getAttribute($this->getContext($context, "player"), "preferredPosition")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "preferredPosition"), "html", null, true);
        } else {
            echo " n.v.t. ";
        }
        echo "</li>
            <li><h5 class=\"strong\">Functie</h5>";
        // line 29
        if ($this->getAttribute($this->getContext($context, "player"), "boardFunction")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "boardFunction"), "html", null, true);
        } else {
            echo " n.v.t. ";
        }
        echo "</li>
        </ul>
   </div>
   <div class=\"four columns image rounded\">
       <img class=\"center\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getContext($context, "player"), "image")), "html", null, true);
        echo "\"/>
   </div>
   <div class=\"four columns nomargin\">
      <ul class=\"playerstats\" style=\"text-align: left\">
            <li><h5 class=\"strong\">Doelpunten competitie</h5>";
        // line 37
        if ($this->getAttribute($this->getContext($context, "stats"), "seasongoals")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stats"), "seasongoals"), "html", null, true);
        } else {
            echo "0";
        }
        echo "</li>
            <li><h5 class=\"strong\">Doelpunten beker</h5>";
        // line 38
        if ($this->getAttribute($this->getContext($context, "stats"), "cupgoals")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stats"), "cupgoals"), "html", null, true);
        } else {
            echo "0";
        }
        echo "</li>
            <li><h5 class=\"strong\">Gele kaarten</h5>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stats"), "yellowcarded"), "html", null, true);
        echo "</li>
            <li><h5 class=\"strong\">Rode kaarten</h5>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stats"), "redcarded"), "html", null, true);
        echo "</li>
            <li><h5 class=\"strong\">Doelpunten aller tijden</h5>";
        // line 41
        if ($this->getAttribute($this->getContext($context, "stats"), "allgoals")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "stats"), "allgoals"), "html", null, true);
        } else {
            echo "0";
        }
        echo "</li>
      </ul>
   </div>
</div>
<div class=\"row\">
    <div class=\"twelve columns\" style=\"padding: 10px\">
        ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "player"), "bioDescription"), "html", null, true);
        echo "
    </div>
</div>
";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>
     \$('#menu li a').each(function() {
        if(\$(this).text() === 'Spelers') {
            \$(this).parent().addClass('selected');
        }; 
      });
</script>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Player:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 52,  180 => 51,  172 => 47,  159 => 41,  155 => 40,  151 => 39,  143 => 38,  135 => 37,  128 => 33,  117 => 29,  109 => 28,  103 => 27,  99 => 26,  95 => 25,  90 => 22,  84 => 21,  70 => 18,  66 => 16,  60 => 15,  54 => 12,  51 => 11,  43 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
