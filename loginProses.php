<?php 
session_start();
include("coneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password =='admin'){
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else{
	header("Location: login.php");
}
?>