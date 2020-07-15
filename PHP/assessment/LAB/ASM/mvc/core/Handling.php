<?php
class Handling extends  Controller{
    public function __construct()
    {
        if(isset($_POST['signin'])){
            echo "Home";
        }
    }
}