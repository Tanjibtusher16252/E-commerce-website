<?php
$email=$_GET['email'];
echo $email;

$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "e-commerce";

    
    $conn1 = new mysqli($host, $user, $pass, $db);
mysqli_query($conn1,"delete from manager where email='$email'");
 header("location:manager_list.php");

?>