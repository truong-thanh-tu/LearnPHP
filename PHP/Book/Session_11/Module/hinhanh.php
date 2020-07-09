<div >




    <?php
/*    Các hàm xử lý file.txt trong php
    - Mở file.txt;
    - Đọc file.txt;
    - Ghi file.txt;
    - Đóng file.txt*/

 /*   Các thực hiện
    1./ Mở một file.txt ta sử dụng $fopen("path",option);
    2./ Đọc một file.txt ta sử dụng
    a./ Hàm $fgetc($fg) dùng để đọc từng ký tự
    b./ Hàm $fgets($fg) dùng để đọc từng dòng
    c./ Hàm $feof($fg) để sau khi đọc xong thì nó sẽ chuyển qua dòng mới hoặc ký tự.
    3./ Ghi file.txt ta sử dụng hàm fwrite(obj,comment);
    4./ Để đóng file.txt ta sử dụng hàm fclose($fg);
    5./ Một số hàm xử lý khác
    a./ Kiểm tra file.txt có tồn tại hay không: file_exists();
    b./ Kiểm tra file.txt có được cấp quyền ghi hay không : is_writable();
    c./ Lấy nội dung mà không cần dùng hàm fread: file_get_contents($path);
    d./ Ghi nội  dung mà không cần dùng fwrite() : file_put_contents($path,$coment);
    e./ Xóa file.txt unlink($path);
    f./ Kiểm tra file.txt có tồn tại hay không is_dir($filename);
    ....*/



    $f =fopen('Image/slideshow.txt','r');
    while(feof($f)) {
        $file = fgets($f);
        echo "<img  src=" . $file . " > ";
    }
    ?>


</div>
