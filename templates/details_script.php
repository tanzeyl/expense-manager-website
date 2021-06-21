<?php
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['title']);
$_from = mysqli_real_escape_string($con, $_POST['from']);
$_to = mysqli_real_escape_string($con, $_POST['to']);
$i_budget = mysqli_real_escape_string($con, $_POST['i_budget']);
$n_people = mysqli_real_escape_string($con, $_POST['n_people']);
$person1 = mysqli_real_escape_string($con, $_POST['person1']);
$person2 = mysqli_real_escape_string($con, $_POST['person2']);
$reg_em = mysqli_real_escape_string($con, $_POST['reg_em']);
$details_q = "INSERT INTO `usersplans` (`id`, `title`, `_from`, `_to`, `i_budget`, `n_people`, `person1`, `person2`, `reg_em`) VALUES (NULL, '$title', '$_from', '$_to', '$i_budget', '$n_people', '$person1', '$person2', '$reg_em')";
$details_q_res = mysqli_query($con, $details_q) or die(mysqli_error($con));
echo ("<script>location.href='home.php'</script>");
?>