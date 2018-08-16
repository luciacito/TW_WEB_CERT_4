<?php
include_once("head.php");
$gg = $_GET["bb"];
$sql = "delete from billing_log where b_l_no = '".$gg."'";
mysqli_query($link,$sql);
header("location:admin.php?do=admin&redo=order");
?>