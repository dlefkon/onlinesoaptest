<?php

/* OnlinesoaptestBundle::analytics.html.twig */
class __TwigTemplate_ae1e983a02ced2f84109b349e514c6ce5721626ddf05ea68ae6e8210f920a1ca extends Twig_Template
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
        echo "
   ";
        // line 2
        if (("live" == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment"))) {
            // line 3
            echo "
\t  var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
\t  document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
\t
\t  try {
\t  var pageTracker = _gat._getTracker(\"UA-7908690-31\");
\t  pageTracker._trackPageview();
\t  }
\t  catch(err) {}

   ";
        }
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle::analytics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,  95 => 18,  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 10,  68 => 8,  62 => 7,  54 => 12,  52 => 8,  48 => 7,  44 => 5,  41 => 4,  36 => 21,  31 => 15,  24 => 3,  418 => 242,  416 => 241,  402 => 229,  399 => 228,  394 => 246,  392 => 228,  377 => 218,  347 => 190,  345 => 189,  308 => 154,  300 => 147,  297 => 146,  291 => 135,  271 => 91,  265 => 90,  240 => 70,  211 => 50,  206 => 248,  204 => 146,  192 => 136,  190 => 135,  183 => 130,  173 => 126,  169 => 124,  165 => 123,  162 => 122,  152 => 118,  148 => 116,  144 => 115,  132 => 105,  130 => 50,  125 => 48,  122 => 47,  119 => 46,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  96 => 23,  93 => 22,  84 => 40,  78 => 37,  71 => 9,  65 => 29,  63 => 22,  53 => 15,  49 => 14,  37 => 4,  34 => 16,  358 => 265,  352 => 262,  346 => 259,  251 => 167,  246 => 165,  242 => 164,  238 => 163,  234 => 69,  230 => 161,  226 => 160,  222 => 159,  218 => 158,  214 => 51,  209 => 155,  202 => 151,  199 => 150,  196 => 149,  168 => 123,  164 => 122,  147 => 108,  143 => 107,  127 => 94,  123 => 93,  29 => 4,);
    }
}
