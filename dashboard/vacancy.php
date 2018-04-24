<?php include ("./inc/header.inc.php");?>
<div data-vide-bg="video/social2">
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<h1>HrManagenent Vacancy Form</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-content-agile">
			<div class="wthree-pro">
				<h2> Vacancy </h2>
			</div>
			<div class="sub-main-w3">	
				<form name="login" action="inc/register.inc.php" method="post">
					<p>
					  <input placeholder="Vacancy name" name="vacancy name" type="text" required>
				  </p>
				  <p>&nbsp;</p>
				  <p>
                  <textarea name="requirements" placeholder="Job Description and Requirements" cols="" rows="3" style="outline: none;
    font-size: 1em;
    border: none;
    border-bottom: 1px dotted #fff;
    background: none;
    width: 92.5%;
    color: #fff;
    padding: 1em 0 1em 2em;
    letter-spacing: 1px;
    font-family: 'Philosopher', sans-serif;"></textarea>
                               </p>
				  <p>&nbsp;</p>
				  <p>
				     <input title="Opening Date" name="opening_date" type="date" required id="opening date" style="outline: none;
    font-size: 1em;
    border: none;
    border-bottom: 1px dotted #fff;
    background: none;
    width: 92.5%;
    color: #fff;
    padding: 1em 0 1em 2em;
    letter-spacing: 1px;
    font-family: 'Philosopher', sans-serif;">
                  </p>
				  <p>&nbsp;</p>
				  <p>
				    		     <input title="Closing Date" name="closing_date" type="date" required id="closing date" style="outline: none;
    font-size: 1em;
    border: none;
    border-bottom: 1px dotted #fff;
    background: none;
    width: 92.5%;
    color: #fff;
    padding: 1em 0 1em 2em;
    letter-spacing: 1px;
    font-family: 'Philosopher', sans-serif;">
				  </p>
				  <p>&nbsp;</p>
				  <p>
				  	    
				   
     Employer            
    <select name="employer">
                       <option value="employer">Employer</option>
                            <option value="manager">Manager</option>
                            <option value="deputy">Deputy Manager</option>
				            <option value="hod">H.O.D</option>
    </select>
				</form>
                <br>
                <div class="navbar-right social-icons"> 
						<a href="index.php" style="float: none;">Save In Here</a>	  
						</div>

			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<?php include ("./inc/footer.inc.php"); ?>