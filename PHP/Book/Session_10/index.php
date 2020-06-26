<?php
// Get là phương thức có thể để lộ thông tin
// Post là phương thức ko để lộ thông tin
//Khi muốn lấy dữ liệu được truyền đến từ file html ta sử dụng hai biết là _POST và _GET tùy thuộc vào phương thức mà ta sử dụng ở file html
// sủ dụng biết request thì ko cần quan tâm đế phương thức được sử dụng ở HTML
$name = $_POST['user'];
$pass = $_POST['pass'];
/*$file = $_FILES['taptin']['file'];*/

echo "Today is " . date("Y-m-d") . "<br>";
echo "$name đăng nhập thành công vs pass: $pass va file:";


?>