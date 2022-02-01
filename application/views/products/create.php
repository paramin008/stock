

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      จัดการ
      <small>สินค้า</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="<?php echo base_url('dashboard') ?>"> <img src="<?php echo base_url('assets/icon/dashboard.png') ?>"width="25px">  หน้าแรก</a></li>
      <li class="active">สินค้า</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        <?php if($this->session->flashdata('success')): ?>
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
          </div>
        <?php elseif($this->session->flashdata('error')): ?>
          <div class="alert alert-error alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php endif; ?>


        <div class="box">
          <div class="box-header">
            <h3 class="box-title">เพิ่มสินค้า</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="<?php base_url('users/create') ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <?php echo validation_errors(); ?>

                <div class="form-group">

                  <label for="product_image">รูปภาพ</label>
                  <div class="kv-avatar">
                      <div class="file-loading">
                          <input id="product_image" name="product_image" type="file">
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="product_name">ชื่อสินค้า</label>
                  <input type="text" class="form-control" id="product_name" name="product_name" placeholder="ใส่ชื่อสินค้า" autocomplete="off"/>
                </div>

                <div class="form-group">
                  <label for="sku">หน่วยวัดสินค้า</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="เช่น ชิ้นหรืออัน" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="price">ราคา</label>
                  <input type="text" class="form-control" id="price" name="price" placeholder="หากไม่มีราคาให้ใส่ 0" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="qty">จำนวน</label>
                  <input type="text" class="form-control" id="qty" name="qty" placeholder="ใส่จำนวน" autocomplete="off" />
                </div>

                <div class="form-group">
                  <label for="description">รายละเอียด</label>
                  <textarea type="text" class="form-control" id="description" name="description" placeholder="ใส่รายละเอียด 
                  " autocomplete="off">
                  </textarea>
                </div>

               

                <div class="form-group">
                  <label for="brands">แบรนด์สินค้า</label>
                  <select class="form-control select_group" id="brands" name="brands" multiple="multiple">
                    <?php foreach ($brands as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="category">ประเภทสินค้า</label>
                  <select class="form-control select_group" id="category" name="category" multiple="multiple">
                    <?php foreach ($category as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group">
                  <label for="store">คลังสินค้า</label>
                  <select class="form-control select_group" id="store" name="store">
                    <?php foreach ($stores as $k => $v): ?>
                      <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="stored">ร้าน</label>
                  <input type="text" class="form-control" id="stored" name="stored" value="<?echo $this->session->userdata('store');?>" readonly autocomplete="off" />
                </div>
                <div class="form-group">
                  <label for="store">ความพร้อมใช้งาน</label>
                  <select class="form-control" id="availability" name="availability">
                    <option value="1">ใช่</option>
                    <option value="2">ไม่</option>
                  </select>
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <a href="<?php echo base_url('products/') ?>" class="btn btn-warning">กลับ</a>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(".select_group").select2();
    $("#description").wysihtml5();

    $("#mainProductNav").addClass('active');
    $("#addProductNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
    $("#product_image").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        // defaultPreviewContent: '<img src="/uploads/default_avatar_male.jpg" alt="Your Avatar">',
        layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

  });
</script>