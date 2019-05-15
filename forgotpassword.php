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
        <h1 class="mt-5">FORGOT PASSWORD ?</h1>
        <p class="lead">Enter Your Registered Email Id to Recover Password and to Avail Task Management Service by Quantiphi Inc.</p>
        <a href="index.html" class="back">&lt back</a>
     </div>
	</div>
	<div class="row">
	<div class="col-md-12">
    <div id="logbox">
      <form id="login" method="post" action="forgot.php">
        <h1>Recover Password</h1>
        <input name="user_email" type="email" placeholder="enter your email" required="required" class="pass"/>
        <input type="submit" name="submit1" value="Recover Password" class="inputButton"/>
        <div class="text-center"><a href="sign.php" id="">Don't Have an account?</a></div>
      </form>
    </div>
	</div>
	</div>
</div>
</body>
</html>