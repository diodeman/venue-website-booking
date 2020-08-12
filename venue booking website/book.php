<!DOCTYPE html>
<html>
<head>
	<title>Venue Booking System</title>
	<style>

		 {
	margin: 0px; 
	padding: 0px;
}

		body{
			background-color: #676767;
			font-size: 120%;
			background: url("black2.jpg") no-repeat center;
  			width: 100%;
  			height: 100vh;
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
	</style>
</head>
<body>

	<div class="header">
		
		<h2>Book Venue</h2>
	</div>

	<form method="POST" action="book.php" >
		
		<div class="input-group">
			<label>CustomerName</label> 
			<input type="text" name="customername" placeholder="Enter CustomerName" />
		</div>

		<div class="input-group">
			<label>Address</label> 
			<input type="text" name="address" placeholder="Enter Address" />
		</div>

		<div class="input-group">
			<label>PhoneNumber</label> 
			<input type="text" name="phonenumber" placeholder="Enter PhoneNumber" />
		</div>

		<div class="input-group">
			<label>Email</label> 
			<input type="text" name="email" placeholder="Enter Email" />
		</div>

	
		<div class="input-group">
			<button type="submit" name="book" class="btn">Book</button>
		</div>
		
	</form>
</body>
</html>


