<?php

/* OnlinesoaptestBundle:Default:home.html.twig */
class __TwigTemplate_91c4f9a9b380462a449bcade4f0a001f2c08704963c2e7612eec1cdc7329729c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
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
        // line 145
        echo "\t\t\t
\t\t\t<hr>
\t\t\t
\t\t</div>
\t\t<!--end: Container-->
\t
\t</div>
\t<!-- end: Wrapper  -->\t\t\t


";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
        // line 156
        echo "<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/isotope.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.imagesloaded.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/bootstrap.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/flexslider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/carousel.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.cslider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/slider.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/fancybox.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/twitter.js"), "html", null, true);
        echo "></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/modernizr.js"), "html", null, true);
        echo "></script>
<script defer=\"defer\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/custom.js"), "html", null, true);
        echo "></script>

<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/app.js"), "html", null, true);
        echo "\"></script>
    
<script> \t
     \t
var original_param = '';
var new_param = '';

function getOperations() {
\t\$('#response').html('');
\tvar ajax_url = 'http://";
        // line 180
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

\t\$('.add_param').on('click', function(){
\t\tcreateNewParam();
\t});

\t\$('#demo').click(function(){

\t\tif(\$(this).prop('checked') === true ){

\t\t\twsdl = \$('#wsdl').val();
\t\t\t\$('#wsdl').val('http://www.w3.org/2002/ws/databinding/edcopy/collection/cache/AWS-AmazonWebServices.xml');
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
        // line 270
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo ");
\t\t\t
\t\t\tstyle = \$('#style').val();
\t\t\t\$('#style').val( ";
        // line 273
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo ");
\t\t\t
\t\t\tencoding = \$('#encoding').val();
\t\t\t\$('#encoding').val(";
        // line 276
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
        // line 284
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 285
            echo "   
   \t\t\t\t";
            // line 286
            if ($this->getAttribute((isset($context["parameter_name_pnv_loop"]) ? $context["parameter_name_pnv_loop"] : null), "index", array(), "any", true, true)) {
                // line 287
                echo "   \t\t\t\t
\t\t\t\t\t\$('#parameter_name_pnv_";
                // line 288
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "').val(parameter_name_pnv_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ");
\t\t\t\t\t\$('#parameter_value_pnv_";
                // line 289
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "').val(parameter_value_pnv_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ");
\t\t\t\t
\t\t\t\t";
            }
            // line 292
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
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
\t\t\t\t<div class=\"sticky_note\">
\t\t\t\t
\t\t\t\t\t<form>
\t\t\t\t\t\t
\t\t\t\t\t\t<table>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<td style=\"text-align:right;\"><label for=\"demo\" style=\" margin-right:10px;\">Demo:</label></td>
\t\t\t\t\t\t\t\t<td><input id=\"demo\" name=\"demo\" type=\"checkbox\" class=\"big_checkbox\"/></td>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label for=\"wsdl\">WSDL URL:</label>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input id=\"wsdl\" name=\"wsdl\" type=\"text\" size=\"50\" />
\t\t\t\t\t\t\t\t\t<button onclick=\"var url = \$('#wsdl').val(); window.open(url,'','width=900,height=300,scrollbars=yes,left=100,top=100');\">View</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><label for=\"endpoint\">Endpoint:</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input id=\"endpoint\" name=\"endpoint\" type=\"text\" size=\"50\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><label for=\"operation\">Operation:</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><input id=\"operation\" name=\"operation\" type=\"text\" size=\"50\"  class=\"required\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr id='parameters'>
\t\t\t\t\t\t\t    <td><label class=\"ap\">Add Parameter</label></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label>Name:</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<label>Value:</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t\t\t<a class='add_param' href='javascript:void(0);'>+</a>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><label for=\"version\">Soap Version:</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><select id=\"version\" name=\"version\"/>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_1"]) ? $context["SOAP_1_1"] : $this->getContext($context, "SOAP_1_1")), "html", null, true);
        echo "\">SOAP_1_1</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_1_2</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><label for=\"style\">Soap Style:</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td><select id=\"style\" name=\"style\"/>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_RPC</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["SOAP_DOCUMENT"]) ? $context["SOAP_DOCUMENT"] : $this->getContext($context, "SOAP_DOCUMENT")), "html", null, true);
        echo "\">SOAP_DOCUMENT</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td><label for=\"encoding\">Soap Encoding Method:</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<select id=\"encoding\" name=\"encoding\"/>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["SOAP_ENCODED"]) ? $context["SOAP_ENCODED"] : $this->getContext($context, "SOAP_ENCODED")), "html", null, true);
        echo "\">SOAP_ENCODED</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["SOAP_LITERAL"]) ? $context["SOAP_LITERAL"] : $this->getContext($context, "SOAP_LITERAL")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_LITERAL</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input id=\"submit\" type=\"button\" value=\"Submit\" />
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t</form>
\t\t\t\t\t\t\t
\t\t\t\t<div id=\"response\" class=\"sticky_note\" style=\"display:none;\"></div>
\t\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t";
    }

    // line 155
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "OnlinesoaptestBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 155,  435 => 121,  431 => 120,  414 => 106,  410 => 105,  394 => 92,  390 => 91,  312 => 17,  304 => 7,  284 => 294,  277 => 292,  269 => 289,  263 => 288,  260 => 287,  258 => 286,  255 => 285,  251 => 284,  240 => 276,  234 => 273,  228 => 270,  133 => 180,  121 => 171,  116 => 169,  112 => 168,  108 => 167,  104 => 166,  100 => 165,  96 => 164,  92 => 163,  88 => 162,  84 => 161,  80 => 160,  76 => 159,  72 => 158,  68 => 156,  66 => 155,  54 => 145,  52 => 17,  41 => 8,  39 => 7,  34 => 4,  31 => 3,);
    }
}
