<?php
include 'dbConnect.php';
    function getproduct()
    {

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM product");
	
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}

function getUser($userName){

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM product WHERE product=?");
	$stmt->bind_param("s",$productName);
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}
function delete($id){

	$conn = connect();
	$stmt = $conn->prepare("DELETE FROM product WHERE id=?");
	$stmt->bind_param("s",$id);
	return $stmt->execute();

}
