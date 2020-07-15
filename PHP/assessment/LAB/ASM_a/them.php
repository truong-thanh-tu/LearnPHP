<?php
include './admin.php';

?>

    <form action="" method="post">
        Image <br>
        <input type="text" name="image" /><br>
        Title<br>
        <input type="text" name="title" /><br>
        Subject:<br>
        <input type="text" name="subject" /><br>
        <input type="submit" name="add" value="Thêm"/>
    </form>

<?php
if(isset($_POST['add'])){
    $image = $_POST['image'];
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    addProduct($image,$title,$subject);
}
?>