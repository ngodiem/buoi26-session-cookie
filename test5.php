<?php 
echo $_COOKIE["email"];
// $_COOKIE khác session_destroy() ở chổ nó lưu ở dưới trình duyệt còn session được lưu trên server
// khi tắt trình duyệt $_COOKIE còn sống session_destroy() chết
// $_COOKIE sửa được còn session_destroy() không sửa được
 ?>