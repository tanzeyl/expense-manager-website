<?php
require '../includes/common.php';
$expense_q = "SELECT * from usersplans";
$expense_q_res = mysqli_query($con, $expense_q);
$row = mysqli_fetch_array($expense_q_res);
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
	<title>Expense Distribution</title>
</head>
<body class="bg-color">
	<?php
	include '../includes/header.php';
	?><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<div class="panel panel-default">
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
								<b> Initial Budget:</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Person A</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Person B</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<b>Total Amount Spent</b>
							</div>
							<div class="col-xs-3 col-xs-offset-5">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<b>Remaining Amount</b>
							</div>
							<div class="col-xs-3 col-xs-offset-5">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<b>Individual Shares</b>
							</div>
							<div class="col-xs-3 col-xs-offset-5">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Person A</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-3">
								<b>Person B</b>
							</div>
							<div class="col-xs-3 col-xs-offset-6">
								<p>₹ <?php echo $row['i_budget'] ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-xs-offset-4">
								<a href="viewplan.php"><button class="btn-lg btn-default" style="color: #1e6f72; border: 1px solid #1e6f72;"><span class="glyphicon glyphicon-arrow-left" style="color: #1e6f72;"></span>Go Back</button></a>
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