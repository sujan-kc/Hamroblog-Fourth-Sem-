<?php
include "config.php";
$userid = $_GET['id'];

$sql = "DELETE FROM user WHERE user_id = {$userid}";

if(mysqli_query($conn, $sql)){
  header("Location: http://localhost/project/admin/users.php");
}else{
  echo "<p style='color:red;margin: 10px 0;'>Can't Delete the User Record.</p>";
}

mysqli_close($conn);

?>