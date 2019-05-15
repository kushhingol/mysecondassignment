<?php

session_start();
$my_u_id = $_SESSION['u_id'];
$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');
if (isset($_SESSION['u_id']))
{
	$my_task = mysqli_real_escape_string($db, $_POST['task_enter']);
	$s_date = date("Y-m-d");
	$query = "INSERT INTO task (user_id, title, start_date, t_status) 
  			  VALUES('$my_u_id', '$my_task', '$s_date', 'p')";

  	$result = mysqli_query($db, $query);
  	echo "<li value='".$my_task."' class='mylist'>".$my_task."<button class='close' value='".$my_task."' onclick='delfunc(this)'>×</button><button class='edit_task' onclick='editfunc(this)' value='".$my_task."'>🖉</button><button class='complete' value='".$my_task."' onclick='comfunc(this)'>✓</button></li>";
  }

?>