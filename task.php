<?php
$db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');
session_start();

$u_email =  $_SESSION['email'];
if (isset($_SESSION['email'])){
$query1 = "SELECT user_id,username from user where user_email = '$u_email'";
$user_result = mysqli_query($db,$query1);
$row1 = mysqli_fetch_assoc($user_result);
$my_user_name = $row1["username"];
$my_user_id = $row1["user_id"]; 
$_SESSION['u_id'] = $my_user_id;
}
else{
  echo"<script type='text/javascript'>alert('Please Login First'); window.location='log.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript" src="del_task.js"></script>


  <title>Quantiphi's Employee To-do list</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-white static-top head">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="logo.png" alt=""></a>
     <!-- <button class="navbar-toggler nav_button" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background:black;">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="color:black;">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:black;">Contact</a>
          </li>
        </ul>
      </div>-->
    </div>
  </nav>

<div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center myhead">
        <form action="logout.php" method="POST"><button type="submit" id="logout" name="logout" value="LOGOUT" class="logout_button">LOGOUT</button></form>
        <h1 class="mt-5">Quantiphi's Employee To-Do List</h1>
        <p class="lead" style="font-size: 1.0em;"><?php echo"Welcome "  .$my_user_name."" ?></p>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center mli">

         <input name="task_enter" type="text" placeholder="Enter Your Task" required="required" class="enter_task" id="e_task"/><button type="button" id="task" name="add_my_task" value="Add Task" class="task_button" onclick="newElement()" style="max-width: 20%">ADD TASK</button>
         <input name="edit_task" type="text" placeholder="Edit Your Task" required="required" class="edit" id="ed_task" style="visibility: hidden"/><button type="button" id="edit_t" name="add_my_task" value="Add Task" class="task_button" style="max-width: 20%; margin-top: 5%; visibility: hidden;">EDIT TASK</button>
         <h3 id="head3">Todo</h3>
         <hr>
         <ul id="myUL">
          <li><?php    

          $db = mysqli_connect('remotemysql.com', 'FQsmPRrC7Z', 'pWqGm8X9fG', 'FQsmPRrC7Z');
         

          $u_email =  $_SESSION['email'];
          if (isset($_SESSION['email'])){
          $q = "SELECT title,t_status FROM task t JOIN user u ON t.user_id = u.user_id WHERE u.user_email = '$u_email'";
          $result = mysqli_query($db,$q);
          $nrow = mysqli_num_rows($result);
          
          while ($row = mysqli_fetch_assoc($result)){
            if($row["t_status"]=="p"){
              echo "<li value='".$row["title"]."' class='mylist'>".$row["title"]."<button class='close' value='".$row["title"]."' onclick='delfunc(this)' >×</button><button class='edit_task' onclick='editfunc(this)' value='".$row["title"]."' >&#9999</button><button class='complete' value='".$row["title"]."' onclick='comfunc(this)'>✓</button></li>";
            }
            else{
              echo "<li class='checked' value='".$row["title"]."' class='mylist'>".$row["title"]."<button class='close' value='".$row["title"]."' onclick='delfunc(this)'>×</button><button class='edit_task' onclick='editfunc(this)' value='".$row["title"]."'>&#9999</button><button class='complete' value='".$row["title"]."' onclick='comfunc(this)'>✓</button></li>";
            }

            $_SESSION['u_id'] = $my_user_id;
          }
        }
        else{
          echo"<script type='text/javascript'>alert('No task found');</script>";
          }

          ?></li>
        
         </ul>

      </div> 
  </div>
</div>
</body>
</html>