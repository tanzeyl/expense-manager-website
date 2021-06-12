<?php
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['title']);
$from = mysqli_real_escape_string($con, $_POST['from']);
$to = mysqli_real_escape_string($con, $_POST['to']);
$i_budget = mysqli_real_escape_string($con, $_POST['i_budget']);
$n_people = mysqli_real_escape_string($con, $_POST['n_people']);
$person1 = mysqli_real_escape_string($con, $_POST['person1']);
$person2 = mysqli_real_escape_string($con, $_POST['person2']);
$regrex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
if (!preg_match($regrex_email, $email))
{
	echo "<script>alert('This email is invalid.')</script>";
}
// $email_q = "SELECT id from users WHERE email = $email";
// $email_q_res = mysqli_query($con, $email_q) or die(mysqli_error($con));
// if (mysqli_num_rows($email_q_res) != 0)
// {
// 	echo "<script>alert('Email already exists. Please enter a valid email or login to existing account.')</script>";
// }
$password = mysqli_real_escape_string($con, $_POST['password']);
if (strlen($password) <= 6)
{
	echo "Password should be of atleast 6 characters.";
}
$pass_word = md5($password);
$phone_number = mysqli_real_escape_string($con, $_POST['phone']);
$signup_q = "INSERT INTO `users` (`id`, `name`, `email`, `pass_word`, `phone_number`) VALUES (NULL, '$name', '$email', '$pass_word', '$phone_number');";
$signup_q_res = mysqli_query($con, $signup_q);
echo ("<script>location.href='home.php'</script>")
?>