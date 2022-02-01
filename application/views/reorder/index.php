
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คืนสินค้า</title>
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->  
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->  
  <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/fileinput/fileinput.min.css">

  <!-- icheck -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">

  <!-- jQuery 3 -->
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="assets/bower_components/raphael/raphael.min.js"></script>
  <script src="assets/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- Select2 -->
  <script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->  
  <script src="assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="assets/dist/js/demo.js"></script>
  <script src="assets/plugins/fileinput/fileinput.min.js"></script>

  <!-- ChartJS -->
  <script src="assets/bower_components/Chart.js/Chart.js"></script>

  <!-- icheck -->
  <script src="assets/plugins/iCheck/icheck.min.js"></script>

  <!-- DataTables -->
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

</head>
<body>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo"><b>ระบบเบิกสินค้า</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>


<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i> <span>หน้าควบคุม</span>
          </a>
        </li>

            <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>ผู้ใช้งาน</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li id="createUserNav"><a href="users/create"><i class="fa fa-circle-o"></i> เพิ่มผู้ใช้</a></li>
             

              <li id="manageUserNav"><a href="users"><i class="fa fa-circle-o"></i> จัดการผู้ใช้</a></li>
           
            </ul>
          </li>
         

            <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>กลุ่มผู้ใช้</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li id="addGroupNav"><a href="groups/create"><i class="fa fa-circle-o"></i> เพิ่มกลุ่มผู้ใช้</a></li>
               
                <li id="manageGroupNav"><a href="groups"><i class="fa fa-circle-o"></i> จัดการกลุ่มผู้ใช้</a></li>
               
              </ul>
            </li>
         


            <li id="brandNav">
              <a href="brands/">
                <i class="glyphicon glyphicon-tags"></i> <span>แบรนด์สินค้า</span>
              </a>
            </li>
         

            <li id="categoryNav">
              <a href="category/">
                <i class="fa fa-files-o"></i> <span>ประเภทสินค้า</span>
              </a>
            </li>
         

            <li id="storeNav">
              <a href="stores/">
                <i class="fa fa-files-o"></i> <span>คลังสินค้า</span>
              </a>
            </li>
         

          <li id="attributeNav">
            <a href="attributes/">
              <i class="fa fa-files-o"></i> <span>ลักษณะสินค้า</span>
            </a>
          </li>
         

            <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>สินค้า</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                  <li id="addProductNav"><a href="products/create"><i class="fa fa-circle-o"></i> เพิ่มสินค้า</a></li>
               
                <li id="manageProductNav"><a href="products"><i class="fa fa-circle-o"></i> จัดการสินค้า</a></li>
               
              </ul>
            </li>

            <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>เบิกสินค้า</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              
                  <li id="addOrderNav"><a href="orders/create"><i class="fa fa-circle-o"></i> สร้างรายการเบิกสินค้า</a></li>
               

             
                <li id="manageOrdersNav"><a href="orders"><i class="fa fa-circle-o"></i> จัดการรายการเบิก</a></li>
              


              </ul>
            </li>
            <li id="reorder"><a href="<?php echo base_url('reorder') ?>"> <i class="fa fa-cube"></i><span> คืนสินค้า</span></a></li>

            <li><a href="company/"><i class="fa fa-files-o"></i> <span>ข้อมูลร้าน</span></a></li>

            <li><a href="reports/"><i class="glyphicon glyphicon-stats "></i> <span>รายงาน</span></a></li>

            
            

        <!-- <li class="header">Settings</li> -->

      
          <li><a href="users/profile/"><i class="fa fa-user-o"></i> <span>ข้อมูลส่วนตัว</span></a></li>
       
       
          <li><a href="users/setting/"><i class="fa fa-wrench"></i> <span>ตั้งค่า</span></a></li>
       

       
        <!-- user permission info -->
        <li><a href="auth/logout"><i class="glyphicon glyphicon-log-out"></i> <span>ออกจากระบบ</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      
   คืนสินค้า
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> หน้าเเรก</a></li>
      <li class="active">เบิกสินค้า</li>
    </ol>

    
  </section>
  

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

         

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">จัดการคืนสินค้า</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="print.php" method="post" class="form-horizontal">
              <div class="box-body">

             

                <div class="form-group">
                  <label for="date" class="col-sm-12 control-label">Date: <?php echo date('Y-m-d') ?></label>
                </div>
                <div class="form-group">
                  <label for="time" class="col-sm-12 control-label">Date: <?php echo date('h:i a') ?></label>
                </div>

                <div class="col-md-4 col-xs-12 pull pull-left">

                <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">หมายเลขบิล</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="bill_on" name="bill_on" placeholder="ใส่หมายเลขบิล" value="" autocomplete="off"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">ชื่อผู้เบิก</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="ใส่ชื่อผู้เบิก" value="" autocomplete="off"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">ที่อยู่</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="ใส่ที่อยู่" value="" autocomplete="off">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">เบอร์โทร</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="ใส่เบอร์โทร" value="" autocomplete="off">
                    </div>
                  </div>
                
                
                
                 <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">เรื่อง</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="title" name="title" placeholder="ใส่เรื่อง" value="" autocomplete="off">
                    </div>
                    </div>
                  </div><br /> <br/>
                <table class="table table-bordered" id="myTable">
                  <thead>
                    <tr>
                      <th style="width:50%">สินค้า</th>
                      <th style="width:10%">จำนวน</th>
                     
                      <th style="width:10%"><button type="button" id="add_row" onclick="myFunction()" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>

                       <tr>
                         <td>
                         <input type="text" name="product[]" id="product" class="form-control" required  value="" autocomplete="off">
                          </td>
                          <td><input type="text" name="qty[]" id="qty" class="form-control" required  value="" autocomplete="off"></td>
                         
                       </tr>
                       
                   </tbody>
                </table>

                <br /> <br/>

                <div class="col-md-6 col-xs-12 pull pull-right">

                 
               
                 
                  <div class="form-group">
                    <label for="paid_status" class="col-sm-5 control-label">สถานะการส่งมอบ</label>
                    <div class="col-sm-7">
                      <select type="text" class="form-control" id="paid_status" name="paid_status">
                        <option value="1">ส่งมอบแล้ว</option>
                        <option value="2">ยังไม่ส่งมอบ</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="discount" class="col-sm-5 control-label">รายละเอียด</label>
                    <div class="col-sm-7">
                      <textarea  class="form-control" id="detail" name="detail" placeholder="รายละเอียด"  autocomplete="off"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">

<button class="btn btn-default" type="submit">Print</button>
            
               
             
              </div>
            </form>
          <!-- /.box-body -->
          
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Paramin</b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y')?>.</strong> All rights reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

</head>
<body>



<script>
function myFunction() {
  var table = document.getElementById("myTable");
  var row = table.insertRow(1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  
  cell1.innerHTML = "<input type=text id=product class=form-control name=product[] value=>  ";
  cell2.innerHTML = "<input type=text id=qty class=form-control name=qty[] value=> ";
  
}
</script>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
      $("#reorder").addClass('active');
    }); 
  </script>
