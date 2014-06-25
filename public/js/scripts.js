$(document).ready(function  () {

	$('#events_form').on('submit', function(e) {
		e.preventDefault();

		$.ajax ({
			type: 'post',
			url:  'events.php',
			data: $(this).serialize(),
			success: function(data) {
				if (data.success === false) {
					if (data.message === 'username') {
						
				}
				if(data.success === true){
					
				}else{

				}
			}
				if(data.success === true){
					window.location.href = 'index.php';
				}else{

				}
			}
		});
	});


});