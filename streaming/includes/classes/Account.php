<?php
	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();

		}

		public function login($em, $pw) {

			$pw = md5($pw);

			$query = mysqli_query($this->con, "SELECT * FROM users WHERE email='$em' AND password='$pw'");

			if (mysqli_num_rows($query) == 1) {
				return true;

			}
			else {
				array_push($this->errorArray, Constants::$loginFailed );
				return false;
			}

		}

		public function register($un, $em, $pw, $gd, $dob) {
		    $this->validateUsername($un);
		    $this->validateEmail($em);
		    $this->validatePassword($pw);
		    $this->validateGender($gd);
		    $this->validateDob($dob);		   

		    if(empty($this->errorArray) == true) {
		    	//Insert into DB 
		    	return $this->insertUserDetails($un, $em, $pw, $gd, $dob);
		    }
		    else {
		    	return false;
		    }
		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='erromessage'>$error</span>";
		}

		private function insertUserDetails($un, $em, $pw, $gd, $dob) {
			$encryptedPw = md5($pw);
			$profilePic = "assets/images/profile-pics/profile_pic.png";
			$date = date("Y-m-d");


			$result = mysqli_query($this->con, "INSERT INTO users VALUES ('', '$un', '$em', '$encryptedPw', '$gd', '$dob', '$date', '$profilePic')");
			return $result;

		}

		private function validateEmail($em) {

			if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
				array_push($this->errorArray, Constants::$emailInvalid);
				return;

			}

			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email='$em'"); 
			if (mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, Constants::$emailTaken);
				return;
			}
			
		}

		public function validateUsername($un) {

			if (strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, Constants::$usernameCharacters);
				return;
			}

			$checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username='$un'"); 
			if (mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, Constants::$usernameTaken);
				return;
			}
		}

		private function validatePassword($pw) {

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, Constants::$passwordNotAlphanumeric);
				return;
			}

			if (strlen($pw) > 30 || strlen($pw) < 5) {
				array_push($this->errorArray, Constants::$passwordCharacters);
				return;
			}

		}


		private function validateGender($gd) {

			

		}

		private function validateDob($dob) {

			
		}

	}	
?>