<?php
class  user{
    public $name,$password;
    function save_user(){
        echo "Save User code goes here";
    }

}
$object = new User;
print_r($object);echo "<br>";
$object->name="Joe";
$object->password ="mypass";
print_r($object);
$object->save_user();


?>