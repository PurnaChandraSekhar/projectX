$(document).ready(function() {
	 $('.table').on('click','.btn-edit',function() {
	 	var inputs= $(this).parents('tr').find('.editt');
	 	inputs.each(function() {
	 		$(this).addClass('editAble').prop('disabled',false);
	 	});
	 	$(this).text('Cancel').removeClass('btn-edit').addClass('btn-cancel');
	 });
	 $('.table').on('click','.btn-cancel',function(){
		
		var inputs= $(this).parents('tr').find('.editt');
		
		inputs.each(function(){
			$(this).removeClass('editAble').prop('disabled',true);
		});
		$(this).text("Edit").addClass('btn-edit').removeClass('btn-cancel');
	});

	 $('.btn-update').on('click', function() {
	 	   var cid = $(this).parents('tr').find('input[name="cid"]').val();
           var cname = $(this).parents('tr').find('input[name="cname"]').val();

           $.post("modify_candidate.php", {
           	cname:cname, cid:cid},function(data){
              	 var inputs= $('.btn-update').parents('tr').find('.editt');
					inputs.each(function(){
					$(this).removeClass('editAble').prop('disabled',true);
				});
              });
	 });
 
});