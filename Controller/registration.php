<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>

	<?php
		
		 include 'insertuser.php';

			$fullname =$userName = $password ="";
			$fullnameError =  $userNameError = $passwordError ="";
			$flag = false;
			$Successful = $Error = "";

			if($_SERVER['REQUEST_METHOD']==="POST")
			{
				if(empty($_POST['fullname']))
				{
						$fullnameError = "Field can' be empty";
						$flag = true;
				}

				if(empty($_POST['userName'])){
						$userNameError = "Field can' be empty";
						$flag = true;
				}

				if(empty($_POST['password'])){
						$passwordError = "Field can' be empty";
						$flag = true;
				}


				
				if(!$flag){

					$fullname = input_data($_POST['fullname']);
					$userName = input_data($_POST['userName']);
					$password = input_data($_POST['password']);
			
					$res = register($fullname,$userName,$password);
					if($res){
						$Successful = "Register Done";
					}
					else{
						$Error = "Register Failed";
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
	<label for="fullname">Full Name</label>
	<input type="text" name="fullname" id="fullname">
	<span style="color: red"> <?php echo $fullnameError; ?></span><br><br>

    <span style="color: red">*</span>
	<label for="userName">User Name </label>
	<input type="text" name="userName" id="userName"> 
    <span style="color: red"> <?php echo $userNameError; ?></span><br><br>

    <span style="color: red">*</span>
	<label for="password">Password </label>
	<input type="password" name="password" id="password">
	 <span style="color: red"> <?php echo $passwordError; ?></span><br><br>

	 <input type="submit" name="submit" value="Submit">
		
	</form><br><br>
	<a href="login.php">Login Here</a><br>


	 <span style="color: green"> <?php echo $Successful; ?>  </span>
<span style="color: red"><?php echo $Error ;  ?></span>


</body>
</html>