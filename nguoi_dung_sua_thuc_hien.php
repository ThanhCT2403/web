<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Xanh| Quản lý USER</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>
<body>
  <section id="container">
    <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            require_once "../db.php"; 

            // 2. Viết câu lệnh truy vấn để thêm mới dữ liệu vào bảng TIN TỨC trong CSDL
            $id_nguoi_dung = $_POST['txtID'];
            $ten_nguoi_dung = $_POST['txtTenND'];
            $email = $_POST['txtEmail'];
            $sdt = $_POST['txtSDT'];
            $mat_khau = $_POST['txtMatKhau'];
            

            //Ghi nhan buc anh UP tren he thong hay chua
                
                    $sql = "
                        UPDATE `tbl_nguoi_dung` 
                        SET `ten_nguoi_dung` = '".$ten_nguoi_dung."', `email` = '".$email."', `sdt` = '".$sdt."', `mat_khau` = '".$mat_khau."' 
                        WHERE `tbl_nguoi_dung`.`id_nguoi_dung` = '".$id_nguoi_dung."'
                    ";
            // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
            $tin_tuc = mysqli_query($ket_noi, $sql);

            // 4. Thông báo cập nhật dữ liệu thành công và đẩy các bạn về trang Quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã cập nhật người dùng thành công');
                    window.location.href='nguoi_dung.php';
                </script>
            ";

        ;?>
    </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
</body>
</html>