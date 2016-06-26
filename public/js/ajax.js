$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function getScaleValues(scale_id, parent_name) {
	$('#' + parent_name + '_wrapper').remove();
	$.ajax({
		url: '/ajax/getScaleValues',
		method: "post",
		async: false,
		data: {'scale_id' : scale_id},
		success: function(returnData) {
			console.log(returnData)
			if(returnData == 'false') {
				html = '<div id="' + parent_name + '_wrapper" class="form-group col-md-2">';
				html += '<label for="date">When Was Your Last?</label>';
				html += '<input class="form-control" required="required" name="date" type="date">';
				html += '</div>';
				$('#' + parent_name).append(html)
			} else if(returnData instanceof Array) {
				html = '<div id="' + parent_name + '_wrapper" class="form-group col-md-2">';
				html += '<label for="date">What Day?</label>';
				html += '<select id="' + parent_name + '_child" class="form-control" required="required" name="date">';
				html += '</select></div>';
				$('#' + parent_name).append(html)
				$.each(returnData, function (key, val) {
					$('#' + parent_name + '_child').append('<option value=' + val + '>' + val + '</option>')
				});
			}
		},
		error: function(returnData) {
			console.log(returnData);
		},
	});
}