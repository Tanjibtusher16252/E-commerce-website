<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="stylesheet/style.css">
<title>Static</title>



</head>
<body>
 
<?php include 'static_header.php';?>
<br>
<br>
<br>




<div class="col-md-12">

<?php
  

 
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "e-commerce";

  
  $conn1 = new mysqli($host, $user, $pass, $db);
  if($conn1->connect_error)
  {
      echo "Database Connection Failed!";
      echo "<br>";
      echo $conn1->connect_error;
 }
 else {
  

   $sql = "select * from product";
   $res1 = $conn1->query($sql);
   if($res1->num_row> 0) {
     while($row = $res1->fetch_assoc()) {
    
?>

  <div class="card-product col-md-4">
		<a href="item_test.php?name=<?php echo $row['name']; ?>">
			<img class="card-image" src="<?php echo $row['image']; ?>"></img><br>
			<b class="text" > <?php echo $row['name']; ?></b>
      <div class="price-label"><b><?php echo $row['price']; ?></b></div>
		
		</a>
    <div  class="add-to-cart"><a  href="item_test.php?name=<?php echo $row['name']; ?>" class="btn btn-success" style="width:185px;font-family:consolas;margin-top:5px;">Add to Cart</a></span></div>
		
		
	</div>

<?php
    }
  }
		}
    $conn1->close();
?>










</div>
<?php include 'static_footer.php'; ?>

</body>
</html>