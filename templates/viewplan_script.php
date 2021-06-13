<?php
require '../includes/common.php';
$exp_name = mysqli_real_escape_string($con, $_POST['exp_mame']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$amount = array(0);
?>