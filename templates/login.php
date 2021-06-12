<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Log In</title>
</head>
<body>
	<?php
	include '../includes/header.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel-heading"><p style="text-align: center; font-size: 30px">Login</p><hr></div>
					</div>
					<div class="container-fluid">
						<form method="POST" action="login_script.php">
							<b>Email:</b>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Email" required>
							</div>
							<b>Password:</b>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" pattern=".{8,}" required>
							</div>
							<button class="btn btn-info btn-block">Login</button><br>
						</form>
						<div class="panel-footer">
								<p>Don't have an account?<a href="signup.php">Click here to Sign Up.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>