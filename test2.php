<?php 
session_start(); // không được chạy 2 lần hủy dúng session_destroy()
echo $_SESSION["username"]; // muốn dùng biến $_SESSION phải dùng bến session_start();

 ?>