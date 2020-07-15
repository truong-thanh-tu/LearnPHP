<?php
require_once ("./config.php");
if(isset($_POST['submit'])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query = "SELECT * FROM login where userName = '".$user."'";
        $result = mysqli_query($conn , $query);
        if(mysqli_num_rows($result) > 0){
            while ($row=mysqli_fetch_row($result)) {
               if($row[2] == $pass){
                    header("location:Home.php");
               }
            }

        }
        else{
            header("location:register.php");
        }
    }
    else{
        header("location:login.php");
    }
}