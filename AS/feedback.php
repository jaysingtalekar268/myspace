
<?php include 'db_connection.php'; ?>
<?php

$fname=$_POST["feed_fname"];
$lname=$_POST["feed_lname"];
$user_feed=$_POST["feed_back"];




$sql = "INSERT INTO store_feedback VALUES('$fname','$lname','$user_feed')";
// $sql = "INSERT INTO login_details VALUES('JAYSING','PCCOE','JAY','JAYSING')";

if ($conn->query($sql) === TRUE)
 {
  
// echo "- Name: " .  $fname;
  
  

    header("Location:http://localhost/smartcollege/AS/homepage.php");
    exit; // <- don't forget this!


} 
else
 {

  echo "Error: " . $sql . "<br>" . $conn->error;

  }

$conn->close();


?>
