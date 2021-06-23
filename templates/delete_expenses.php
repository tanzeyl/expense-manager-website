<?php
require "../includes/common.php";
$id = $_GET['id'];
$del_q = "DELETE FROM expenses where id = '$id'";
$del_q_res = mysqli_query($con, $del_q) or die(mysqli_error($con));
if($del_q_res)
{
    echo ("<script>location.href='home.php'</script>");
}
else
{
    echo "Error deleting record";
}
?>