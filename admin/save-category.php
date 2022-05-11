

<?php
  include "config.php";
  if(isset($_POST['submit'])){
    $title = $_POST['category'];

    $sql = "INSERT INTO category(category_name)
          VALUES('$title')";
          $result=mysqli_query($conn,$sql);
          if($result){
                        header("Location:http://localhost/project/admin/category.php");
          }else{
            echo"Query failed";
          } 
        
      }

      ?>




   