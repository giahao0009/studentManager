<!DOCTYPE html>
<html>
<?php
session_start();
if (isset($_SESSION['username'])) {
    $link = new mysqli('localhost', 'root', '', 'sinhvien') or die('kết nối thất bại ');
    mysqli_query($link, 'SET NAMES UTF8');
    ?>

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
        <header>
            <div class="container">
                 <div id="logo">
					  <div id="logoImg">
						   <img src="./assets/image/logokhoa1.png " width="30px">
					  </div>
					<a href="index.php">STUDENT MANAGER</a>
				 </div>
				 <div id="accountName">

					<p> Xin chào ! </p>
					<a href="dangxuat.php" alt="Đăng xuất"> <img src="./assets/image/logout.png" width="25px"> </a>
				 </div>
            </div>

        </header>
        <!--endheader-->
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

              </div>
              <div class="cthome" style="padding: 50px 50px 50px 50px;">
                    <h2 style="margin-bottom: 20px; font-size: 2rem;">Liên hệ chúng tôi</h2>
                    <div style="display: flex;">
                        <div style="width: 50%;">
                            <img src="./assets/image/logokhoa1.png" alt="hinhanh" width="100%">
                        </div>
                        <div>
                            <p>
                                Tên project: Phần mềm quản lý sinh viên <br>
                                Tên sinh viên thực hiện: <br>
                                - Nguyễn Gia Hào - 19dh110001 <br>
                                - Lương Trần Thiên Phúc <br>
                                - Đào Toàn Thắng <br>
                                email: giahao0009@gmail.com <br>
                            </p>
                        </div>
                    </div>
		      </div>

            </div>

        </div>
        <!--endbody-->
		<footer>
			<div class="container">
				Nguyễn Gia Hào - Lương Trần Thiên Phúc - Đào Toàn Thắng
		</footer>

    </body>
</html>
<?php
} else {
    header('location:login.php');
}
?>