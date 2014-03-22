<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_8e5493d4172cf98feb0f4f2cbddb9c5d0a819ad58589001e2c3d9f94658da00f extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file");
            echo " line ";
            echo $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 7,  26 => 5,  87 => 20,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  64 => 12,  56 => 9,  199 => 91,  187 => 84,  183 => 82,  171 => 73,  168 => 72,  166 => 71,  158 => 67,  156 => 66,  151 => 63,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  105 => 40,  101 => 24,  69 => 25,  66 => 15,  51 => 15,  49 => 19,  19 => 1,  98 => 40,  93 => 9,  80 => 19,  78 => 40,  46 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  40 => 8,  33 => 6,  30 => 3,  90 => 19,  88 => 6,  85 => 19,  82 => 16,  76 => 10,  71 => 9,  62 => 23,  54 => 21,  52 => 8,  48 => 7,  44 => 10,  41 => 9,  31 => 5,  29 => 4,  24 => 4,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 92,  196 => 90,  194 => 144,  182 => 134,  180 => 133,  173 => 74,  163 => 70,  159 => 122,  155 => 121,  152 => 120,  142 => 59,  138 => 57,  134 => 113,  122 => 103,  120 => 46,  115 => 43,  112 => 42,  109 => 42,  103 => 23,  99 => 22,  95 => 18,  91 => 31,  86 => 28,  83 => 18,  74 => 36,  68 => 14,  61 => 29,  55 => 13,  53 => 18,  37 => 4,  50 => 8,  43 => 8,  39 => 6,  36 => 7,  34 => 16,  28 => 3,);
    }
}
