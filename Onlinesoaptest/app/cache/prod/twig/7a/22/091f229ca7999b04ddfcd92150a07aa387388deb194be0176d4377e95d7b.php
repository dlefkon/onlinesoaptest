<?php

/* OnlinesoaptestBundle::layout.html.twig */
class __TwigTemplate_7a22091f229ca7999b04ddfcd92150a07aa387388deb194be0176d4377e95d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "<head>

\t<!-- start: Meta -->
\t<meta charset=\"utf-8\">
\t<title>Online Soap Test</title> 
\t<meta name=\"description\" content=\"Online SOAP test\"/>
\t<meta name=\"keywords\" content=\"SOAP test online\" />
\t<meta name=\"author\" content=\"David Lefkon\"/>
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t<!-- end: Mobile Specific -->

    <!-- start: CSS -->
    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "\t<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/ie.css"), "html", null, true);
        echo " rel=\"stylesheet\">
     \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

\t<!--[if IE 9]>
    \t<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/ie9.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <![endif]-->

</head>

";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/parallax-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans:400,700\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Droid+Serif\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Boogaloo\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Economica:700,400italic\">
    ";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 22,  83 => 21,  78 => 20,  75 => 19,  65 => 37,  57 => 32,  51 => 28,  49 => 19,  32 => 4,  29 => 3,  509 => 435,  505 => 434,  501 => 433,  497 => 432,  493 => 431,  489 => 430,  485 => 429,  481 => 428,  477 => 427,  473 => 426,  469 => 425,  454 => 413,  123 => 85,  114 => 79,  105 => 73,  96 => 67,  31 => 4,  28 => 3,);
    }
}
