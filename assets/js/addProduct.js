/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addProductForm = $("#addProduct");
	
	var validator = addProductForm.validate({
		
		rules:{
			name :{ required : true },
			desc : { required : true}, 
			img : { required : true },
			catagory : { required : true, selected : true}
		},
		messages:{
			name :{ required : "This field is required" },
			desc : { required : "This field is required",
			img : { required : "This field is required" },
			catagory : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});
});
