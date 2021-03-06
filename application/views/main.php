<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="<?php echo base_url() ?>assets/img/Apr_globe_favicon.ico" type="image/gif">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



<!--***************************************** header  *****************************************-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-purple fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('home_controller/home') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BYB</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BYB</b></span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="<?php echo base_url() ?>Login_controller/logout" class="glyphicon glyphicon-log-out"></a>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

<!--***************************************** kolom left side + user photo  *****************************************-->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/alte/dist/img/cCaTD6wT_400x400.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Users</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

<!--***************************************** kolom search  *****************************************-->

<!-- search form
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
/.search form -->

<!--***************************************** side bar + widgets  *****************************************-->
<!-- (manggil sidebar) -->

<?php $this->load->view($sidebar); ?>
      
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- /.main-sidebar -->

<!--***************************************** display  *****************************************-->
<!--manggil konten -->

<?php $this->load->view($content); ?>


<!--***************************************** footer ***************************************** -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Beta
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="#">BYB</a>.</strong> All rights
    reserved.
  </footer>

<!--***************************************** src ***************************************** -->



<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/alte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/alte/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>

<!-- script ajax untuk chain dropdown PPOB TV -->
<script> 
  $(document).ready(function () {
    $('#kodeProducts').on('change',function(){
      var PRODUCT_ID = $(this).val();
      if(PRODUCT_ID == '') // jika value PRODUCT_ID kosong maka...
      {
        $('#kodeProduct').prop('disabled', true); // set menjadi disable
      }
      else
      {
        $('#kodeProduct').prop('disabled', false); // hilangkan disable isikan dengan ajax
        $.ajax({
          url: "<?php echo base_url() ?>home_controller/subtv",
          type: "POST",
          data: {'PRODUCT_ID' : PRODUCT_ID},
          dataType: 'json',
          success: function(data){
            $('#kodeProduct').html(data);
          },
          error: function(){
            alert('Ada Kesalahan');
          }
        });
      }
    });
  });
</script>


<!-- script menampilkan dan menghilangkan -->
<!-- <script>
//  Inisiasi awal penggunaan jQuery
 $(document).ready(function(){
  //Pertama sembunyikan elemen class gambar
        $('.sidebar-menu').hide();        

  //Ketika elemen class tampil di klik maka elemen class gambar tampil
        $('.masukHome').click(function(){
   $('.sidebar-menu').show();
        });

  //Ketika elemen class sembunyi di klik maka elemen class gambar sembunyi
        $('.keluarHome').click(function(){
   //Sembunyikan elemen class gambar
   $('.sidebar-menu').hide();        
        });
  });
 </script> -->

</body>
</html>
