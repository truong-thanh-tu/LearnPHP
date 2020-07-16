<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký Thanh Viên</title>
</head>
<body>
<div clas="main">
    <div class="title">
        <h3>Đăng Ký Thanh Viên</h3>
    </div>
    <div class="form">
        <form action="register_submit.php" method="POST">
            <table>
                <tr>
                    <td><input type="text"name="user"placeholder="User name ..."></td>
                </tr>
                <tr>
                    <td><input type="password"name="pass"placeholder="Password ..."></td>

                </tr>
                <tr>
                    <td><input type="password"name="repass"placeholder="Repassword ..."></td>

                </tr>
                <tr>
                    <td><input type="text"name="email"placeholder="Email ..."></td>
                </tr>
                <tr>
                    <td><input type="text"name="full_name"placeholder="Full name ..."></td>
                </tr>
                <tr>
                    <td><input type="submit"name="submit" value="submit"></td></tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>