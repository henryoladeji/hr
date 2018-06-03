<?php

function santizeFormPassword($inputText)  {
  $inputText = strip_tags($inputText);
  return $inputText;
}

function santizeFormUsername($inputText)  {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function santizeFormString($inputText)  {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}



if(isset($_POST['reg'])) {
    // Register was pressed
    $username = santizeFormUsername($_POST['username']);
    $email = santizeFormString($_POST['email']);
    $password = santizeFormPassword($_POST['password']);  
    $gender = $_POST["gender"]; 
    $dateofbirth = $_POST["dateofbirth"]; 





    $wasSuccessful = $account->register($username, $email, $password, $gender, $dateofbirth);  

    if ($wasSuccessful == true) {
      $_SESSION['userLoggedIn'] = $email;
      header ("Location: home");
    }
}


?>