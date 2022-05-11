<?php include "header.php";
if(isset($_POST['submit'])){
    include "config.php";
    $userid =$_POST['user_id'];
    $fname =$_POST['f_name'];
    $lname =$_POST['l_name'];
    $user = $_POST['username'];
    $role =$_POST['role'];
  
    $sql = "UPDATE user SET first_name = '{$fname}', last_name = '{$lname}', username = '{$user}', role = '{$role}' WHERE user_id = {$userid}";
  
      if(mysqli_query($conn,$sql)){
          ?>
          <script>alert('Updaation is done');</script>
          <?php
        header("Location: http://localhost/project/admin/users.php");
      }
  }
  ?>
   
  <!-- Admin Content -->
  <div class="admin-content">
      <div class="button-group">
       
          <a href="users.php" class="btn btn-big">Manage Users</a>
      </div>


      <div class="content">

          <h2 class="page-title">Add New User</h2>
          <?php
                include "config.php";
                $user_id = $_GET['id'];
                $sql = "SELECT * FROM user WHERE user_id = {$user_id}";
                $result = mysqli_query($conn, $sql) or die("Query Failed.");
                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                ?>
          <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
              <div>
                  
                  <input type="hidden" name="user_id" class="text-input" value="<?php echo $row['user_id'];  ?>">
              </div>
              <div>
                  <label>First Name</label>
                  <input type="text" name="f_name" value="<?php echo $row['first_name'];  ?>"  class="text-input">
              </div>
              <div>
                  <label>Last Name</label>
                  <input type="text" name="l_name" value="<?php echo $row['last_name'];  ?>" class="text-input">
              </div>
              <div>
                  <label>User Name</label>
                  <input type="text" name="username" value="<?php echo $row['username'];  ?>" class="text-input">
              </div>
        
              <div>
                  <label>User Role</label>
                  <select class="form-control" name="role" value="<?php echo $row['role']; ?>" >
                  <?php 
                             if($row['role'] == 1){
                                echo "<option value='0'>normal User</option>
                                      <option value='1' selected>Admin</option>";
                              }else{
                                echo "<option value='0' selected>normal User</option>
                                      <option value='1'>Admin</option>";
                              }
                             ?> 
                  <!-- <option value="0">Normal User</option>
                    <option value="1">Admin</option> -->
                </select>
                  <!-- <input type="text" name="title" class="text-input"> -->
              </div>
              
              <div>
                  <button type="submit" name="submit" class="btn btn-big">Update</button>
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