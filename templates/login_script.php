<?php
require '../includes/common.php';
session_start();
$email = mysqli_real_escape_string($con, $_POST['email']);
$pw = mysqli_real_escape_string($con, $_POST['password']);
$pass = md5($pw);
$email_q = "SELECT * FROM users WHERE email = '$email'";
$email_q_res = mysqli_query($con, $email_q) or die(mysqli_error($con));
$_SESSION['msg'] = 0;
$row = mysqli_fetch_array($email_q_res);
if (mysqli_num_rows($email_q_res))
{
	if($row['password'] != $pass)
	{
		$_SESSION['msg'] = "Incorrect Password, try again.";
		echo ("<script>location.href='login.php'</script>");
	}
	else if($row['password'] == $pass and $row['email'] == $email)
	{
		echo ("<script>location.href='home.php'</script>");	
	}
	
}
else
{
	$_SESSION['msg'] = "Email does not exist.";	
	echo ("<script>location.href='login.php'</script>");
}
?>