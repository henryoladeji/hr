<?php  

include_once ("../inc/connect.inc.php");

$today = date('Y-m-d');

$sql = "SELECT COUNT(*) FROM vacancy_info WHERE closing_date >='$today'";
$rs = mysqli_query($DB_con, $sql);
$row_rs_count = mysqli_fetch_assoc($rs);
 //-----------^  need to run query here

 



 ?>