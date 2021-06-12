<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width" initial-scale=1>
	<link rel="stylesheet" type="text/css" href="../static/style.css">
	<title>Control Budget</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><p>Ct₹l Budget</p></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="about.html"><span class="glyphicon glyphicon-info-sign">About Us</span></a></li>
					<li><a href="signup.html"><span class="glyphicon glyphicon-user">Sign Up</span></a></li>
					<li><a href="login.html"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
				</ul>
			</div>
		</div>
	</nav><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel-heading"><p style="text-align: center; font-size: 30px">Sign Up</p><hr></div>
					</div>
					<div class="container-fluid">
						<form method="POST" action="signup_script.php">
							<b>Name:</b>
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required>
							</div>
							<b>Email:</b>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Enter a valid Email Address" required>
							</div>
							<b>Password:</b>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password (Minimum 6 characters)" pattern=".{8,}" required>
							</div>
							<b>Phone:</b>
							<div class="form-group">
								<input type="tel" name="phone" class="form-control" placeholder="Enter a valid Phone Number" pattern="[0-9]{10}" required>
							</div>
							<button class="btn btn-info btn-block">Submit</button><br>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
			<div class="container">
				<center>
					<p>Copyright © Ct₹l Budget. All Rights Reserved | Contact Us: +91-9870661375</p>
				</center>
			</div>
		</footer>
</body>
</html>