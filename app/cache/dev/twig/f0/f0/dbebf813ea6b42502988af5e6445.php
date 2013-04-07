<?php

/* FcpSiteBundle:Fixture/admin:create.html.twig */
class __TwigTemplate_f0f0dbebf813ea6b42502988af5e6445 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture"), "html", null, true);
        echo "\">Terug</a>
        </div>
        <h3>Nieuwe wedstrijd toevoegen</h3>
        <form novalidate action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            <ul class=\"goalScorers\" data-prototype=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "goalScorers"), "vars"), "prototype"), 'widget'));
        echo "\">
                 ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form"), "goalScorers"));
        foreach ($context['_seq'] as $context["_key"] => $context["goalScorer"]) {
            // line 17
            echo "                    <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "goalScorer"), "player"), 'row');
            echo " </li>
                    ";
            // line 19
            echo "                    <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "goalScorer"), "amountScored"), 'row');
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goalScorer'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "            </ul>
            
            <br>
            <div class=\"medium info btn\">
                <input type=\"submit\" />
            </div>
        </form>
    </div>
    <div class=\"four columns nomobile\">
        <h3>Alle wedstrijden</h3>
        <ul>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fixtures"));
        foreach ($context['_seq'] as $context["_key"] => $context["fixture"]) {
            // line 33
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
            echo " <small>(";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "scheduledDate"), "d-m-Y"), "html", null, true);
            echo ")</small></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixture'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "        </ul>
    </div>
</div>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    // Get the ul that holds the collection of tags
    var collectionHolder = \$('div#fcp_sitebundle_fixturetype_goalScorers');

    // setup an \"add a tag\" link
    var \$addGoalScorerLink = \$('<a href=\"#\" class=\"add_goalscorer_link\">Voeg doelpuntmaker toe</a>');
    var \$newLinkLi = \$('<li></li>').append(\$addGoalScorerLink);

    jQuery(document).ready(function() {
        // add the \"add a tag\" anchor and li to the tags ul
        collectionHolder.append(\$newLinkLi);

        // count the current form inputs we have (e.g. 2), use that as the new
        // index when inserting a new item (e.g. 2)
        collectionHolder.data('index', collectionHolder.find(':input').length);

        \$addGoalScorerLink.on('click', function(e) {
            // prevent the link from creating a \"#\" on the URL
            e.preventDefault();

            // add a new tag form (see next code block)
            addGoalScorerForm(collectionHolder, \$newLinkLi);
        });
});

function addGoalScorerForm(collectionHolder, \$newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = collectionHolder.data('prototype');

    // get the new index
    var index = collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);
}
</script>
 ";
        // line 85
        echo $this->env->getExtension('stfalcon_tinymce')->tinymce_init();
        echo "
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Fixture/admin:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 85,  119 => 40,  116 => 39,  109 => 35,  96 => 33,  92 => 32,  79 => 21,  70 => 19,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  47 => 13,  41 => 10,  34 => 6,  31 => 5,  26 => 3,);
    }
}
