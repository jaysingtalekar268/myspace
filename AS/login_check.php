<?php
// Start the session
session_start();
?>

<?php include 'db_connection.php'; ?>
<?php

$full_name=$_POST["full_name"];

$user_password=$_POST["user_password"];


$_SESSION["pass"] = FALSE;
$_SESSION["pass_main"] = 'n';


// $sql = "SELECT name, password FROM login_details ";
$sql = "SELECT name ,password FROM login_details where name='$full_name'and password='$user_password'";
$result = $conn->query($sql);

if ($result->num_rows ==1) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["session_full_name"] = $row["name"];
    echo "- Name: " .  $_SESSION["session_full_name"]. " " . $row["password"]. "<br>";
   
  }
  
// Set session variables
$_SESSION["pass"] = TRUE;
$_SESSION["pass_main"]= 'y';



echo "Session variables are set.";



echo '<script>alert("Successfully Loged")</script>';
  header("Location:http://localhost/smartcollege/AS/homepage.php");
  exit; // <- don't forget this!
} else {
  
  header("Location:http://localhost/smartcollege/AS/index.php");
  exit; // <- don't forget this!
}

$conn->close();


?>
