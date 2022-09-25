<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Xanh| Quản lý SẢN PHẨM TÁI CHẾ</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

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
        <h3><i class="fa fa-angle-right"></i><strong> Quản lý SẢN PHẨM TÁI CHẾ</strong></h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align: center;"><strong>Mã sản phẩm</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Giá tiền</th>
                    <th style="text-align: center;">Số lượng</th>
                    <th style="text-align: center;">Ghi chú</th>
                    <th style="text-align: center;">Sửa</th>
                    <th style="text-align: center;">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                                            //1.ket noi co so du lieu
                                            require_once "../db.php"; 

                                            //2.lay ra tin tuc moi nhat
                                            $sql = "SELECT * FROM tbl_tai_che ORDER BY id_san_pham DESC";

                                            //3. Thuc thi cau lenh lay du lieu mong muon
                                            $san_pham = mysqli_query($ket_noi, $sql);
                    

                                            //4.Hien thi du lieu vua lay
                                            $i=0;
                                            while ($row = mysqli_fetch_array($san_pham)){
                                                $i++;
                                        ;?>   
                                        <tr>
                                            <td><?php echo $i;?></td>
                                            <td><strong><?php echo $row["ten_san_pham"];?></strong></td>
                                            <td><?php echo $row["gia_tien"];?></td>
                                            <td><?php echo $row["so_luong"];?></td>
                                            <td><?php echo $row["ghi_chu"];?></td>
                                            <td><a style="color: green" href= "san_pham_tai_che_sua.php?id=<?php echo $row["id_san_pham"];?>">Sửa</a></td>
                                            <td><a style="color: green" href= "san_pham_tai_che_xoa.php?id=<?php echo $row["id_san_pham"];?>">Xóa</a></td>
                                        </tr>
                                        <?php
                                            }
                                        ;?>
                </tbody>
              </table>
            </div>
          </div>

          <!-- page end-->
        </div>
        <a class="btn btn-primary btn-lg  btn-block btn-theme active" href = "san_pham_tai_che_them_moi.php">Thêm mới sản phẩm</a>
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
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      /*nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";*/

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          /*this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
