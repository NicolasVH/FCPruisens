<?php

/* FcpSiteBundle:Form:fields.html.twig */
class __TwigTemplate_9df080d6750c123e674beb6b21ee2e40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    
";
        // line 2
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 9
        echo "    
";
        // line 10
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 21
        echo "    
";
        // line 22
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_row', $context, $blocks);
        // line 37
        echo "    
";
        // line 38
        $this->displayBlock('form_errors', $context, $blocks);
        // line 49
        echo "    
";
        // line 50
        $this->displayBlock('number_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('integer_widget', $context, $blocks);
    }

    // line 2
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 5
        echo "    ";
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "text")) : ("text"));
        // line 6
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
        echo " input\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty($this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" ";
        }
        echo "/>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 10
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 11
        ob_start();
        // line 12
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 13
        if (twig_test_empty($this->getAttribute($this->getContext($context, "form"), "parent"))) {
            // line 14
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
            echo "
        ";
        }
        // line 16
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 23
        ob_start();
        // line 24
        echo "    <textarea class=\"input textarea\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 28
    public function block_form_row($context, array $blocks = array())
    {
        // line 29
        ob_start();
        // line 30
        echo "    <div class=\"field\">
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 38
    public function block_form_errors($context, array $blocks = array())
    {
        // line 39
        ob_start();
        // line 40
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 41
            echo "    <ul>
        ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 43
                echo "            <li class=\"danger alert\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 45
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_number_widget($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "text")) : ("text"));
        // line 54
        echo "    ";
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "numeric")) : ("numeric"));
        // line 55
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 59
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 60
        ob_start();
        // line 61
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter($this->getContext($context, "type"), "number")) : ("number"));
        // line 62
        echo "    ";
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter($this->getContext($context, "class"), "numeric")) : ("numeric"));
        // line 63
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FcpSiteBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  225 => 63,  222 => 62,  219 => 61,  217 => 60,  214 => 59,  206 => 55,  203 => 54,  200 => 53,  198 => 52,  196 => 51,  193 => 50,  186 => 45,  177 => 43,  173 => 42,  170 => 41,  167 => 40,  165 => 39,  162 => 38,  154 => 33,  150 => 32,  146 => 31,  143 => 30,  141 => 29,  138 => 28,  128 => 24,  126 => 23,  123 => 22,  115 => 17,  110 => 16,  104 => 14,  102 => 13,  97 => 12,  95 => 11,  92 => 10,  74 => 6,  71 => 5,  68 => 4,  66 => 3,  63 => 2,  59 => 59,  56 => 58,  54 => 50,  51 => 49,  49 => 38,  46 => 37,  44 => 28,  41 => 27,  39 => 22,  36 => 21,  34 => 10,  31 => 9,  29 => 2,  26 => 1,);
    }
}
