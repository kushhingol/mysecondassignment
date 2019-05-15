<?php

session_start();
$my_u_id = $_SESSION['u_id'];

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

if (isset($_SESSION['u_id'])){

$my_old_task = mysqli_real_escape_string($db, $_POST['oldtext']);
$my_new_task = mysqli_real_escape_string($db, $_POST['edittext']);

$query = "UPDATE task SET title = '$my_new_task' WHERE title = '$my_old_task' AND user_id = '$my_u_id'";

mysqli_query($db, $query);
echo"<li value='".$my_new_task."' class='mylist'>".$my_new_task."<button class='close' value='".$my_new_task."' onclick='delfunc(this)' >×</button><button class='edit_task' onclick='editfunc(this)' value='".$my_new_task."' >🖉</button><button class='complete' value='".$my_new_task."' onclick='comfunc(this)'>✓</button></li>";

}
?>