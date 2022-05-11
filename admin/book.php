<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="add-book.php" class="btn btn-big">Add Books</a>
                    <a href="book.php" class="btn btn-big">Manage Books</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Books</h2>
                    <?php
                  include "config.php"; // database configuration
                  $sql="select * from book";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>file Name</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) {
                            ?>
                          
                            <tr>
                            <td><?php echo $row['b_id'];?></td>
                              <td><?php echo $row['b_name'];?></td>
                              <td><?php echo substr($row['b_description'],0,90);?></td>
                              <td><?php echo $row['b_file'];?></td>
                              <!-- <td class='edit'><a href='edit-book.php?id=<?php echo $row['b_id']; ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'>
                              <a href='delete-book.php?id=<?php echo $row['b_id']; ?>'><i class='fa fa-trash-o'></i></a>
                              </td> -->

                                <td><a href='edit-book.php?id=<?php echo $row['b_id']; ?>' class="edit">edit</a></td>
                                <td><a href='delete-book.php?id=<?php echo $row['b_id']; ?>' class="delete">delete</a></td>
                                <!-- <td><a href="#" class="publish">publish</a></td> -->
                            </tr>
                           <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                        }
                        ?>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



       <?php
include 'footer.php';
       ?>