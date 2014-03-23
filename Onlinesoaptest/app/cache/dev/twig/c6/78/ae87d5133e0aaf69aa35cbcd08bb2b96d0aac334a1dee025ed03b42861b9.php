<?php

/* OnlinesoaptestBundle:Default:photos.html.twig */
class __TwigTemplate_c678ae87d5133e0aaf69aa35cbcd08bb2b96d0aac334a1dee025ed03b42861b9 extends Twig_Template
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
\t<style type=\"text/css\">
\t
\t\timg { 
\t\t
\t\t\twidth:auto;
\t\t\t
\t\t}
\t\t
\t</style>
\t\t\t\t";
        // line 14
        if (("supersoap" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"))) {
            // line 15
            echo "\t\t\t
\t\t\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "href_url"), "method"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<img alt=\"A photo of ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "\" src=\"/bundles/onlinesoaptest/images/soap/supersoap.jpg\">
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t";
        } elseif (("structure" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"))) {
            // line 21
            echo "\t\t\t
\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "href_url"), "method"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<img alt=\"A photo of ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "\" src=\"/bundles/onlinesoaptest/images/soap/structure.gif\">
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t";
        } elseif (("flow" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"))) {
            // line 27
            echo "\t\t\t
\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "href_url"), "method"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<img alt=\"A photo of ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "\" src=\"/bundles/onlinesoaptest/images/soap/flow.gif\">
\t\t\t\t\t</a>
\t\t\t\t
\t\t\t\t";
        } elseif (("layers" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"))) {
            // line 33
            echo "\t\t\t
\t\t\t\t\t<a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "href_url"), "method"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<img alt=\"A photo of ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "\" src=\"/bundles/onlinesoaptest/images/soap/layers.gif\">
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t
\t\t\t<script>
\t
\t\t\t\t\$(\".image_link\").click( function() {
\t
\t\t\t\t\tconsole.log(\$(this).prop('id'));
\t\t\t\t\t
\t\t\t\t\tswitch( \$(this).prop('id') ) {
\t\t\t\t\t
\t\t\t\t\t\tcase 'supersoap_href':
\t\t\t\t\t\t\twindow.open( \"http://itknowledgeexchange.techtarget.com/qa-processes/page/3/\" );
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t</script>
\t\t
\t\t\t";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:photos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 39,  94 => 35,  90 => 34,  87 => 33,  80 => 29,  76 => 28,  73 => 27,  66 => 23,  62 => 22,  59 => 21,  52 => 17,  48 => 16,  45 => 15,  43 => 14,  28 => 3,);
    }
}
