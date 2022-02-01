<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
          <img src="<?php echo base_url('assets/icon/dashboard.png') ?>"width="25px"> 
          <span>&nbsp;หน้าควบคุม</span>
          </a>
        </li>
        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="mainUserNav">
            <a href="#">
            <img src="<?php echo base_url('assets/icon/user.png') ?>"width="25px">
              <span>&nbsp;ผู้ใช้งาน</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <?php if(in_array('createUser', $user_permission)): ?>
              <li id="createUserNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> เพิ่มผู้ใช้</a></li>
              <?php endif; ?>

              <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
              <li id="manageUserNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> จัดการผู้ใช้</a></li>
            <?php endif; ?>
            </ul>
          </li>
          <?php endif; ?>

          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="mainGroupNav">
              <a href="#">
             
               <img src="<?php echo base_url('assets/icon/group.png') ?>"width="25px">
                <span>&nbsp;กลุ่มผู้ใช้</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="addGroupNav"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i> เพิ่มกลุ่มผู้ใช้</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupNav"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> จัดการกลุ่มผู้ใช้</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>


          <?php if(in_array('createBrand', $user_permission) || in_array('updateBrand', $user_permission) || in_array('viewBrand', $user_permission) || in_array('deleteBrand', $user_permission)): ?>
            <li id="brandNav">
              <a href="<?php echo base_url('brands/') ?>">
              <img src="<?php echo base_url('assets/icon/brand-image.png') ?>"width="25px"><span>&nbsp;แบรนด์สินค้า</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
            <li id="categoryNav">
              <a href="<?php echo base_url('category/') ?>">
             
              <img src="<?php echo base_url('assets/icon/categories.png') ?>"width="25px"> <span>&nbsp;ประเภทสินค้า</span>
              </a>
            </li>
          <?php endif; ?>

          <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
            <li id="storeNav">
              <a href="<?php echo base_url('stores/') ?>">
              <img src="<?php echo base_url('assets/icon/warehouse.png ') ?>"width="25px"> <span>&nbsp;คลังสินค้า</span>
               
              </a>
            </li>
          <?php endif; ?>
          

       <!--   <?php // if(in_array('createAttribute', $user_permission) || in_array('updateAttribute', $user_permission) || in_array('viewAttribute', $user_permission) || in_array('deleteAttribute', $user_permission)): ?>
          <li id="attributeNav">
            <a href="<?php //echo base_url('attributes/') ?>">
              <i class="fa fa-files-o"></i> <span>ลักษณะสินค้า</span>
            </a>
          </li> !-->
          <?php // endif; ?>



          <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="mainProductNav">
              <a href="#">
              <img src="<?php echo base_url('assets/icon/box.png ') ?>"width="25px">
                <span>&nbsp;สินค้า</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="addProductNav"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> เพิ่มสินค้า</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductNav"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> จัดการสินค้า</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          

          


          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="mainOrdersNav">
              <a href="#">
              <img src="<?php echo base_url('assets/icon/trade.png ') ?>"width="25px">
                <span>&nbsp;เบิกสินค้า</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="addOrderNav"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> สร้างรายการเบิกสินค้า</a></li>
                <?php endif; ?>

                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrdersNav"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> จัดการรายการเบิก</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
          
          

     <?php if(in_array('updateCompany', $user_permission)): ?>
              <li id="companyNav"><a href="<?php echo base_url('company/') ?>">
              <img src="<?php echo base_url('assets/icon/employee.png ') ?>"width="25px">
              <span>&nbsp;ข้อมูลร้าน</span></a></li>
        <?php endif;  ?> 

        
       <?php if(in_array('viewReports', $user_permission)): ?>
        <li id="reportSideTree">
          <a href="<?php echo base_url('reports/') ?>">
          <img src="<?php echo base_url('assets/icon/statistics.png ') ?>"width="25px">
        <span>&nbsp;รายงาน</span></a></li>
      <?php endif; ?> 

      

        <!-- <li class="header">Settings</li> -->

        <?php if(in_array('viewProfile', $user_permission)): ?>
          <li id="profile">
              <a href="<?php echo base_url('users/profile/') ?>">
              <img src="<?php echo base_url('assets/icon/personal-information.png ') ?>"width="25px">
            <span>&nbsp;ข้อมูลส่วนตัว</span></a></li>
        <?php endif; ?>
        
        <?php if(in_array('updateSetting', $user_permission)): ?>
          <li id="setting">
            <a href="<?php echo base_url('users/setting/') ?>">
            
            <img src="<?php echo base_url('assets/icon/settings.png ') ?>"width="25px"> 
            <span>&nbsp;ตั้งค่า</span></a></li>
        <?php endif; ?>

        <?php endif; ?>
        <!-- user permission info -->
        <li><a href="<?php echo base_url('auth/logout') ?>">
        <img src="<?php echo base_url('assets/icon/logout.png ') ?>"width="25px">  
        <span>&nbsp;ออกจากระบบ</span></a></li>

      </ul>
    </section>
  
    <!-- /.sidebar -->
  </aside>