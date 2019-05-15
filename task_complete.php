<?php

session_start();
$u_id = $_SESSION['u_id'];

if (isset($_SESSION['u_id'])){

$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');

$my_task = mysqli_real_escape_string($db, $_POST['t_task']);
echo $my_task;
echo $u_id;

$q = "SELECT t_status FROM task WHERE title = '$my_task' AND user_id = '$u_id'";

$result = mysqli_query($db, $q);
$r = mysqli_fetch_array($result);
if($r[0]=='p'){


$query = "UPDATE task SET t_status = 'c' WHERE title = '$my_task' AND user_id = '$u_id'";

mysqli_query($db, $query);
}else if($r[0]=='c'){

$query = "UPDATE task SET t_status = 'p' WHERE title = '$my_task' AND user_id = '$u_id'";

mysqli_query($db, $query);

}
}

?>