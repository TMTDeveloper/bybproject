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
    <a href="<?php echo base_url('First_controller') ?>" class="logo">
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
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/alte/dist/img/cCaTD6wT_400x400.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Users</span>
            </a>
            <ul class="dropdown-menu">

              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/alte/dist/img/cCaTD6wT_400x400.jpg" class="img-circle" alt="User Image">

                <p>
                  Users
                  <small>Lorem Ipsum</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url() ?>Login_controller/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
              
            </ul>
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

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

<!--***************************************** side bar + widgets  *****************************************-->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        
        <li>
          <a href="<?php echo base_url('First_controller') ?>">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-credit-card"></i> <span>PPOB</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> Telkom</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> Pascabayar</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> TV</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> Finance</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> PDAM</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> Asuransi</a></li>
            <li><a href="<?php echo base_url('First_controller/ppob') ?>"><i class="fa fa-circle-o"></i> PLN</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-list"></i> <span>Pembelian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('First_controller/pembelian') ?>"><i class="fa fa-circle-o"></i> Pulsa</a></li>
            <li><a href="<?php echo base_url('First_controller/pembelian') ?>"><i class="fa fa-circle-o"></i> Data</a></li>
            <li><a href="<?php echo base_url('First_controller/pembelian') ?>"><i class="fa fa-circle-o"></i> Voucher Games</a></li>
            <li><a href="<?php echo base_url('First_controller/pembelian') ?>"><i class="fa fa-circle-o"></i> Token PLN</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plane"></i> <span>Travel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('First_controller/travel') ?>"><i class="fa fa-circle-o"></i> Pesawat</a></li>
            <li><a href="<?php echo base_url('First_controller/travel') ?>"><i class="fa fa-circle-o"></i> Kereta</a></li>
            <li><a href="<?php echo base_url('First_controller/travel') ?>"><i class="fa fa-circle-o"></i> Hotel</a></li>
          </ul>
        </li>
       
        <li class="header">FORUM</li>
        <li><a href="#" target="_blank"><i class="fa fa-github"></i> <span>Github</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!--***************************************** display  *****************************************-->
<!--manggil display.php -->

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
</body>
</html>
