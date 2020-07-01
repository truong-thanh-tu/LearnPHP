<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ví Dụ PHP</title>
</head>
<body>
<?php
    for( $index1 = 1; $index1 < 10; $index1 ++){
        echo "Bảng cửu chương $index1 là: "."<br>";
        for($index2 = 1;$index2  < 10;$index2++){
            echo $index1." x ".$index2." = ".($index1*$index2)."<br>";
        }

    }


?>
</body>
</html>