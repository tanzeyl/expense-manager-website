<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Create A Plan</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header2.php';
	?><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-8 col-xs-offset-2">
				<div class="panel">
					<div class="panel-body">
						<b>Title</b>
						<div class="form-group">
							<input type="text" name="plan_name" class="form-control" placeholder="Enter title (Ex: Trip To Goa" required>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<b>From</b>
								<div class="form-group">
									<input type="text" name="from" class="form-control" placeholder="DD/MM/YY" required>
								</div>
							</div>
							<div class="col-xs-6">
								<b>To</b>
								<div class="form-group">
									<input type="text" name="from" class="form-control" placeholder="DD/MM/YY" required>
								</div>
							</div>
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