<?php 
include("connect.php");
  if (isset($_POST['add'])){ 
    $user = $_POST['user'];
    $password= $_POST['password'];
    $sql = " insert into login  values ($user, $password)";
    $q = pg_query($dbconn, $sql);
    if($q){
      header('location: index.php');
    }
    else {
     echo " Loi "   ;
    }
    
?>
<form method = "POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="user" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="password" value="Doe"><br><br>
  <input value= " ADD " name = "add"> 
</form>
 
