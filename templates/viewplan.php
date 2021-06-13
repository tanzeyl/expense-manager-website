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
	<title>View Plan</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header2.php';
	?>
	<?php
	if (mysqli_fetch_array($home_q_res) != 0)
	{
	?>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
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
								<b>Remianing Amount:</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Date:</b>
							</div>
							<div class="col-xs-5 col-xs-offset-4">
								<p><?php echo $row['_from']." to ".$row['_to'] ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-xs-offset-2">
				<a href="expensedist.php"><button class="btn btn-default btn-lg">Expense Distribution</button></a><br><br>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-success">
							<div class="panel-heading">
								<center>
									<a href="#" style="color: white;">Add New Expense</a>
								</center>
							</div>
							<div class="panel-body">
								<form method="POST" action="viewplan_script.php">
									<b>Title</b>
									<div class="form-group">
										<input type="text" name="exp_name" class="form-control" placeholder="Expense name" required>
									</div>
									<b>Date</b>
									<div class="form-group">
										<input type="text" name="date" class="form-control" placeholder="Between <?php echo $row['_from']; ?> and <?php echo $row['_to']; ?>" required>
									</div>
									<b>Amount Spent</b>
									<div class="form-group">
										<input type="text" name="amount" class="form-control" placeholder="Amount Spent" required min="0">
									</div>
									<div class="dropdown">
  										<button class="btn btn-default dropdown-toggle btn-block" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" name="person">Chose<span class="caret" style="float: right; font-size: 20px;"></span></button>
  										<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    										<li></li>
										    <li><a href="#"><?php echo $row['person1']; ?></a></li>
										    <li><a href="#"><?php echo $row['person2']; ?></a></li>
										</ul>
									</div>
									<b>Upload Bill:</b>
									<div class="form-group">
										<input type="file" name="uploadedimage" class="form-control">
									</div>
									<button class="btn btn-default btn-block" style="color: #1e6f72; border: 1px solid #1e6f72;">Add</button>
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
	}
	?>
	<?php
	include '../includes/footer.php';
	?>
</body>
</html>