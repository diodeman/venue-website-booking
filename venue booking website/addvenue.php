<?php include('server2.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Venue Booking System</title>
	<style>

		 {
	margin: 0px; 
	padding: 0px;
}

		body
		{
			background: url("black2.jpg") no-repeat center;
  			width: 100%;
  			height: 130vh;
  			background-size: cover;
		}

		.header {
	width: 30%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;    
}

form, .content {
	width: 30%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px; 
}
		
		.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}

.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;  
}

.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px; 
}
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;  
}
.select{
	width: 90%;
	border: 1px solid brown;
	border-radius: 05px;
	box-shadow: 1px 1px 2px 1px grey;
	padding: 10px 15px 10px 15px;
}
	</style>
</head>
<body>
	<div class="header">
		
		<h2>Add Venue</h2>
	</div>

	<form method="post" action="addvenue.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>VenueName</label> 
			<input type="text" name="venuename" placeholder="Enter VenueName" />
		</div>
		
		<div class="input-group">
			<label>VenueLocation</label> 
			<input type="text" name="venuelocation" placeholder="Enter VenueLocation" />
		</div>

		<div class="input-group">
			<label>VenueCharges</label> 
			<input type="text" name="venuecharges" placeholder="Enter VenueCharges" />
		</div>

		<div class="input-group">
			<label>VenueContact</label> 
			<input type="text" name="venuecontact" placeholder="Enter VenueContact" />
		</div>

		<div class="input-group">
			<label>VenueType</label> 
			<input type="text" name="venuetype" placeholder="Enter VenueType" />
		</div>

		<div class="input-group">
			<label>VenueCapacity</label> 
			<input type="text" name="venuecapacity" placeholder="Enter VenueCapacity" />
		</div>

		<div class="input-group">
			<label> Availability: </label>
			<select name="availability">
				<option value=""> --Select-- </option>
				<option value="Yes"> YES </option>
				<option value="No"> NO </option>
			</select>
		</div>

		<div class="input-group">
			<label>Date</label> 
			<input type="Date" name="date" placeholder="Enter Date" />
		</div>

		<div class="input-group">
			<label>Time</label> 
			<input type="Time" name="time" placeholder="Enter Time" />
		</div>

		<div class="input-group">
			<label> Dining: </label>
			<select name="dining">
				<option value=""> --Select-- </option>
				<option value="Buffet"> BUFFET </option>
				<option value="Alacarte"> ALACARTE </option>
			</select>
		</div>

		</div>	
		<div class="input-group">
			<button type="submit" name="add" class="btn">Add</button>
		</div>
		
	</form>
</body>
</html>


