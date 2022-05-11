
<?php
       include 'includes/header.php';
       ?>
       <?php
error_reporting(0);


       include 'admin/config.php';
       if(isset($_POST['submit'])){
        include 'admin/config.php';
    
        $fname =$_POST['fname'];
        $lname = $_POST['lname'];
        $user = $_POST['user'];
        $password =$_POST['password'];
    
        $sql="INSERT INTO visitor(first_name,last_name, user_name,password) VALUES ('{$fname}','{$lname}','{$user}','{$password}')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: http://localhost/project/admin/");

              }else{
            echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
          }

      }
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
      
  </style>

<title>UserLogin</title>
</head>

<body>

<div class="auth-content">

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
First Name
<input type="text" name="fname" class="text-input"><br><br>
Last Name 
<input type="text" name="lname" class="text-input"><br><br>
Username
<input type="text" name="user" class="text-input"><br><br>
Password 
<input type="text" name="password" class="text-input"><br><br>
<input type="submit" name="submit" value="Submit" class="btn btn-big"> 

 



</div>
</body>
</html>
