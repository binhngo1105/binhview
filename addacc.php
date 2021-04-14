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
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form>
