<?php
$con = mysqli_connect("localhost", "root", "", "expensemanagerwebsite") or die(mysqli_error($con));
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$regrex_email = "/^[a-z0-9._]+@[a-z0-9.]+.[a-z]{2,3}";
if (!preg_match($regrex_email, $email))
{
	echo "<script>alert('This email is invalid.')</script>";
}
$email_q = "SELECT id from users WHERE email = $email";
$email_q_res = mysqli_query($con, $email_q) or die(mysqli_error($con));
if (mysqli_num_rows($email_q_res) != 0)
{
	echo "<script>alert('Email already exists. Please enter a valid email or login to existing account.')</script>";
}
$password = mysqli_real_escape_string($con, $_POST['password']);
if (strlen($password) < 6)
{
	echo "Password should be of atleast 6 characters.";
}
$pass_word = md5($password);
$phone_number = mysqli_real_escape_string($con, $_POST['phone']);
echo ("<script>location.href='home.php'</script>")
?>