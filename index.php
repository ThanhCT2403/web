<?php 
    // Mục đích: kiểm tra xem bạn có quyền truy cập trang này hay không thông qua biến $_SESSION['da_dang_nhap'] = 1 --> được phép truy cập; và ngược lại.
    session_start();

    if(!isset($_SESSION['da_dang_nhap'])) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn không được phép truy cập');
                window.location.href='login.php';
            </script>
        ";
    }
;?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>XANH| Site quản lý</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

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
      <a href="index.php" class="logo"><b>X<span>ANH</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <li><a class="dropdown-item" href="404.php">Cài đặt</a></li>        
                <li><a class="dropdown-item" href="dang_xuat.php">Đăng xuất</a></li>
              </li>
              
            </ul>
          </li>
          <!-- settings end -->
        </ul>
        </div>
      <!--<div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>-->
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
              <li><a href="san_pham_tai_che.php">Sản phẩm tái chế</a></li>
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
        <div class="row">
        
          <div class="col-lg-9 main-chart">
            
            <!-- /row -->
            <div class="row">
              <!-- WEATHER PANEL -->
              <div class=" col-md-4 mb">
                <div class="weather pn">
                  
                  <i class="fa fa-cloud fa-5x"></i>                 
                  <h2><a style="color: white" href="san_pham_organic.php">Sản phẩm<br> Organic</a></h2>
                
                </div>
              </div>
                <!-- /Message Panel-->
              <div class=" col-md-4 mb">
                <div class="weather2 pn">
                  
                  <i class="fa fa-leaf fa-5x"></i>                 
                  <h2><a style="color: white" href="san_pham_tai_che.php">Sản phẩm <br> Tái chế</a></h2>
                  
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather3 pn">
                  
                  <i class="fa fa-glass fa-5x"></i>                 
                  <h2><a style="color: white" href="san_pham_tai_sd.php">Sản phẩm<br>Tái sử dụng</a></h2>
        
                </div>
              </div>
              <div class="col-xs-12 col-md-4 mb">
                <div class="weather4 pn">
                  
                  <i class="fa fa-tree fa-5x"></i>                 
                  <h2><a style="color: white" href="san_pham_handmade.php">Sản phẩm<br> Handmade</a></h2>
               
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather5 pn">
                  
                  <i class="fa fa-newspaper-o fa-5x"></i>                 
                  <h2><a style="color: white" href="tin_tuc.php"> Tin tức</a></h2>
                 
                </div>
              </div>
              <div class=" col-md-4 mb">
                <div class="weather6 pn">
                  
                  <i class="fa fa-hand-peace-o fa-5x"></i>                 
                  <h2><a style="color: white" href="nguoi_dung.php"> Người dùng</a></h2>
                
                </div>
              </div>

              
              <!-- /col-md-8  -->
            </div>
            
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
           <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- First Activity -->
            
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt" >ADMIN XANH</h4>
            <?php
                                            //1.ket noi co so du lieu
                                            require_once "../db.php"; 

                                            //2.lay ra tin tuc moi nhat
                                            $sql = "SELECT * FROM tbl_admin ORDER BY id_admin DESC";

                                            //3. Thuc thi cau lenh lay du lieu mong muon
                                            $admin = mysqli_query($ket_noi, $sql);
                    

                                            //4.Hien thi du lieu vua lay
                                          
                                            while ($row = mysqli_fetch_array($admin)){
                                              
                                        ;?>   
                                        <div class="desc">
                                          <div class="thumb">
                                            <img class="img-circle" scr="<?php echo $row['anh_minh_hoa'] ? 'img/'.$row['anh_minh_hoa'] : 'img/friends/fr-02.jpg';?>" width="35px" height="35px" align="">
                                        </div>
                                        <div class="details">
                                        <p>
                                        <a href="#"><?php echo $row["ten"];?></a><br/>
                                          <muted><a style="color: black" href="admin_sua.php?id=<?php echo $row["id_admin"];?>">Sửa</a>|<a style="color: black" href="admin_xoa.php?id=<?php echo $row["id_admin"];?>">Xóa</a></muted>
                                        </p>
                                          </div>
                                        </div>
                                        <?php
                                            }
                                        ;?>
            <!-- First Member -->
            
            <!-- Second Member -->
            
            <!-- Third Member -->
            
            <!-- Fourth Member -->
            
            <!-- Second Member -->
            
            <a class="btn btn-primary btn-lg  btn-block btn-theme active" href = "admin_them_moi.php">Thêm mới</a>
            <!-- CALENDAR-->
            <!--<div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>-->
            </div>
            <!-- / calendar -->
          </div>
        <!-- /row -->
      </section>
    </section>

    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <!--<script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by <a href="http://alvarez.is" target="_blank" style="color:#4ECDC4">Alvarez.is</a>.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>-->
  <!--<script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>-->
</body>

</html>
