<?php include ("inc/header.inc.php"); ?>
<?php require_once ("../inc/connect.inc.php");


if ((empty($_SESSION['email'])) && ($basename!="index")) {
 header('Location: http://localhost/hr');
 exit;
}


          ?>
		  
		  <?php include ("inc/total.inc.php"); ?>

<?php

mysqli_select_db($DB_con,"hrdb");
$query_count_applicants = "SELECT COUNT(*) FROM applicant_info WHERE applicantid != ''";
$count_applicants = mysqli_query($DB_con, $query_count_applicants) or die(mysqli_error());
$row_count_applicants = mysqli_fetch_assoc($count_applicants);
$totalRows_count_applicants = mysqli_num_rows($count_applicants);

//Returning Number of all Applicants Registered
$all_Applicants = $row_count_applicants['COUNT(*)'];


//Select All Registered Applicants
mysqli_select_db($DB_con,"hrdb");
$query_applicants = "SELECT * FROM applicant_info";
$applicants = mysqli_query($DB_con, $query_applicants) or die(mysql_error());
$row_applicants = mysqli_fetch_assoc($applicants);
$totalRows_applicants = mysqli_num_rows($applicants);

mysqli_select_db($DB_con,"hrdb");
$query_all_applicants = "SELECT * FROM applicant_info ORDER BY registrationdate DESC";
$all_applicants = mysqli_query($DB_con, $query_all_applicants)  or die(mysqli_error());
$row_all_applicants = mysqli_fetch_assoc($all_applicants);
$totalRows_all_applicants = mysqli_num_rows($all_applicants);


?>


<?php

if(isset($_POST['register'])){

    $category = $_POST["category"];
    $employer_name = $_POST["employer"];
    $vacancy_name = $_POST["name"];
    $requirement = $_POST["requirements"];
    $date_opening = $_POST["opening_date"];
    $closing_date = $_POST["closing_date"];

   
    
    $sql = "INSERT INTO vacancy_info (category, employer_name, vacancy_name, requirement, date_opening, closing_date)
    VALUES ('$category', '$employer_name', '$vacancy_name', '$requirement', '$date_opening', '$closing_date')";

    $DB_con->query($sql);
 }

?>



<!--header start-->
<?php include ("inc/header-part.inc.php"); ?>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <?php include("inc/sidebar.php"); ?>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
	
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="col-md-12 agile-calendar" >
            <div class="calendar-widget" style="background:rgba(52, 48, 48, 0.78);">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                      <i class="fa fa-user"></i>
                    </span>
                    <span class="panel-title"> Vacancy Info Registration Form</span>
                </div>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                       
                     
		<form action="newvacancies.php" method="post">
			<input type="text" class="ggg" name="name" placeholder="Vacancy Name" required>
            <input type="text" class="ggg" name="category" placeholder="Category Name" required>
            <input type="text" class="ggg" name="employer" placeholder="Employer Name" required>
			<textarea name="requirements"   placeholder="Job Description and Requirements" cols="" rows="3" style="outline: none;
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
				     <input title="Opening Date"  name="opening_date" type="date"  required id="opening date" style="outline: none;
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
				  	    
				   
                 
    
			
			
				
				<input type="submit" value="Submit Vacancy" name="register" style="background:rgba(160, 10, 220, 0.40); color:#FFF; width:100%; height:50px;">
		</form>
       
                       
         </div>
</div> 
                       
                       
                       
                    </div>
            </div>
        </div>
		
		<!-- //calendar -->
		<div class="col-md-12 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
						  <p>© 2017 Admin Dashboard. All rights reserved | Design by <a href="http://Pamilerin.com">Pamilerin</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
