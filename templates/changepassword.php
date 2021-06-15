<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Change Password</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header.php';
	?><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel-heading"><p style="text-align: center; font-size: 30px">Change Password</p><hr></div>
					</div>
					<div class="container-fluid">
						<form method="POST" action="change_script.php">
							<b>Old Password</b>
							<div class="form-group">
								<input type="password" name="old" class="form-control" placeholder="Old Password" required>
							</div>
							<b>New password</b>
							<div class="form-group">
								<input type="password" name="new" class="form-control password" placeholder="New password" pattern=".{8,}" required>
							</div>
							<b>Confirm New Password</b>
							<div class="form-group">
								<input type="password" name="new_c" class="form-control confirmpassword" placeholder="Re-enter new passowrd" pattern=".{8,}" autocomplete="new_c" required>
							</div>
							<button class="btn bt-col btn-block" style="color: white; border: 1px solid #1e6f72; background: #1e6f72;" name="submit" value="upload">Add</button><br>
						</form>
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