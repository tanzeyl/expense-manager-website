<?php
session_start();
$_SESSION['messgae'] = 0;
require '../includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$old = mysqli_real_escape_string($con , $_POST['old']);
$old_c = md5($old);
$new = mysqli_real_escape_string($con , $_POST['new']);
$new_c = mysqli_real_escape_string($con , $_POST['new_c']);
$op_q = "SELECT * from users where email = '$email'";
$op_q_res = mysqli_query($con, $op_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($op_q_res);
if($old_c != $row['password'])
{
	$_SESSION['message'] = "You entered the wrong old password.";
	echo ("<script>location.href='changepassword.php'</script>");
}
if ($new != $new_c)
{
	$_SESSION['message'] = "Passwords do not match.";
	echo ("<script>location.href='changepassword.php'</script>");
}
else
{
	$pass_word = md5($new);
	$pass_q = "UPDATE `users` SET `password` = '$pass_word' WHERE `users`.`password` = '$old_c' and email = '$email'";
	$pass_q_res = mysqli_query($con, $pass_q) or die(mysqli_error($con));
	echo ("<script>location.href='index.php'</script>");
}
?>