<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Add Post</a> -->
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Editing the Posts</h2>
                    <?php
         include "config.php"; // database configuration
         $post_id=$_GET['id'];
         $sql="select * from post where post_id={$post_id}";
         $result = mysqli_query($conn, $sql) or die("Query Failed.");
         if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
       ?>

                    <form action="save-updatepost.php" method="post" enctype="multipart/form-data">
                    <div>
                <input type="hidden" name="post_id"  class="text-input" value="<?php echo $row['post_id']; ?>" placeholder="">
            </div>    
                    
                    <div>
                            <label>Title</label>
                            <!-- <input type="text" name="title" class="text-input"> -->
                            <input type="text" name="post_title" class="text-input" value="<?php echo $row['title']; ?>">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="postdesc" id="body"> <?php echo $row['description']; ?></textarea>
                        </div>
                       
                        <div>
                            <label>Category</label>
                            <select name="category" class="text-input">
                            <option disabled selected> Select Category</option>
                                <!-- <option value="Poetry">Poetry</option>
                                <option value="Life Lessons">Life Lessons</option> -->
                                <?php
                    include "config.php";
                    $sql1 = "SELECT * FROM category";
                    $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");
                    if(mysqli_num_rows($result1) > 0){
                      while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['category'] == $row1['category_id']){
                          $select = "selected";
                        }else{
                          $select= "";
                        }
                        echo "<option {$select} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
                      }
                    }
                  ?>
                            </select>
                        </div>
                        <div>
                            <label>Author Name</label>
                            <input type="text" name="author" value="<?php echo $row['author']; ?>" class="text-input">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="new-image" class="text-input">
                            <!-- <?php echo $row['post_img']; ?> -->
                <img src="upload/<?php echo $row['post_img'];?>" width="200" height="150" alt="">
                <input type="hidden" name="old-image" value="<?php echo $row['post_img'];?>"> 
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-big">Update Post</button>
                        </div>
                    </form>
                    <?php } 
                        }
                    ?>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <?php
        include('footer.php');
        ?>