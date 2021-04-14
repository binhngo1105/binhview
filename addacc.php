<?php 
include("connect.php");
  if (isset($_POST['add'])){ 
    $user = $_POST['user'];
    $password= $_POST['password'];
    $sql = " insert into login values ($user, $password)";
    $q = pg_query($dbconn, $sql);
    if($q){
      header('location: index.php');
    }
    else {
     echo " Loi "   ;
    }
?>
