<?php 

{  
    echo '<script>alert("user already existed")</script>';
    
     header("Location:http://localhost/smartcollege/AS/index.php");
    exit; // <- don't forget this!
}
?>