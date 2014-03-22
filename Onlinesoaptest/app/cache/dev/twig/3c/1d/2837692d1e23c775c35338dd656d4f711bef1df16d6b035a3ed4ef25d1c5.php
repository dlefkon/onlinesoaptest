<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_3c1d2837692d1e23c775c35338dd656d4f711bef1df16d6b035a3ed4ef25d1c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"block\">
    ";
        // line 2
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 3
            echo "        <h2>
            <span><small>[";
            // line 4
            echo twig_escape_filter($this->env, (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) - (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1), "html", null, true);
            echo "]</small></span>
            ";
            // line 5
            echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class"));
            echo ": ";
            echo $this->env->getExtension('code')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true)));
            echo "&nbsp;
            ";
            // line 6
            ob_start();
            // line 7
            echo "            <a href=\"#\" onclick=\"toggle('traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "', 'traces'); switchIcons('icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open', 'icon-traces-";
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close'); return false;\">
                <img class=\"toggle\" id=\"icon-traces-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("inline") : ("none"));
            echo "\" />
                <img class=\"toggle\" id=\"icon-traces-";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("none") : ("inline"));
            echo "\" />
            </a>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 12
            echo "        </h2>
    ";
        } else {
            // line 14
            echo "        <h2>Stack Trace</h2>
    ";
        }
        // line 16
        echo "
    <a id=\"traces-link-";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\"></a>
    <ol class=\"traces list-exception\" id=\"traces-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "html", null, true);
        echo "\" style=\"display: ";
        echo (((0 == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) ? ("block") : ("none"));
        echo "\">
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 20
            echo "            <li>
                ";
            // line 21
            $this->env->loadTemplate("TwigBundle:Exception:trace.html.twig")->display(array("prefix" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "i" => (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
            // line 22
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  69 => 25,  66 => 24,  51 => 20,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  80 => 41,  78 => 40,  46 => 10,  32 => 12,  27 => 4,  22 => 2,  57 => 12,  40 => 8,  33 => 5,  30 => 3,  90 => 19,  88 => 6,  85 => 19,  82 => 16,  76 => 10,  71 => 9,  62 => 23,  54 => 21,  52 => 8,  48 => 7,  44 => 9,  41 => 7,  31 => 15,  29 => 4,  24 => 3,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 92,  196 => 90,  194 => 144,  182 => 134,  180 => 133,  173 => 74,  163 => 70,  159 => 122,  155 => 121,  152 => 120,  142 => 59,  138 => 57,  134 => 113,  122 => 103,  120 => 46,  115 => 43,  112 => 42,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 31,  86 => 28,  83 => 18,  74 => 36,  68 => 14,  61 => 29,  55 => 25,  53 => 18,  37 => 4,  50 => 8,  43 => 8,  39 => 6,  36 => 7,  34 => 16,  28 => 3,);
    }
}
