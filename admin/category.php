<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="add-category.php" class="btn btn-big">Add Category</a>
                    <a href="category.php" class="btn btn-big">Manage Category</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Category</h2>
                    <?php
                  include "config.php"; // database configuration
                  $sql="select * from category";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Category Name</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><?php echo $row['category_id'];?></td>
                                <td><?php echo $row['category_name'];?></td>
                                <td><a href='delete-category.php?id=<?php echo $row['category_id']; ?>' class="delete">delete</a></td>
                                                           </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                    <?php } ?>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



      <?php
       include 'footer.php';
    ?>