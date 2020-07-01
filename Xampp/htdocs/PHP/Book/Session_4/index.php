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
// IF else
$b = 100;
/*if($b > 0){
    echo sqrt($b);
}
else{
    echo 'Không thể căn bật hai số âm';
}*/
// Câu lệnh đặt biệt
$a = 99;
/*$max =($a>$b)?$a:$b;
echo $max;*/

//For
/*$arr = array(1,2,3,5,6);
for ($i = 0; $i < count($arr); $i++){

    echo $arr[$i]."<br>";
}*/
//Foreach
$arr = array('aca' =>1,'bgf'=>2,3,4,5,5);
foreach ($arr  as $key => $value){
    echo $key."=>".$value."<br>";
}
?>
</body>
</html>