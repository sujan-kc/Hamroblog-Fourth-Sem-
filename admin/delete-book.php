<?php
include('config.php');
$post_id=$_GET['id'];
$sql1="select * from book where b_id={$post_id}";
$result=mysqli_query($conn,$sql1) or die("failed query");
$row=mysqli_fetch_assoc($result);
unlink("upload/".$row['b_file']);


$sql="delete from book where b_id={$post_id}";
if(mysqli_query($conn,$sql)){
    header("Location:http://localhost/hbog/admin/book.php");
}
else{echo 'Query Failed';}
?>