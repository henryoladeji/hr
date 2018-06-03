<?php
include ("../../config.php");

if(isset($_POST['featureId'])) {
	$featureId = $_POST['featureId'];

	$query = mysqli_query($con, "SELECT * FROM features WHERE id='$featureId'");

	$resultArray = mysqli_fetch_array($query);

	echo json_encode($resultArray);
}


?>