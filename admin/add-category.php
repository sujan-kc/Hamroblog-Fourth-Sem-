<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Add Post</a> -->
                    <a href="category.php" class="btn btn-big">Manage Category</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Adding New Category</h2>

                    <form action="save-category.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Category Name</label>
                            <input type="text" name="category" class="text-input">
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



       
        <?php include('footer.php');
        ?>