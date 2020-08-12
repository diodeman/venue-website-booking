<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Dont have an Account</title>
	<style>
		* {
	margin: 0px; 
	padding: 0px;
}
body {
	font-size: 120%;
	background: url('blue2.jpg') no-repeat top center;
  	background-size: cover;
  	height: 100vh;
	font-size: 100%;
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

.success {
	color: #3c763d;
	background: #dff0d8;
	border: 1px solid #3c763d;
	margin-bottom: 20px;
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
		
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<!-- display validation errors here -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username*</label> 
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email*</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label> LoginType* </label>
			<select name="logintype">
				<option value=""> --Select-- </option>
				<option value="Client"> CLIENT </option>
				<option value="Venue Manager"> VENUE MANAGER </option>
			</select>
		</div>

		<div class="input-group">
			<label> SelectGender* </label>
			<select name="selectgender">
				<option value=""> --Select-- </option>
				<option value="Male"> MALE </option>
				<option value="Female"> FEMALE </option>
			</select>
		</div>
		
		<div class="input-group">
			<label>Password*</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm Password*</label>
			<input type="password" name="password_2">
		
		</div>	
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a user? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>

