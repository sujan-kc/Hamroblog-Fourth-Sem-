<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['body'];
    $file=$_FILES['image']['name'];


    // this is for extension validation
    $allowed_extension= array('pdf');
    $filename=$_FILES['image']['name'];
    $file_extension= pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension, $allowed_extension))
    {?>
    <script>
  alert("File Extension must be match to pdf.");
</script>
    <?php  
      header("Location:http://localhost/project/admin/book.php");
    }


else{
    $sql = "INSERT INTO book(b_name,b_description,b_file)
          VALUES('$title','$description','$file')";
          $result=mysqli_query($conn,$sql);
          if($result){
            move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$_FILES["image"]["name"]);
        
            header("Location:http://localhost/project/admin/book.php");
          }else{
            echo"Query failed";
          } 
        }
      }

      ?>




   






