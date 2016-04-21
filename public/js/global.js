$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function getScaleValues(scale_id) {
	$.ajax({
		url: '/ajax/getScaleValues',
		method: "post",
		async: false,
		data: {'scale_id' : scale_id},
		success: function(returnData) {
			
		},
		error: function(returnData) {
			console.log(returnData);
		},
	});
}