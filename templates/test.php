<?php
require '../includes/common.php';
$q = "SELECT * from expenses";
$q_res = mysqli_query($con, $q) or die(mysqli_error($con));
$row = mysqli_fetch_array($q_res);
if($row['file'])
{
	echo "Hehe";
}
else
{
	echo "HAHA";
}
?>