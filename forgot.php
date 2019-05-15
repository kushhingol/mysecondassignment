<?php

$email = "";

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

$email = mysqli_real_escape_string($db, $_POST['user_email']);

$q = "SELECT user_email FROM user WHERE user_email='$email'";
$r = mysqli_query($db,$q);
$row = mysqli_num_rows($r);
if($row==0){
	echo"<script type='text/javascript'>alert('You Have not Yet Registered. Please Register First'); window.location='sign.php';</script>";
}else {

$query = "SELECT user_password FROM user WHERE user_email='$email'";

$result = mysqli_query($db,$query);
$pass = mysqli_fetch_assoc($result);


mail($email,"Your Login Password For Quantiphi's To-Do list","Your Password is:".$pass);

//echo"<script type='text/javascript'>alert('Recovery Mail Have been Sent to Registered Email'); window.location='log.php';</script>";


}




?>