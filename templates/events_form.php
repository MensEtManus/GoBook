<form id="events_form" action="">
    <fieldset>
    	<label>What would you like to do this week?</label>
    	<select name="eventName" class="form-control">
  			<optionvalue="Go to the movies">Go to the movies</option>
		  	<optionvalue="Go to the Gym">Go to the Gym</option>
		  	<optionvalue="Go grocery shopping">Go grocery shopping</option>
		  	<optionvalue="Go to the malls">Go to the malls</option>
		  	<optionvalue="Study for my classes">Study for my classes</option>
		</select>
		<br>
		<label>What day would you like to do it?</label>
		<select name="eventDate" class="form-control">
  			<option value="1">Monday</option>
		  	<option value="2">Tuesday</option>
		  	<option value="3">Wednesday</option>
		  	<option value="4">Thursday</option>
		  	<option value="5">Friday</option>
		  	<option value="6">Saturday</option>
		  	<option value="7">Sunday</option>
		</select>
		<br>
		<label>What time on that day would you like to do it?</label>
		<select name="time" class="form-control">
  			<option value="1">Mornign</option>
		  	<option value="2">Afternoon</option>
		  	<option value="3">Evening</option>
		</select>

        <div class="form-group">
            <button type="submit" class="btn btn-success bth-block">Add to My GoBook</button>
        </div>
    </fieldset>
</form>

