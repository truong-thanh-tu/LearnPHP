
<?php

$a = 3;
$b = '3';
var_dump($a == $b);
var_dump($a === $b);

function Sayhello($name = "PHP"){
    echo "Xin chao ban $name";
}
 echo "<br>";
Sayhello();
Sayhello("Thanh Tú");
echo "<br>";
$today="Thứ Bảy";
if ($today =="Thứ Bảy"){
    echo "Ngày nghĩ cuối tuần $today";
}
else if($today =="Chủ Nhật"){
    echo "Ngày nghĩ cuổi tuần $today";
}
else{
    echo "Hôm nay là ngày làm việc";
}
?>