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

    <form action="<?php echo base_url() ?>Inpay/cekTagihan" method="post" class="form-horizontal">
    <div class="box-body">

        <input name="subKategori" id="subKategori" value="TELEPON" hidden> <!-- mencocokan dengan xresponecode -->
        <div class="form-group">
            <label class="col-sm-2 control-label">Product ID</label>
            <div class="col-sm-10">
            <select class="form-control" name="kodeProduct" id="kodeProduct" style="width: 70%;">
            <option selected="selected">Pilih</option>
            <?php foreach($product_ids as $product) { ?>
                <option value="<?php echo $product->PRODUCT_CODE; ?>"><?php echo $product->PRODUCT_ID; ?> <!-- valuenya menghasilkan Product Code dan yang ditampilkan adalah Product ID -->
            <?php } ?>
            </select>
            </div>
        </div>

        <div class="form-group">
            <label for="idPelanggan" class="col-sm-2 control-label">ID Pelanggan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="idPelanggan" id="idPelanggan" placeholder="Nomor Tagihan"  style="width: 70%;" autocomplete="off">
            </div>
        </div>
        
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
    <div class="row">

        <div class="col-xs-2"></div>
        <div class="col-xs-2">
        <!-- <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#modalInquiry">OK</button> -->
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

<!-- Modal inquiry here ****************************************************************************-->
<!-- Modal -->
<div id="modalInquiry" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Inquiry</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-2" for="nama">Nama:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="nama" placeholder="Namanya siapa" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="tagihan">Tagihan:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="tagihan" placeholder="Tagihannya apa" disabled>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-info">OK</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
		</div>
	</div>
</div>
<!-- /.Modal inquiry end here ****************************************************************************-->

