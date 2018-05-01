<?php include ("inc/header.inc.php"); ?>
<?php include ("inc/total.inc.php"); ?>
<?php include ("inc/total2.inc.php"); ?>
<?php include ("inc/total3.inc.php"); ?>

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

 mysqli_select_db($DB_con,"hrdb");
 $query_all_vacancies = "SELECT * FROM vacancy_info ORDER BY vacancy_id ASC";
 $all_vacancies = mysqli_query($DB_con, $query_all_vacancies)  or die(mysqli_error());
 $row_all_vacancies = mysqli_fetch_assoc($all_vacancies);
 $totalRows_all_vacancies = mysqli_num_rows($all_vacancies);


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
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Applicants</h4>
					<h3><?php echo $result; ?></h3>
					<p>Applicant Records Saved</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Vacancies</h4>
						<h3><?php echo "".$row_rs_count['COUNT(*)']."";?></h3>
						<p>Vacancies Record Saved</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Employed</h4>
						<h3>0</h3>
						<p>Employed Applicant</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Employers</h4>
						<h3><?php echo $result2; ?></h3>
						<p>Employers Records</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="col-md-12 agile-calendar">
            <div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">
                            
                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">
                                    
                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>
                            
                            <div class="clearfix"> </div>
                        </div>
                    </div>
            </div>
        </div>
		
		<!-- //calendar -->
		<div class="col-md-12 w3agile-notifications">
			<div class="notifications">
				<!--notification start-->
				
					<header class="panel-heading">
				<?php if($all_Applicants > 1) {echo 'All Applicants';} else {echo 'Applicant';} ?> &nbsp; -  [&nbsp;<?php echo $all_Applicants; ?>&nbsp;]
					</header>
					   <div class="notify-w3ls">
                        
                        <?php do { ?>

                        <div class="alert alert-info clearfix">
                            <span class="alert-icon"><i class="fa fa-user"></i></span>
                            <div class="notification-info">
                              <ul class="clearfix notification-meta">
                                <li class="pull-left notification-sender"><span> <?php echo $row_all_applicants['fullname']; ?></span> &nbsp;(&nbsp; <?php echo $row_all_applicants['gender']; ?>&nbsp;) &nbsp;&nbsp;[&nbsp;<a href="mailto:<?php echo $row_all_applicants['username']; ?>"><?php echo $row_all_applicants['username']; ?></a>&nbsp;]</li>
                                <li class="pull-right notification-time"> <a href="call:<?php echo $row_all_applicants['telephone']; ?>"><?php echo $row_all_applicants['telephone']; ?></a></li>
                                </ul>
                              <p>
                                 <?php echo $row_all_applicants['applicantid']; ?> -&nbsp;&nbsp; <?php echo $row_all_applicants['state']; ?>
                                </p>
                              </div>
                          </div>
                        
<?php } while ($row_all_applicants = mysqli_fetch_assoc($all_applicants)); ?>
                                            
                    </div>
			</div>
			<div class="clearfix"> </div>
		</div>
			<!-- tasks -->
		
		<!-- //tasks -->
		<div class="col-md-12 agileits-w3layouts-stats">
          <div class="col-md-8 stats-info stats-last widget-shadow">
              <div class="stats-last-agile">
                            <table class="table stats-table ">
                                <thead>
                                    <tr>
                                      <th colspan="4" style="text-align: center; color: #900;">ALL VACANCIES</th>
                                  </tr>
                                    <tr>
                                        <th  style="text-align: center; color: #900;" >Vacancy Id</th>
                                        <th  style="text-align: center; color: #900;">Title</th>
                                        <th  style="text-align: center; color: #900;">Post Date</th>
                                        <th  style="text-align: center; color: #900;">End Date</th>
                                    </tr>
                                    <tr>
                                        <?php $sn =1; do { ?>
                                      <th><?php echo $sn++; ?></th>
                                      <th><?php echo $row_all_vacancies['vacancy_name']; ?></th>
                                      <th><?php echo $row_all_vacancies['date_opening']; ?></th>
                                      <th><?php echo $row_all_vacancies['closing_date']; ?></th>
                                  </tr>
                                   <?php } while ($row_all_vacancies = mysqli_fetch_assoc($all_vacancies)); ?>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

</section>
 <div class="footer">
            <div class="wthree-copyright">
              <p><?php include ("inc/footer.inc.php"); ?></p>
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
