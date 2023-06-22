<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'conf.php';
$user_name = $_POST["user_name"];
$emil_ = $_POST["email"];
$password_ = $_POST["password"];
echo($user_name);
echo($emil_);
echo($password_);
$insert_c = "insert into users(username	,emil,password ) values ('$user_name','$emil_','$password_')";
$run_c = mysqli_query($mysqli, $insert_c);


?>