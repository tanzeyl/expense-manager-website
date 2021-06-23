<?php
require '../includes/common.php';
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
  <title>About Us</title>
</head>
<body class="bf-color">
<?php
include '../includes/header.php';
?>
<form method="POST" action="allplans.php">
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Chose A Plan
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
  <?php
  while($data = mysqli_fetch_array($plan_q_res))
  {
  ?>
    <a href="test.php?id=<?php echo $data['title'];?>"><option><?php echo $data['title'] ?></option></a>
  </ul>
  <?php
  }
  ?>
</div>
</form>
<?php
$plan_name = $_GET['id'];
echo $plan_name;
?>
<?php
include '../includes/footer.php';
?>
</body>
</html>