

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        หน้าควบคุม
      <!-- <?php echo $this->session->userdata('firstname'); ?> -->

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"> <img src="<?php echo base_url('assets/icon/dashboard.png') ?>"width="25px">  หน้าแรก</a></li>
        <li class="active">หน้าควบคุม</li>
      </ol>
    </section>


    <!-- Main content -->
    
    <section class="content">
      <div class="row">
    <div class="col-md-12 col-xs-12">
<div class="box">
    <div class="box-body">
      <!-- Small boxes (Stat box) -->
      <?php if($is_admin == true): ?>

        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_products ?></h3>

                <p>สินค้าทั้งหมด</p>
              </div>
              <div class="icon">
               <img src="assets/icon/cubes.png" width="80px">
              </div>
              <a href="<?php echo base_url('products/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_paid_orders ?></h3>

                <p>สินค้าที่อนุมัติ</p>
              </div>
              <div class="icon">
                <img src="assets/icon/validation.png" width="80px">
                
              </div>
              <a href="<?php echo base_url('orders/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_users; ?></h3>

                <p>ผู้ใช้ทั้งหมด</p>
              </div>
              <div class="icon">
              <img src="assets/icon/user.png" width="80px">              
            </div>
              <a href="<?php echo base_url('users/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_stores ?></h3>

                <p>คลังสินค้าทั้งหมด</p>
              </div>
              <div class="icon">
              <img src="assets/icon/warehouse.png" width="80px">  
              </div>
              <a href="<?php echo base_url('stores/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>



          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">

                <h3><?php echo $total_brands ?></h3>
                <p>แบรนด์สินค้าทั้งหมด</p>
              </div>
              <div class="icon">
              <img src="assets/icon/brand-image.png" width="80px"> 
              </div>
              <a href="<?php echo base_url('brands/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $total_category ?></h3>

                <p>ประเภทสินค้าทั้งหมด</p>
              </div>
              <div class="icon">
              <img src="assets/icon/categories.png" width="80px"> 
              </div>
              <a href="<?php echo base_url('category/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>

       <!--  <div class="col-lg-3 col-xs-6">

            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php //echo $total_attributes ?></h3>

                <p>ลักษณะสินค้าทั้งหมด</p>
              </div>
              <div class="icon">
              <i class="ionicons ion-android-bookmark"></i>
              </div>
              <a href="<?php// echo base_url('attributes/') ?>" class="small-box-footer">เพิ่มเติม <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
      <?php endif; ?>
      
      </div>
      </div>  
    </section>
    </div>
    <!-- /.content -->
  
    
      
  <!-- /.content-wrapper -->

  <script type="text/javascript">
    $(document).ready(function() {
      $("#dashboardMainMenu").addClass('active');
    }); 
  </script>
