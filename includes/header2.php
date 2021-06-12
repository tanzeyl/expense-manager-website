<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-
target="#myNavbar">

<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php">Ct₹l Budget</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<?php
if (isset($_SESSION['email'])) {
?>

<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-
cart"></span>About Us</a></li>

<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>

<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-
in"></span> Logout</a></li>

?>
<?php
} else {
?>
<li><a href="signup.php"><span class="glyphicon glyphicon-info-sign"></span>
About Us</a></li>
<li><a href="signup.php"><span class="glyphicon glyphicon-cog"></span>
Chnage Password</a></li>
<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
Logout</a></li>
<?php
}
?>
</ul>
</div>
</div>
</div><br><br><br>