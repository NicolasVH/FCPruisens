<?php

/* FcpSiteBundle:Fixture/admin:edit.html.twig */
class __TwigTemplate_aec53af5340ebc94674823264ac18d7e extends Twig_Template
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "FcpSiteBundle:Form:fields.html.twig"));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"seven columns\">
        <div class=\"medium default btn icon-left entypo icon-left-open\">
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture"), "html", null, true);
        echo "\">Terug</a> 
        </div>
        <div class=\"medium secondary btn icon-left entypo icon-eye\">
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fixture_show", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\">Toon wedstrijd</a> 
        </div>
        <h3>Wedstrijd bewerken</h3>

        <form novalidate action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_fixture_edit", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
               
            </ul>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
            <p>
                <div class=\"medium info btn\">
                    <input type=\"submit\" />
                </div>
            </p>
        </form>
    </div>
    <div class=\"push_one four columns nomobile\">
        <h3>Alle wedstrijden</h3>
        <ul>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fixtures"));
        foreach ($context['_seq'] as $context["_key"] => $context["fixture"]) {
            // line 32
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "homeTeam"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "fixture"), "awayTeam"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixture'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "        </ul>
    </div>
</div>
";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    // Get the ul that holds the collection of tags
    var collectionHolder = \$('div#fcp_sitebundle_fixturetype_goalScorers');
    
    // setup an \"add a tag\" link
    var \$addGoalScorerLink = \$('<a href=\"#\" class=\"add_goalscorer_link\">Voeg doelpuntmaker toe</a>');
    var \$newLinkLi = \$('<li></li>').append(\$addGoalScorerLink);

    jQuery(document).ready(function() {
 
        collectionHolder.find('[id^=fcp_sitebundle_fixturetype_goalScorers]').each(function() {
           addGoalScorerFormDeleteLink(\$(this));
        });
        
      //  \$('div#fcp_sitebundle_fixturetype_goalScorers label.required').hide();

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
       //     \$('div#fcp_sitebundle_fixturetype_goalScorers label.required').hide();
        });
        
         addGoalScorerFormDeleteLink(\$newFormLi);
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

function addGoalScorerFormDeleteLink(\$gsFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Doelpuntenmaker verwijderen</a>');
    \$gsFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$gsFormLi.remove();
    });
}

 \$('select#fcp_sitebundle_fixturetype_redCarded').css('width','200px');
 \$('select#fcp_sitebundle_fixturetype_redCarded').css('height','200px');
 
 \$('select#fcp_sitebundle_fixturetype_yellowCarded').css('width','200px');
 \$('select#fcp_sitebundle_fixturetype_yellowCarded').css('height','200px');
 
</script>
";
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Fixture/admin:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  102 => 38,  95 => 34,  84 => 32,  80 => 31,  66 => 20,  60 => 17,  54 => 16,  47 => 12,  41 => 9,  34 => 5,  31 => 4,  26 => 2,);
    }
}
