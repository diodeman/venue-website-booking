<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap');
		
	body
*{
	list-style: none;
	text-decoration: none;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Montserrat', sans-serif;
}

body{
	background: #7ddf96;
	color: #505978;
}

ul li a{
	display: block;
	color: #505978;
}

.navbar{
	width: 95%;
	margin: 80px auto;
	height: 60px;
	background: #fff;
	padding: 0 50px;
	border-radius: 3px;
}


ul.menu,
ul.social_items{
	display: flex;
}

.navbar ul.menu a{
	margin: 0 5px;
	width: 120px;
	padding: 12px;
	text-align: center;
	text-transform: uppercase;
	font-weight: 600;
	transition: all 0.2s ease;
}

.navbar .logo{
	font-weight: 700;
	font-size: 20px;
	letter-spacing: 0.5px;
}

.navbar .logo span{
	color: #7ddf96;
}

.navbar_1,
.navbar_2{
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.navbar.navbar_1 ul.menu a:hover,
.navbar.navbar_1 ul.menu a.active{
	background: #505978;
	color: #fff;
	border-radius: 3px;
}

.navbar.navbar_2 ul.menu a{
	border-radius: 30px;
}

.navbar.navbar_2 ul.menu a:hover,
.navbar.navbar_2 ul.menu a.active{
	background: #505978;
	color: #fff;
}

.navbar.navbar_2 ul.social_items a{
	margin: 0 5px;
	width: 35px;
	height: 35px;
	text-align: center;
	line-height: 35px;
	border-radius: 25px;
	transition: all 0.2 ease;
}

.navbar.navbar_2 ul.social_items a:hover{
	background: #505978;
	color: #fff;
}

.navbar_3,
.navbar_4{
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.navbar_3 .navbar_left,
.navbar_4 .navbar_left,
.navbar_right ul{
	display: flex;
	align-items: center;
}

.navbar_3 .menu{
	margin-left: 25px;
}

.navbar.navbar_3 .menu a{
	height: 60px;
	padding: 20px 12px;	
}

.navbar.navbar_3 .menu a:hover,
.navbar.navbar_3 .menu a.active{
	border-bottom: 3px solid #505978;
}

.navbar_right ul li a{
	margin: 0 5px;
	border: 1px solid #505978;
	padding: 5px 20px;
	border-radius: 3px;
	transition: all 0.2s ease;
}

.navbar_right ul li a:hover{
	background: #505978;
	color: #fff;
}

.navbar.navbar_4 .menu a:hover,
.navbar.navbar_4 .menu a.active{
	color: #7ddf96;
}

.search_box{
	position: relative;
	height: 35px;
	width: 225px;
}

.search_box input{
	position: absolute;
	top: 0;
	right: 0;
	border: 0;
	border: 1px solid #505978;
	width: 50px;
	height: 35px;
	border-radius: 3px;
	outline: none;
	padding: 10px;
	padding-right: 30px;
	transition: all 0.2s ease;
}

.search_box i{
	position: absolute;
	top: 8px;
	right: 10px;
	z-index: 1;
}

.search_box input:focus{
	width: 225px;
}
	</style>
</head>
<body>
		

		<div class="navbar navbar_2">
		<div class="logo"><span>Saika</span>Venue Booking Website</div>
		<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="#" class="active">Admin</a></li>
			<li><a href="managerhome.php">Mangaer</a></li>
			<li><a href="clienthome.php">Client</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="2contact.php">Contact</a></li>
		</ul>
		<ul class="social_items">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			<div class="search_box">
				<i class="fas fa-search"></i>
				<input type="text" class="input_search">
			</div>

		</ul>
	</div>

	
		</div>
	</div>

</div>	

</body>
</html>