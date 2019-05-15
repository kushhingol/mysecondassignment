<?php

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['user_name']);
  $email = mysqli_real_escape_string($db, $_POST['user_email']);
  $password = mysqli_real_escape_string($db, $_POST['user_password']);


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR user_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo"<script type='text/javascript'>alert('Username already Registered'); window.location = 'sign.php';</script>";
	  array_push($errors, "Username already exists");
    }

    if ($user['user_email'] === $email) {
      echo"<script type='text/javascript'>alert('email already Registered'); window.location = 'sign.php';</script>";
	  array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = $password;//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, user_password, user_email) 
  			  VALUES('$username', '$password', '$email')";
  	mysqli_query($db, $query);
  	echo"<script type='text/javascript'>alert('User successfully registered'); location.href = 'log.php';</script>";
  }
}