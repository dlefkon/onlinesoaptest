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
\t\t\t\t";
        // line 5
        if (("supersoap" == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"))) {
            // line 6
            echo "\t\t\t
\t\t\t\t\t<a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "href_url"), "method"), "html", null, true);
            echo "\" target=\"_blank\">
\t\t\t\t\t\t<img alt=\"A photo of ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "name"), "method"), "html", null, true);
            echo "\" src=\"/bundles/onlinesoaptest/images/soap/supersoap.jpg\">
\t\t\t\t\t</a>
\t\t\t\t\t
\t\t\t\t";
        }
        // line 12
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
        return array (  50 => 12,  43 => 8,  39 => 7,  36 => 6,  34 => 5,  28 => 3,);
    }
}
