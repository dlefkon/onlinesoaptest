<?php

/* OnlinesoaptestBundle:Default:contact.html.twig */
class __TwigTemplate_91f82c83a4dcfc3429fdccff58575d53c15f04d565d8ba3ee7961b1c18bc2e77 extends Twig_Template
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
        // line 4
        echo "
\t\t\t<div>
\t\t\t
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t</div><!-- /span12 -->
\t\t\t\t</div><!-- /row-fluid -->
\t\t\t\t
\t\t\t\t<form method=\"POST\" action=\"/sendemail\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label for=\"name\" class=\"control-label\">Name:</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input id=\"contact_name\" class=\"span12 contact_field required\" type=\"text\" name=\"contact_name\" id=\"name\">
\t\t\t\t\t\t\t\t</div><!-- /controls -->
\t\t\t\t\t\t\t</div><!-- /control-group -->
\t\t\t\t\t\t</div><!-- /span6 -->
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"control-label\">Email:</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input id=\"contact_email\" class=\"span12 contact_field required\" type=\"email\" name=\"contact_email\" id=\"email\">
\t\t\t\t\t\t\t\t</div><!-- /controls -->
\t\t\t\t\t\t\t</div><!-- /control-group -->
\t\t\t\t\t\t</div><!-- /span6 -->
\t\t\t\t\t</div><!-- /row-fluid -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<div class=\"control-group\">
\t\t\t\t\t\t\t\t<label for=\"message\" class=\"control-label\">Your Message:</label>
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<textarea id=\"contact_message\" class=\"span12 contact_field required\" type=\"text\" name=\"contact_message\" id=\"message\" rows=\"4\"></textarea>
\t\t\t\t\t\t\t\t</div><!-- /controls -->
\t\t\t\t\t\t\t</div><!-- /control-group -->
\t\t\t\t\t\t</div><!-- /span12 -->
\t\t\t\t\t</div><!-- /row-fluid -->
\t\t\t\t\t
\t                <input type=\"hidden\" name=\"save\" value=\"contact\">
\t                
\t\t\t\t\t<button id=\"contact_submit\" type=\"submit\" class=\"btn-inverse pull-right\">
\t\t\t\t\t\tSend <span>Message</span>
\t\t\t\t\t\t<i class=\"icon-circle-arrow-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t
\t\t\t\t</form><!-- /form -->
\t\t\t</div><!-- /span8 -->\t
\t\t\t
\t\t
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery_validate.js"), "html", null, true);
        echo "\"></script>
     \t
\t\t
\t\t<script>
\t\t
\t\t\t\$(document).ready( function() {
\t\t\t
\t\t\t\t\$('form').validate();
\t\t\t
\t\t\t\t\$('form').submit( function() {
\t\t\t\t
\t\t\t\t\tif( \$(this).valid() ) {
\t\t\t\t\t  
\t\t\t\t\t\treturn true;
\t\t\t\t\t\t
\t\t\t\t\t} else {
\t\t\t\t\t
\t\t\t\t\t\treturn false;
\t\t\t\t\t\t
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t
\t\t</script>
\t\t
\t\t
\t\t\t\t\t
";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 56,  31 => 4,  28 => 3,);
    }
}
