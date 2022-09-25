<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Xanh| Quản lý SẢN PHẨM TÁI SỬ DỤNG</title>

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
             //1.ket noi co so du lieu
                 require_once "../db.php"; 

            //2.lấy ra tin tức thêm mới bảng tbl_tin_tuc
                $id_san_pham = $_GET["id"];
                $sql = "
                    DELETE
                    FROM `tbl_tai_sd`
                    WHERE `tbl_tai_sd`.`id_san_pham` = '".$id_san_pham."'";

            //3. Thuc thi cau lenh lay du lieu mong muon
                    $tin_tuc = mysqli_query($ket_noi, $sql);

            //hien thi thong bao da nhap thanh cong
                    //echo"
                        //<script type = 'text/javascript'>
                            //window.alert('Bạn đã xóa thành công')
                        //</script> ";

                    echo"
                        <script type = 'text/javascript'>
                            window.location.href='san_pham_tai_sd.php'
                        </script> ";
            ;?>
    </section>section>
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