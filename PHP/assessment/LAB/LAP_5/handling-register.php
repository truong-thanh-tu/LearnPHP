<?php
session_start();
require_once "connect.php";
if (isset($_POST['Register'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    if (empty($user) ||empty($pass) ||empty($email) ||empty($fullname) ||empty($phone) ){
        header('Location: Register.php');
    }
    else {
        $query = "INSERT INTO lap_9 (user,pass,email,fullname,phone)VALUES('".$user."','".$pass."','".$email."','".$fullname."','".$phone."');";
        mysqli_query($conn,$query);
        include ("index.php");
    }
}
