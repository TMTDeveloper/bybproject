<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Home
    <small>Desciption</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <!-- <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Pencarian Data</h3>

        <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div> -->
    </div>

    
    <form action="<?php echo base_url() ?>C_phone_controller/c_phoneaction" method="post">
    <div class="box-body">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-mobile-phone"></i></span>
            <input type="text" name="search" class="form-control" placeholder="Nomor Telepon">
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
                    <input type="submit" value="search" id="buttonlogin">
    <a href="<?php echo base_url('First_controller/daftarcustomer') ?>" class="btn btn-warning pull-right">Daftar</a>
    </div>
    <!-- /.box-footer-->
    </form>
    <!-- /.form -->
    

    
    
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->