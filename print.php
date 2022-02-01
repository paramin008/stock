<?php 
include('config.php');

$customer_name = $_POST['customer_name'];
$title = $_POST['title'];
$customer_address = $_POST['customer_address'];
$customer_phone = $_POST['customer_phone'];
$bill_on = $_POST['bill_on'];
$detail = $_POST['detail'];
?>

<?php
$html = '<!-- Main content -->
			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>ใบคืนสินค้า</title>
			  <!-- Tell the browser to be responsive to screen width -->
			  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			  <!-- Bootstrap 3.3.7 -->
			  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
			  <!-- Font Awesome -->
			  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
			  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
			</head>
			<body onload="window.print();">
			
			<div class="wrapper">
			  <section class="invoice">
			    <!-- title row -->
			    <div class="row">
			      <div class="col-xs-12">
			        <h4 class="page-header">
			         <img src="assets/images/product_image/logo.png"  width="150" height="150"> ใบคืนสินค้า
			          <small class="pull-right">วันที่: '.date('d-m-y').'</small>
			        </h4>
			      </div>
				  
				  <div class="col-xs-12"></div>
			      <!-- /.col -->
			    </div>
			    <!-- info row -->
			    <div class="row invoice-info">
			      
			      <div class="col-sm-4 invoice-col">
			       <b>ชื่อเรื่อง:</b> '.$title.'<br>
			        <b>หมายเลขบิล:</b> '.$bill_on.'<br>
			        <b>ชื่อผู้เบิก:</b> '.$customer_name.'<br>
			        <b>ที่อยู่:</b> '.$customer_address.' <br />
			        <b>เบอร์โทร:</b> '.$customer_phone.'<br />
                    <b>รายละเอียด:</b> '.$detail.'<br />

			      </div>
			      <!-- /.col -->
			    </div>
			    <!-- /.row -->

			    <!-- Table row -->
			    <div class="row">
			      <div class="col-xs-12 table-responsive">
			        <table class="table table-bordered">
			          <thead>
			          <tr>
			            <th>สินค้า</th>
			          
			            <th>จำนวน</th>
			           
			          </tr>
			          </thead>
			          <tbody>'; 

                    foreach (array_combine($_POST['product'], $_POST['qty']) as $product => $qty) {
			         
			          
			          	
			          	$html .= '<tr>
				            <td>'.$product.'</td>
				            <td>'.$qty.'</td>
				           
			          	</tr>';
			          }
			          
                      
			          $html .= '</tbody>
			        </table>
			      </div>
			      <!-- /.col -->
			    </div>
			    <!-- /.row -->

			    <div class="row">
			      
			      <div class="col-xs-6 pull pull-right">

			       
			      </div>
			      <!-- /.col -->
			    </div>
			    <!-- /.row -->
				
				<div class="row">
				<div class="col-xs-6 table-responsive">
				  <table class="table table-striped">
					<thead>
					<tr>
					  <th></th>
					  
					  <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตราประทับ</th>
					
					</tr>
					</thead>
					<tbody>'; 

						
						
						$html .= '<tr>
						  <td></br></br></br>.............................................</br>'."&nbsp;&nbsp;ผู้รับสินค้า<br>&nbsp;&nbsp;&nbsp;&nbsp;......../........./........".'</td> 
						  <td></br></br></br>.............................................</br>'."&nbsp;&nbsp;&nbsp;ผู้มีอำนาจลงนาม<br>&nbsp;&nbsp;&nbsp;&nbsp;......../........./........".'
						 </td>
						
						</tr>';
					
					
					$html .= '</tbody>
				  </table>
				 
				</div>
				<!-- /.col -->
			  </div>



			  </section>
			 
			  <!-- /.content -->
			</div>
			
		</body>
	</html>';

			  echo $html; 
			
		?>