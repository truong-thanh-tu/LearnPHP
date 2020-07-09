<?php
session_start();
$_SESSION['Test_key_1']= 'Test value 1';
print_r($_SESSION['Test_key_1']);
echo "<br>";
/*$read = file('file.txt');
foreach ($read as $line) {
    echo $line."<br>";
}*/
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");


fwrite($fh, "Thanh Tu");

fclose($fh);
$read = file('test.txt');
foreach ($read as $line){
    echo $line."<br>";
}
?>