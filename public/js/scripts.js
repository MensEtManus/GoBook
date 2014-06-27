$(document).ready(function() {

	function update_events() {
		$.ajax ({
			type: 'post',
			url: 'load.php',
			data: $(this).serialize(),
			success: function(json) {
				var events = json.events;
				var matches = json.matches;
				var friends = json.friends.sort();
				var tr = $('#my_events');
				if (events.length !== 0) {
					$('.defaut-events-msg').hide();
				}
				for (var i = 0; i < events.length; i++) {
					tr.append('<tr>' + '<td>' + events[i]["eventName"] +'</td>' 
						+ '<td>' + events[i]["eventDate"] +'</td>'
						+ '<td>' + events[i]["time"] +'</td>'
						+ '<td>' + '<input type="checkbox">' + '</td>' + '</tr>'); 
				}
			

				var div = $('#matches:last-child');
				for (var i = 0; i < matches.length; i++) {
					div.append('<p style="padding: 5px;">' + matches[i]["userName"] + " wants to " + matches[i]["eventName"] 
						+ ' on ' + matches[i]["eventDate"] + ' ' + matches[i]["time"] + '<button class="btn btn-success btn-sm pull-right">Yes</button></p>');
				}
				if (matches.length !== 0) {
					$('#default-match-msg').hide();
				}
					
				var li = $('#friend_list');
				for (var i = 0; i < friends.length; i++) {
					li.append('<li>' + '<a href="#">' + '<i class="glyphicon glyphicon-user">' + '</i>' + '  ' + friends[i]["userName"] + '</a>' + '</li>');
				}

			}
		});
	}
	
	$('#events_form').submit(function(e) {
		e.preventDefault();
		$("#postModal").modal("hide");

		$.ajax ({
			type: 'post',
			url:  'events.php',
			data: $(this).serialize(),
			success: function(data) {
				if (data.added === "failed") {
					$("#warningModal").modal("show");
					
				}
				else {
					update_events();					
				}
				
			}
		});
	});

	$('#search_form').submit(function(e) {
		e.preventDefault();
		$.ajax ({
			type: 'post',
			url:  'friend.php',
			data: $(this).serialize(),
			success: function(json) {
				if (json.added_friend === "failed") {
					$("#failAddFriendModal").modal("show");
					
				}
				else {
					update_events();					
				}
				
			}
		});
	});
	update_events();
	
	
	
});