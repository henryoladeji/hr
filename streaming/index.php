<?php
  include ("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include ("includes/handlers/login-handler.php");

      function getInputValue($name){
        if(isset($_POST[$name])) {
          echo $_POST[$name];

        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Streaming</title>

	<link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<!-- Latest compiled and minified CSS -->


<!-- Optional theme 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->
<a class="btn-1 btn-main login-btn" href="./register">Register</a>
<section id="loginform" class="outer-wrapper">
    <div class="inner-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <h2 class="main-center">Listen to good music today!</h2>
              <form role="form" action="./" method="POST">
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <div class="form-group">
                  <input type="text" class="_form-control" name="loginEmail" id="exampleInputEmail1" placeholder="Email Address" value="<?php getInputValue('loginEmail'); ?>" required>
                </div>
                <div class="form-group">
                  <input type="password" class="_form-control" name="loginPassword" id="exampleInputPassword1" placeholder="Password" required>
                </div> 
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
                <button type="submit" name="submit" class="btn btn-default">Log In</button>
              </form>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>