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
        <h3 class="box-title">Daftar Customer</h3>
        <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div> -->
    </div>

    <form action="<?php echo base_url() ?>First_controller/customerbaru" method="post">
    <div class="box-body">
        
        <label>Nama</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="namaCustomer" id="namaCustomer" autocomplete="off" required>
        </div>
<br>
        <label>Nomor KTP</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input type="text" class="form-control" name="ktpCustomer" id="ktpCustomer" autocomplete="off">
        </div>
<br>
        <label>Nomor Telepon</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" name="notelCustomer" id="notelCustomer" autocomplete="off" required>
        </div>
<br>
        <label>E-mail</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="text" class="form-control" name="emailCustomer" id="emailCustomer" autocomplete="off">
        </div>
<br>
        <label>Nomor Rekening</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
            <input type="text" class="form-control" name="norekCustomer" id="norekCustomer" autocomplete="off">
        </div>
    
    </div>
    <!-- /.box-body -->
    
    <!-- /.form -->
    

    <div class="box-footer">
    <input type="submit" class="btn btn-primary" value="Daftar">
    </div>
    </form>
    <!-- /.box-footer-->
    
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->