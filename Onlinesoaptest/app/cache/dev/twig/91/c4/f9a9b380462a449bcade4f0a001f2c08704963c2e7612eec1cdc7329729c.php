<?php

/* OnlinesoaptestBundle:Default:home.html.twig */
class __TwigTemplate_91c4f9a9b380462a449bcade4f0a001f2c08704963c2e7612eec1cdc7329729c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OnlinesoaptestBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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

\t<div class=\"sticky_note\">
\t
\t\t<form action=\"ajax\">
\t\t\t
\t\t\t<table>
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t
\t\t\t\t\t<td style=\"text-align:right;\"><label for=\"demo\" style=\" margin-right:10px;\">Demo:</label></td>
\t\t\t\t\t<td><input id=\"demo\" name=\"demo\" type=\"checkbox\" class=\"big_checkbox\"/></td>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t<label for=\"wsdl\">WSDL URL:</label>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t<td><input id=\"wsdl\" name=\"wsdl\" type=\"text\" size=\"50\" />
\t\t\t\t\t\t<button id=\"view\">View</button>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label for=\"endpoint\">Endpoint:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input id=\"endpoint\" name=\"endpoint\" type=\"text\" size=\"50\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label for=\"operation\">Operation:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input id=\"operation\" name=\"operation\" type=\"text\" size=\"50\"  class=\"required\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t
\t\t\t\t<tr id='parameters'>
\t\t\t\t    <td><label class=\"ap\">Add Parameter</label></td>
\t\t\t\t    
\t\t\t\t    <td>
\t\t\t\t    
\t\t\t\t\t    <table>
\t\t\t\t\t    
\t\t\t\t\t    \t<tbody class=\"param_row\">
\t\t\t\t\t    \t
\t\t\t\t\t\t    \t<tr>
\t\t\t\t\t\t    \t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table class=\"assignment_table\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"row_container\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Name:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>Value:</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type='text' size='20' />
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class='add_param' href='javascript:void(0);'>+</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t\t\t
\t\t\t\t\t</td>
\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label for=\"version\">Soap Version:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><select id=\"version\" name=\"version\"/>
\t\t\t\t\t\t\t<option value=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_1"]) ? $context["SOAP_1_1"] : $this->getContext($context, "SOAP_1_1")), "html", null, true);
        echo "\">SOAP_1_1</option>
\t\t\t\t\t\t\t<option value=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_1_2</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label for=\"style\">Soap Style:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><select id=\"style\" name=\"style\"/>
\t\t\t\t\t\t\t<option value=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_RPC</option>
\t\t\t\t\t\t\t<option value=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["SOAP_DOCUMENT"]) ? $context["SOAP_DOCUMENT"] : $this->getContext($context, "SOAP_DOCUMENT")), "html", null, true);
        echo "\">SOAP_DOCUMENT</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t
\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td><label for=\"encoding\">Soap Encoding Method:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<select id=\"encoding\" name=\"encoding\"/>
\t\t\t\t\t\t\t<option value=\"";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["SOAP_ENCODED"]) ? $context["SOAP_ENCODED"] : $this->getContext($context, "SOAP_ENCODED")), "html", null, true);
        echo "\">SOAP_ENCODED</option>
\t\t\t\t\t\t\t<option value=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["SOAP_LITERAL"]) ? $context["SOAP_LITERAL"] : $this->getContext($context, "SOAP_LITERAL")), "html", null, true);
        echo "\" selected=\"selected\">SOAP_LITERAL</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<td></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input id=\"submit\" type=\"button\" value=\"Submit\" />
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t
\t\t\t</table>
\t
\t\t\t\t
\t\t\t\t
\t\t</form>
\t\t\t\t
\t<div id=\"response\" class=\"sticky_note\" style=\"display:none;\"></div>
\t</div>


