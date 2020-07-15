<?php
require_once ("./config.php");
if (isset($_POST['submit'])){
    if (!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['repass']) && !empty($_POST['level']) && !empty($_POST['email']) && !empty($_POST['full_name']) && !empty($_POST['phone']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $level = $_POST['level'];
        $email = $_POST['email'];
        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        if ($pass != $repass){
            header("location:register.php");
        }
        $query_1 = "SELECT * FROM login where userName = '".$user."'";
        $result = mysqli_query($conn,$query_1);
        if( mysqli_num_rows($result) > 0){
            header("location:register.php");
        }
        else{
            $query_2 = "INSERT INTO login  VALUES ('', '".$user."','".$pass."', ".$level.", '".$email."','".$full_name."',".$phone." );";
            mysqli_query($conn,$query_2);
            echo "Thanh Cong";
        }
    }
    else{
       header("location:register.php");
    }
}