
<?php
       include 'includes/header.php';


    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="admin/css/style.css">
  <style>
      .user_login a{
        margin-left: 230px;
    border: 1px solid black;
}
      }
  </style>

<title>UserLogin</title>
</head>

<body>

<div class="auth-content">

<form action="session_user.php" method="POST">
Username
<input type="text" name="email" class="text-input"><br><br>
Password 
<input type="text" name="password" class="text-input"><br><br>
<input type="submit" name="submit" value="Login" class="btn btn-big"> 
<div class="user_login"><a href="user_registration.php">Registration !</a></div>

<?php 
if(isset($_POST['submit'])){
    include "admin/config.php";
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    
    
    $query="select * from visitor where user_name='$email' && password='$pwd'";
    
    $data=mysqli_query($conn,$query) or die("Query Failed.");

    if(mysqli_num_rows($data) > 0){

      while($row = mysqli_fetch_assoc($data)){
        
          session_start();
          $_SESSION["username"] = $row['user_name'];
          $_SESSION["user_id"] = $row['id'];

          header("Location:http://localhost/project/");
        }

      }else{
      echo '<div>Username and Password are not matched.</div>';
    }



}
?>

 



</div>

<?php
       include 'admin/footer.php';
    ?>
