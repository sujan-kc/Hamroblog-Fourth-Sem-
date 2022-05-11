<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="add-post.php" class="btn btn-big">Add Post</a>
                    <a href="post.php" class="btn btn-big">Manage Posts</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>
                    <?php
                  include "config.php"; // database configuration
                  $sql="select * from post join category where post.category=category.category_id";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Image</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                              <td><?php echo $row['post_id'];?></td>
                              <td><?php echo substr ($row['title'],0,30); ?></td>
                              <td><?php echo substr($row['description'],0,45) ."...";?></td>
                              <td><?php echo $row['category_name']; ?></td>
                              <td><?php echo $row['post_date']; ?></td>
                              <td><?php echo $row['author']; ?></td>
                              <td><img src="upload/<?php echo $row['post_img'];?>" width="100" height="50" alt=""></td>

                              <td><a href='update-post.php?id=<?php echo $row['post_id']; ?>' class="edit">edit</a></td>
                                <td><a href='delete-post.php?id=<?php echo $row['post_id']; ?>&catid=<?php echo $row['category']; ?>' class="delete">delete</a></td>
                          </tr>
                          <?php }?>


                            
                            
                        
                        </tbody>
                    </table>
                    <?php }?>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <?php include('footer.php');
        ?>