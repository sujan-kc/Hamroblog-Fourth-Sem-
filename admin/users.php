<?php include('header.php');
?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="add-user.php" class="btn btn-big">Add Users</a>
                    <a href="users.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Manage Users</h2>
                    <?php
                  include "config.php"; // database configuration
                  $sql = "SELECT * FROM user ORDER BY user_id DESC";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                ?>
                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                        <?php
                          while($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                            <td class=":id"><?php echo $row['user_id'];?></td>
                              <td><?php echo $row['first_name'] . " ". $row['last_name']; ?></td>
                              <td><?php echo $row['username']; ?></td>
                              <td><?php
                                  if($row['role'] == 1){
                                    echo "Admin";
                                  }else{
                                    echo "Normal";
                                  }
                               ?>
                               
                                <td><a href='update-user.php?id=<?php echo $row["user_id"]; ?>' class="edit">edit</a></td>
                                <td><a href='delete-user.php?id=<?php echo $row["user_id"]; ?>' class="delete">delete</a></td>
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