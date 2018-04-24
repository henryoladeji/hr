<?php 
include ("connect.inc.php");
session_start();
$user = $_POST["email"];
$pass = md5($_POST["password"]);


$sql = "SELECT * FROM staff_info WHERE email ='$user' AND password= '$pass'";

$query = mysqli_query($DB_con,$sql);

if(mysqli_num_rows($query) == 0)
{
   header ('Location: http://localhost/hr/index.php');
  
}
else
{
    while($row = mysqli_fetch_array($query)){
		
        $_SESSION["email"] = $row['email'];
        $_SESSION["fullname"] = $row['fullname'];
       $_POST["password"] = $row['password'];
        

       
    }
  header ('Location: ../dashboard/');
  mysqli_free_result($DB_con,$query);
 
}


  
 
// Close connection
mysqli_close($DB_con);

?>