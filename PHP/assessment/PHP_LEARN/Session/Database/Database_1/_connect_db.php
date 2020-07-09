<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "blog");

if (!$connection) {
    echo "Lỗi kết nối tới MySQL: ".mysqli_connect_error();
    exit;
}