<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<title>All Plans</title>
</head>
<body class="bg-color">
	<?php
	session_start();
	include '../includes/header.php';
	require '../includes/common.php';
	$all_q = "SELECT * FROM expenses WHERE plan_name = '{$_SESSION['plan_name']}'";
	$all_q_res = mysqli_query($con, $all_q) or die(mysqli_error($con));
	$n_rows = mysqli_num_rows($all_q_res);
	if ($n_rows == 0)
	{
	?>
	<h1 style="margin-top: 40px; margin-left: 60px;">You have not added any expenses yet.</h1>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="panel panel-default" style="height: 200px; margin-top: 100px;">
					<div class="panel-body">
						<center style="margin-top: 25%;">
						<a href="viewplan.php"><span class="glyphicon glyphicon-plus-sign"></span>Add a new expense.</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	} else
	{
	?>
	<h1 style="margin-top: 40px; margin-left: 60px;">Your expenses</h1>
	
		<?php
		while ($row = mysqli_fetch_array($all_q_res)) { ?>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-3">
				<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-5">
									<center>
									<p style="text-align: center; font-size: 20px;"><?php echo $row['title']; ?></p>
									</center>	
								</div>
							</div>
						</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-5">
								<b>Amount:</b>
							</div>
							<div class="col-xs-3 col-xs-offset-3">
								<p>₹ <?php echo $row['amount'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-5">
								<b>Paid by</b>
							</div>
							<div class="col-xs-3 col-xs-offset-3">
								<p><?php echo $row['person']; ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<b>Paid on</b>
							</div>
							<div class="col-xs-4 col-xs-offset-4">
								<p><?php echo $row['date']; ?></p>
							</div>
						</div>
						</div>
						<div class="panel-footer">
							<div class="row">
								<div class="col-xs-12">
									<center>
										<p style="font-size: 20px;"><a href="file.php">Show bill</a></p>
									</center>
								</div>
							</div>
						</div>
				</div>
				<br><br>
			</div>
		</div>
		</div>
		<div class="container-fluid">
		<?php
		}
		}
		?>
		<div class="row">
		<div class="col-xs-1 col-xs-offset-11">
			<a href="viewplan.php"><span class="glyphicon glyphicon-plus-sign fa-lg" style="font-size: 40px; color: #1e6f72;"></span></a>
		</div>
	</div>
	</div><br><br><br><br>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>