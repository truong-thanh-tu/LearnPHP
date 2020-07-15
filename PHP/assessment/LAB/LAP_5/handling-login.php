<?php
session_start();

require_once ("connect.php");
if (isset($_POST['Login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if (empty($user) || empty($pass)){
        header('Location: index.php');
    }
    else {
        $query ="SELECT * FROM lap_9 ";
        $result = mysqli_query($conn,$query);
        while($arr = mysqli_fetch_array($result)){
            if ($user == $arr[1] && $pass == $arr[2]){
                header('Location: Home.php');
            }
            else{
                header('Location: index.php?Ban sai mat khau');
            }
        }
    }
}
else{
    echo "Khong nhan dc ";
}



