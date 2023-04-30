
<?php include 'db_connection.php'; ?>
<?php

$full_name=$_POST["full_name"];
$college_name=$_POST["college_name"];
$user_password=$_POST["user_password"];
$user_email=$_POST["user_email"];

$sql = "SELECT name ,password FROM login_details where name='$full_name'and email='$user_email'";
$result = $conn->query($sql);

if ($result->num_rows ==1) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["session_full_name"] = $row["name"];
    

  //  echo "- Name: " .  $_SESSION["session_full_name"]. " " . $row["password"]. "<br>";
   
  }
  header("Location:http://localhost/smartcollege/AS/registration_failed.php");
    exit; // <- don't forget this!
}
  else{

$sql = "INSERT INTO login_details VALUES('$full_name','$college_name','$user_email','$user_password')";
// $sql = "INSERT INTO login_details VALUES('JAYSING','PCCOE','JAY','JAYSING')";

if ($conn->query($sql) === TRUE)
 {
  echo "New record created successfully";
  

    header("Location:http://localhost/smartcollege/AS/registration_success.php");
    exit; // <- don't forget this!


} 
else
 {

  echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

$conn->close();


?>
