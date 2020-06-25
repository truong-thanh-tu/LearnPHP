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
<?php
    // Các hàm kiểm tra giá tri của biết php
    // - Hàm kiểm tra một biết có tồn tại hay chưa
//isset (Hàm kiểm tra sự tồn tại của một biết)or empty(kiểm tra xem biết đó có rổng hay không hoặc là chưa chứa giá trị)
/*Hàm sẽ kiểm tra xem một biết có phải là số không
- is_number is_kiểu dữ liệu*/

$a ="Xin chao A";
/*$b ="Xin chao B";*/
if(isset($a) && isset($b)) {
    echo $a;
}
?>
</body>
</html>