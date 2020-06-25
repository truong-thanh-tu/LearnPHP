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

/*Mảng trong  PHP
- Là tập hợp của các phần tử
- Các phần tử có thể cũng hoặc khác kiểu dữ liệu với nhau
- Chỉ số mảng có kiểu dữ liệu bất kỳ
- Mảng trong  PHP là mảng động số lượng phần tử có thể thay đổi tùy ý*/
/*Khai báo mảng
- Khai báo không biết số phần tử;
- Khai báo biết số phần tử;
- Khai báo mảng vừa biết chỉ sổ vừa biết giá trị
- Gán giá trị cho từng phần tử*/
/*Mang có khóa tự động, cung cấp chỉ số mảng(số nguyên)*/
//Mảng có cũng kiểu dữ liệu và cũng chỉ số
/*$arr = array(1,2,3,4,5,6);
$arrOther = array(
    'soa' => 1,
    'sob' => 2,
    4 => 3);*/

// Khai báo không biết số lượng phần tử
$mang1 = array();
// Khai báo biết số lượng phần tử
$mang2 = array(5);
// Khai báo mảng vừa biết chỉ số vừa giá trị
$mang3 = array('so1' => 1,'so2'=>2,'so3'=>3);
$mang3_1 = array('chiso'=>'giatri',
    'hoten'=>'Nguyen Van A',
    'Maso' =>43);
// Xuất giá trị
/*echo $mang3_1['chiso'];
foreach ($mang3_1 as $value){
    echo $value."<br>";
}*/
//Hàm
//- Xuất ra tổng số phần tủ
//echo count($mang3_1);
// Gán giá trị cho từng phần tử
$mang4[0]=1;
$mang4[1] = 5;
$mang4[2] = 4;
$mang4[] = 3;
//-Xuất ra theo thứ tự giảm dần
/*sort($mang4);*/
//-Thêm giá trị vào bảng
//-Ở đầu
array_unshift($mang4,19);
//-Ở cuối
print_r($mang4);

array_push($mang4,9);
//Lấy ra phần tử
echo "<hr>";
echo array_shift($mang4)."<br>";
echo array_pop($mang4);
//Tìm phần tử
echo "<hr>";
if(array_search(10,$mang4)){
    echo 'Co';
} else{
    echo 'Khong';
};

?>
</body>
</html>