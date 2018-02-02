$(document).ready(function(){
		$('.table').on('click','.btn-edit',function(e){
		
		var inputs= $(this).parents('tr').find('.edit');
		inputs.each(function(){
			$(this).addClass('editAble').prop('disabled',false);
		});
		$(this).text("Cancel").removeClass('btn-edit').addClass('btn-cancel');
	});

	$('.table').on('click','.btn-cancel',function(e){
		
		var inputs= $(this).parents('tr').find('.edit');
		
		inputs.each(function(){
			$(this).removeClass('editAble').prop('disabled',true);
		});
		$(this).text("Edit").addClass('btn-edit').removeClass('btn-cancel');
	});

		$(".update-btn").click(function() {
			  var user = $(this).parents('tr').find('input[name="userid"]').val();
              var first = $(this).parents('tr').find('input[name="first"]').val();
              var last = $(this).parents('tr').find('input[name="last"]').val();
              var username = $(this).parents('tr').find('input[name="username"]').val();
              var phn = $(this).parents('tr').find('input[name="phn"]').val();

              $.post("modify_records.php", {
              	user:user, first:first, last:last, username:username, phn:phn 
              }, function(data){
              	 var inputs= $('.update-btn').parents('tr').find('.edit');
					inputs.each(function(){
					$(this).removeClass('editAble').prop('disabled',true);
				});
              });
		});

});