<?php
require_once "DB.php";
function showProduct($title){
    global  $conn;
    $query = "SELECT * FROM product where title = '".$title."'";
    $result = mysqli_query($conn,$query);
    while ($row  = mysqli_fetch_assoc($result)){
        echo "<img href='./image/".$row['image']."'>
                <h4>".$row['title']."</h4>>
                <p>".$row['subject']."</p>  ";
    }
}
function displayProduct(){
    global $conn;
    $query = "SELECT * FROM product";
    $result = mysqli_query($conn,$query);

    while ($row  = mysqli_fetch_assoc($result)){
        echo "<img href='./image/".$row['image']."'>
                <h4>".$row['title']."</h4>>
                <p>".$row['subject']."</p>  ";
    }

}
function addProduct ($img,$title,$subject){
    global $conn;
    $query = "INSERT INTO product (id, img, title, subject) VALUES('','".$img."','".$title."','".$subject."');";
    $result = mysqli_query($conn,$query);

}
function deleteProduct($id){
    global $conn;
    $query ="DELETE FROM product WHERE id = '".$id."'";
    mysqli_query($conn,$query);
}
function editProduct($id,$img,$title,$subject){
    global $conn;
    $query = "UPDATE product SET img ='".$img."', title = '".$title."', subject ='".$subject."'  WHERE id = '".$id."'";
    mysqli_query($conn,$query);
}