<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $post_id=$_POST['post_id'];
    $title = $_POST['post_title'];
    $description = $_POST['postdesc'];
    $category = $_POST['category'];
    $author=$_POST['author'];
    $new_image=$_FILES['new-image']['name'];
    $old_image=$_POST['old-image'];

    if($new_image!="")
    {
      $update_filename=$_FILES['new-image']['name'];
    }else{
      $update_filename=$old_image;  

    }


    // this is for extension validation
    


    $sql = "UPDATE post SET title='$title',description='$description',category='$category',author='$author',post_img='$update_filename' where post_id='$post_id' ";
          $result=mysqli_query($conn,$sql);
          if($result){
            if($_FILES['new-image']['name']!=""){
            move_uploaded_file($_FILES["new-image"]["tmp_name"],"upload/".$_FILES["new-image"]["name"]);
        unlink("upload/".$old_image);}
      
            header("Location:http://localhost/project/admin/post.php");
          }
          else{
            echo"Query failed";
          } 
      
    }

      ?>




   