<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form HTML</title>
</head>
<body>
<h1>Danh sách bài viết</h1>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tiêu Đề</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include('_connect_db.php');
    include('_fetch_data.php');
    ?>
    </tbody>
</table>
</body>
</html>