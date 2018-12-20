<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<?php $this->load->view("inc/include_style"); ?>

	<title>Giriş</title>
</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Giriş Yap</h3>
		<hr>
		<?php if ($this->session->userdata("error")) { ?>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="alert alert-danger"><?php echo $this->session->userdata("error"); ?></div>
				</div>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-6 col-md-offset-3 well">
				<form action="<?php echo base_url("giris"); ?>" method="post">
				  <div class="form-group">
				    <label"><strong>Kullanıcı Adı</strong></label>
				    <input type="text" name="username" class="form-control" placeholder="Kullanıcı adı">
				  </div>
				  <div class="form-group">
				    <label>Şifre</label>
				    <input type="password" name="password" class="form-control" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default btn-primary btn-block">Giriş Yap</button>
				</form>
			</div>
		</div>
	</div>


</body>
</html>