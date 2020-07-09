<?php
/*Session và Cookie trong php
-Sesion và cookie được dùng để lưu trữ dữ liệu tạm thời và từ đó hệ thống có thể đưa ra quyết định về quyền hạn
hoặc là những tùy chọn riêng tư
1./ Session : Biến session trong php được sử dụng để lưu trữ thông tin của người dùng hoặc lưu trữ tùy chọn cấu hình hệ thống cho người dùng
a./ Cách dùng:
- Trước khi dùng session bạn phải đặt session_star() phía trước mõi file.txt();
b./ Lưu trữ session:
- Dòng lệnh session_start()  có chức nâng là sẽ đăng ký phiên làm việc lên server, từ đó server sẽ tạo ra một ID riêng cho khác hàng
- $_session tất cả các session được lưu hết vào biết $_session
- Để lưu một giá trị mới vào Session ta dùng cú pháp như sau: $_SESSION['session_name'] = $session_value*/
if (isset($_POST["submit"])){
    $_SESSION["name"] = $_POST["user"];
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lập trình PHP</title>
</head>
<body>


<form action="" method="post">
    <input type="text" name="user">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_SESSION['name']))
{
    echo 'Tên Đăng Nhập Là: ' . $_SESSION['name'];
}
?>
</body>
</html>

<?php
/*Cookie thường được dùng để lưu trữ các tùy chòn riêng của trang web từng user. Nhó là một file.txt nhỏ được server chỉ định lưu trữ trong máy tính khác hàngvà PHP có thể truy xuất tớ được */
?>