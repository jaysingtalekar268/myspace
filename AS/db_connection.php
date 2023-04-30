<?php 
echo "hello";

$servername="localhost";
$username="root";
$password="root";
$dbname="college";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  else{

  echo "Connected successfully";
  }

?>