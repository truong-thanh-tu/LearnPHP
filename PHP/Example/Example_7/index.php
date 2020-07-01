<?php
class Student{
    public $id,$name,$email;
    function __construct()
    {
    }

      function display( ){
        echo "<br>Thông tin học sinh: <br> ID: ".$this->id."<br> Name: ".$this->name."<br> Email: ".$this->email;
    }
};
$object = new Student();

$object->name='Thanh Tu';
$object->id='123';
$object->email='truongthanhtu@gmail.con';
$object->display();



?>
