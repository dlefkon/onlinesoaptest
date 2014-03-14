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
\t<!-- end: Meta -->
\t
\t<!-- start: Mobile Specific -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t<!-- end: Mobile Specific -->

    <!-- start: CSS -->
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "\t<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
\t\t<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/ie.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <![endif]-->

\t<!--[if IE 9]>
    \t<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/ie9.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <![endif]-->
     \t
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.js"), "html", null, true);
        echo "\"></script>
     \t
</head>

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/parallax-slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Droid+Sans:400,700\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Droid+Serif\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Boogaloo\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Economica:700,400italic\">
    ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "
\t";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 102
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
        // line 112
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 113
            echo "\t\t\t
\t\t\t<div class=\"error\">
\t\t\t    ";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t\t\t\t
\t\t\t";
        // line 120
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 121
            echo "\t\t\t
\t\t\t<div class=\"success\">
\t\t\t    ";
            // line 123
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
\t\t\t
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t
\t\t</div>
\t
\t\t\t<hr>
\t\t\t\t
\t\t\t\t";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 133
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
        // line 143
        $this->displayBlock('footer', $context, $blocks);
        // line 252
        echo "\t
";
    }

    // line 47
    public function block_header($context, array $blocks = array())
    {
        // line 48
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
\t\t\t\t\t\t\t\t<!-- <li><a href=\"/blog\">Blog</a></li> -->
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

    // line 132
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 143
    public function block_footer($context, array $blocks = array())
    {
        // line 144
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
        // line 209
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
\t";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment"), "html", null, true);
        echo "
\t
\t\t";
        // line 221
        $this->displayBlock('js', $context, $blocks);
        // line 250
        echo "\t
\t";
    }

    // line 221
    public function block_js($context, array $blocks = array())
    {
        // line 222
        echo "\t\t
\t\t    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t\t    <!--[if lt IE 9]>
\t\t     \t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t    <![endif]-->
    
\t\t\t<script type=\"text/javascript\">
\t\t\t
\t\t\t\t\$('document').ready( function() {
\t\t
\t\t\t\t});
\t\t\t
\t\t\t   ";
        // line 234
        if (("live" == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment"))) {
            // line 235
            echo "\t\t\t
\t\t\t\t  var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\");
\t\t\t\t  document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\"));
\t\t\t\t
\t\t\t\t  try {
\t\t\t\t  var pageTracker = _gat._getTracker(\"UA-7908690-31\");
\t\t\t\t  pageTracker._trackPageview();
\t\t\t\t  }
\t\t\t\t  catch(err) {}
\t\t\t
\t\t\t   ";
        }
        // line 246
        echo "\t\t\t
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
        return array (  391 => 246,  376 => 234,  362 => 222,  359 => 221,  354 => 250,  352 => 221,  347 => 219,  332 => 209,  265 => 144,  262 => 143,  256 => 132,  199 => 48,  196 => 47,  191 => 252,  189 => 143,  177 => 133,  175 => 132,  168 => 127,  158 => 123,  154 => 121,  150 => 120,  147 => 119,  137 => 115,  133 => 113,  129 => 112,  117 => 102,  115 => 47,  112 => 46,  109 => 45,  99 => 22,  95 => 21,  91 => 20,  86 => 19,  83 => 18,  74 => 39,  68 => 36,  61 => 32,  55 => 28,  53 => 18,  37 => 4,  34 => 3,  428 => 309,  421 => 307,  413 => 304,  407 => 303,  404 => 302,  402 => 301,  399 => 300,  395 => 299,  384 => 291,  378 => 235,  372 => 285,  259 => 175,  254 => 173,  250 => 172,  246 => 171,  242 => 170,  238 => 169,  234 => 168,  230 => 167,  226 => 166,  222 => 165,  217 => 163,  210 => 159,  207 => 158,  204 => 157,  176 => 131,  172 => 130,  155 => 116,  151 => 115,  135 => 102,  131 => 101,  29 => 3,);
    }
}
