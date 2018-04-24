<?php include ("./inc/header2.inc.php");?>
<div data-vide-bg="video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>HrManagenent Applicant Login Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2>Login Now</h2>
			</div>
			<div class="sub-main-w3">	
				<form name="login" action="inc/login.inc.php" method="post">
					<input placeholder="E-mail Or Username" name="email" type="text" required>
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
                <br>
                <div class="navbar-right social-icons"> 
						<a href="register.php" style="float: none;">Register</a>	  
						</div>

			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<?php include ("./inc/footer.inc.php"); ?>