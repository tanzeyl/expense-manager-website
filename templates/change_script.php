<?php
require '../includes/common.php';
$old = mysqli_real_escape_string($con , $_POST['old']);
$old_c = md5($old);
$new = mysqli_real_escape_string($con , $_POST['new']);
$new_c = mysqli_real_escape_string($con , $_POST['new_c']);
$op_q = "SELECT * from users";
$op_q_res = mysqli_query($con, $op_q) or die(mysqli_error($con));
$row = mysqli_fetch_array($op_q_res);
if($old_c != $row['password'])
{
	echo "You entered the wrong old password.";
	echo ("<script>location.href='changepassword.php'</script>");
}
if ($new != $new_c)
{
	echo "Password do not match.";
}
else
{
	$pass_word = md5($new);
	$pass_q = "UPDATE `users` SET `password` = '$pass_word' WHERE `users`.`password` = '$old_c';";
	$pass_q_res = mysqli_query($con, $pass_q) or die(mysqli_error($con));
	echo "Password Successfully Changed";
	echo ("<script>location.href='index.php'</script>");
}
?>