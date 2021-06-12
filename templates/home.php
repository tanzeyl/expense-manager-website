<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Home Page</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header2.php';
	?>
	<h1 style="margin-top: 40px; margin-left: 60px;">You do not have any active plans.</h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-default" style="height: 200px; margin-top: 100px;">
					<div class="panel-body">
						<center style="margin-top: 25%;">
						<a href="createplan.php"><span class="glyphicon glyphicon-plus-sign"></span>Create a new plan</a>
						</center>
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