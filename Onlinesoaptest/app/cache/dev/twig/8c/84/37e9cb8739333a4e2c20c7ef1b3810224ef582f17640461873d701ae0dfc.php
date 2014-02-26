<?php

/* OnlinesoaptestBundle:Default:about.html.twig */
class __TwigTemplate_8c8437e9cb8739333a4e2c20c7ef1b3810224ef582f17640461873d701ae0dfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OnlinesoaptestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<body>

\t";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 8
        echo "\t
\t<!--start: Wrapper-->
\t<div id=\"wrapper\">
\t\t\t\t
\t\t<!--start: Container -->
    \t<div class=\"container\">
\t\t\t
\t\t\t<hr>
\t\t\t\t
\t\t\t";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "\t\t\t
\t\t\t<hr>
\t\t\t
\t\t</div>
\t\t<!--end: Container-->
\t
\t</div>
\t<!-- end: Wrapper  -->\t\t\t

\t<!-- start: Footer -->
\t<div id=\"footer\">
\t\t
\t\t<!-- start: Container -->
\t\t<div class=\"container\">
\t\t\t
\t\t\t<!-- start: Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- start: About -->
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t
\t\t\t\t\t<h3>OnlineSoapTest</h3>

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i> 440 Warburton Avenue
\t\t\t\t\t</p>
\t\t\t\t\t<p>\t
\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i> Yonkers, NY 10701, USA
\t\t\t\t\t</p>\t
\t\t\t\t\t<p>\t
\t\t\t\t\t\t<i class=\"ico-z-iphone\"></i> Phone: (917) 543-6105
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-envelope mini-white\"></i> Email: dlefkon@gmail.com
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-globe mini-white\"></i> Web: lefkon.net
\t\t\t\t\t</p>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: About -->

\t\t\t\t<!-- start: Latest Tweets -->
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t
\t\t\t\t\t<h3>Latest Tweets</h3>
\t\t\t\t\t
\t\t\t\t\t<ul id=\"twitter\">
\t\t\t\t\t\t
\t\t\t\t\t</ul>

\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Latest Tweets -->

\t\t\t\t<!-- start: Photo Stream -->
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t
\t\t\t\t\t<h3>Flickr Photo Stream</h3>
\t\t\t\t\t<div class=\"flickr-widget\">
\t\t\t\t\t\t<script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?count=9&display=latest&size=s&layout=x&source=user&user=29609591@N08\"></script>
\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Photo Stream -->
\t\t\t\t
\t\t\t\t<!-- start: Follow Us -->
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t
\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t
\t\t\t\t\t<div id=\"social-r\" class=\"tooltips\">
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Amazon\" class=\"amazon\">Amazon</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Behance\" class=\"behance\">Behance</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Blogger\" class=\"blogger\">Blogger</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"DeviantART\" class=\"deviantart\">DeviantART</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Dribbble\" class=\"dribbble\">Dribbble</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Dropbox\" class=\"dropbox\">Dropbox</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Evernote\" class=\"evernote\">Evernote</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Facebook\" class=\"facebook\">Facebook</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Forrst\" class=\"forrst\">Forrst</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Github\" class=\"github\">Github</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Google Plus\" class=\"googleplus\">Google Plus</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Joli Cloud\" class=\"jolicloud\">Joli Cloud</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Last FM\" class=\"last-fm\">Last FM</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"LinkedIn\" class=\"linkedin\">LinkedIn</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Picasa\" class=\"picasa\">Picasa</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Pintrest\" class=\"pintrest\">Pintrest</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"RSS\" class=\"rss\">RSS</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Skype\" class=\"skype\">Skype</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Spotify\" class=\"spotify\">Spotify</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"StumpleUpon\" class=\"stumbleupon\">StumbleUpon</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Tumblr\" class=\"tumblr\">Tumblr</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Twitter\" class=\"twitter\">Twitter</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Vimeo\" class=\"vimeo\">Vimeo</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"WordPress\" class=\"wordpress\">WordPress</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Xing\" class=\"xing\">Xing</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Yahoo\" class=\"yahoo\">Yahoo</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"YouTube\" class=\"youtube\">YouTube</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"Soundcloud\" class=\"soundcloud\">Soundcloud</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"myspace\" class=\"myspace\">myspace</a>
\t\t\t\t\t\t<a href=\"#\" rel=\"tooltip\" title=\"vkontakte\" class=\"vkontakte\">vkontakte</a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Follow Us -->
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- end: Row -->\t
\t\t\t
\t\t</div>
\t\t<!-- end: Container  -->

\t</div>
\t<!-- end: Footer -->
\t
\t<!-- start: Footer Menu -->
\t<div id=\"footer-menu\" class=\"hidden-tablet hidden-phone\">

\t\t<!-- start: Container -->
\t\t<div class=\"container\">
\t\t\t
\t\t\t<!-- start: Row -->
\t\t\t<div class=\"row\">

\t\t\t\t<!-- start: Footer Menu Logo -->
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<div id=\"footer-menu-logo\">
\t\t\t\t\t\t<a class=\"brand\" href=\"#\">Online<span>Soap</span>Test.</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- end: Footer Menu Logo -->

\t\t\t\t<!-- start: Footer Menu Links-->
\t\t\t\t<div class=\"span9\">
\t\t\t\t\t
\t\t\t\t\t<div id=\"footer-menu-links\">

\t\t\t\t\t\t<ul id=\"footer-nav\">

\t\t\t\t\t\t\t<li><a href=\"index.html\">Start</a></li>

\t\t\t\t\t\t\t<li><a href=\"about.html\">About</a></li>

\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Footer Menu Links-->

\t\t\t\t<!-- start: Footer Menu Back To Top -->
\t\t\t\t<div class=\"span1\">
\t\t\t\t\t\t
\t\t\t\t\t<div id=\"footer-menu-back-to-top\">
\t\t\t\t\t\t<a href=\"#\"></a>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- end: Footer Menu Back To Top -->
\t\t\t
\t\t\t</div>
\t\t\t<!-- end: Row -->
\t\t\t
\t\t</div>
\t\t<!-- end: Container  -->\t

\t</div>\t
\t<!-- end: Footer Menu -->

\t<!-- start: Copyright -->
\t<div id=\"copyright\">
\t
\t\t<!-- start: Container -->
\t\t<div class=\"container\">
\t\t
\t\t\t<div class=\"sixteen columns\">
\t\t\t\t<p>
\t\t\t\t\t&copy; 2012   <a href=\"http://onlinesoaptest.com\">OnlineSoapTest</a> <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/images/poland.png"), "html", null, true);
        echo "\" alt=\"Poland\" style=\"margin-top:-4px\">
\t\t\t\t</p>
\t\t\t</div>
\t
\t\t</div>
\t\t<!-- end: Container  -->
\t\t
\t</div>\t
\t<!-- end: Copyright -->


</body> 

";
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t\t\t
I was searching the web one fine day as you are doing today, and was not able to find an online resource to test some SOAP functionlity I was building into a PHP application.  I was unable to find a useable one that didn't have to be downloaded.  Soo .. I decided to make one.
\t\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 17,  256 => 7,  238 => 205,  53 => 22,  51 => 17,  40 => 8,  38 => 7,  33 => 4,  30 => 3,);
    }
}
