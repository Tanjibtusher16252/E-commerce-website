<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
</head>
<body>
	<?php
    $userName = $password = "";
    $userError = $passwordError = "";
	$flag = false;
	$Successful = $Error = "";

	if($_SERVER['REQUEST_METHOD']==="POST")
	{
		
		if(empty($_POST['userName'])){
				$userError = "Field can' be empty";
				$flag = true;
		}

		if(empty($_POST['password'])){
				$passwordError = "Field can' be empty";
				$flag = true;
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

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


    <span style="color: red">*</span>
	<label for="userName">User Name </label>
	<input type="text" name="userName" id="userName"> 
    <span style="color: red"> <?php echo $userError; ?></span><br><br>

    <span style="color: red">*</span>
	<label for="password">Password </label>
	<input type="password" name="password" id="password">
	 <span style="color: red"> <?php echo $passwordError; ?></span><br><br>

	 <input type="submit" name="submit" value="Submit">
		
	</form><br><br>
	<a href="registration.php">Register Here</a>
      <br>

	 <span style="color: green"> <?php echo $Successful; ?>  </span>
<span style="color: red"><?php echo $Error ;  ?></span>


</body>
</html>