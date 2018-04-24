<?php
$DB_con = mysqli_connect("localhost","root","")or die("cant connect to database");
mysqli_select_db($DB_con,"hrdb")or die("cant find database");
?>