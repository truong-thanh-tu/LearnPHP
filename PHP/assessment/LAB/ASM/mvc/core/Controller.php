<?php
class Controller extends DB {
    public function add_product($img,$title,$text){
        $query = "INSERT INTO ass_product VALUES('','".$img."','".$title."','".$text."');";
        $result = mysqli_query($query,$this->conn);
        return $result;
    }
    public function seach_product($title){
        $query = "SELECT * FROM ass_product where title = '".$title."';";
        $result = mysqli_query($query,$this->conn);
        return $result;
    }
    public function delete_product($id){
        $query = "DELETE FROM ass_product WHERE  = '".$id."';";
        $result = mysqli_query($query,$this->conn);
        return $result;
    }
    public function update_product($id,$img,$title,$text){
        $query = "UPDATE ass_product SET   img = '".$img."',title='".$title."',subject = '".$text."' 
        WHERE id = '".$id."'";
        $result = mysqli_query($query,$this->conn);
        return $result;
    }
}