<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Home</title>
<style>
  body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.topnav {
  background-color: #333;
  /* overflow: hidden; */
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: orange;
  color: white;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: black;
  color: white;
}
fmm:hover{
    text-decoration: overline;
    background-color: white;
}

.container {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

.container1 {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

.container2 {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

.container3 {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

.container4 {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

.container5 {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  padding: 2%;
  margin: 2%;
  border-radius: 10px;
  text-align: center;

  font-weight: bold;
  flex: 1 0 200px;
  height: 500px;
  border-right: 4px solid black;
  border-bottom: 4px solid black;
  background-color: orange;
}

button {
  background-color: white; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  padding: 20px 28px;
  font-size: medium;
}

button:hover {
      background-color: black;
      color: white;
      transition: 0.7s;
  }

  .fmm:hover{
       color : black;
      transition: 1s;
  }

  footer{
   text-align: center;
  }

  .about-section:hover{
    background-color: white;
    transition-duration: 1s;
  }
   .fa-user{
      color:red;
      
      
   }
   
   .dropbtn {
    background-color: #04AA6D;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: #3e8e41;}
  
    img{
      display: inline-block;
      height: 400px;
      border-radius: 5px;
    }
  
</style>

</head>
<body>
    <nav>
        <div class="topnav">
            <a class="active"  href="homepage.php">Home</a>
            <a href="#news">Trending</a>
            <a href="contactus.php">Contact</a>
            <a href="aboutuspage.php">About</a>
            <a href="index.php">Login/Signup</a>
            <div class="dropdown">
            <?php 
          if(isset($_SESSION["pass"]))
          {
           if (   $_SESSION["pass"] = TRUE)
           {
            
            echo "<button id='login_button'> <i class='fa fa-user'></i>{$_SESSION['session_full_name']}</button>";
           echo" <div class='dropdown-content'>
    <a href='index.php'>Logout</a>
    
  </div> ";
           }

          }
            else
            {
            echo "<button id='login_button'> <i class='fa fa-user'>User</i></button>";
            } 
            ?>
  <!-- <div class="dropdown-content">
    <a href="#">Logout</a>
    
  </div> 
</div>
          -->
          </div>
          </div>
     </nav>
     <div class="about-section">
        <h1 class="fmm" style="color:whitesmoke">Messearch</h1>
        
     </div>
<div class="container">
        <img alt="" src="thali.jpg">
        <p>Unlimited Thali</p>
     <button type="submit" class="msgBtn" onClick="btn();" >Browse</button>
    </div>

    <div class="container1">
        <img alt="" src="cuisine.jpg">
        <p>Multi Cuisune Restaurant</p>
        <button onClick="btn()" >Browse</button>
    </div>

    <div class="container2">
        <img alt="" src="juice_2.jpg">
        <p>Juice Center</p>
         <button type="submit" class="msgBtn" onClick="btn()" >Browse</button>
    </div>

    <div class="container3">
        <img alt="" src="lifestyle.jpg">
        <p>Lifestyle</p>
         <button type="submit" class="msgBtn" onClick="btn()" >Browse</button>
    </div>

    <div class="container4">
        <img alt="" src="medical.jpg">
        <p>Medical</p>
         <button type="submit" class="msgBtn" onClick="btn()" >Browse</button>
    </div>

    <div class="container5">
        <img alt="" src="cafe.jpg">
        <p>Cafes</p>
         <button type="submit" class="msgBtn" onClick="btn()" >Browse</button>
    </div>

    <footer>
        © Copyright 2020, All Rights Reserved, Team FindMyMess.com
     </footer>
    

     <script>
        function btn() {
          alert("No registrations has been done yet!");
        }
        </script>
</body>
</html>