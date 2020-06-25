<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập PHP</title>
</head>
<body>
<form method='POST'>
    <h2>Nhập tên đăng nhập:</h2>
    <input type="text" name="ten_dang_nhap">
    <input type="submit" value="Đăng nhập">
</form>
<?php
//Lấy name từ chuỗi truy vấn và lưu trữ vào trong biến cục bộ
$name = $_POST['ten_dang_nhap'];
echo "<h3>Chúc mừng $name đã đăng nhập thành công!</h3>";
?>
</body>
</html>