<?php
session_start();
$link = mysqli_connect("localhost","root","","db00_q4");
mysqli_query($link,"set names utf8");
$table = $_GET["del"];
$no = $_GET["no"];
$goto = $_GET["goto"];
if( $table  == "admin_member"){ $my_seq = "a_m_seq";}
if( $table  == "account"){ $my_seq = "a_seq";}


if(($table == "admin_member") && ($no == 2)){
  header("location:/admin.php?do=admin&redo=".$goto);
  exit();
}
$sql ="delete from ".$table." where $my_seq = '".$no."'";
mysqli_query($link,$sql);
header("location:/admin.php?do=admin&redo=".$goto);
?>