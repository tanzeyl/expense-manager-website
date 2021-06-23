<?php
session_start();
require '../includes/common.php';
$home_q = "SELECT * FROM usersplans";
$home_q_res = mysqli_query($con, $home_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($home_q_res);
$plan_q = "SELECT * from usersplans";
$plan_q_res = mysqli_query($con, $plan_q);
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
	<title>View Plan</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header.php';
	?>
	<br><br>
	<div class="container-fluid">
	<a href="allplans.php"><button class="btn btn-default btn-lg" style="color: #1e6f72; border: 1px solid #1e6f72;">View All Expenses</button></a>
	</div><br><br>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-success">
							<div class="panel-heading">
								<center>
									<a href="#" style="color: white;">Add New Expense</a>
								</center>
							</div>
							<div class="panel-body">
								<form method="POST" action="viewplan_script.php" enctype="multipart/form-data">
									<b>Title</b>
									<div class="form-group">
										<input type="text" name="exp_name" class="form-control" placeholder="Expense name" required>
									</div>
									<b>Date</b>
									<div class="form-group">
										<input type="date" name="date" class="form-control">
									</div>
									<b>Amount Spent</b>
									<div class="form-group">
										<input type="text" name="amount" class="form-control" placeholder="Amount Spent" required min="0">
									</div>
									<b>Your name</b>
									<div class="form-group">
										<input type="text" name="person" class="form-control" placeholder="Name should be same as before. Mind the cases." required min="0">
									</div>	
									<b>Upload Bill:</b>
									<div class="form-group">
										<input type="file" name="file" class="form-control" required>
									</div>
									<b>Plan Name</b>
									<div class="form-group">
										<input type="text" name="plan_name" class="form-control" placeholder="This field is case-sensitive." required>
									</div>
									<button class="btn btn-default btn-block" style="color: #1e6f72; border: 1px solid #1e6f72;" name="submit" value="upload">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>