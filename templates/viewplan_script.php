<?php
session_start();
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['exp_name']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$amount = mysqli_real_escape_string($con, $_POST['amount']);
$person = mysqli_real_escape_string($con, $_POST['person']);
$plan_name = mysqli_real_escape_string($con, $_POST['plan_name']);
$_SESSION['plan_name'] = $plan_name;
$targetdir = "uploads/";
$msg = "";
if(isset($_POST['submit'])){
	if(!empty($_FILES['file']['name']))
		$filename = basename($_FILES['file']['name']);
		$targetfilepath = $targetdir.$filename;
		$filetype = pathinfo($targetfilepath, PATHINFO_EXTENSION);
		$allowtypes = array('jpg', 'png', 'pdf');
		if(in_array($filetype, $allowtypes)){
			if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfilepath)){
				$insert = "INSERT INTO `expenses` (`title`, `date`, `amount`, `person`, `file`, `plan_name`, `reg_em`) VALUES ('$title', '$date', '$amount', '$person', '".$filename."', '$plan_name', '$reg_em')";
				$inser_res = mysqli_query($con, $insert) or die(mysqli_error($con));
			}
		}
}
echo ("<script>location.href='home.php'</script>");
?>