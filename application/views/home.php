<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Sistem
    <small>Transaksi</small>
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
        <h3 class="box-title">Data Customer</h3>
        <a href="<?php echo base_url('Premain_controller') ?>" class="btn btn-danger pull-right">Customer Baru</a>
        <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div> -->
    </div>


    
    <div class="box-body">
    <form action="#" method="get" class>

        <label>Nama</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="namaCustomer" value="<?php echo strtoupper($cust_name)?>" id="namaCustomer" disabled>
        </div>
<br>
        <label>Nomor KTP</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input type="text" class="form-control" value="<?php echo $cust_nat_id?>" name="ktpCustomer" id="ktpCustomer" disabled>
        </div>
<br>
        <label>Nomor Telepon</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            <input type="text" class="form-control" value="<?php echo $cust_phone?>" name="notelCustomer" id="notelCustomer" disabled>
        </div>
<br>
        <label>E-mail</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="text" class="form-control" value="<?php echo strtoupper($cust_email)?>" name="emailCustomer" id="emailCustomer" disabled>
        </div>
<br>
        <label>Nomor Rekening</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
            <input type="text" class="form-control" value="<?php echo $cust_rek?>" name="norekCustomer" id="norekCustomer" disabled>
        </div>
            
    </form>
    <!-- /.form -->
    </div>
    <!-- /.box-body -->
    

    <div class="box-footer">
    <!-- <a href="<?php echo base_url('First_controller') ?>" class="btn btn-warning">Ubah Data</a> -->
    </div>
    <!-- /.box-footer-->
    
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->