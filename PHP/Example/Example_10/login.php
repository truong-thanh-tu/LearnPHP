<?php
require_once "info_connect.php";
$conn = new mysqli( $host,$user,$pass,$data);
if ($conn->connect_errno) {
    die('Fatal Error');
}
else {
    echo 'Well Done! Connected to database.' . '<br> <br>';
}
if (isset($_POST['username'])){
    $us = $_POST['username'];
    $pw = $_POST['pass'];
    $sql = "select * from loginform where username = '".$us."' and password = '".$pw."' limit 1";
    $result = mysqli_query($conn,$sql);
    $row = $result->num_rows;
    if($row == 1){
        echo "You seccese loign";
    }


}
?>