<?php
  include ("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");

  $account = new Account($con);

  include("includes/handlers/register-handler.php");

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
<a class="btn-1 btn-main login-btn" href="./">Log In</a>
<section id="loginform" class="outer-wrapper">
    <div class="inner-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <h2 class="main-center">Listen to good music today!</h2>
              <form role="form" action="./register" method="POST">
                <?php echo $account->getError(Constants::$emailTaken); ?>
                <div class="form-group">
                  <input type="email" class="_form-control" name="email" id="exampleInputEmail1" placeholder="Email Address" required>
                </div>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <div class="form-group">

                  <input type="text" class="_form-control" name="username" id="exampleInputPassword1" value="<?php getInputValue('username'); ?>" placeholder="Username" required>
                </div>
                <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>
                <div class="form-group">
                  <input type="password" class="_form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
                </div> 
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" value="M"> Male
                  </label>
                  <label>
                    <input type="radio" name="gender" value="F"> Female
                  </label>
                </div>
                <div class="_form-group">
                 <select class="_form-control" name="dateofbirth" required="">
                <option value="">Age</option>
                <option value="01">1</option> 
                <option value="02">2</option>
                <option value="03">3</option>  
                <option value="04">4</option>  
                <option value="05">5</option>  
                <option value="06">6</option>  
                <option value="07">7</option>  
                <option value="08">8</option>  
                <option value="09">9</option>  
                <option value="10">10</option>  
                <option value="11">11</option>  
                <option value="12">12</option>  
                <option value="13">13</option>  
                <option value="14">14</option>  
                <option value="15">15</option>  
                <option value="16">16</option>  
                <option value="17">17</option>  
                <option value="18">18</option>  
                <option value="19">19</option>  
                <option value="20">20</option>  
                <option value="21">21</option>  
                <option value="22">22</option>  
                <option value="23">23</option>  
                <option value="24">24</option>  
                <option value="25">25</option>  
                <option value="26">26</option>  
                <option value="27">27</option>  
                <option value="28">28</option>  
                <option value="29">29</option>  
                <option value="30">30</option>  
                <option value="31">31</option>  
                <option value="32">32</option>  
                <option value="33">33</option>                
                </select>
                </div>
                <div class="bd"></div>
                <button type="submit" name="reg" class="btn btn-default">Log In</button>
              </form>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>

