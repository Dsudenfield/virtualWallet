(function($){
	$(document).ready(function(){

		$('#static_wrapper .add_new').click(function() {
			var clone = $('#static_wrapper').find(".row").eq(0).clone().insertAfter($('#static_wrapper').find(".row").eq(0));
			$(clone).append('<a href="javascript:void(0);" class="delete">Delete</a>')
		})

		$("#static_wrapper").delegate('.delete', 'click', function(e){
			$(this).parents().eq(0).remove();
		});

		$('#misc_wrapper .add_new').click(function() {
			console.log()
			var clone = $('#misc_wrapper').find(".row").eq(0).clone().insertAfter($('#misc_wrapper').find(".row").eq(0));
			$(clone).append('<a href="javascript:void(0);" class="delete">Delete</a>')
		})

		$("#misc_wrapper").delegate('.delete', 'click', function(e){
			$(this).parents().eq(0).remove();
		});
	});


})(jQuery);