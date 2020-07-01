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
$dayNumber = 340;
$dayToNewYear = 365-$dayNumber;
if ($dayToNewYear < 30 ){
    echo "Not long now till new year";
}
?>
</body>
</html>