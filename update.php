<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'conf.php';
$old_user_name = $_POST["user_name_old"];
$user_name = $_POST["user_name"];
$emil_ = $_POST["email"];
$password_ = $_POST["password"];

//echo($old_user_name);
//echo($emil_);
//echo($password_);

$sel_c = "UPDATE users SET username = '$user_name', emil = '$emil_', password = '$password_' WHERE username = '$old_user_name '"; 
$run_c = mysqli_query($mysqli, $sel_c);
echo "<script>alert('your update complet!')</script>";


?>