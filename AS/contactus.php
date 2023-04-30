<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
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


@import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

* {
  box-sizing: border-box;
}

body {
    background: orange; 
    /* background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  
    background: linear-gradient(to right, #8f94fb, #4e54c8);      */
  font-family: 'Montserrat', sans-serif;
  overflow: hidden;
  height:100vh;
}

.panel-container {
  background-color: #12192c;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  border-radius: 15px;
  font-size: 90%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 30px;
  max-width: 400px;
  color: white;
  margin:10% auto 2% auto;
}

.panel-container strong {
  line-height: 20px;
}

.ratings-container {
  display: flex;
  margin: 20px 0;
}

.rating {
  flex: 1;
  cursor: pointer;
  padding: 20px;
  margin: 10px 5px;
}

.rating:hover,
.rating.active {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.rating img {
  width: 40px;
}

.rating small {
  color: #fff;
  display: inline-block;
  margin: 10px 0 0;
}

.rating:hover small,
.rating.active small {
  color: #8f94fb;
}

.btn {
  background-color: #8f94fb;
  color: #000;
  border: 0;
  border-radius: 4px;
  padding: 12px 30px;
  cursor: pointer;
}

.btn:focus {
  outline: 0;
}

.btn:active {
  transform: scale(0.98);
}

.fa-heart {
  color: red;
  font-size: 30px;
  margin-bottom: 10px;
}


.credit a{
    text-decoration: none;
    color: #fff;
  }

  .credit {
      text-align: center;
  }

  .form{
    width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  text-align: center;
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

    </style>
</head>
<body>

    <nav>
        <div class="topnav">
            <a href="homepage.php">Home</a>
            <a href="#news">Trending</a>
            <a class="active" href="contactus.php">Contact</a>
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


     
    <div id="panel" class="panel-container">
        <strong>How satisfied are you with our <br /> customer support performance?</strong>
        <div class="ratings-container">
          <div class="rating">
            <img src="https://image.flaticon.com/icons/svg/187/187150.svg" alt="">
            <small>Unhappy</small>
          </div>
  
          <div class="rating">
            <img src="https://image.flaticon.com/icons/svg/187/187136.svg" alt=""/>
            <small>Neutral</small>
          </div>
  
          <div class="rating active">
            <img src="https://image.flaticon.com/icons/svg/187/187133.svg" alt=""/>
            <small>Satisfied</small>
          </div>
        </div>
        <button class="btn" id="send">Send Review</button>
      </div>

      <div class="form">
      
      
            <form action="feedback.php" method="post">
            <label >First name:</label><br>
              <input type="text" name="feed_fname"><br>
              <label >Last name:</label><br>
              <input type="text" name="feed_lname"><br>
              <label >Feedback:</label><br>
              <input type="text" name="feed_back"><br>
             
              <input type="submit" value="submit"/><br>
            </form>
      </div>
      <footer>
        © Copyright 2020, All Rights Reserved, Team FindMyMess.com
     </footer>





     <><script>
        
const ratings = document.querySelectorAll('.rating')
const ratingsContainer = document.querySelector('.ratings-container')
const sendBtn = document.querySelector('#send')
const panel = document.querySelector('#panel')
let selectedRating = 'Satisfied'

ratingsContainer.addEventListener('click', (e) => {
    if(e.target.parentNode.classList.contains('rating')) {
        removeActive()
        e.target.parentNode.classList.add('active')
        selectedRating = e.target.nextElementSibling.innerHTML
    }
    if(e.target.classList.contains('rating')) {
        removeActive()
        e.target.classList.add('active')
        selectedRating = e.target.nextElementSibling.innerHTML
    }

})

sendBtn.addEventListener('click', (e) => {
    panel.innerHTML = `
        
        Thank You!
        
        Feedback : ${selectedRating}
        We'll use your feedback to improve our customer support
    `
})

function removeActive() {
    for(let i = 0; i < ratings.length; i++) {
        ratings[i].classList.remove('active')
    }
}


     </script>
</body>
</html>