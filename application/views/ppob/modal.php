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
    <li><a href="#">Telkom</a></li>
    <!-- <li class="active">Blank page</li> -->
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">

    <div class="box-header with-border">
        <h3 class="box-title" name="subKategori" id="subKategori" value="TELEPON">Telkom</h3>
        <!-- <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div> -->      
    </div>

    <form action="#" method="post" class="form-horizontal">
    <div class="box-body">

    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">No Referensi:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="nama" value="<?php echo $mNoref ?>" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tagihan">Nominal:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="tagihan" value="<?php echo $mNominal ?>" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tagihan">Nama Pelanggan:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="tagihan" value="<?php echo $mNamapelanggan ?>" disabled>
            </div>
        </div>
        
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
    <div class="row">

        <div class="col-xs-2"></div>
        <div class="col-xs-2">
        <!-- <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalInquiry">Modal</button> -->
        <button type="submit" class="btn btn-info">OK</button>
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