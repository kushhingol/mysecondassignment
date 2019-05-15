<?php

session_start();
$u_id = $_SESSION['u_id'];

if (isset($_SESSION['u_id'])){

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

$my_task = mysqli_real_escape_string($db, $_POST['task_del']);

$query = "DELETE FROM task WHERE title = '$my_task' AND user_id = '$u_id'";

mysqli_query($db, $query);
}

?>