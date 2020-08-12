<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="shortcut icon" href="favicon.ico" >
        <title>Home</title>
        <style >
            body
{
    font-family: lucida grande ,tahoma,montserrat,arial,sans-serif;
    background: url('wall3.jpg') no-repeat center;
    background-size: cover;
    padding: 40px 0;
}

body p
{
    font-size: 1.0em;
    line-height: 1.28;
}

#wrapper
{
    width: 1140px;
    background-color: grey;
    margin: 0 auto;
    padding: 10px;
    border: 10px solid #0082e6;
}

#banner
{
    background-color:black; 
    background-repeat: no-repeat;
    background-size: cover;    
    height: 200px;
}

label.logo
{
    color: white;
    font-size: 80px;
    line-height: 80px;
    padding: 25 100px;
    font-weight: bold;
}


#content_area
{
    float: left;
    width: 1080px;
    margin: 20px 0 20px 0;
    padding: 10px;
}

#sidebar
{
    float: right;
    width: 1100px;
    height: 400px;
    margin: 20px 10px;
    padding: 10px;
    border: 2px solid #0082e6;
}

footer
{
    clear: both;
    width: auto;
    height: 40px;
    padding: 10px;
    border: 3px solid #0082e6;
    text-align: center;
    color: #0082e6;
    text-shadow: 0.1em 0.1em #333;
    background-color:black; 
}

#navigation
{
    height: 60px;
    border: 3px solid #0082e6;
    margin-top: 20px;
    text-shadow: 0.05em 0.05em #333;
    background-color:black;

}

#nav
{
    list-style: none;
}

#nav ul
{
    margin: 0;
    padding: 0;
    width: auto;
    display: none;
}

#nav li
{
    font-size: 22px;
    float: left;
    position: relative;
    width: 160px;
    height: 40px;
}

#nav a:link, nav a:active, nav a:visited
{
    display: block;
    color: #fff;
    text-decoration: none;
}

#nav a:hover
{
    color: blue;
}

.imgLeft
{
    float: left;
    width: 240px;
    height: 150px;
    margin: 0px 10px 10px 0;
    padding: 10px;
}

.imgRight
{
    float: right;
    width: 200px;
    height: 200px;
    margin: 0px 0 10px 10px;
    padding: 10px;
}

.slidershow{
  width: 1100px;
  height: 400px;
  overflow: hidden;
}
.middle{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.navigation{
  position: relative;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.bar{
  width: 50px;
  height: 10px;
  border: 2px solid #fff;
  margin: 6px;
  cursor: pointer;
  transition: 0.4s;
}
.bar:hover{
  background: #fff;
}

input[name="r"]{
    position: absolute;
    visibility: hidden;
}

.slides{
  width: 350%;
  height: 90%;
  display: flex;
}

.slide{
  width: 20%;
  transition: 0.6s;
}
.slide img{
  width: 90%;
  height: 90%;
}

#r1:checked ~ .s1{
  margin-left: 0;
}
#r2:checked ~ .s1{
  margin-left: -20%;
}
#r3:checked ~ .s1{
  margin-left: -40%;
}
#r4:checked ~ .s1{
  margin-left: -60%;
}
#r5:checked ~ .s1{
  margin-left: -80%;
}

        </style>
    </head>
    <body>

        <div id="wrapper">
            <div id="banner">   
             <label class="logo">Saika Booking Website</label>          
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="addvenue.php">Add Venue</a></li>
                    <li><a href="viewrequest.php">View Request</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            
            <div id="content_area">

        <img src="Images/venue.jpg" class="imgLeft" />
        <p>
            Welcome to Saika Venue Online Booking System.Saika Venue Online Booking System Basically entails  a website where a Venue Manger can create an account  a venue/venues into the system.From here  a client or customer can create an account and register as client then view the available venues and book the venue according to their event requirements and the necessary details and sheduling.   
        </p>

        <img src="Images/venue.jpg" class="imgRight" />
        <p>
          The Customers have to fill in the forms key in every single required field and book the venue.The manager will then processes the request and reply to the client of the availability of the venue, the charges and booking id and sends back an email or text to notify the user.   

         </p>

         <img src="Images/venue.jpg" class="imgLeft" />
         <p>
            Canada is one of the best countries in the world to live in. First, Canada has an
            excellent health care system. All Canadians have access to medical services at a reasonable
            price. Second, Canada has a high standard of education. Students are taught by well‐trained
            teachers and are encouraged to continue studying at university. Finally, Canada's cities are clean
            and efficiently managed. Canadian cities have many parks and lots of space for people to live. As
            a result, Canada is a desirable place to live.  

         </p>

            </div>
            
            <div id="sidebar">
                

                <body>
    
    <div class="slidershow middle">

      <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2">
        <input type="radio" name="r" id="r3">
        <input type="radio" name="r" id="r4">
        <input type="radio" name="r" id="r5">
        <div class="slide s1">
          <img src="wedding pic.jpg" alt="">
        </div>
        <div class="slide">
          <img src="event 2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="event 3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="event pic.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Events4.jpg" alt="">
        </div>

        <div class="slide">
          <img src="venue1.jpg" alt="">
        </div>
      </div>

      <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
        <label for="r4" class="bar"></label>
        <label for="r5" class="bar"></label>
      </div>
    </div>
  </body>
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>


