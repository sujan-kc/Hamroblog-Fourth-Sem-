<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $post_id=$_POST['post_id'];
    $title = $_POST['title'];
    $description = $_POST['body'];
    $new_image=$_FILES['new-image']['name'];
    $old_image=$_POST['old-image'];

    if($new_image!="")
    {
      $update_filename=$_FILES['new-image']['name'];
    }else{
      $update_filename=$old_image;  

    }


    // this is for extension validation
    


    $sql = "UPDATE book SET b_name='$title',b_description='$description',b_file='$update_filename' where b_id='$post_id' ";
          $result=mysqli_query($conn,$sql);
          if($result){
            if($_FILES['new-image']['name']!=""){
            move_uploaded_file($_FILES["new-image"]["tmp_name"],"upload/".$_FILES["new-image"]["name"]);
        unlink("upload/".$old_image);}
      
            header("Location:http://localhost/project/admin/book.php");
          }
          else{
            echo"Query failed";
          } 
      
    }

      ?>
