
<?php include ("./inc/connect.inc.php");
mysqli_select_db($DB_con,"hrdb");
$query_admin_check = "SELECT * FROM staff_info WHERE staffid = 'admin@hrmanager.com'";
$admin_check = mysqli_query($DB_con, $query_admin_check) or die(mysqli_error());
$row_admin_check = mysqli_fetch_assoc($admin_check);
$totalRows_admin_check = mysqli_num_rows($admin_check);
if ($totalRows_admin_check == 0) { ?>
<form id="AdminForm" name="AdminForm" method="POST" action="./inc/send-request.inc.php">
    <label for="StaffId"></label>
    <input type="submit" name="cmdAddAdmin" id="cmdAddAdmin" value="Create Admin Account" />
    <input type="hidden" name="MM_insert" value="AdminForm" />
  </form>
<?php } ?>
<?php include ("./inc/header.inc.php");?>
<div data-vide-bg="video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>HrManagenent Admin Login Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Login Now</h2>
			</div>
			<div class="sub-main-w3">	
				<form name="login" action="inc/main-login.inc.php" method="post">
					<input placeholder="E-mail" name="email" type="email" required>
					<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					<input  placeholder="Password" name="password" type="password" required>
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
					<div class="rem-w3">
						<span class="check-w3"><input type="checkbox" />Remember Me</span>
						<a href="#">Forgot Password?</a>
						<div class="clear"></div>
					</div>
                       <input type="submit" name="login" value="Login">
				</form>
               

			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<!-- footer -->
		 <?php include ("./inc/footer.inc.php"); ?>