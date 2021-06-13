<?php
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['exp_name']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$amount = mysqli_real_escape_string($con, $_POST['amount']);
$person = mysqli_real_escape_string($con, $_POST['person']);
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
				$insert = "INSERT INTO `expenses` (`id`, `title`, `date`, `amount`, `person`, `file`) VALUES (NULL, '$title', '$date', '$amount', '$person', '".$filename."')";
				$inser_res = mysqli_query($con, $insert) or die(mysqli_error($con));
			}
		}
}
?>