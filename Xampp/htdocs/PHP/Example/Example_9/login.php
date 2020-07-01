<?php
    $host ='localhost';
    $user='root';
    $pass ='';
    $db ='Publication';


?>
<?php
    require_once 'login.php';
    $conn = new mysqli($host,$user,$pass,$db);
    if($conn -> connect_errno){
        die('Fatal Error');
    }
    else{
        echo "Well Done";
    }
?>