";
    }

    // line 157
    public function block_js($context, array $blocks = array())
    {
        // line 158
        echo "
";
        // line 159
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t\t\t
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery_validate.js"), "html", null, true);
        echo "\"></script>
<!-- removed isotope.js as calling deprecated 'browser' function .. back down jquery or up version of this js -->
<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.imagesloaded.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/flexslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/carousel.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/jquery.cslider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/fancybox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/twitter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/modernizr.js"), "html", null, true);
        echo "\"></script>
<!-- removed custom.js due to missing isotope.js -->
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Onlinesoaptest/js/app.js"), "html", null, true);
        echo "\"></script>
    
<script> \t
     \t
var original_param = '';
var new_param = '';
var new_row = '';

function getOperations() {
\t\$('#response').html('');
\tvar ajax_url = 'ajax';
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

\$(document).ready(function() {



\t\$('#parameters').on('click', '.add_param, .remove_param', function(){

\t\tif(\$(this).hasClass('add_param')) {
console.log('add');\t\t
\t\t\tif( '' === new_row) new_row = \$(this).parents('.param_row').html().replace( /<label>Name:<\\/label>/, '').replace( /<label>Value:<\\/label>/, '').replace( /\\-/g , \"\\+\");
console.log(new_row);
\t\t\t\$(this).parents('.param_row').append( new_row );
\t\t\t
\t\t\t\$(this).html('-').addClass('remove_param').removeClass('add_param').change();
\t\t
\t\t} else if (\$(this).hasClass('remove_param')) {
console.log('remove');\t
console.log(\$(this).parents('tr'));
\t\t\t\$(this).parents('tr.row_container').remove();
\t\t
\t\t} else {
\t\t
\t\t\talert('error');
\t\t\t
\t\t}
\t});







\t\$('#view').click( function() {
\t
\t\tvar url = \$('#wsdl').val(); 
\t\twindow.open(url,'','width=900,height=300,scrollbars=yes,left=100,top=100');
\t\treturn false;
\t\t
\t});


\t
\t
\t
\t
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
\t\t\tparameter_name_pnv_1 = \$('#parameter_name_pnv_1').val();
\t\t\t\$('#parameter_name_pnv_1').val('page');
\t
\t\t\tparameter_value_pnv_1 = \$('#parameter_value_pnv_1').val();
\t\t\t\$('#parameter_value_pnv_1').val('1').parent('li').show();
\t\t\t
\t\t\tparameter_name_pnv_2 = \$('#parameter_name_pnv_2').val();
\t\t\t\$('#parameter_name_pnv_2').val('mode');
\t
\t\t\tparameter_value_pnv_2 = \$('#parameter_value_pnv_2').val();
\t\t\t\$('#parameter_value_pnv_2').val('music').parent('li').show();
\t\t\t
\t\t\tparameter_name_pnv_3 = \$('#parameter_name_pnv_3').val();
\t\t\t\$('#parameter_name_pnv_3').val('tag');
\t
\t\t\tparameter_value_pnv_3 = \$('#parameter_value_pnv_3').val();
\t\t\t\$('#parameter_value_pnv_3').val('Sunday').parent('li').show();
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
        // line 296
        echo twig_escape_filter($this->env, (isset($context["SOAP_1_2"]) ? $context["SOAP_1_2"] : $this->getContext($context, "SOAP_1_2")), "html", null, true);
        echo ");
\t\t\t
\t\t\tstyle = \$('#style').val();
\t\t\t\$('#style').val( ";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["SOAP_RPC"]) ? $context["SOAP_RPC"] : $this->getContext($context, "SOAP_RPC")), "html", null, true);
        echo ");
\t\t\t
\t\t\tencoding = \$('#encoding').val();
\t\t\t\$('#encoding').val(";
        // line 302
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
        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 311
            echo "   
   \t\t\t\t";
            // line 312
            if ($this->getAttribute((isset($context["parameter_name_pnv_loop"]) ? $context["parameter_name_pnv_loop"] : null), "index", array(), "any", true, true)) {
                // line 313
                echo "   \t\t\t\t
\t\t\t\t\t\$('#parameter_name_pnv_";
                // line 314
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "').val(parameter_name_pnv_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ");
\t\t\t\t\t\$('#parameter_value_pnv_";
                // line 315
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "').val(parameter_value_pnv_";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo ");
\t\t\t\t
\t\t\t\t";
            }
            // line 318
            echo "\t\t\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
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

";
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
        return array (  439 => 320,  432 => 318,  424 => 315,  418 => 314,  415 => 313,  413 => 312,  410 => 311,  406 => 310,  395 => 302,  389 => 299,  383 => 296,  259 => 175,  254 => 173,  250 => 172,  246 => 171,  242 => 170,  238 => 169,  234 => 168,  230 => 167,  226 => 166,  222 => 165,  217 => 163,  210 => 159,  207 => 158,  204 => 157,  176 => 131,  172 => 130,  155 => 116,  151 => 115,  135 => 102,  131 => 101,  29 => 3,);
    }
}
