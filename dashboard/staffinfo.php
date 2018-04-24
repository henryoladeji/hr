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

    $userlevel = "Applicant";
    $username = $_POST["username"];
    $email = $_POST["email_app"];
    $fullname = $_POST["fullname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dateofbirth"];
    $password = md5($_POST['password']);
    $address = $_POST["address"];
    $state = $_POST["stateoforigin"];
    $country = $_POST["nationality"];
    $status = $_POST["maritalstatus"];
    $telephone = $_POST["telephone"];
    $registrationdate = $_POST["reg_date"];

   

    
    $sql = "INSERT INTO applicant_info (userlevel, username, email, fullname, gender, dob, password, address, state, country, status, telephone, registrationdate)
    VALUES ($userlevel', '$username', '$email', '$fullname', '$gender', '$dob', '$password', '$address', '$state', '$country', '$status', '$telephone', '$registrationdate')";

    $DB_con->query($sql);
 }

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
            <div class="calendar-widget" style="background:rgba(52, 48, 48, 0.78);">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                      <i class="fa fa-user"></i>
                    </span>
                    <span class="panel-title"> STAFF INFO Registration Form</span>
                </div>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                       
                     
		
		<form action="staffinfo.php" method="post">
			<input type="email" class="ggg" name="email_app" placeholder="E-MAIL" required>
            <input type="Full Name"  class="ggg" name="fullname" placeholder="Fullname" required>
					 <input type="Username"  class="ggg" name="username" placeholder="Username" required>
					<input  type="Password" class="ggg" name="password" type="password" placeholder="Password" required>
				
                     <input title="Date of Birth" name="dateofbirth" type="date" required id="dateofbirth" class="ggg">
               
<input type="text" list="genderlist" class="ggg" name="gender" placeholder="Select Gender" required id="gender">
<datalist id="genderlist">
<option value="M">Male</option>
<option value="F">Female</option>
</datalist>

                    <input type="text" list="maritallist" class="ggg" name="maritalstatus" placeholder="Marital" Status" required id="maritalstatus">
