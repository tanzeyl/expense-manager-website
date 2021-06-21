<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>Plan Details</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header2.php';
	?><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<div class="panel">
					<div class="panel-body">
						<form method="POST" action="details_script.php">
						<b>Title</b>
						<div class="form-group">
							<input type="text" name="title" class="form-control" placeholder="Enter title (Ex: Trip To Goa" required>
						</div>
						<div class="row">
							<div class="col-xs-6">
								<b>From</b>
								<div class="form-group">
									<input type="date" name="from" class="form-control" min="2019-04-01" max="2022-01-01" required>
								</div>
							</div>
							<div class="col-xs-6">
								<b>To</b>
								<div class="form-group">
									<input type="date" name="to" class="form-control" min="2019-04-01" max="2024-02-01" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<b>Initial Budget</b>
								<div class="form-group">
									<input type="text" name="i_budget" class="form-control" required>
								</div>
							</div>
							<div class="col-xs-4">
								<b>Number of people</b>
								<div class="form-group">
									<input type="text" name="n_people" class="form-control" required min="1" max="2">
								</div>
							</div>
						</div>
						<b>Person 1</b>
						<div class="form-group">
							<input type="text" name="person1" class="form-control" required placeholder="You can have at maximum 2 people per plan.">
						</div>
						<b>Person 2</b>
						<div class="form-group">
							<input type="text" name="person2" class="form-control" required placeholder="You can have at maximum 2 people per plan.">
						</div>
						<b>Registered Email ID</b>
						<div class="form-group">
							<input type="text" name="reg_em" class="form-control" required placeholder="Enter your correct registered mail.">
						</div>
						<button class="btn btn-success btn-block" style="background: #1e6f72; color: white;">Submit</button>
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