<?php
require '../includes/common.php';
$home_q = "SELECT * FROM usersplans";
$home_q_res = mysqli_query($con, $home_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($home_q_res);
?>
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
	<?php
	if (mysqli_fetch_array($home_q_res) == 0)
	{
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
	} else {
	?>
	<h1 style="margin-top: 40px; margin-left: 60px;">Your plans</h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-2">
				<div class="panel panel-success">
						<div class="panel-heading"><p style="text-align: center; font-size: 20px;"><?php echo $row['title'];	?></p>
							<p style="float: right;"><span class = "glyphicon glyphicon-user"></span><?php echo $row['n_people']; ?></p>
						</div>
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
	}
	?>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>