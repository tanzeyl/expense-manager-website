<?php
require '../includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$pw = mysqli_real_escape_string($con, $_POST['password']);
$pass = md5($pw);
$email_q = "SELECT * FROM users WHERE email = '$email'";
$email_q_res = mysqli_query($con, $email_q) or die(mysqli_error($con));
if (mysqli_num_rows($email_q_res) == 0)
{
	echo "Email does not exist.";
}
$row = mysqli_fetch_array($email_q_res);
if ($row['password'] == $pass and mysqli_num_rows($email_q_res) == 1)
{
	echo ("<script>location.href='home.php'</script>");
}
else
{
	echo "Incorrect Password.";
}
?>