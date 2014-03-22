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
        return array (  24 => 3,  22 => 2,  19 => 1,  407 => 237,  405 => 236,  391 => 224,  388 => 223,  383 => 241,  381 => 223,  366 => 213,  303 => 152,  295 => 145,  292 => 144,  286 => 133,  266 => 89,  260 => 88,  235 => 68,  229 => 67,  215 => 55,  213 => 54,  204 => 47,  201 => 46,  196 => 243,  194 => 144,  182 => 134,  180 => 133,  173 => 128,  163 => 124,  159 => 122,  155 => 121,  152 => 120,  142 => 116,  138 => 114,  134 => 113,  122 => 103,  120 => 46,  115 => 44,  112 => 43,  109 => 42,  103 => 23,  99 => 22,  95 => 21,  91 => 20,  86 => 19,  83 => 18,  74 => 36,  68 => 33,  61 => 29,  55 => 25,  53 => 18,  37 => 4,  34 => 3,);
    }
}
