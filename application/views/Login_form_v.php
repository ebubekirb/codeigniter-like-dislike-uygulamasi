<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">

	<title>Giriş Yap</title>
</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Giriş Yap</h3>
		<hr>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<form action="<?php echo base_url("giris"); ?>" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Kullanıcı Adı</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kullanıcı adı">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Şifre</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default btn-primary">Giriş Yap</button>
				</form>
			</div>
		</div>
	</div>

	<script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/js/custom.js") ?>"></script>
</body>
</html>