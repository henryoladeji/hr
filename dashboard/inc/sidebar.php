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
                        <li><a href="manageinterviews.php?code=<?php echo $_SESSION["fullname"]; ?>">Manage Interview</a></li>
                        
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