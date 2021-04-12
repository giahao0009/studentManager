<?php
session_start();
if (isset($_SESSION['username'])) {
    // Đoạn lệnh dùng để kết nối vs DATABASE mysql
    $linkData = new mysqli('localhost', 'root', '', 'sinhvien') or die('data error');
    mysqli_query($linkData, 'SET NAMES UTF8');
    $query = 'SELECT * FROM giangvien';
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
                        <img src="assets/image/logokhoa1.png" alt="logo" width="30px">
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
                <div class="main-contain cthome">
                    <h2>Danh sách giảng viên</h2><br>
                    <div class="table-sv">
                        <table width="100%" border="1" cellspacing="1px">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Họ và tên</th>
                                    <th>MSGV</th>
                                    <th>Trình độ</th>
                                    <th>Chuyên môn</th>
                                    <th>Email</th>
                                    <th>SDT</th>

                                </tr>

                            </thead>
                            <tbody>
                                <?php
if (mysqli_num_rows($result) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
            $maso = $row['masoGV'];
            $hoten = $row['hoten'];
            $trinhdo = $row['trinhdo'];
            $chuyenmon = $row['chuyenmon'];
            $email = $row['email'];
            $sdt = $row['sdt'];
            $avt = $row['link_avt_GV'];
            //------------------------------------
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$hoten</td>";
            echo "<td>$maso</td>";
            echo "<td>$trinhdo</td>";
            echo "<td>$chuyenmon</td>";
            echo "<td>$email</td>";
            echo "<td>$sdt</td>";

            echo "</tr>";

        }
    }
    ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <footer >
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