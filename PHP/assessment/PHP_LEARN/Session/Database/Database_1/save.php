<?php
$connection = mysqli_connect("localhost","root","","blog");
if (!$connection) {
    echo "Lỗi kết nối tới MySQL: ".mysqli_connect_error();
    exit;
}
echo "Kết nối tới database thành công!";

$title = isset($_POST['title'])?$_POST['title']:die("Tiêu đề không được để trống");
$content = isset($_POST['content'])?$_POST['content']:die("Nôi dung không được để trống");

$sql ="INSERT INTO posts(title, content) VALUES($title, $content)";
$result = mysqli_query($connection,$sql);
if ($result){
    echo "Bài viết đã được lưu thành công!";
}
else{
    echo "Lỗi khi lưu bài viết: ";
}
?>
