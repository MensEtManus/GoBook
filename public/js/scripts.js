$(document).ready(function  () {

	$('#events_form').submit(function(e) {
		e.preventDefault();
		
		$.ajax ({
			type: 'post',
			url:  'events.php',
			data: $(this).serialize(),
			success: function(data) {
				if (data.added === "failed") {
					$("#postModal").modal("hide");

					$("#warningModal").modal("show");
					
				}
				else {
					$("#postModal").modal("hide");
					var div = $('#matches:last-child');

					div.append('<p style="padding: 5px;">haha <button class="btn btn-success btn-sm pull-right">Yes</button></p>');
					$('#default-match-msg').hide();
/*
					$.each(data.friends, function  (index, val) {
						var li = $('<li>'+val+'</li>');
						ul.append(li);
					});  */
				}
				
			}
		});
	});
});