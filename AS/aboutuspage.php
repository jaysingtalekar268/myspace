<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
  overflow: hidden;
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

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: orange;
  color: white;
}

.container {
  padding: 0 16px;
  text-decoration: none;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.text1:hover {
  color: black;
  transition-duration: 0.5s;

}


footer{
   text-align: center;
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
</style>

</head>
<body>
 <nav>
    <div class="topnav">
        <a href="homepage.php">Home</a>
        <a href="#news">Trending</a>
        <a href="contactus.php">Contact</a>
        <a class="active" href="aboutuspage.php">About</a>
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
        <h1 style="color:black">|About Us|</h1>
        <p class="text1">The motive of this platform is to connect the students together. <br>
            Help the people coming from different places of India to explore places around their college.<br> This portal contains all the popular eatries, medicos and all that you need! 
           <br> Happy surfing!</p>
      </div>
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="om bidve.jpeg" alt="Om" style="width:100%">
            <div class="container">
              <h2>Om Bidve</h2>
              <p class="title">CEO & Founder</p>
              <p></p>
              <a href="mailto:ombidve10@gmail.com">Email: Om Bidve</a>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="om bidve.jpeg" alt="Aditi" style="width:100%">
            <div class="container">
              <h2>Aditi Sambare</h2>
              <p class="title">CFO</p>
              <p></p>
              <a href="mailto:aditi.sambare20@pccoepune.org">Email: Aditi Sambare</a>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <img src="om bidve.jpeg" alt="Jaysing" style="width:100%">
              <div class="container">
                <h2>Jaysing Talekar</h2>
                <p class="title">CTO</p>
                <p></p>
                <a href="mailto:jaysingrao.talekar20@pccoepune.org">Email: Jaysing Talekar</a>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
          </div>
      
        <div class="column">
          <div class="card">
            <img src="om bidve.jpeg" alt="Vanshika" style="width:100%">
            <div class="container">
              <h2>Vanshika Dhar</h2>
              <p class="title">Chief Developer</p>
              <p></p>
              <a href="mailto:vanshika.dhar20@pccoepune.org">Email: Vanshika Dhar</a>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>

      <footer>
        © Copyright 2020, All Rights Reserved, Team FindMyMess.com
     </footer>
</body>
</html>