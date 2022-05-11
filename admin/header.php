<?php
  include "config.php";
  session_start();

  if(!isset($_SESSION["username"])){
    header("Location: http://localhost/project/admin/");
  }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        


        <!-- Custom Styling -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/font.css">
        <!-- <link rel="stylesheet" href="css/fontawesome.css"> -->

        <!-- Admin Styling -->
        <link rel="stylesheet" href="css/admin.css">

        <title>Admin Section - Manage Posts</title>
    </head>

    <body>
        <header>
            <div class="logo">
                <h1 class="user"> Hello <?php echo $_SESSION["username"]."!"; ?></h1>
                <h1 class="logo-text">
                <a href="../index.php">   
                <span>Welcome</span>To<span>Dashboard</span>👓</h1>
                </a> 
            </div>
        </header>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="index.php">Manage Posts</a></li>
                    <li><a href="category.php">Manage Category</a></li>
                    <li><a href="book.php">Manage Books</a></li>
                    <li><a href="users.php">Manage Users</a></li>
                    <li><a href="../index.php">Back To HamroBlog</a></li>
                    <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>