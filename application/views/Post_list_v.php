<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php $this->load->view("inc/include_style"); ?>
	<title>Yazı Listesi</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo $user->username; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active">
        	<a href="<?php echo base_url("cikis"); ?>">Çıkış Yap <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<?php foreach($posts as $post) { ?>
			
			<div class="col-md-12 well">
			<p>
				<?php echo $post->title; ?>	
			</p>

			<div class="thumbs_container">
				<button class="btn <?php echo ($post->vote_status == 1) ? "btn-success" : "btn-default" ; ?> likeBtn" data-id="<?php echo $post->id; ?>">
					<span class="glyphicon glyphicon-thumbs-up"></span>
					<span class="like_count">(<?php echo $post->like_count; ?>)</span>
				</button>
				<button class="btn <?php echo ($post->vote_status == -1) ? "btn-danger" : "btn-default" ; ?> dislikeBtn" data-id="<?php echo $post->id; ?>">
					<span class="glyphicon glyphicon-thumbs-down"></span>
					<span class="dislike_count">(<?php echo $post->dislike_count; ?>)</span>
				</button>
			</div>
		</div>


		<?php } ?>
		</div>
	</div>
</div>

<script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
<script src="<?php echo base_url("assets/js/custom.js") ?>"></script>

</body>
</html>