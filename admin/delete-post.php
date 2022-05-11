<?php
include('config.php');
$post_id=$_GET['id'];
$cat_id=$_GET['cid'];
$sql1="select * from post where post_id={$post_id}";
$result=mysqli_query($conn,$sql1) or die("failed query");
$row=mysqli_fetch_assoc($result);
unlink("upload/".$row['post_img']);


$sql="delete from post where post_id={$post_id}";
if(mysqli_query($conn,$sql)){
    header("Location:http://localhost/project/admin/post.php");
}
else{echo 'Query Failed';}
?>