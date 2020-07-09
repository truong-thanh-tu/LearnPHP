<?php
 // Câu lệnh echo
// Câu lệnh echo được sử dụng để hiện thị kết quả của một hoặc nhiều chuổi ký tự,
// biến hoặc biểu thực toán toán học...
echo "Xin chao","<br>","Hello";
$name = "PHP";
echo $name,"<br>";
echo 1+2;
// Câu lệnh print
// Câu lệnh print được dừng để hiển thị giá trị của một giá trị dạng chuỗi, biến hoặc kết quả của biểu thức...
 $greet ="Xin chao";
 print $greet;
// Hàm print_r();
//  thường được dùng để hiển thị kết quả của một mảng.

$arr = [1,2,3];
print_r($arr);

// Hàm var_drump();
// Hàm var_drump() được sử dụng với tất cả các giá trị thuộc bất cứ kiểu dữ liệu nào.
var_dump("$greet");
var_dump(100);
var_dump($arr);
?>