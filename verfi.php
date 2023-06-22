<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'conf.php';

$user_name = $_POST["user_name"];
$password_ = $_POST["password"];
//echo($user_name);
 
$flag = 'true';
$result = $mysqli->query('SELECT username ,password from users ');
/*
if($result === FALSE){
  die(mysql_error());
}*/

if($result){
  while($obj = $result->fetch_object()){
    if($obj->username === $user_name && $obj->password === $password_) {
		
      header("location:opera.php");
    } else {
		echo "<script>alert('password  or username  is incorrect, try again!')</script>";
     

		 
        }
    }
  
}
?>






