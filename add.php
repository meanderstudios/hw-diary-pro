<?php
  session_start();
  if($_SESSION['user']){
    }
    else{
       header("location:index.php");
    }
    $con = mysqli_connect('localhost', 'root', 'bob123$$bob', 'hw');
  	if (!$con)
  	{
  		die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
  	}
    $task = mysqli_real_escape_string($con, $_POST['task']);
    $time  =
 ?>
