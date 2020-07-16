<?php
require_once ("./DB.php");
if (isset($_POST['submit'])){
    if (!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['repass'])  && !empty($_POST['email']) && !empty($_POST['full_name']))
    {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $email = $_POST['email'];
        $full_name = $_POST['full_name'];
        if ($pass != $repass){
            header("location:register.php");
        }
        $query_1 = "SELECT * FROM users where username = '".$user."'";
        $result = mysqli_query($conn,$query_1);
        if( mysqli_num_rows($result) > 0){
            header("location:register.php");
        }
        else{
            $pass = md5($pass);
            $query_2 = "INSERT INTO users  VALUES ('', '".$user."','".$pass."', '".$full_name."','".$email."'";
            mysqli_query($conn,$query_2);
            setcookie('user',$user,time()+3000);
            setcookie('fullname',$full_name,time()+3000);
            header("location:Home.php");
        }
    }
    else{
        header("location:register.php");
    }
}