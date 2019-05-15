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
     <div class="col-lg-12 text-center">
        <h1 class="mt-5">LOGIN UP!</h1>
        <p class="lead">Login Yourself to Avail Task Management Service by Quantiphi Inc.</p>
        <a href="index.html" class="back">&lt back</a>
     </div>
	</div>
	<div class="row">
	<div class="col-md-12">
    <div id="logbox">
      <form id="login" method="post" action="login.php">
        <h1>Account login</h1>
        <input name="user_email" type="email" placeholder="enter your email" required="required" class="pass"/>
        <input name="user_password" type="password" placeholder="enter your password" required="required" class="input pass"/>
        <input type="submit" name="submit1" value="Log in" class="inputButton"/>
        <div class="text-center"><a href="sign.php" id="">create an account</a> - <a href="forgotpassword.php" id="">forgot password</a></div>
      </form>
    </div>
	</div>
	</div>
</div>
</body>
</html>