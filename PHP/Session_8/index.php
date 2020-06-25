<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lập trình PHP</title>
</head>
<body>

<?php
/*Hướng đối tượng trong PHP
- Khai báo lớp
- Tạo đối tượng new
- Gọi phương thức của đối tượng
- Kế thừa
- Phương thức (protected, public, private, static ,parent:: và selt)*/


//Khai báo lớp
class Cauhinh{
    public $host ="localhost";
    public $user = "root";
    public $pass ="";
}
class tenLop extends Cauhinh {
    var $tenThuocTinh;
    //Nếu để mặc định thì nó sẽ là public
    static function tenPhuongThuc($thamso){
    // hàm khởi tạo contructor
    function __construct()
    {
        echo $this ->user;
    }
    }
    function ketnoi (){
        echo $this ->host;
    }
}
//Tạo đối tượng new
$tenDoiTuong = new tenLop();
//Gọi phương thức của đối tượng
$tenDoiTuong ->tenPhuongThuc();
$tenDoiTuong ->tenThuocTinh;
$tenDoiTuong ->ketnoi();
//Trường hợp đặc biệt truy xuất bằng :: khi  tên phương thức ở dạng static
$tenDoiTuong::tenPhuongThuc();
// Kế thừa

?>
</body>
</html>