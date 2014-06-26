$(document).ready(function  () {

	$('#events_form').on('click', function(e) {
		e.preventDefault();

		$.ajax ({
			type: 'post',
			url:  'events.php',
			data: $(this).serialize(),
			success: function(data) {
				if (data.added === "failed") {
					
					
					$("#messageModal").modal("show");
					
				}
				var div = $('#matches:last-child');
				div.append("<div>haha</div>");
/*
				$.each(data.friends, function  (index, val) {
					var li = $('<li>'+val+'</li>');

					ul.append(li);
				});  */
			}
		});
	});


});