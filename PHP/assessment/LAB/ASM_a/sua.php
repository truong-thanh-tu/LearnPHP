<?php
require_once ("./admin.php");?>

<form action="" method="post">
    Id<br>
    <input type="text" name ="id">
    Image <br>
    <input type="text" name="image" /><br>
    Title<br>
    <input type="text" name="title" /><br>
    Subject:<br>
    <input type="text" name="subject" /><br>
    <input type="submit" name="edit" value="sủa"/>
</form>

<?php
if(isset($_POST['add'])){
    $image = $_POST['image'];
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $id = $_POST['id'];
    editProduct($id,$image,$title,$subject);
}
?>
