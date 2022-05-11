<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Add Post</a> -->
                    <a href="books.php" class="btn btn-big">Manage Books</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Editing Book Details</h2>
                    <?php
         include "config.php"; // database configuration
         $post_id=$_GET['id'];
         $sql="select * from book where b_id={$post_id}";
         $result = mysqli_query($conn, $sql) or die("Query Failed.");
         if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)) {
       ?>

                    <form action="save-editbook.php" method="post" enctype="multipart/form-data">
                        <div>
                            
                            <input type="hidden" name="post_id" class="text-input"  value="<?php echo $row['b_id']; ?>" placeholder="">
                        </div>
                        <div>
                            <label>Book Name</label>
                            <input type="text" name="title" class="text-input" value="<?php echo $row['b_name']; ?>">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="body" id="body">
                            <?php echo $row['b_description']; ?>
                            </textarea>
                        </div>
                        <div>
                            <label>File</label>
                            <input type="file" name="new-image" class="text-input">
                            <?php echo $row['b_file']; ?>
                <input type="hidden" name="old-image" value="<?php echo $row['b_file'];?>"> 
              
                        </div>
                        
                        <div>
                            <button type="submit" name="submit" class="btn btn-big">Update Details</button>
                        </div>
                    </form>
                    <?php
            }
        }
        ?>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



       
        <?php include('footer.php');
        ?>