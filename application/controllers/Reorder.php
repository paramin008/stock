<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reorder extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tb_test');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id = null)
	{
		
		$this->save_item();
		$this->load->view('reorder/index', [
			'items' => $this->tb_test->get_items(),
			'item' => $this->tb_test->get_item_by_id($id)
			
		]);
		
	}

	public function delete($id)
	{
		$this->tb_test->delete_item($id);
		redirect(base_url('/'));
	}


	private function save_item() 
	{
		$this->load->library('form_validation');
		$input = $this->input->post();
		
		if(!empty($input)) {
			$this->form_validation->set_rules('name', 'ชื่อ', 'required');
			if($this->form_validation->run())
			{
				if(empty($input['id']))
				{
					// สร้างข้อมูลใหม่
					$this->tb_test->create_item($input);
				}
				else 
				{
					// แก้ไขข้อมูล
					$this->tb_test->update_item($input['id'], $input);
				}
	
				redirect(base_url('/'));
			}
		}
	}


	public function printDiv($id)
	{
		$this->load->view('welcome_message', [
			'items' => $this->tb_test->get_items(),
			'item' => $this->tb_test->get_item_by_id($id)
			
		]);
        
		if($id) {
			$order_data = $this->tb_test->getOrdersData($id);
			

			$order_date = date('d/m/Y', $order_data['date_time']);
			$paid_status = ($order_data['paid_status'] == 1) ? "ส่งมอบแล้ว" : "ยังไม่ส่งมอบ";

			$html = '<!-- Main content -->
			<!DOCTYPE html>
			<html>
			<head>
			  <meta charset="utf-8">
			  <meta http-equiv="X-UA-Compatible" content="IE=edge">
			  <title>ใบเบิก</title>
			  <!-- Tell the browser to be responsive to screen width -->
			  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
			  <!-- Bootstrap 3.3.7 -->
			  <link rel="stylesheet" href="'.base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css').'">
			  <!-- Font Awesome -->
			  <link rel="stylesheet" href="'.base_url('assets/bower_components/font-awesome/css/font-awesome.min.css').'">
			  <link rel="stylesheet" href="'.base_url('assets/dist/css/AdminLTE.min.css').'">
			</head>
			<body onload="window.print();">
			
			<div class="wrapper">
			  <section class="invoice">
			    <!-- title row -->
			    <div class="row">
			      <div class="col-xs-12">
			        <h4 class="page-header">
			         <img src="../../assets/images/product_image/logo.png"  width="150" height="150"> ใบเบิกสินค้า
			          <small class="pull-right">วันที่: '.$order_date.'</small>
			        </h4>
			      </div>
				  
				  <div class="col-xs-12"></div>
			      <!-- /.col -->
			    </div>
			    <!-- info row -->
			    <div class="row invoice-info">
			      
			      <div class="col-sm-4 invoice-col">
			       <b>ชื่อเรื่อง:</b> '.$order_data['name'].'<br>
			        <b>หมายเลขบิล:</b> '.$order_data['bill_no'].'<br>
			        <b>ชื่อผู้เบิก:</b> '.$order_data['customer_name'].'<br>
			        <b>ที่อยู่:</b> '.$order_data['customer_address'].' <br />
			        <b>เบอร์โทร:</b> '.$order_data['customer_phone'].'<br />
                    <b>รายละเอียด:</b> '.$order_data['detail'].'<br />

			      </div>
			      <!-- /.col -->
			    </div>
			    <!-- /.row -->

			    <!-- Table row -->
			    <div class="row">
			      <div class="col-xs-12 table-responsive">
			        <table class="table table-striped">
			          <thead>
			          <tr>
			            <th>สินค้า</th>
			            <th>ราคา</th>
			            <th>จำนวน</th>
			            <th>ราคารวม</th>
			          </tr>
			          </thead>
			          <tbody>'; 

			          foreach ($orders_items as $k => $v) {

			          	$product_data = $this->model_products->getProductData($v['product_id']); 
			          	
			          	$html .= '<tr>
				            <td>'.$product_data['name'].'</td>
				            <td>'.$v['rate'].'</td>
				            <td>'.$v['qty'].'&nbsp;'.$product_data['sku'].'</td>
				            <td>'.$v['amount'].'</td>
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

			        <div class="table-responsive">
			          <table class="table">
			            <tr>
			              <th style="width:50%">ราคารวมสินค้าทั้งหมด:</th>
			              <td>'.$order_data['gross_amount'].' บาท</td>
			            </tr>';

			            if($order_data['service_charge'] > 0) {
			            	$html .= '<tr>
				              <th>Service Charge ('.$order_data['service_charge_rate'].'%)</th>
				              <td>'.$order_data['service_charge'].'</td>
				            </tr>';
			            }

			            if($order_data['vat_charge'] > 0) {
			            	$html .= '<tr>
				              <th>Vat Charge ('.$order_data['vat_charge_rate'].'%)</th>
				              <td>'.$order_data['vat_charge'].'</td>
				            </tr>';
			            }
			            $html .=' 
			            <tr >
			              
						  <th> สถานะการส่งมอบ:</th>
			              <td>'.$paid_status.'</td>
			            </tr>
					
						
			          </table>
			        </div>
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
						  <td></br></br></br>.............................................</br>'."&nbsp;&nbsp;ผู้อนุมัติเบิกสินค้า<br>&nbsp;&nbsp;&nbsp;&nbsp;......../........./........".'</td> 
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
		}


	}


}
