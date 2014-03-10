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
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'js' => array($this, 'block_js'),
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
     \t
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.js"), "html", null, true);
        echo "\"></script>
     \t
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

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "
\t";
        // line 48
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "\t
\t<!--start: Wrapper-->
\t<div id=\"wrapper\">
\t\t\t\t
\t\t<!--start: Container -->
    \t<div class=\"container\">
\t\t
\t\t
\t\t<div class=\"messages\">
\t\t\t
\t\t\t";
        // line 113
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 114
            echo "\t\t\t
\t\t\t<div class=\"error\">
\t\t\t    ";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t\t\t\t\t\t
\t\t\t";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 122
            echo "\t\t\t
\t\t\t<div class=\"success\">
\t\t\t    ";
            // line 124
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t
\t\t</div>
\t
\t\t\t<hr>
\t\t\t\t
\t\t\t\t";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "\t\t\t\t<br>
\t\t\t<hr>
\t\t\t
\t\t</div>
\t\t<!--end: Container-->
\t
\t</div>
\t<!-- end: Wrapper  -->\t\t\t

\t
\t";
        // line 144
        $this->displayBlock('footer', $context, $blocks);
        // line 235
        echo "\t
";
    }

    // line 48
    public function block_header($context, array $blocks = array())
    {
        // line 49
        echo "
\t\t<!--start: Header -->
\t\t<header>
\t\t\t
\t\t\t<!--start: Container -->
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t<!--start: Navigation -->
\t\t\t\t<div class=\"navbar navbar-inverse\">
\t\t    \t\t<div class=\"navbar-inner\">
\t\t          \t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t            \t\t<span class=\"icon-bar\"></span>
\t\t            \t\t<span class=\"icon-bar\"></span>
\t\t            \t\t<span class=\"icon-bar\"></span>
\t\t          \t\t</a>
\t\t\t\t\t\t<a class=\"brand\" href=\"/\"><i class=\"ico-thin-right-arrow ico-color circle\"></i> Online<span>Soap</span>Test.</a>
\t\t          \t\t<div class=\"nav-collapse collapse\">
\t\t            \t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"active\"><a href=\"/\">Home</a></li>
\t\t              \t\t\t<li><a href=\"/about\">About</a></li>
\t\t\t\t\t\t\t<!--\t<li class=\"dropdown\">
\t\t                \t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Features<b class=\"caret\"></b></a>
\t\t                \t\t\t<ul class=\"dropdown-menu\">
\t\t                  \t\t\t\t<li><a href=\"social-icons\">Social Icons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"icons\">Icons</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"typography\">Typography</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes\">Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"list-styles\">List Styles</a></li>
\t\t                \t\t\t</ul>
\t\t              \t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t                \t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio<b class=\"caret\"></b></a>
\t\t                \t\t\t<ul class=\"dropdown-menu\">
\t\t                  \t\t\t\t<li><a href=\"portfolio3\">3 Columns</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio4\">4 Columns</a></li>
\t\t                \t\t\t</ul>
\t\t              \t\t\t</li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"services\">Services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing\">Pricing</a></li> -->
\t\t\t\t\t\t\t\t<li><a href=\"/blog\">Blog</a></li>
\t\t              \t\t\t<li><a href=\"contact\">Contact</a></li>
\t\t            \t\t</ul>
\t\t          \t\t</div>
\t\t        \t</div>
\t\t      \t</div>\t
\t\t\t\t<!--end: Navigation -->
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<!--end: Container-->\t\t\t
\t\t\t\t
\t\t</header>
\t\t<!--end: Header-->
\t
\t";
    }

    // line 133
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 144
    public function block_footer($context, array $blocks = array())
    {
        // line 145
        echo "
\t\t<!-- start: Footer Menu -->
\t\t<div id=\"footer-menu\" class=\"hidden-tablet hidden-phone\">
\t
\t\t\t<!-- start: Container -->
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t<!-- start: Row -->
\t\t\t\t<div class=\"row\">
\t
\t\t\t\t\t<!-- start: Footer Menu Logo -->
\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t<div id=\"footer-menu-logo\">
\t\t\t\t\t\t\t<a class=\"brand\" href=\"#\">Online<span>Soap</span>Test</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Footer Menu Logo -->
\t
\t\t\t\t\t<!-- start: Footer Menu Links-->
\t\t\t\t\t<div class=\"span9\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"footer-menu-links\">
\t
\t\t\t\t\t\t\t<ul id=\"footer-nav\">
\t
\t\t\t\t\t\t\t\t<li><a href=\"index\">Start</a></li>
\t
\t\t\t\t\t\t\t\t<li><a href=\"about\">About</a></li>
\t
\t\t\t\t\t\t\t\t<li><a href=\"contact\">Contact</a></li>
\t
\t\t\t\t\t\t\t</ul>
\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Footer Menu Links-->
\t
\t\t\t\t\t<!-- start: Footer Menu Back To Top -->
\t\t\t\t\t<div class=\"span1\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"footer-menu-back-to-top\">
\t\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Footer Menu Back To Top -->
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Row -->
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end: Container  -->\t
\t
\t\t</div>\t
\t\t<!-- end: Footer Menu -->
\t
\t\t<!-- start: Copyright -->
\t\t<div id=\"copyright\">
\t\t
\t\t\t<!-- start: Container -->
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<div class=\"sixteen columns\">
\t\t\t\t\t<p>
\t\t\t\t\t\t&copy; ";
        // line 210
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "   <a href=\"http://onlinesoaptest.com\">OnlineSoapTest</a> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/images/poland.png"), "html", null, true);
        echo "\" alt=\"Poland\" style=\"margin-top:-4px\">
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t
\t\t\t</div>
\t\t\t<!-- end: Container  -->
\t\t\t
\t\t</div>\t
\t\t<!-- end: Copyright -->
\t
\t
\t
\t\t";
        // line 222
        $this->displayBlock('js', $context, $blocks);
        // line 233
        echo "\t
\t";
    }

    // line 222
    public function block_js($context, array $blocks = array())
    {
        // line 223
        echo "\t\t
\t\t\t<script type=\"text/javascript\">
\t\t\t
\t\t\t\t\$('document').ready( function() {
\t\t
\t\t\t\t});
\t\t\t
\t\t\t</script>
\t\t\t
\t\t";
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
        return array (  357 => 223,  354 => 222,  349 => 233,  347 => 222,  330 => 210,  263 => 145,  260 => 144,  254 => 133,  197 => 49,  194 => 48,  189 => 235,  187 => 144,  175 => 134,  173 => 133,  166 => 128,  156 => 124,  152 => 122,  148 => 121,  145 => 120,  135 => 116,  131 => 114,  127 => 113,  115 => 103,  113 => 48,  110 => 47,  107 => 46,  97 => 22,  93 => 21,  88 => 20,  85 => 19,  76 => 40,  70 => 37,  62 => 32,  56 => 28,  54 => 19,  37 => 4,  34 => 3,);
    }
}
