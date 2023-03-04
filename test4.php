<?php 
setcookie("email" , "abc@gmail.com", time()+3600);
// tạo 1 setcookie( ) có key là email giá trị là "abc@gmail.com" time() là thời gian hiện tại + 3600s(hạn sữ dung) sau 1 tiếng nó tự chết
echo "đã tạo setcookie thành công";

 ?>