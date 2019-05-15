<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script type="text/javascript" src="js/script.js"></script>
  <title>Quantiphi's Employee To-do list</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- main content-->
  
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center">
        <h1 class="mt-5">SIGN UP!</h1>
        <p class="lead">Register Yourself to Avail Task Management Service by Quantiphi Inc.</p>
        <a href="index.html" class="back">&lt back</a>
      </div>
	 </div>
	 <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 c1">
		<div id="logbox">
		<form id="signup" name="f1" method="post" action="signup.php" onsubmit="return matchpass()">
        <h1>Create Your Account</h1>
        <input name="user_name" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="pass"/>
        <input name="user_password" type="password" placeholder="Choose a password" required="required" class="pass"/>
        <input name="user_password2" type="password" placeholder="Confirm password" required="required" class="pass"/>
        <input name="user_email" type="email" placeholder="Email address" required="required" class="pass"/>
        <input type="submit" name="submit" value="Sign me up!" class="inputButton"/>
        <div class="text-center">Already have an account? <a href="log.php" id="login_id">login</a>
        </div>
      </form>
    </div>
	</div>
	</div>
</div>
</body>
</html>