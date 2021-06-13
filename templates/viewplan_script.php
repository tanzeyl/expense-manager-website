<?php
require '../includes/common.php';
$title = mysqli_real_escape_string($con, $_POST['exp_name']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$amount = mysqli_real_escape_string($con, $_POST['amount']);
$person = mysqli_real_escape_string($con, $_POST['person']);
$file = $_FILES['uploadedimage'];
$file_name = $file['name'];
$file_type = $file ['type'];
$file_size = $file ['size'];
$file_path = $file ['tmp_name'];
$qurey = "INSERT INTO `expenses` (`id`, `title`, `date`, `amount`, `person`, `file`) VALUES (NULL, '$title', '$date', '$amount', '$person', '$file_name')";
echo $title."<br>";
echo $date."<br>";
echo $amount."<br>";
echo $person."<br>";
echo $file_name."<br>";
echo $file_type."<br>";
echo $file_size."<br>";
echo $file_path."<br>";
?>