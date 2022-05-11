<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $title = $_POST['post_title'];
    $description = $_POST['postdesc'];
    $category = $_POST['category'];
    $date = date("d M, Y");
    $author=$_POST['author'];
    $file=$_FILES['fileToUpload']['name'];


    // this is for extension validation
    $allowed_extension= array('gif','png','jpg','jpeg','pdf');
    $filename=$_FILES['fileToUpload']['name'];
    $file_extension= pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension, $allowed_extension))
    {?>
    <script>
  alert("File Extension must be match to image.");
</script>
    <?php  
      header("Location:http://localhost/project/admin/post.php");
    }


else{
    $sql = "INSERT INTO post(title,description,category,post_date,author,post_img)
          VALUES('$title','$description',$category,'$date','$author','$file')";
          $result=mysqli_query($conn,$sql);
          if($result){
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"upload/".$_FILES["fileToUpload"]["name"]);
        
            header("Location:http://localhost/project/admin/post.php");
          }else{
            echo"Query failed";
          } 
        }
      }

      ?>




   