<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Product Information </title>
</head>
<body>

	<?php

	include 'dbconnect.php';

	$productname=$productid ="";
	$productnameError = $productidError ="";
	$flag = false;
	$Successful = $Error = "";

	if($_SERVER['REQUEST_METHOD']==="POST")

	{

		if(empty($_POST['productName'])){
				$productNameError = "Field can' be empty";
				$flag = true;
		}

		if(empty($_POST['productid'])){
				$productidError = "Field can' be empty";
				$flag = true;
		}


		
		if(!$flag)
		{

			$productname = input_data($_POST['productname']);
			$productid = input_data($_POST['productid']);
	
			$res = register($productname,$productid,);
			if($res){
				$Successful = "ProductAdd Done";
			}
			else{
				$Error = "ProductAdd Failed";
			}

		}

	}
function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

  
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"enctype="multipart/form-data">

	<span style="color: red">*</span>
	<label for="pname">Product Name</label>
	<input type="text" name="productname" id="productname">
	<span style="color: red"> <?php echo $productnameError; ?></span><br><br>

    <span style="color: red">*</span>
	<label for="pid">Product Id </label>
	<input type="id" name="productid" id="productid">
	 <span style="color: red"> <?php echo $poductIdError; ?></span><br><br>

	 <input type="submit" name="submit" value="Submit">
		
	</form>
	
		</br>
		<a href="productlist.php">Click to Product List</a>

		<br>
	


	 <span style="color: green"> <?php echo $Successful; ?>  </span>
<span style="color: red"><?php echo $Error ;  ?></span>


</body>
</html>