<?php

	require_once 'Controller.php';
	$controller = new controller();
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Silahkan Login Terlebih Dahulu</title>
</head>
<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8" style="margin: 10px 0 0 0">
				<div class="card">
					<div class="card-body">

						<?php $controller->login(); ?>

						
						<form action="" method="post">
							<h2>Silahkan Login Terlebih Dahulu</h2>
								<table>
								<tr>
									<td>Username</td>
									<td>:</td>
									<td><input type="text" name="username" class="form-control"></td>
								</tr>

								<tr>
									<td>Password</td>
									<td>:</td>
									<td><input type="password" name="password" class="form-control"></td>
								</tr>

								<tr>
								<td><input type="submit" name="login" value="Login" class="btn btn-block btn-primary" style="margin: 5px 0 0 0"></td>
								<td><small> Belum ada akun? <a href="register.php">Create User</a> </small></td>
							</tr>
						</form>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
