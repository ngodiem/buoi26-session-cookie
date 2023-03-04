<?php 
require "../config.php";
require "../connectDB.php";
$username = $_POST["username"];
$password = md5($_POST["password"]);
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
$result = $conn->query($sql);
session_start();
if($result->num_rows > 0) {
	$_SESSION["username"] = $username;
	$row = $result->fetch_assoc();
	// echo "login thành công";
	$_SESSION["fullname"] = $row["firstname"] . "" . $row["lastname"];
	header("location: ../account/profile.php");
}
else {
	// echo "login thất bại";
	$_SESSION["error"] = "sai username/password";
	header("location: index.php");
}

 ?>