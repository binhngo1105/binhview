<?php
$host = "ec2-54-161-239-198.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d85gnlj8j0mcj0";
$user = "dfvybslkroicec";
$password = "5fbc0949cb42473725fecfacf19b0e03e91b0bbda4160be46e1acab02a7f4e93"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(!$dbconn){
    echo "loi";
}
    $sql = "select * from login";
    $q = pg_query($dbconn, $sql);

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = pg_query($dbconn, "DELETE FROM login WHERE login_id = $id");
    if($query){
        header("location:index.php);
    }

}
    
       
?>

<table style="width:100%">
  <tr>
    <th>Username</th>
    <th>Password</th>
    <th>Action</th>
  </tr>
  <tr>
      <?php
        while($row = pg_fetch_array($q)){      
      ?>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["pass"] ?></td>
            <td><a href= "index.php?del=$row["login_id"]"></td>
      <?php } ?>

  </tr>
      
</table>
