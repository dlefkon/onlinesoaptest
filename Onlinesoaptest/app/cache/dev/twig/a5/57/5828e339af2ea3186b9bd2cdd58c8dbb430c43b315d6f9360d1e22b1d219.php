<?php

/* OnlinesoaptestBundle:Default:index.html.twig */
class __TwigTemplate_a5575828e339af2ea3186b9bd2cdd58c8dbb430c43b315d6f9360d1e22b1d219 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
\t
\t<!--start: Header -->
\t<header>
\t\t
\t\t<!--start: Container -->
\t\t<div class=\"container\">
\t\t\t
\t\t\t<!--start: Navigation -->
\t\t\t<div class=\"navbar navbar-inverse\">
\t    \t\t<div class=\"navbar-inner\">
\t          \t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t            \t\t<span class=\"icon-bar\"></span>
\t            \t\t<span class=\"icon-bar\"></span>
\t            \t\t<span class=\"icon-bar\"></span>
\t          \t\t</a>
\t\t\t\t\t<a class=\"brand\" href=\"#\"><i class=\"ico-thin-right-arrow ico-color circle\"></i> Online<span>Soap</span>Test.</a>
\t          \t\t<div class=\"nav-collapse collapse\">
\t            \t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"index.html\">Home</a></li>
\t              \t\t\t<li><a href=\"about.html\">About</a></li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t                \t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Features<b class=\"caret\"></b></a>
\t                \t\t\t<ul class=\"dropdown-menu\">
\t                  \t\t\t\t<li><a href=\"social-icons.html\">Social Icons</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"icons.html\">Icons</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"typography.html\">Typography</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"shortcodes.html\">Shortcodes</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"list-styles.html\">List Styles</a></li>
\t                \t\t\t</ul>
\t              \t\t\t</li>
\t\t\t\t\t\t\t<li class=\"dropdown\">
\t                \t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio<b class=\"caret\"></b></a>
\t                \t\t\t<ul class=\"dropdown-menu\">
\t                  \t\t\t\t<li><a href=\"portfolio3.html\">3 Columns</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio4.html\">4 Columns</a></li>
\t                \t\t\t</ul>
\t              \t\t\t</li>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a></li>
\t              \t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t            \t\t</ul>
\t          \t\t</div>
\t        \t</div>
\t      \t</div>\t
\t\t\t<!--end: Navigation -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t</div>
\t\t<!--end: Container-->\t\t\t
\t\t\t
\t</header>
\t<!--end: Header-->
\t
\t<!--start: Wrapper-->
\t<div id=\"wrapper\">
\t\t\t\t
\t\t<!--start: Container -->
    \t<div class=\"container\">
\t\t\t
\t\t\t<hr>
\t\t\t
\t\t\t<div class=\"sticky_note\">
\t\t\t
\t\t\t\t<form>
\t\t\t\t\t
\t\t\t\t\t<table>
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<td><label for=\"demo\">Demo:</label></td>
\t\t\t\t\t\t\t<td><input id=\"demo\" name=\"demo\" type=\"checkbox\" class=\"big_checkbox\"/></td>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<label for=\"wsdl\">WSDL URL:</label>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><input id=\"wsdl\" name=\"wsdl\" type=\"text\" size=\"50\" />
\t\t\t\t\t\t\t\t<button onclick=\"var url = \$('#wsdl').val(); window.open(url,'','width=900,height=300,scrollbars=yes,left=100,top=100');\">View</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><label for=\"endpoint\">Endpoint:</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><input id=\"endpoint\" name=\"endpoint\" type=\"text\" size=\"50\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><label for=\"operation\">Operation:</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><input id=\"operation\" name=\"operation\" type=\"text\" size=\"50\"  class=\"required\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr id='parameters'>
\t\t\t\t\t\t    <td><label class=\"ap\">Add Parameter</label></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label>Name:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<label>Value:</label>
\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t\t<a class='add_param' href='javascript:void(0);'>+</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><label for=\"version\">Soap Version:</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><select id=\"version\" name=\"version\"/>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_1"]) ? $context["SOAP_1_1"] : $this->getContext($context, "SOAP_1_1")), "html", null, true);
        echo "\">SOAP_1_1</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 139
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_1_2</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><label for=\"style\">Soap Style:</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td><select id=\"style\" name=\"style\"/>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 152
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_RPC</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["SOAP_DOCUMENT"]) ? $context["SOAP_DOCUMENT"] : $this->getContext($context, "SOAP_DOCUMENT")), "html", null, true);
        echo "\">SOAP_DOCUMENT</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><label for=\"encoding\">Soap Encoding Method:</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select id=\"encoding\" name=\"encoding\"/>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["SOAP_ENCODED"]) ? $context["SOAP_ENCODED"] : $this->getContext($context, "SOAP_ENCODED")), "html", null, true);
        echo "\">SOAP_ENCODED</option>
