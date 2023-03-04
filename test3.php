<?php 
session_start();
session_destroy(); // hủy biến session_start() khi hủy rồi giá trị trong biến $_SESSION["username"] = "admin"; mang giá trị rổng
// session chết khi chủ động dùng session_destroy(), hoặc người dùng tắt trình duyệt
echo "đã xóa session";
 ?>