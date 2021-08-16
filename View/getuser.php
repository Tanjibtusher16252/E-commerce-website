<?php
include 'dbConnect.php';
    function getAll()
    include 'dashboard.php';
    {

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM user");
	
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}

function getUser($userName)
{

	$conn = connect();
	$stmt = $conn->prepare("SELECT * FROM user WHERE user=?");
	$stmt->bind_param("s",$userName);
	$stmt->execute();
	$record = $stmt->get_result();
	return $record->fetch_all(MYSQLI_ASSOC);
}
function delete($id){

	$conn = connect();
	$stmt = $conn->prepare("DELETE FROM user WHERE id=?");
	$stmt->bind_param("s",$id);
	return $stmt->execute();

}

?>
