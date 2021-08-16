<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Profile</title>
</head>
<body>
	<?php
	include 'alluser.php';
	$fullname =$userName = $password="";
	session_start();
	$name = $_SESSION['fullname'];
	$userName = $_SESSION['username'];
	$password = $_SESSION['password'];

	if(empty($_GET['searchbtn'])or empty($_GET['search']))
	{
       $userList = getAll();
	}
	else{
		$userList = getUser($_GET['search']);
	}

	if(!empty($_POST['uname'])){
		$res=delete($_POST['uname']);
          if($res){
          	$userList = getAll();
          }
          else{
          		$userList = getAll();
          }
	}
	else{
		echo"User found";
	}
	?>

	<table cellspacing="0" border="1" >

		<tr>
			
			<th>FullName</th>
			<th>User Name</th>
			<th>Password</th>
		</tr>
		<tr>
			<td><?php echo $fullname; ?></td>
			<td><?php echo $userName; ?></td>
			<td><?php echo $password; ?></td>
		</tr>
		
	</table><br>

	<a href="logout.php">Logout</a>
	<a href="">Change password</a>
	<h1><u>User List</u></h1>
	<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<input type="text" name="search">
		<input type="submit" name="searchbtn" value="Search">
		
	</form><br>

	<?php
     
     echo"<table cellspacing='0' border='1'>";
     echo"<tr>";
	 echo"<th>FullName</th>";
	echo" <th>User Name</th>";
	 echo"<th>Password</th>";
	  echo"<th>Action</th>";
     echo"</tr>";
     for ($i=0; $i <count($userList) ; $i++) { 
     	echo"<tr>";
	 echo"<th>" .$userList[$i]["FullName"] . "</th>";
	echo" <th>".$userList[$i]["username"] ."</th>";
	 echo"<th>".$userList[$i]["password"] ."</th>";
	  echo"<th><a href='" . $_SERVER['PHP_SELF'] . "?uid=" . $userList[$i]["username"] . "'>DELETE</a></th>";
     echo"</tr>";

     }
     echo"</table>";

	?>


</body>
</html>
