<?php

if (isset($_POST['submit'])) {
      //Login button was pressed
	$email = $_POST['loginEmail'];
	$password = $_POST['loginPassword'];


	$result = $account->login($email, $password);

	if($result == true) {
		$_SESSION['userLoggedIn'] = $email;
		header ("Location: home");
	}

  
}


?>