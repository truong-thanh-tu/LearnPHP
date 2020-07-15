<?php
require_once ("./admin.php");
?>
<form action="" method="post">
    Bạn muốn xóa bứa hinh có id <br>
    <input type="text" name="id">
    <input type="submit" name="delete">
</form>
<?php
if (isset($_POST['delete'])){
    if (!empty($_POST['id'])){
       $id = $_POST['id'];
       deleteProduct($id);
    }
}

