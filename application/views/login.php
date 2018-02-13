<!DOCTYPE html>
<html>

<head>
	<title>Sistem Transaksi</title>
	<link rel="icon" href="<?php echo base_url() ?>assets/img/Apr_globe_favicon.ico" type="image/gif">
	<meta name="description" content="Sistem Transaksi PPOB Online, Pembelian Pulsa Prabayar, Voucher Game, Token PLN, Tiket Pesawat, Kereta dan Hotel."
	/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#4679bd">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="assets/login/css/hidep.css">
	<link rel="stylesheet" href="assets/login/css/loginfreshv4.css" type="text/css" media="all">
	<link rel="stylesheet" href="assets/alte/bower_components/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="assets/login/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/login/js/login-bg.js"></script>
</head>

<body>

	<div class="topbg">
		<div class="background">
			<img src="assets/img/bg_01.jpg" style="width:100%;height:100%;" />
			<img src="assets/img/bg_02.jpg" style="width:100%;height:100%;" />
		</div>
	</div>

	<h2>
		<i class="fa fa-globe" style="margin-right:10px;"></i>Sistem Transaksi</h2>
	<div class="w3layoutscontaineragileits">

		<form action="<?php echo base_url() ?>Login_controller/loginaction" method="post">

			<input type="text" name="username" class="username" id="username" placeholder="Username" required="" autocomplete="off">
			<input type="text" style="display:none">
			<input type="password" style="display:none">
			<input type="password" name="password" class="password" id="password" placeholder="Password" required="" autocomplete="off">
			
			<div class="login-footer">
				<input type="checkbox" id="show-password">
				<label for="show-password">Show password</label>
			</div>

			<div class="aitssendbuttonw3ls">
				<input type="submit" value="Log In" id="buttonlogin">
				<div class="clear"></div>
			</div>
			
		</form>
	</div>

	<div class="w3footeragile">
		<p> &copy; 2018 MIT. All Rights Reserved
			<br>
			<i class="fa fa-phone-square"></i> Call center: 0000-xxxxxxxx</p>
	</div>

	<!-- including the jQuery dependency -->
	<script src="assets/login/js/bottom/jquery.min.js"></script>
	<!-- including the plugin -->
	<script src="assets/login/js/bottom/hideShowPassword.js"></script>
	<script>
		$('#show-password').change(function () {
			$('#password').hideShowPassword($(this).prop('checked'));
		});

	</script>

</body>

</html>