\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["SOAP_LITERAL"]) ? $context["SOAP_LITERAL"] : $this->getContext($context, "SOAP_LITERAL")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_LITERAL</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input id=\"submit\" type=\"button\" value=\"Submit\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t</table>
\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t<div id=\"response\" class=\"sticky_note\" style=\"display:none;\"></div>
\t\t\t</div>
\t\t\t
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
\t\t\t\t\t<h3>creativeLabs</h3>

\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i> 30 South Park Avenue
\t\t\t\t\t</p>
\t\t\t\t\t<p>\t
\t\t\t\t\t\t<i class=\"mini-ico-map-marker mini-white\"></i> San Francisco, CA 94108, USA
\t\t\t\t\t</p>\t
\t\t\t\t\t<p>\t
\t\t\t\t\t\t<i class=\"ico-z-iphone\"></i> Phone: (123) 456-7890
\t\t\t\t\t</p>
\t\t\t\t\t<p>\t
\t\t\t\t\t\t<i class=\"mini-ico-print mini-white\"></i> Fax: +08 (123) 456-7890
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-envelope mini-white\"></i> Email: contact@companyname.com
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<i class=\"mini-ico-globe mini-white\"></i> Web: companyname.com
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

\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>

\t\t\t\t\t\t\t<li><a href=\"pricing.html\">Pricing</a></li>
\t\t\t\t\t\t\t
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
\t\t\t\t\t&copy; 2012, <a href=\"http://clabs.co\">creativeLabs</a>. Designed by <a href=\"http://clabs.co\">creativeLabs</a> in Poland <img src=\"";
        // line 379
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

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery-1.8.2.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/isotope.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.imagesloaded.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/bootstrap.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/flexslider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/carousel.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.cslider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/slider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/fancybox.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/twitter.js"), "html", null, true);
        echo "></script>
<script defer=\"defer\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/custom.js"), "html", null, true);
        echo "></script>

<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/app.js"), "html", null, true);
        echo "\"></script>
    
<script> \t
     \t
var original_param = '';
var new_param = '';

function getOperations() {
\t\$('#response').html('');
\tvar ajax_url = 'http://";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["HTTP_HOST"]) ? $context["HTTP_HOST"] : $this->getContext($context, "HTTP_HOST")), "html", null, true);
        echo "/ajax/";
        echo twig_escape_filter($this->env, (isset($context["DOMAIN_NAME"]) ? $context["DOMAIN_NAME"] : $this->getContext($context, "DOMAIN_NAME")), "html", null, true);
        echo "/index.php';
\t\$.ajax({
\t\tdata : {'wsdl':\$('#wsdl').val(),
\t\t\t\t'endpoint':\$('#endpoint').val(),
\t\t\t\t'version':\$('#version').val(),
\t\t\t\t'style':\$('#style').val(),
\t\t\t\t'encoding':\$('#encoding').val(),
\t\t\t\t'operation':\$('#operation').val()
\t\t},\t
\t\turl : ajax_url,
\t\tsuccess : function(response) {
\t\t\t\$('#response').html(response).show();
\t\t}
\t});
}

function createNewParam(){

\tif(original_param == '') {
\t\toriginal_param = \$('.parameters').html();
\t} 
\t
\t\$('.add_param').remove();
\t\$('.ap').remove();
\t
\t\$('.parameters').first('tr').before('<tr class=\"parameters\">' + original_param + '</tr>');
\t\t
}


