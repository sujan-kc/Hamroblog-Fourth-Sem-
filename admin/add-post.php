<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Add Post</a> -->
                    <a href="post.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Adding New Posts</h2>

                    <form action="save-post.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Title</label>
                            <!-- <input type="text" name="title" class="text-input"> -->
                            <input type="text" name="post_title" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="postdesc" id="body"></textarea>
                        </div>
                       
                        <div>
                            <label>Category</label>
                            <select name="category" class="text-input">
                            <option disabled selected> Select Category</option>
                                <!-- <option value="Poetry">Poetry</option>
                                <option value="Life Lessons">Life Lessons</option> -->
                           
                                <?php
                                include "config.php";
                                $sql = "SELECT * FROM category";

                                $result = mysqli_query($conn, $sql) or die("Query Failed.");

                                if(mysqli_num_rows($result) > 0){
                                  while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                  }
                                }
                              ?>
                            </select>
                        </div>
                        <div>
                            <label>Author Name</label>
                            <input type="text" name="author" class="text-input">
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="fileToUpload" class="text-input">
                        </div>
                        <div>
                            <button type="submit" name="submit" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



       <?php
       include('footer.php');
       ?>