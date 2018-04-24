<?php include ("connect.inc.php");
session_start();
$admin_id = "admin@hrmanager.com";
$admin_password = md5("admin");
$admin_email = "admin@hrmanager.com";
$admin_fullname = "Administrator";
$admin_gender = "Male";
$today = date("Y-m-d");

$admin_hiredate = $today;

  $admin_dateofbirth = strtotime ( '-10950 day'  ) ;
  $admin_dateofbirth = date ( 'Y-m-d ' , $admin_dateofbirth );

$admin_phone = "08090901199";
$admin_userlevel = 'Administrator';



//$sql = "INSERT INTO applicant_info (email, fullname, password, gender, status, country, state, telephone, address, dob)
//  VALUES ('$email', '$fullname', '$pass', '$gender', '$status', '$country', '$state', '$telephone', '$address', '$dob')";

$sql = "INSERT INTO staff_info (staffid,userlevel,password,email,fullname,gender,employmentdate,dob,telephone) VALUES ('$admin_id', '$admin_userlevel', '$admin_password', '$admin_email', '$admin_fullname', '$admin_gender', '$admin_hiredate', '$admin_dateofbirth', '$admin_phone')";




 mysqli_select_db($DB_con,"hrdb");
  $Result1 = mysqli_query($DB_con, $sql) or die(mysqli_error());

  $insertGoTo = "../index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));




// Show if recordset empty 

                   
//if ($DB_con->query($sql) === TRUE) {
//    echo header ('Location: http://localhost/hr/');
//} else {
  //  echo "Error: " . $sql . "<br>" . $DB_con->error;
//}

//$DB_con->close();

//mysqli_select_db($DB_con,"hrdb");
//$query_admin_check = "SELECT * FROM applicant_info WHERE staffid = 'admin@hrmanager.com'";
//$admin_check = mysqli_query($query_admin_check, $DB_con) or die(mysqli_error());
//$row_admin_check = mysqli_fetch_assoc($admin_check);
//$totalRows_admin_check = mysqli_num_rows($admin_check);

?>
