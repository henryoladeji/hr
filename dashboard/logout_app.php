<?php
session_start();
session_destroy();
header("Location: http://localhost/hr/index_applicant.php");
?>