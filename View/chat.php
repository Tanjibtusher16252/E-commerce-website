<?php 
session_start();
 $db = new mysqli("localhost","root","","e-commerce");
 if($db->connect_error){
     die("connection failed" .$db->connect_error );
 }
 
 $result=array();
 $massage=isset ($_POST['massage']) ? $_POST['massage'] : null;
 $from=$_SESSION['email'];
 
 if(!empty($massage) && !empty($from)){
     $sql ="INSERT INTO `chat` (`massage`, `from`) VALUES ('".$massage. "', '".$from. "')";
     $result['send_status']= $db->query($sql);
 }
 
 $start=isset($_GET['start']) ? intval($_GET['start']) : 0;
 $items= $db->query("SELECT * from `chat` WHERE `id` > ".$start);
 $i=0;
 while($row=$items->fetch_assoc()){
     
     $result['items'][$i]=$row;
     $i++;
 }
 
 $db->close();
 
 header('Access-Control-Allow-Origin: *');
 header('Content-Type: application/json');
 echo json_encode($result);


    
?>