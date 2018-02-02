$(document).ready(function(){
	$('#f_name').blur(function(){
		var fname =$(this).val();
		if(fname.length < 4){

			 $('.msg').text("First_name length is less, it should contain minimum 4");
		} else{
			 $('.msg').text("");
		}
	});
	   $('#l_name').blur(function(){
		var lname =$(this).val();
		if(lname.length < 4){

			 $('.msg1').text("Last_name length is less, it should contain minimum 4");
		} else{
			 $('.msg1').text("");
		}     
    });

 
	});