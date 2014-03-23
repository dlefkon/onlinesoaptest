<?php

/* OnlinesoaptestBundle:Default:thumbnails.html.twig */
class __TwigTemplate_636cc8b852fcec4729ff9f8ed41b3c859e5e27eca76ce3ec36b93445571a46b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        echo " 
\t\t\t
\t\t\t<style type=\"text/css\">
\t\t\t
\t\t\t\timg.thumbnail {
\t\t\t\t\twidth:110px;
\t\t\t\t\theight:110px;
\t\t\t\t\tpadding:0;
\t\t\t\t}
\t\t\t\t
\t\t\t\t.flickr-widget a {
\t\t\t\t\twidth:auto;
\t\t\t\t\theight:auto;
\t\t\t\t}
\t\t\t\t
\t\t\t</style>
\t\t\t\t\t<!-- start: Photo Stream -->
\t\t\t\t\t<div>
\t\t\t\t\t\t
\t\t\t\t\t\t<h3>Photo Stream</h3>

\t\t\t\t\t\t<div class=\"flickr-widget\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/structure\">
\t\t\t\t\t\t\t\t\t<img class=\"thumbnail\" title=\"A photo of soap structure\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/structure.gif\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/flow\">
\t\t\t\t\t\t\t\t\t<img class=\"thumbnail\" title=\"A photo of soap flow\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/flow.gif\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/supersoap\">
\t\t\t\t\t\t\t\t\t<img class=\"thumbnail\" title=\"Supersoap\" alt=\"A photo\" src=\"/bundles/onlinesoaptest/images/soap/supersoap.jpg\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"flickr_badge_image\">
\t\t\t\t\t\t\t\t<a href=\"/photos/layers\">
\t\t\t\t\t\t\t\t\t<img class=\"thumbnail\" title=\"Layers\" alt=\"A photo of soap layers\" src=\"/bundles/onlinesoaptest/images/soap/layers.gif\">
\t\t\t\t\t\t\t\t</a>\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end: Photo Stream -->
\t\t\t\t\t
\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:thumbnails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,);
    }
}
