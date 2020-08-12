<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <style>
       *{
        
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans";
}


.loader-container{
    width: 100%;
    height: 100vh;
    background-color: #111;
    position: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader{
    width: 50px;
    height: 50px;
    border: 5px solid;
    color: #3498db;
    border-radius: 50%;
    border-top-color: transparent;
    animation: loader 1.2s linear infinite;
}

@keyframes loader{
    25%{
        color: #1E185C;
    }
    50%{
        color: #f1c40f;
    }
    75%{
        color: #176638;
    }
    to{
        transform: rotate(360deg);
    }
}

    </style>
</head>
<body>
    <div class="loader-container">
        <div class="loader"></div>
    </div>


    <script>
        $(window).on("load",function(){
            $(".loader-container").fadeOut(1000);
        });
    </script>
</body>
</html>


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
    background: #579c69;
    color: #647097;
}

ul li a{
    display: block;
    color: #505978;
}

.navbar{
    width: 95%;
    margin: 80px auto;
    height: 65px;
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
    letter-spacing: 1px;
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
    border-radius: 40px;
}

.navbar.navbar_2 ul.menu a:hover,
.navbar.navbar_2 ul.menu a.active{
    background: #505978;
    color: #fff;
}

.navbar.navbar_2 ul.social_items a{
    margin: 1px;
    width: 40px;
    height: 30px;
    text-align: center;
    line-height: 40px;
    border-radius: 30px;
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
    padding-right: 20px;
    transition: all 0.2s ease;
}

.search_box i{
    position: absolute;
    top: 8px;
    left: 5px;
    z-index: 1;
}

.search_box input:focus{
    width: 230px;
}

.banner-content{
  padding: 60px 0 0 30px;
  text-transform: uppercase;
  color: #FFFFFF;
}

.banner-content p{
  font-size: 25px;
}

.banner-content .btn{
  margin-top: 15px;
  border: 2px solid #364a4b;
  width: 200px;
  text-align: center;
  padding: 10px 0;
  cursor: pointer;
  font-weight: bold;
  border-radius: 5px;
  letter-spacing: 2px;
  transition: all 0.5s ease;
}

.banner-content .btn:hover{
  background: #364a4b;
  color: #d6c2b7;
}

.sub-container{
  width: 100%;
  overflow: hidden;
  background: #364a4b;
  color: #d6c2b7;
  padding: 50px;
  box-sizing: border-box;
  text-align: center;
}

.middle{
  width: 100%;
  margin: 0 auto;
} 

.middle .inner-container{
  width: 46%;
  float: left;
  color: #364a4b;
  background: #d6c2b7;
  padding: 50px;
  box-sizing: border-box;
  margin: 2.6%;
  text-align: center;
}

.middle .inner-container:last-child{
  margin-left: 0;
}

.sub-container.last{
  clear: both;
}

footer
{
    clear: both;
    width: auto;
    height: 40px;
    padding: 10px;
    text-align: center;
    position: relative;
    display: flex;
    list-style: none;
    color: black;   
}

   *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open Sans";
}


    </style>
</head>
<body>

     <div class="navbar navbar_2">
         <div class="logo"><img src="logo.png"></a>
    </div>
        <div class="logo"><span>Saika</span>Venue Booking Website</div>
        <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="managerhome.php">Manager</a></li>
            <li><a href="clienthome.php">Client</a></li>
            <li><a href="register.php">Signup</a></li>
            <li><a href="2contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
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
    <div class="banner-content">
    <h1>Welcome to Venue Booking Website</h1>
    <p>
            Welcome to Saika Venue Online Booking System.Saika Venue Online Booking System Basically entails  a website where a Venue Manger can create an account  a venue/venues into the system.From here  a client or customer can create an account and register as client then view the available venues and book the venue according to their event requirements and the necessary details and sheduling.   
        </p>
    <div class="btn">VIEW MORE</div>
  </div>
</div>  
  
<div class="container">
  <div class="sub-container">
    <p>Saika Venue Online Booking System.Saika Venue Online Booking System Basically entails  a website where a Venue Manger can create an account  a venue/venues into the system.From here  a client or customer can create an account and register as client then view the available venues and book the venue according to their event requirements and the necessary details and sheduling.
    </p>
  </div>
  
  <div class="sub-container last">
    <p>
     The Customers have to fill in the forms key in every single required field and book the venue.The manager will then processes the request and reply to the client of the availability of the venue, the charges and booking id and sends back an email or text to notify the user.   

    </p>
  </div>
</div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>

</body>
</html>
        


