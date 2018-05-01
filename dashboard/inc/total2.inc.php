<?php  

include_once ("../inc/connect.inc.php");

$sql = "SELECT * FROM employer_info";
$rs = mysqli_query($DB_con, $sql);
 //-----------^  need to run query here

 $result2 = mysqli_num_rows($rs);  



 ?>