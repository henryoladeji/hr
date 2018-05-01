<?php  
	include ("connect.inc.php");
	

 mysqli_select_db($DB_con,"hrdb");
$query_select_identity = "SELECT MAX(applicantid) FROM applicant_info";
$select_identity = mysqli_query($DB_con, $query_select_identity) or die(mysqli_error());
$row_select_identity = mysqli_fetch_assoc($select_identity);
$totalRows_select_identity = mysqli_num_rows($select_identity);

$new_applicant_id = $row_select_identity['MAX(applicantid)'];
$next_applicant_id = $new_applicant_id++;
$today = date("Y-m-d");

$admin_hiredate = $today;
//Applicant Level.

	$userlevel = 'Applicant';
	$email = $_POST["email"];
	$username = $_POST["username"];
	$fullname = $_POST["fullname"];
	$pass = md5($_POST['password']);
	$gender = $_POST["gender"];
	$status = $_POST["maritalstatus"];
	$country = $_POST["nationality"];
	$state = $_POST["stateoforigin"];
	$telephone = $_POST["telephone"];
	$address = $_POST["address"];
	$dob = $_POST["dateofbirth"];

	
	$sql = "INSERT INTO applicant_info (applicantid, userlevel, email, username, fullname, password, gender, status, country, state, telephone, address, dob, registrationdate)
	VALUES ('$new_applicant_id', '$userlevel', '$email', '$username', '$fullname', '$pass', '$gender', '$status', '$country', '$state', '$telephone', '$address', '$dob', '$admin_hiredate')";
	
	if ($DB_con->query($sql) === TRUE) {
    echo header ('Location: http://localhost/hr/index_applicant.php');
} else {
    echo "Error: " . $sql . "<br>" . $DB_con->error;
}

$DB_con->close();
?>