\$(document).ready(function() {

\t\$('.add_param').live('click', function(){
\t\tcreateNewParam();
\t});

\t\$('#demo').click(function(){
\t\t\t
\t\tif(\$(this).attr('checked') == 'checked'){
\t\t\t
\t\t\twsdl = \$('#wsdl').val();
\t\t\t\$('#wsdl').val('http://soap.amazon.com/schemas2/AmazonWebServices.wsdl');
\t
\t\t\tendpoint = \$('#endpoint').val();
\t\t\t\$('#endpoint').val('http://soap.amazon.com');
\t
\t\t\toperation = \$('#operation').val();
\t\t\t\$('#operation').val('ArtistSearchRequest');
\t
\t\t\tparameter_name_pnv_0 = \$('#parameter_name_pnv_0').val();
\t\t\t\$('#parameter_name_pnv_0').val('artist');
\t
\t\t\tparameter_value_pnv_0 = \$('#parameter_value_pnv_0').val();
\t\t\t\$('#parameter_value_pnv_0').val('U2');
\t\t\t
\t\t\t
\t\t\tparameter_name_pnv_1 = \$('#parameter_name_pnv_1').val();
\t\t\t\$('#parameter_name_pnv_1').val('page');
\t
\t\t\tparameter_value_pnv_1 = \$('#parameter_value_pnv_1').val();
\t\t\t\$('#parameter_value_pnv_1').val('1').parent('li').show();
\t\t\t
\t\t\t
\t\t\tparameter_name_pnv_2 = \$('#parameter_name_pnv_2').val();
\t\t\t\$('#parameter_name_pnv_2').val('mode');
\t
\t\t\tparameter_value_pnv_2 = \$('#parameter_value_pnv_2').val();
\t\t\t\$('#parameter_value_pnv_2').val('music').parent('li').show();
\t\t\t
\t\t\t
\t\t\tparameter_name_pnv_3 = \$('#parameter_name_pnv_3').val();
\t\t\t\$('#parameter_name_pnv_3').val('tag');
\t
\t\t\tparameter_value_pnv_3 = \$('#parameter_value_pnv_3').val();
\t\t\t\$('#parameter_value_pnv_3').val('Sunday').parent('li').show();
\t\t\t
\t\t\t
\t\t\tparameter_name_pnv_4 = \$('#parameter_name_pnv_4').val();
\t\t\t\$('#parameter_name_pnv_4').val('type');
\t
\t\t\tparameter_value_pnv_4 = \$('#parameter_value_pnv_4').val();
\t\t\t\$('#parameter_value_pnv_4').val('lite').parent('li').show();
\t\t\t
\t\t\tparameter_name_pnv_5 = \$('#parameter_name_pnv_5').val();
\t\t\t\$('#parameter_name_pnv_5').val('devtag');
\t
\t\t\tparameter_value_pnv_5 = \$('#parameter_value_pnv_5').val();
\t\t\t\$('#parameter_value_pnv_5').val('AKIAJCFVRHOEH6XA3IYA').parent('li').show();
\t\t\t
\t\t\tversion = \$('#version').val();
\t\t\t\$('#version').val(";
        // line 502
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo ");
\t\t\t
\t\t\tstyle = \$('#style').val();
\t\t\t\$('#style').val( ";
        // line 505
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo ");
\t\t\t
\t\t\tencoding = \$('#encoding').val();
\t\t\t\$('#encoding').val(";
        // line 508
        echo twig_escape_filter($this->env, (isset($context["SOAP_LITERAL"]) ? $context["SOAP_LITERAL"] : $this->getContext($context, "SOAP_LITERAL")), "html", null, true);
        echo ");
\t\t\t
\t\t} else {
\t
\t\t\t\$('#wsdl').val(wsdl);
\t\t\t\$('#endpoint').val(endpoint);
\t\t\t\$('#operation').val(operation);
\t\t\t
\t\t\t";
        // line 516
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 517
            echo "   
\t\t\t\t\$('#parameter_name_pnv_";
            // line 518
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "').val(parameter_name_pnv_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ");
\t\t\t\t\$('#parameter_value_pnv_";
            // line 519
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "').val(parameter_value_pnv_";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo ");
\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        echo "\t\t\t
\t\t\t\$('#version').val(version);
\t\t\t\$('#style').val(style);
\t\t\t\$('#encoding').val(encoding);
\t\t}
\t});
\t
\t\$('#demo').prop('checked', false);
});

</script>
<!-- end: Java Script -->


</body> 

";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 522,  629 => 519,  623 => 518,  620 => 517,  616 => 516,  605 => 508,  599 => 505,  593 => 502,  498 => 412,  486 => 403,  481 => 401,  477 => 400,  473 => 399,  469 => 398,  465 => 397,  461 => 396,  457 => 395,  453 => 394,  449 => 393,  445 => 392,  441 => 391,  426 => 379,  212 => 168,  208 => 167,  191 => 153,  187 => 152,  171 => 139,  167 => 138,  31 => 4,  28 => 3,);
    }
}
