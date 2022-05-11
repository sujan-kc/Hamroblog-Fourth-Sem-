<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                                        <a href="books.php" class="btn btn-big">Manage Books</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add New Book</h2>

                    <form action="save-book.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Book Name</label>
                            <input type="text" name="title" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="body" id="body"></textarea>
                        </div>
                        <div>
                            <label>File</label>
                            <input type="file" name="image" class="text-input">
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