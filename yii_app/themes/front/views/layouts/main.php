<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="en">  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body class="hold-transition login-page">
  <!-- <div class="wrapper"> -->




    <!-- Content Wrapper. Contains page content -->
    <!-- <div class="content-wrapper"> -->

     <!--  <section class="content"> -->

       <?php echo $content; ?>

     <!-- </section> -->

     <!-- /.content -->
  <!--  </div> -->
   <!-- /.content-wrapper -->
<!--    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer> -->


<!-- </div> -->
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/dist/js/demo.js"></script>

<!-- jQuery 3 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/admin-lte/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
