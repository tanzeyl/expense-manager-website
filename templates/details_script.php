<?php
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['title']);
$_from = mysqli_real_escape_string($con, $_POST['from']);
$_to = mysqli_real_escape_string($con, $_POST['to']);
$i_budget = mysqli_real_escape_string($con, $_POST['i_budget']);
$person1 = mysqli_real_escape_string($con, $_POST['person1']);
$person2 = mysqli_real_escape_string($con, $_POST['person2']);
$reg_em = mysqli_real_escape_string($con, $_POST['reg_em']);
$select_q = "SELECT id from users WHERE email = '$reg_em'";
$select_q_res = mysqli_query($con, $select_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_q_res);
$user_id = $row['id']; 
$details_q = "INSERT INTO `usersplans` (`id`, `user_id`, `title`, `_from`, `_to`, `i_budget`, `person1`, `person2`, `reg_em`) VALUES (NULL, '$user_id', '$title', '$_from', '$_to', '$i_budget', '$person1', '$person2', '$reg_em')";
$details_q_res = mysqli_query($con, $details_q) or die(mysqli_error($con));
echo ("<script>location.href='home.php'</script>");
?>