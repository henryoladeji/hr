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
$query_count_vacancies = "SELECT COUNT(*) FROM vacancy_info WHERE vacancy_id != ''";
$count_vacancies = mysqli_query($DB_con, $query_count_vacancies) or die(mysqli_error());
$row_count_vacancies = mysqli_fetch_assoc($count_vacancies);
$totalRows_count_vacancies = mysqli_num_rows($count_vacancies);

//Returning Number of all Applicants Registered
$all_Vacancies = $row_count_vacancies['COUNT(*)'];


//Select All Registered Applicants
mysqli_select_db($DB_con,"hrdb");
$query_vacancies = "SELECT * FROM vacancy_info";
$vacancies = mysqli_query($DB_con, $query_vacancies) or die(mysql_error());
$row_vacancies = mysqli_fetch_assoc($vacancies);
$totalRows_vacancies = mysqli_num_rows($vacancies);

 mysqli_select_db($DB_con,"hrdb");
 $query_all_vacancies = "SELECT * FROM vacancy_info ORDER BY vacancy_id ASC";
 $all_vacancies = mysqli_query($DB_con, $query_all_vacancies)  or die(mysqli_error());
 $row_all_vacancies = mysqli_fetch_assoc($all_vacancies);
 $totalRows_all_vacancies = mysqli_num_rows($all_vacancies);


//Getting Closing Date
$today = date('Y-m-d');
mysqli_select_db($DB_con,"hrdb");
$query_opening_date = "SELECT * FROM vacancy_info WHERE closing_date < '$today' ORDER BY closing_date ASC";
$opening_date = mysqli_query($DB_con, $query_opening_date) or die(mysqli_error());
$row_opening_date = mysqli_fetch_assoc($opening_date);
$totalRows_opening = mysqli_num_rows($opening_date);



mysqli_select_db($DB_con,"hrdb");
$query_opening_count = "SELECT COUNT(*) FROM vacancy_info WHERE closing_date <'$today'";
$opening_count = mysqli_query($DB_con, $query_opening_count) or die(mysqli_error());
$row_closed_count = mysqli_fetch_assoc($opening_count);
$totalRows_openingcount = mysqli_num_rows($opening_count);

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
            <div class="calendar-widget" >
                <div class="panel-heading ui-sortable-handle">

                    <span class="panel-icon">
                      <i class="fa fa-user"></i>
                    </span>
                    <span>Closed Vacancies - <?php echo "(".$row_closed_count['COUNT(*)'].")";?></span>
                </div>
                
 
                <br>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                       
                    
        <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #000;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<table>

  <tr>
    <th>S/n</th>
    <th>Category</th>
    <th>Employer Name</th>
    <th>Vacancy Name</th>
    <th>Requirement</th>
    <th>Closing Date</th>
  </tr>
  
  <tr>
    <?php $sn =1; do { ?>
    <td><?php echo $sn++; ?></td>
    <td><?php echo $row_opening_date['category']; ?></td>
    <td><?php echo $row_opening_date['employer_name']; ?></td>
    <td><?php echo $row_opening_date['vacancy_name']; ?></td>
    <td><?php echo $row_opening_date['requirement']; ?></td>
    <td><?php echo $row_opening_date['closing_date']; ?></td>
  </tr>

 <?php } while ($row_opening_date = mysqli_fetch_assoc($opening_date)); ?>

</table>

        
</div>
</div> 
                       
                       
                       
                    </div>
            </div>
        </div>
       
        <!-- //calendar -->
        <div class="col-md-12 w3agile-notifications">
            <br>
            <div class="notifications" style="background-color: darkgray;">
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
