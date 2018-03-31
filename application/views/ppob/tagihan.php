<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Sistem
    <small>Transaksi</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-credit-card"></i> PPOB</a></li>
    <li><a href="#">Tagihan</a></li>
    <!-- <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

    <div class="box-header with-border">
        <h3 class="box-title">Tagihan</h3>
        <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div> -->      
    </div>

    <form action="<?php echo base_url() ?>Inpay/payment" method="post">
    <div class="box-body">
        
        <label>Nominal</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
            <input class="form-control" name="nominal" id="nominal" value="<?php echo $mNominal ?>" readonly>
        </div>
        <label>Nama Pelanggan</label>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="namaPelanggan" id="namaPelanggan" value="<?php echo $mNamapelanggan ?>" readonly>
        </div>
        <!-- <label>No Referensi</label> -->
        <!-- <div class="input-group" style="visibility: hidden">
            <span class="input-group-addon" hidden><i class="glyphicon glyphicon-barcode"></i></span>
            <input type="text" class="form-control" name="noReferensi" id="noReferensi" value="<?php echo $mNoref ?>" readonly>
        </div> -->
    
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
    <div class="row">

        <div class="col-xs-2">
        <button type="submit" class="btn btn-info">Lanjutkan Pembayaran</button>
        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Lanjut Ke Pembayaran</button> -->
        </div>

    </div>
    <!-- /.row -->
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