<datalist id="maritallist">
<option value="Single">Single</option>
<option value="In a Relationship">In a Relationship</option>
<option value="Engaged">Engaged</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
<option value="Widow">Widow</option>
</datalist>
                
 <input type="text" list="countrylist" class="ggg" name="nationality" placeholder="Country" required id="nationality">
 
 <datalist id="countrylist">
            <option value="" selected="selected">- Select One -</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="British Virgin Islands">British Virgin Islands</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso"   >Burkina Faso</option>
                    <option value=">Burundi"   >Burundi</option>
                    <option value="kh"   >Cambodia</option>
                    <option value="cm"   >Cameroon</option>
                    <option value="ca"   >Canada</option>
                    <option value="cv"   >Cape Verde</option>
                    <option value="ky"   >Cayman Islands</option>
                    <option value="cf"   >Central African Republic</option>
                    <option value="td"   >Chad</option>
                    <option value="cl"   >Chile</option>
                    <option value="cn"   >China</option>
                    <option value="cx"   >Christmas Island</option>
                    <option value="cc"   >Cocos (Keeling) Islands</option>
                    <option value="co"   >Colombia</option>
                    <option value="km"   >Comoros</option>
                    <option value="cg"   >Congo</option>
                    <option value="ck"   >Cook Islands</option>
                    <option value="cr"   >Costa Rica</option>
                    <option value="hr"   >Croatia</option>
                    <option value="cu"   >Cuba</option>
                    <option value="cy"   >Cyprus</option>
                    <option value="cz"   >Czech Republic</option>
                    <option value="cd"   >Democratic Republic of Congo</option>
                    <option value="dk"   >Denmark</option>
                    <option value="xx"   >Disputed Territory</option>
                    <option value="dj"   >Djibouti</option>
                    <option value="dm"   >Dominica</option>
                    <option value="do"   >Dominican Republic</option>
                    <option value="tl"   >East Timor</option>
                    <option value="ec"   >Ecuador</option>
                    <option value="eg"   >Egypt</option>
                    <option value="sv"   >El Salvador</option>
                    <option value="gq"   >Equatorial Guinea</option>
                    <option value="er"   >Eritrea</option>
                    <option value="ee"   >Estonia</option>
                    <option value="et"   >Ethiopia</option>
                    <option value="fk"   >Falkland Islands</option>
                    <option value="fo"   >Faroe Islands</option>
                    <option value="fm"   >Federated States of Micronesia</option>
                    <option value="fj"   >Fiji</option>
                    <option value="fi"   >Finland</option>
                    <option value="fr"   >France</option>
                    <option value="gf"   >French Guyana</option>
                    <option value="pf"   >French Polynesia</option>
                    <option value="tf"   >French Southern Territories</option>
                    <option value="ga"   >Gabon</option>
                    <option value="gm"   >Gambia</option>
                    <option value="ge"   >Georgia</option>
                    <option value="de"   >Germany</option>
                    <option value="Ghana"   >Ghana</option>
                    <option value="gi"   >Gibraltar</option>
                    <option value="gr"   >Greece</option>
                    <option value="gl"   >Greenland</option>
                    <option value="gd"   >Grenada</option>
                    <option value="gp"   >Guadeloupe</option>
                    <option value="gu"   >Guam</option>
                    <option value="gt"   >Guatemala</option>
                    <option value="gn"   >Guinea</option>
                    <option value="gw"   >Guinea-Bissau</option>
                    <option value="gy"   >Guyana</option>
                    <option value="ht"   >Haiti</option>
                    <option value="hm"   >Heard Island and Mcdonald Islands</option>
                    <option value="hn"   >Honduras</option>
                    <option value="Hong Kong"   >Hong Kong</option>
                    <option value="hu"   >Hungary</option>
                    <option value="is"   >Iceland</option>
                    <option value="in"   >India</option>
                    <option value="id"   >Indonesia</option>
                    <option value="ir"   >Iran</option>
                    <option value="iq"   >Iraq</option>
                    <option value="xe"   >Iraq-Saudi Arabia Neutral Zone</option>
                    <option value="ie"   >Ireland</option>
                    <option value="il"   >Israel</option>
                    <option value="it"   >Italy</option>
                    <option value="ci"   >Ivory Coast</option>
                    <option value="jm"   >Jamaica</option>
                    <option value="jp"   >Japan</option>
                    <option value="jo"   >Jordan</option>
                    <option value="kz"   >Kazakhstan</option>
                    <option value="ke"   >Kenya</option>
                    <option value="ki"   >Kiribati</option>
                    <option value="kw"   >Kuwait</option>
                    <option value="kg"   >Kyrgyzstan</option>
                    <option value="la"   >Laos</option>
                    <option value="lv"   >Latvia</option>
                    <option value="lb"   >Lebanon</option>
                    <option value="ls"   >Lesotho</option>
                    <option value="Liberia"   >Liberia</option>
                    <option value="Libya"   >Libya</option>
                    <option value="li"   >Liechtenstein</option>
                    <option value="lt"   >Lithuania</option>
                    <option value="lu"   >Luxembourg</option>
                    <option value="mo"   >Macau</option>
                    <option value="mk"   >Macedonia</option>
                    <option value="mg"   >Madagascar</option>
                    <option value="mw"   >Malawi</option>
                    <option value="my"   >Malaysia</option>
                    <option value="mv"   >Maldives</option>
                    <option value="Mali"   >Mali</option>
                    <option value="mt"   >Malta</option>
                    <option value="mh"   >Marshall Islands</option>
                    <option value="mq"   >Martinique</option>
                    <option value="mr"   >Mauritania</option>
                    <option value="mu"   >Mauritius</option>
                    <option value="yt"   >Mayotte</option>
                    <option value="Mexico"   >Mexico</option>
                    <option value="md"   >Moldova</option>
                    <option value="mc"   >Monaco</option>
                    <option value="mn"   >Mongolia</option>
                    <option value="ms"   >Montserrat</option>
                    <option value="ma"   >Morocco</option>
                    <option value="mz"   >Mozambique</option>
                    <option value="mm"   >Myanmar</option>
                    <option value="Namibia"   >Namibia</option>
                    <option value="nr"   >Nauru</option>
                    <option value="np"   >Nepal</option>
                    <option value="nl"   >Netherlands</option>
                    <option value="an"   >Netherlands Antilles</option>
                    <option value="nc"   >New Caledonia</option>
                    <option value="nz"   >New Zealand</option>
                    <option value="ni"   >Nicaragua</option>
                    <option value="ne"   >Niger</option>
                    <option value="Nigeria"  >Nigeria</option>
                    <option value="nu"   >Niue</option>
                    <option value="nf"   >Norfolk Island</option>
                    <option value="kp"   >North Korea</option>
                    <option value="mp"   >Northern Mariana Islands</option>
                    <option value="no"   >Norway</option>
                    <option value="om"   >Oman</option>
                    <option value="pk"   >Pakistan</option>
                    <option value="pw"   >Palau</option>
                    <option value="ps"   >Palestinian Territories</option>
                    <option value="pa"   >Panama</option>
                    <option value="pg"   >Papua New Guinea</option>
                    <option value="py"   >Paraguay</option>
                    <option value="pe"   >Peru</option>
                    <option value="ph"   >Philippines</option>
                    <option value="pn"   >Pitcairn Islands</option>
                    <option value="pl"   >Poland</option>
                    <option value="pt"   >Portugal</option>
                    <option value="pr"   >Puerto Rico</option>
                    <option value="qa"   >Qatar</option>
                    <option value="re"   >Reunion</option>
                    <option value="ro"   >Romania</option>
                    <option value="ru"   >Russia</option>
                    <option value="rw"   >Rwanda</option>
                    <option value="sh"   >Saint Helena and Dependencies</option>
                    <option value="kn"   >Saint Kitts and Nevis</option>
                    <option value="lc"   >Saint Lucia</option>
                    <option value="pm"   >Saint Pierre and Miquelon</option>
                    <option value="vc"   >Saint Vincent and the Grenadines</option>
                    <option value="ws"   >Samoa</option>
                    <option value="sm"   >San Marino</option>
                    <option value="st"   >Sao Tome and Principe</option>
                    <option value="sa"   >Saudi Arabia</option>
                    <option value="sn"   >Senegal</option>
                    <option value="sc"   >Seychelles</option>
                    <option value="sl"   >Sierra Leone</option>
                    <option value="sg"   >Singapore</option>
                    <option value="sk"   >Slovakia</option>
                    <option value="si"   >Slovenia</option>
                    <option value="sb"   >Solomon Islands</option>
                    <option value="so"   >Somalia</option>
                    <option value="za"   >South Africa</option>
                    <option value="gs"   >South Georgia and South Sandwich Islands</option>
                    <option value="kr"   >South Korea</option>
                    <option value="es"   >Spain</option>
                    <option value="pi"   >Spratly Islands</option>
                    <option value="lk"   >Sri Lanka</option>
                    <option value="sd"   >Sudan</option>
                    <option value="sr"   >Suriname</option>
                    <option value="sj"   >Svalbard and Jan Mayen</option>
                    <option value="sz"   >Swaziland</option>
                    <option value="se"   >Sweden</option>
                    <option value="ch"   >Switzerland</option>
                    <option value="sy"   >Syria</option>
                    <option value="tw"   >Taiwan</option>
                    <option value="tj"   >Tajikistan</option>
                    <option value="tz"   >Tanzania</option>
                    <option value="th"   >Thailand</option>
                    <option value="tg"   >Togo</option>
                    <option value="tk"   >Tokelau</option>
                    <option value="to"   >Tonga</option>
                    <option value="tt"   >Trinidad and Tobago</option>
                    <option value="tn"   >Tunisia</option>
                    <option value="tr"   >Turkey</option>
                    <option value="tm"   >Turkmenistan</option>
                    <option value="tc"   >Turks And Caicos Islands</option>
                    <option value="tv"   >Tuvalu</option>
                    <option value="ug"   >Uganda</option>
                    <option value="ua"   >Ukraine</option>
                    <option value="ae"   >United Arab Emirates</option>
                    <option value="uk"   >United Kingdom</option>
                    <option value="us"   >United States</option>
                    <option value="um"   >United States Minor Outlying Islands</option>
                    <option value="uy"   >Uruguay</option>
                    <option value="vi"   >US Virgin Islands</option>
                    <option value="uz"   >Uzbekistan</option>
                    <option value="vu"   >Vanuatu</option>
                    <option value="va"   >Vatican City</option>
                    <option value="ve"   >Venezuela</option>
                    <option value="vn"   >Vietnam</option>
                    <option value="wf"   >Wallis and Futuna</option>
                    <option value="eh"   >Western Sahara</option>
                    <option value="ye"   >Yemen</option>
                    <option value="zm"   >Zambia</option>
                    <option value="zw"   >Zimbabwe</option>
                    <option value="rs"   >Serbia</option>
                    <option value="me"   >Montenegro</option>
</datalist>

<input placeholder="State of Origin" name="stateoforigin" type="text" required id="stateoforigin" class="ggg">

<input placeholder="Telephone Number" name="telephone" type="text" required id="telephone" class="ggg">
                

<input placeholder="Contact Address" name="address" type="text" required id="address" class="ggg">

<input placeholder="" name="reg_date" type="date" required id="date" class="ggg">
                <br><br>


					
                
			
				<div class="clearfix"></div>
			<input type="submit" value="Submit Details" name="register" style="background:rgba(160, 10, 220, 0.40); color:#FFF; width:100%; height:50px;">
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
