<?php 
include("connect.php");
  if (isset($_POST['add'])){ 
    $user = $_POST['user'];
    $password= $_POST['password'];
    $sql = " insert into login(username,pass) values('$user', '$password')";
    $q = pg_query($dbconn, $sql);
    if($q){
      header('location: index.php');
    }
    else {
     echo " Loi "   ;
    }
  }
    
?>
<form method = "POST">
  <label for="fname">username:</label><br>
  <input type="text" id="fname" name="user"><br>
  <label for="lname">Password:</label><br>
  <input type="text" id="lname" name="password"><br><br>
  <button value= " ADD " name = "add">THem DDeeeeee/button>
</form>
 
