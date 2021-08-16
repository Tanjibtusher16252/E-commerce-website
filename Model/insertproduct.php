<?php
include 'dbConnect.php';
    function register($Productame,$productid)
    {

	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO product(Productname,productid) VALUES(?,?)");
	$stmt->bind_param("ss",$Productname,$productid);
	$res = $stmt->execute();
	return $res;
}


?>