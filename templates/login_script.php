<?php
require 'common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$email_q = "SELECT id from users where email = $email";
$email_q_res = mysqli_query($con, $email_q);
if (mysqli_num_rows($email_q_res) == 0)
{
	echo "This Email does not exist."
}
$password = mysqli_real_escape_string($con, $_POST['password']);
$pass_word = md5($password);
$pass_q = "SELECT pass_word from users WHERE email = $email";
$pass_q_res = mysqli_query($con, $pass_q);
if (mysqli_fetch_array($pass_q_res) != $pass_word)
{
	echo "Incorrect password."
}
$login_q = "SELECT id from users where $email = email and pass_word = $pass_word";
$login_q_res = mysqli_query($con, $login_q) or die(mysqli_error($con));
if (mysqli_num_rows($login_q_res) == 1)
{
	 echo ("<script>location.href='home.php'</script>");
}
?>