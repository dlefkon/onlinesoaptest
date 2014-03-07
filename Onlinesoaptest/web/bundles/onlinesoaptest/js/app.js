var wsdl = '';
var endpoint = '';
var version = '';
var style = '';
var encoding = '';
var operation = '';
var parameter_name = '';
var parameter_value = '';
	
$(document).ready(function() {
	
//	$("form").validate();
	
	$('#submit').on('click', function(){
	    if($('form').valid()) getOperations();
	});
	
});