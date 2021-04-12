<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student manager - Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/mystyle.css">
</head>
<body>
    <!-- Start header -->
    <header>
        <div class="container">
            <div id="logo">
                <div id="logoImg">
                    <img src="assets/image/logokhoa1.png" alt="logo" width="30px">
                </div>
                <a href="index.php">Quản lý sinh viên</a>
            </div>
            <div id="accountName">
                <h3 align="center">ADMIN LOGIN</h1>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Start body -->
    <div class="body mr-t-50" >
        <div class="container">
            <div id="formlogin">
                <form method="post" name="login-form" action="">
                    <h3>Đăng nhập vào trang quản lý</h3>
                    <br>
                    <table>
                        <tr height="50px">
                            <td>Account</td>
                            <td>
                                <input type="text" name="taikhoan">
                            </td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>
                                <input type="password" id="submit" name="password">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" id="btndangnhap" name="login" value="Login">
                </form>
                <!-- PHP xử lý đăng nhập -->
                <?php
$link = new mysqli('localhost', 'root', '', 'sinhvien') or die('kết nối thất bại ');
mysqli_query($link, 'SET NAMES UTF8');
if (isset($_POST['login'])) {
    if (empty($_POST['taikhoan']) or empty($_POST['password'])) {echo ' </br> <p style="color:red"> vui lòng nhập đầy đủ username và password !</p>';} else {
        $username = $_POST['taikhoan'];
        $password = $_POST['password'];
        $query = "SELECT * FROM dangnhap where account = '$username' and password = '$password'";
        $result = mysqli_query($link, $query);
        $num = mysqli_num_rows($result);
        if ($num == 0) {
            echo '</br> <p style="color:red"> Sai tên đăng nhập hoặc mật khẩu ! </p>';
        } else {

            $_SESSION['username'] = $username;
            header('location:   index.php');

        }
    }

}

?>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>Nguyễn Gia Hào - Lương Trần Thiên Phúc - Đào Toàn Thắng</p>
        </div>
    </footer>
</body>
</html>
