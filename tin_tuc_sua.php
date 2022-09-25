<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Xanh| Quản lý TIN TỨC</title>

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
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
          tinymce.init({
            selector: '#txtMoTa'
          });

          tinymce.init({
            selector: '#txtNoiDung'
          });
        </script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>X<span>ANH</span></b></a>
      <!--logo end-->
      <div class="nav pull-left notify-row" id="top_menu">
        <!--  notification start -->
        <!--<ul class="nav pull-right top-menu">
          <!-- settings start -->
          <!--<li class="dropdown">
            <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="404.php">Cài đặt</a></li>
                        
                        <li><a class="dropdown-item" href="dang_xuat.php">Đăng xuất</a></li>
                    </ul>
          </li>
          <!-- settings end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="dang_xuat.php">Đăng xuất</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="img/ui-sam.jpg" class="img-circle" width="80"></p>
          <h5 class="centered">ThanhCT</h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Trang chủ</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tree"></i>
              <span>Sản phẩm</span>
              </a>
            <ul class="sub">
              <li><a href="san_pham_organic.php">Sản phẩm organic</a></li>
              <li><a href="san_pham_tai_che.php">Sản phẩm tái chê</a></li>
              <li><a href="san_pham_tai_sd.php">Sản phẩm tái sử dụng</a></li>
              <li><a href="san_pham_handmade.php">sản phẩm handmade</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="tin_tuc.php">
              <i class="fa fa-newspaper-o"></i>
              <span>Tin tức</span>
              </a>
          <li class="sub-menu">
            <a href="nguoi_dung.php">
              <i class="fa fa-male"></i>
              <span>Người dùng</span>
              </a>
                 </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Cập nhật TIN TỨC</h3>
        <!-- BASIC FORM VALIDATION -->
        <!-- /row -->
        <!-- FORM VALIDATION -->
        
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class=" form">
              <?php 
                // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
                require_once "../db.php"; 
                // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn (TIN TỨC đã lưu trong CSDL)
                $id_tin_tuc = $_GET["id"];

                $sql = "
                          SELECT * 
                          FROM tbl_tin_tuc
                          WHERE id_tin_tuc = '".$id_tin_tuc."'
                ";

                // 3. Thực thi câu lệnh lấy dữ liệu mong muốn
                $tin_tuc = mysqli_query($ket_noi, $sql);

                // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy
                $row = mysqli_fetch_array($tin_tuc);
            ;?>
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="tin_tuc_sua_thuc_hien.php" enctype="multipart/form-data">
                  <div class="form-floating mb-3">
                                                <label for="inputEmail"><h4><strong>Tiêu đề</strong></h4></label>
                                                <input class="form-control" id="inputEmail" type="text"  name="txtTieuDe" value="<?php echo $row["tieu_de"];?>"/>
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="txtAnhMinhHoa"><h4><strong>Ảnh minh họa</strong></h4></label>
                                                <input class="form-control" id="txtAnhMinhHoa" type="file"  name="txtAnhMinhHoa" value="<?php echo $row["anh_minh_hoa"];?>"/>
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail"><h4><strong>Mô tả</strong></h4></label>
                                                <textarea class="form-control tinymce"  name="txtMoTa" id="txtMoTa"><?php echo $row["mo_ta"];?></textarea>
                                                
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="inputEmail"><h4><strong>Nội dung</strong></h4></label>
                                                <textarea class="form-control tinymce"  name="txtNoiDung" id="txtNoiDung"><?php echo $row["noi_dung"];?></textarea>
                                                
                                            </div>
                  <div class="form-group">
                  <br>
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="hidden" name="txtID" value="<?php echo $row["id_tin_tuc"];?>">
                      <input class="btn btn-theme" type="submit" name="btnSubmit" value="Cập nhật">
                      <a class="btn btn-theme04" type="button" href="tin_tuc.php">Cancel</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
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
