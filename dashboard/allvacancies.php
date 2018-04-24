<?php require_once ("../inc/connect.inc.php");
session_start();

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


?>





<!DOCTYPE html>
<head>
<title>Hr Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
      <a href="#" class="logo" style="font-size:30px; font-family:Georgia, 'Times New Roman', Times, serif; text-transform:none; font-weight:bold;">
        hrManager
    </a>
        <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username"><?php echo $_SESSION["fullname"]; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                    
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-cog"></i>
                        <span>Administration</span>
                    </a>
                     <ul class="sub">
                        <li><a href="staffinfo.php?code=<?php echo $_SESSION["fullname"]; ?>">Staff</a></li>
                        <li><a href="employers.php?code=<?php echo $_SESSION["fullname"]; ?>">Employers</a></li>
                       
                    </ul>
                    
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bullhorn"></i>
                        <span>Vacancies </span>
                    </a>
                     <ul class="sub">
                        <li><a href="allvacancies.php?code=<?php echo $_SESSION["fullname"]; ?>">All Vacancies</a></li>
                        <li><a href="newvacancies.php?code=<?php echo $_SESSION["fullname"]; ?>">New Vacancies</a></li>
                        <li><a href="openvacancies.php?code=<?php echo $_SESSION["fullname"]; ?>">Open Vacancies</a></li>
                        <li><a href="closedvacancies.php?code=<?php echo $_SESSION["fullname"]; ?>">Closed Vacancies</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-user"></i>
                        <span>Applicants</span>
                    </a>
                 <ul class="sub">
                        <li><a href="allapplicants.php?code=<?php echo $_SESSION["fullname"]; ?>">All Applicants</a></li>
                        <li><a href="employedapplicants.php?code=<?php echo $_SESSION["fullname"]; ?>">Employed Applicants</a></li>
                                             
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-suitcase"></i>
                        <span>Interview</span>
                    </a>
                    <ul class="sub">
                        <li><a href="allinterviews.php?code=<?php echo $_SESSION["fullname"]; ?>">All Interviews</a></li>
                        <li><a href="newinterview.php?code=<?php echo $_SESSION["fullname"]; ?>">New Interview</a></li>
                        <li><a href="allinterviews.php?code=<?php echo $_SESSION["fullname"]; ?>">Manage Interview</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Mail Center</span>
                    </a>
                    <ul class="sub">
                        <li><a href="https://mail.google.com" target="_blank">Inbox</a></li>
                        <li><a href="https://mail.google.com" target="_blank">Compose Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" fa fa-table"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub">
                        <li><a href="applicantreports.php?code=<?php echo $_SESSION["fullname"]; ?>">Applicant's Reports</a></li>
                        <li><a href="vacancyreports.php?code=<?php echo $_SESSION["fullname"]; ?>">Vacancies Reports</a></li>
                        <li><a href="interviewreports.php?code=<?php echo $_SESSION["fullname"]; ?>">Interview's Reports</a></li>
                        <li><a href="employerreports.php?code=<?php echo $_SESSION["fullname"]; ?>">Employer's Reports</a></li>
                    </ul>
                   
                </li>
                
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
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
                    <span><?php if($all_Vacancies > 1) {echo 'All Vacancies';} else {echo 'Applicant';} ?>  -  [&nbsp;<?php echo $all_Vacancies; ?>&nbsp;]</span>
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
    <th>Opening Date</th>
    <th>Closing Date</th>
  </tr>
  
  <tr>
    <?php do { ?>
    <td><?php echo $row_all_vacancies['vacancy_id']; ?></td>
    <td><?php echo $row_all_vacancies['category']; ?></td>
    <td><?php echo $row_all_vacancies['employer_name']; ?></td>
    <td><?php echo $row_all_vacancies['vacancy_name']; ?></td>
    <td><?php echo $row_all_vacancies['requirement']; ?></td>
    <td><?php echo $row_all_vacancies['date_opening']; ?></td>
    <td><?php echo $row_all_vacancies['closing_date']; ?></td>
  </tr>

 <?php } while ($row_all_vacancies = mysqli_fetch_assoc($all_vacancies)); ?>

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