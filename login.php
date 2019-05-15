<?php
session_start();

$email = "";

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

if (isset($_POST['submit1'])){
	$email = mysqli_real_escape_string($db, $_POST['user_email']);
  	$password = mysqli_real_escape_string($db, $_POST['user_password']);


  	$query = "SELECT * from user WHERE user_email='$email' AND user_password='$password'";
  	$result = mysqli_query($db,$query);
  	$row = mysqli_fetch_array($result);
  	$row_count = mysqli_num_rows($result);
  	if($row_count == 1){
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  echo '<script type="text/javascript"> window.open("task.php","_self");</script>';            //  On Successful Login redirects to home.php


  	}
  	else{
  		echo"<script type='text/javascript'>alert('Wrong Email/Password'); window.location='log.php';</script>";
  	}
}
?>