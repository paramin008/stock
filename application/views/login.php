<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เข้าสู่ระบบ</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/square/blue.css') ?>">
  
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
</head>


<body >
<div class="wrapper fadeInDown zero-raduis">
  	  <div id="formContent">
  	    <!-- Tabs Titles -->

  	    <!-- Icon -->
          <center>
  	    <div class="fadeIn first">

  	     <img src="http://www.epayment.com.ng/images/blog-wp-login-1200x400.png" width="150px" height="50px" /> 

  	      <br>

  	    </div>
          </center>
  	    <!-- Login Form -->
        <?php echo validation_errors(); ?>  

<?php if(!empty($errors)) {
  echo $errors;
} ?>

<form action="<?php echo base_url('auth/login') ?>" method="post">

  	      <input type="email" id="email" class="fadeIn second zero-raduis" required name="email" placeholder="Email" autocomplete="off">

  	      <input type="password" id="password" class="fadeIn second zero-raduis" required name="password" placeholder="Password" autocomplete="off">
		     
  	      <input type="submit" class="fadeIn fourth zero-raduis" value="เข้าสู่ระบบ">
  	  
  	    </form>
  	    
  	  </div>
  </div>
<!-- /.login-box -->

<!-- jQuery 3 -->

<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js') ?>"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
