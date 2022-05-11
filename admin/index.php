<?php
include("config.php");
session_start();

if(isset($_SESSION["username"])){
  header("Location:http://localhost/project/admin/post.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">

<title>Login</title>
</head>

<body>

<div class="auth-content">
  <div class="col-md">
                        <img class="logo" src="upload/news.png">
                        </div>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
Username
<input type="text" name="email" class="text-input"><br><br>
Password 
<input type="text" name="password" class="text-input"><br><br>
<input type="submit" name="submit" value="Login" class="btn btn-big"><br><br>
 


<?php 
if(isset($_POST['submit'])){
    include "config.php";
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    // $pwd=md5($_POST['password']);
    
    
    $query="select * from user where username='$email' && password='$pwd'";
    
    $data=mysqli_query($conn,$query) or die("Query Failed.");

    if(mysqli_num_rows($data) > 0){

      while($row = mysqli_fetch_assoc($data)){
        
          session_start();
          $_SESSION["username"] = $row['username'];
          $_SESSION["user_id"] = $row['user_id'];
          $_SESSION["user_role"] = $row['role'];

          header("Location:http://localhost/project/admin/post.php");
        }

      }else{
      echo '<div>Username and Password are not matched.</div>';
    }



}
?>
</div>

<?php
       include 'footer.php';
    ?>
