<?php include ("inc/header.inc.php"); ?>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Register</h3>
		<p>Add Some Short Description</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Register Now </h3>
			</div>
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="#" method="post">
							<input type="text" name="name" placeholder="First Name" required="">
							<input type="text" name="name" placeholder="Last Name" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="password" id="password1" placeholder="Password" required="">
							<input type="password" name="password" id="password2" placeholder="Confirm Password" required="">
							<select id="country13" onchange="change_country(this.value)" class="frm-field required">
														<option value="null">Work Experience</option>
													 <option value="">Fresher</option>
														<option value="">0</option>
														<option value="">1</option>
														<option value="">2</option>
														<option value="">3</option> 
														<option value="">4</option> 
														<option value="">5</option> 
														<option value="">6</option> 
														<option value="">7</option> 
														<option value="">8</option> 
														<option value="">9</option> 
														<option value="">10</option> 
														<option value="">11</option>
														<option value="">12</option>  
														<option value="">13</option>
														<option value="">14</option>
														<option value="">15</option>      
										</select>
							<select id="country13" onchange="change_country(this.value)" class="frm-field required">
														<option value="null">Qualification</option>
									           <option value="">Bsc</option>
												<option value="">BTech</option>
												<option value="">Mca</option>
												<option value="">BCA</option>
												<option value="">Diploma</option> 
												<option value="">Other</option> 
						</select>
							<input type="submit" value="Register">
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking register, I agree to your terms</a></p>

				</div>
			</div>
		</div>
	</div>
	<div class="footer_top_agileits">
		<div class="container">
			<div class="col-md-4 footer_grid">
				<h3>About Us</h3>
				<p>Nam libero tempore cum vulputate id est id, pretium semper enim. Morbi viverra congue nisi vel pulvinar posuere sapien
					eros.
				</p>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Latest News</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html">Lorem ipsum neque vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html">Lorem ipsum neque, vulputate </a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html">Dolor amet sed quam vitae</a>
					</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<a href="single.html">Lorem ipsum neque, vulputate </a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>8088 USA, Honey block, <span>New York City.</span></li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+09187 8088 9436</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="footer_grids">
				<div class="col-md-4 footer_grid_left">
					<h3>Sign up for our Newsletter</h3>
				</div>
				<div class="col-md-8 footer_grid_right">

					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Enter Email Address..." required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer_w3ls">
		<div class="container">
			<div class="footer_bottom">
				<div class="col-md-9 footer_bottom_grid">
					<div class="footer_bottom1">
						<a href="index.html">
							<h2><span class="fa fa-signal" aria-hidden="true"></span> Soft <label>Hr Agency</label></h2>
						</a>
						<p>© 2017 Soft. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
				</div>
				<div class="col-md-3 footer_bottom_grid">
					<h6>Follow Us</h6>
					<div class="social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>