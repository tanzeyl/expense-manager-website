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
<link rel="stylesheet" type="text/css" href="../public/css/style.css">
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
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-5">
									<center>
									<p style="text-align: center; font-size: 20px;"><?php echo $row['title']; ?></p>
									</center>	
								</div>
								<div class="col-xs-3" style="float: right;">
									<p style="font-size: 20px;"><span class = "glyphicon glyphicon-user"></span><?php echo " ".$row['n_people']; ?></p>
								</div>
							</div>
						</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-3">
								<b>Budget:</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Date:</b>
							</div>
							<div class="col-xs-7 col-xs-offset-2">
								<p><?php echo $row['_from']." to ".$row['_to'] ?></p>
							</div>
						</div>
					</div>
					<a href="viewplan.php"><button class="btn bt-col btn-block" style="border: 1px #1e6f72 solid;">View Plan</button><br></a>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
	?><br><br><br><br><br><br><br><br>
	<div class="row">
		<div class="col-xs-1 col-xs-offset-11">
			<a href="createplan.php"><span class="glyphicon glyphicon-plus-sign fa-lg" style="font-size: 40px; color: #1e6f72;"></span></a>
		</div>
	</div>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>