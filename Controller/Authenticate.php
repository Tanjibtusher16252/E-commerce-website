<?php
include 'dbConnect.php';
function login($userName,$password)

{
	$conn = connect();
	$query = $conn->prepare("SELECT * FROM user WHERE user = ? and password = ?");
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
?>