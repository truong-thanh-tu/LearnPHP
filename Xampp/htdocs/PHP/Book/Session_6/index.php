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
/*Ham trong PHP*/
/*function hienThi(){
    echo "Hien thi thong tin ra mang hinh";
}
function tinhTong($a,$b){
    echo "tong = ".($a+$b);
}
function tinhTich($b,$a){
    return $a*$b;
}
echo hienThi()."<br>";
echo tinhTong(3,4)."<br>";
echo "tinh tich =".tinhTich(4,3);*/
/*Thuc vien ham*/
$chuoi = "           xin chao moi nguoi     mình là truong thanh tu ";
//Hàm xóa khoản trắng
// trim
echo strlen($chuoi)."<br>";
$chuoi = ltrim($chuoi);
echo strlen($chuoi)."<br>";
// Hàm chữ cái đầu tiên viết hoa
// ucfirst
$chuoi = ucfirst($chuoi);
echo $chuoi."<br>";
//Hàm các chữ đầu tiên viết hóa
//ucwords
$chuoi = ucwords($chuoi);
echo $chuoi."<br>";
//Hàm chuyển về chữ thường
//strtolower
$chuoi = strtolower($chuoi);
echo $chuoi."<br>";
//Hàm chuyển tất cả thành chữ hóa
//strtoupper
$chuoi = strtoupper($chuoi);
echo $chuoi."<br>";
echo '<hr>';
/*Hàm tìm chuổi con hai trong chuổi con một */
/*strpos*/

$chuoi1 = "truong thanh tu @edu.com";
$chuoi2 = "@";
echo $chuoi1."<br>";
echo $chuoi2."<br>";
if(strpos($chuoi1,$chuoi2)){
    echo "Co";
}
else{
    echo "Khong";
}

?>
</body>
</html>