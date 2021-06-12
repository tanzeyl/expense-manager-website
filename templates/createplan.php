<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Plan Details</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header2.php';
	?><br><br><br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-success">
						<div class="panel-heading"><p style="text-align: center; font-size: 30px;">Create a new plan</p></div>
					<div class="panel-body">
					</div>
					<div class="container-fluid">
						<form method="POST" action="details.php">
							<b>Initial Budget:</b>
							<div class="form-group">
								<input type="number" name="budget" class="form-control" placeholder="Initial Budget (Ex: 4000)" min="0" required>
							</div>
							<b>How many people do you want in your group?</b>
							<div class="form-group">
								<input type="number" name="people" class="form-control" placeholder="Number of people"
								min="0" required>
							</div>
						</form>
					</div>
					<a href="details.php"><button class="btn bt-col btn-block">Next</button><br></a>
				</div>
			</div>
		</div>
	</div>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>