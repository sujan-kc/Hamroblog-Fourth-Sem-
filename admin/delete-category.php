<?php
include('config.php');
$post_id=$_GET['id'];
$sql1="select * from category where category_id={$post_id}";
$result=mysqli_query($conn,$sql1) or die("failed query");
$row=mysqli_fetch_assoc($result);


$sql="delete from category where category_id={$post_id}";
if(mysqli_query($conn,$sql)){
    header("Location:http://localhost/project/admin/category.php");
}
else{echo 'Query Failed';}
?>