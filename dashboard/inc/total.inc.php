<?php include_once("../inc/header.inc.php"); 

include_once ("../inc/connect.inc.php");

$sql = "SELECT * FROM applicant_info";
$rs = mysqli_query($DB_con, $sql);
 //-----------^  need to run query here

 $result = mysqli_num_rows($rs);  



 ?>