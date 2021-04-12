<?php
session_start();
if (isset($_SESSION['username'])) {
    // Đoạn lệnh dùng để kết nối vs DATABASE mysql
    $linkData = new mysqli('localhost', 'root', '', 'sinhvien') or die('data error');
    mysqli_query($linkData, 'SET NAMES UTF8');
    $query = 'SELECT * FROM tintuc';
    $result = mysqli_query($linkData, $query);
    ?>
    <!-- Đoạn mã HTML index -->
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Student manager - Trang chủ</title>
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
                        <img src="./assets/image/logokhoa1.png" alt="logo" width="30px">
                    </div>
                    <a href="index.php">Quản lý sinh viên</a>
                </div>
                <div id="accountName">
                    <p> Xin chào !</p>
                    <a href="dangxuat.php" alt="Đăng xuất"><img src="./assets/image/logout.png" width="25px"></a>
                </div>
            </div>
        </header>
        <!-- End header -->

        <!-- Start body -->
        <div class="body">
            <div class="container">
                <div id="menu">
                    <ul>
                        <li><a href="#" id="current"><i class="fas fa-home"></i>Trang chủ</a></li>
                        <li><a href="lop.php"><i class="fas fa-users"></i>Lớp</a></li>
                        <li><a href="sinhvien.php"><i class="fas fa-user-graduate"></i>Sinh viên</a></li>
                        <li><a href="giangvien.php"><i class="fas fa-chalkboard-teacher"></i>Giảng viên</a></li>
                        <li><a href="diem.php"><i class="far fa-calendar-check"></i>Điểm thi</a></li>
                        <li><a href="contact.php"><i class="fas fa-address-book"></i>Liên hệ</a></li>
                    </ul>
                    <br>
                </div>
                <div class="cthome">
                    <img src="./assets/image/anhcover.jpg" width="700px" alt="hinh-anh">
                    <br>
                    <br>
                    <h3 class="cthome-title">Hệ thống quản lý sinh viên</h3>
                    <br>
                    <ul class="cthome-list-item">
                        <li class="cthome-list-item-link"><a href="lop.php"><i class="fas fa-users"></i></a></li>
                        <li class="cthome-list-item-link"><a href="sinhvien.php"><i class="fas fa-user-graduate"></i></a></li>
                        <li class="cthome-list-item-link"><a href="giangvien.php"><i class="fas fa-chalkboard-teacher"></i></a></li>
                        <li class="cthome-list-item-link"><a href="diem.php"><i class="far fa-calendar-check"></i></a></li>
                        <li class="cthome-list-item-link"><a href="contact.php"><i class="fas fa-address-book"></i></a></li>
                    </ul>
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
<?php
} else {
    header('Location: dangnhap.php');
}
?>