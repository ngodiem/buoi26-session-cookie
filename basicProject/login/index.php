<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="../vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../vendor/fontawesome-free-5.15.1-web/css/all.min.css">
	

</head>
<body>

	<form class="container-fluid w-100" style="max-width: 500px;" action="processLogin.php" method="POST">
		<h2>Login</h2>
		<?php 
		session_start();
		if (!empty($_SESSION["error"])):
		 ?>
		<div class="form-group">
			<div class="alert alert-danger">
				<?=$_SESSION["error"]?>
				<?php unset($_SESSION["error"]) ?>
				<!-- unste xóa phần tử đó đi khi request lại trang web mất  phần tử đó  -->
			</div>
		</div>
	<?php endif ?>
		
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" type="text" name="username" id="username">
		</div>
		
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="password" id="password">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Login</button>
		</div>


	</form>
	
	<script src="../vendor/jquery-3.5.1.min.js"></script>
	<script src="../vendor/popper.min.js"></script>
	<script src="../vendor/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>
</html>