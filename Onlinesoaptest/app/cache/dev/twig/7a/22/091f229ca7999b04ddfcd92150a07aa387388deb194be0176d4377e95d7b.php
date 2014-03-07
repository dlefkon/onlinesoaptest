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
\t\t\t
\t\t\t<hr>
\t\t\t\t
\t\t\t\t";
        // line 112
        $this->displayBlock('content', $context, $blocks);
        // line 113
        echo "\t
\t\t\t<hr>
\t\t\t
\t\t</div>
\t\t<!--end: Container-->
\t
\t</div>
\t<!-- end: Wrapper  -->\t\t\t

<!--\t
\t";
        // line 123
        $this->displayBlock('footer', $context, $blocks);
        // line 354
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

    // line 112
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 123
    public function block_footer($context, array $blocks = array())
    {
        // line 124
        echo "\t
\t\t<!-- start: Footer -->
\t\t<div id=\"footer\">
\t\t\t
\t\t\t<!-- start: Container -->
\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t<!-- start: Row -->
\t\t\t\t<div class=\"row\">
\t
\t\t\t\t\t<!-- start: About -->
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>OnlineSoapTest</h3>
\t
\t\t\t\t\t<!--\t<p>
\t\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i> 
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>\t
\t\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i>
\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t<p>\t
\t\t\t\t\t\t\t<i class=\"ico-z-iphone\"></i> Phone:
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"mini-ico-envelope mini-white\"></i> Email: 
\t\t\t\t\t\t</p> -->
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t<i class=\"mini-ico-globe mini-white\"></i> Web: <a href=\"http://lefkon.net\">Lefkon</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: About -->
\t
\t\t\t\t\t<!-- start: Like Us -->
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Like Us</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul id=\"twitter\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Latest Tweets -->
\t
\t\t\t\t\t<!-- start: Photo Stream -->
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Photo Stream</h3>

\t\t\t\t\t\t<div class=\"flickr-widget\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/supersoap\">
\t\t\t\t\t\t\t\t\t<img width=\"75\" height=\"75\" title=\"Rusty\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/supersoap.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/structure.gif/\" + encodeURIComponent(\"http://itknowledgeexchange.techtarget.com/qa-processes/page/3/\") target=\"_blank\">
\t\t\t\t\t\t\t\t\t<img width=\"75\" height=\"75\" title=\"A photo of soap structure\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/structure.gif\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/bundles/onlinesoaptest/images/soap/flow.gif\">
\t\t\t\t\t\t\t\t\t<img width=\"75\" height=\"75\" title=\"A photo of soap flow\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/flow.gif\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/bundles/onlinesoaptest/images/soap/layers.gif\">
\t\t\t\t\t\t\t\t\t<img width=\"75\" height=\"75\" title=\"Layers\" alt=\"A photo of soap layers\" src=\"/bundles/onlinesoaptest/images/soap/layers.gif\">
\t\t\t\t\t\t\t\t</a>\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"flickr_badge_image5\" class=\"flickr_badge_image\"><a href=\"http://www.flickr.com/photos/29609591@N08/8637527812/\"><img width=\"75\" height=\"75\" title=\"Beech Tree Strathmore\" alt=\"A photo on Flickr\" src=\"http://farm9.staticflickr.com/8542/8637527812_326926a060_s.jpg\"></a></div><div id=\"flickr_badge_image6\" class=\"flickr_badge_image\"><a href=\"http://www.flickr.com/photos/29609591@N08/8627629925/\"><img width=\"75\" height=\"75\" title=\"Fowlis\" alt=\"A photo on Flickr\" src=\"http://farm9.staticflickr.com/8521/8627629925_0781c1fc87_s.jpg\"></a></div><div id=\"flickr_badge_image7\" class=\"flickr_badge_image\"><a href=\"http://www.flickr.com/photos/29609591@N08/8207432285/\"><img width=\"75\" height=\"75\" title=\"Skotland\" alt=\"A photo on Flickr\" src=\"http://farm9.staticflickr.com/8203/8207432285_b85b135b3e_s.jpg\"></a></div><div id=\"flickr_badge_image8\" class=\"flickr_badge_image\"><a href=\"http://www.flickr.com/photos/29609591@N08/8188704520/\"><img width=\"75\" height=\"75\" title=\"Elgol From Tokavaig\" alt=\"A photo on Flickr\" src=\"http://farm9.staticflickr.com/8478/8188704520_8d7b0a9536_s.jpg\"></a></div><div id=\"flickr_badge_image9\" class=\"flickr_badge_image\"><a href=\"http://www.flickr.com/photos/29609591@N08/8182862834/\"><img width=\"75\" height=\"75\" title=\"Buachaille Etive Mhor\" alt=\"A photo on Flickr\" src=\"http://farm9.staticflickr.com/8200/8182862834_45647ace5d_s.jpg\"></a></div><span class=\"flickr_badge_beacon\" style=\"position:absolute;left:-999em;top:-999em;visibility:hidden\"><img width=\"0\" height=\"0\" alt=\"\" src=\"http://geo.yahoo.com/p?s=792600102&amp;t=d4ae8115c12a6e4df3d002fa37e84a7f&amp;r=http%3A%2F%2Fonlinesoaptest%2F&amp;fl_ev=0&amp;lang=en&amp;intl=us\"></span>
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Photo Stream -->
\t\t\t\t\t
\t\t\t\t\t<!-- start: Follow Us -->
\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"social-r\" class=\"tooltips\">
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Amazon\" class=\"amazon\">Amazon</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Behance\" class=\"behance\">Behance</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Blogger\" class=\"blogger\">Blogger</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"DeviantART\" class=\"deviantart\">DeviantART</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Dribbble\" class=\"dribbble\">Dribbble</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Dropbox\" class=\"dropbox\">Dropbox</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Evernote\" class=\"evernote\">Evernote</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Facebook\" class=\"facebook\">Facebook</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Forrst\" class=\"forrst\">Forrst</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Github\" class=\"github\">Github</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Google Plus\" class=\"googleplus\">Google Plus</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Joli Cloud\" class=\"jolicloud\">Joli Cloud</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Last FM\" class=\"last-fm\">Last FM</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"LinkedIn\" class=\"linkedin\">LinkedIn</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Picasa\" class=\"picasa\">Picasa</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Pintrest\" class=\"pintrest\">Pintrest</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"RSS\" class=\"rss\">RSS</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Skype\" class=\"skype\">Skype</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Spotify\" class=\"spotify\">Spotify</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"StumpleUpon\" class=\"stumbleupon\">StumbleUpon</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Tumblr\" class=\"tumblr\">Tumblr</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Twitter\" class=\"twitter\">Twitter</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Vimeo\" class=\"vimeo\">Vimeo</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"WordPress\" class=\"wordpress\">WordPress</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Xing\" class=\"xing\">Xing</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Yahoo\" class=\"yahoo\">Yahoo</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"YouTube\" class=\"youtube\">YouTube</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Soundcloud\" class=\"soundcloud\">Soundcloud</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"myspace\" class=\"myspace\">myspace</a>
\t\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"vkontakte\" class=\"vkontakte\">vkontakte</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Follow Us -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Row -->\t
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end: Container  -->
\t
\t\t</div>
\t\t<!-- end: Footer -->
-->
\t\t
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
\t\t\t\t\t\t\t<a class=\"brand\" href=\"#\">Online<span>Soap</span>Test.</a>
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
        // line 329
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
        // line 341
        $this->displayBlock('js', $context, $blocks);
        // line 352
        echo "\t
\t";
    }

    // line 341
    public function block_js($context, array $blocks = array())
    {
        // line 342
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
        return array (  450 => 342,  447 => 341,  442 => 352,  440 => 341,  423 => 329,  216 => 124,  213 => 123,  207 => 112,  150 => 49,  147 => 48,  142 => 354,  140 => 123,  128 => 113,  126 => 112,  115 => 103,  113 => 48,  110 => 47,  107 => 46,  97 => 22,  93 => 21,  88 => 20,  85 => 19,  76 => 40,  70 => 37,  62 => 32,  56 => 28,  54 => 19,  37 => 4,  34 => 3,);
    }
}
