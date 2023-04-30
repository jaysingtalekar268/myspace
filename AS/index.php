<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn & SignUp Form</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
// remove all session variables
// echo "- Name: " .  $_SESSION["session_full_name"];
session_unset();

// echo "- Name: " .  $_SESSION["session_full_name"]. " " . $row["password"]. "<br>";
?>
<?php 
if(isset($_SESSION["pass"])==FALSE)
{
    echo '<script>alert("Please...Login Again")</script>';
}
?>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form  autocomplete="off" action="login_check.php" method="post" class="sign-in-form">
                        <div class="logo">
                           <img src="messearch.png" alt="messearch">
                           <h3>messearch</h3>
                        </div>
                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registered yet?</h6>
                            <a href="#" class="toggle">Sign Up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="full_name" class="input-field" autocomplete="off" required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4"  name="user_password" class="input-field" autocomplete="off"  required />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn"/>

                            <p class="text">
                                Forgotten your password or your login details?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>
                   
                    <form  autocomplete="off" action="manage_db.php" method="post"  class="sign-up-form">
                        <div class="logo">
                           <img src="messearch.png" alt="messearch">
                           <h3>messearch</h3>
                        </div>
                        <div class="heading">
                            <h2>Get Messearching!</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign In</a>
                            </div>
                        

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" name="full_name" class="input-field" autocomplete="off" required />
                                <label>Full Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="text" minlength="4" name=" college_name" class="input-field" autocomplete="off" required />
                                <label>College name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="user_email" class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" name="user_password" class="input-field" autocomplete="off"  required />
                                <label>Password</label>
                            </div>

                            <input type="submit"  value="Sign Up" class="sign-btn"/>

                            <p class="text">
                                By signing up, I agree to the <a href="#">Terms of Services</a> and <a href="#">Privacy Policy</a> 
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel"></div>
            </div>
        </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>   
</body>
</html>