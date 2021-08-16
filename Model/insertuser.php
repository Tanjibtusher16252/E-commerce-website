<?php
include 'dbConnect.php';
    function register($Fullname,$userName,$password)
    {

	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO user(Fullname,userName,password) VALUES(?,?,?)");
	$stmt->bind_param("sss",$Fullname,$userName,$password);
	$res = $stmt->execute();
	return $res;
}


?>