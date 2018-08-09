/**
 * @author Kishor Mali
 */


jQuery(document).ready(function(){
	
	jQuery(document).on("click", ".deleteUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "deleteUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to disable this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				if(data.status = true) { alert("User successfully disable this user"); }
				else if(data.status = false) { alert("User deletion failed"); }
				else { alert("Access denied..!"); }
				location.reload();
			});
		}
	});
	
	jQuery(document).on("click", ".enableUser", function(){
		var userId = $(this).data("userid"),
			hitURL = baseURL + "enableUser",
			currentRow = $(this);
		
		var confirmation = confirm("Are you sure to enable this user ?");
		
		if(confirmation)
		{
			jQuery.ajax({
			type : "POST",
			dataType : "json",
			url : hitURL,
			data : { userId : userId } 
			}).done(function(data){
				console.log(data);
				if(data.status = true) { alert("User successfully enable this user"); }
				else if(data.status = false) { alert("User enable failed"); }
				else { alert("Access denied..!"); }
				location.reload();
			});
		}
	});

	jQuery(document).on("click", ".searchList", function(){
		
	});
	
});


