<?php include "header.php"; 

if(isset($_POST['save'])){
    include "config.php";
  
    $fname =$_POST['fname'];
    $lname = $_POST['lname'];
    $user = $_POST['user'];
    $password =$_POST['password'];
    // $password =mysqli_real_escape_string($conn,md5($_POST['password']));
    //$pass="new password";
   // $str_pass=password_hash($password,PASSWORD_BCRYPT);
  //$pass_check=password_verify($password,$str_pass);



    $role = $_POST['role'];
  
    $sql = "SELECT username FROM user WHERE username = '{$user}'";
  
    $result = mysqli_query($conn, $sql) or die("Query Failed.");
  
    if(mysqli_num_rows($result) > 0){
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>UserName already Exists.</p>";
    }else{
      $sql1 = "INSERT INTO user (first_name,last_name, username, password, role)
                VALUES ('{$fname}','{$lname}','{$user}','{$password}','{$role}')";
      if(mysqli_query($conn,$sql1)){
        header("Location:http://localhost/project/admin/users.php");
      }else{
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
      }
    }
  }
  ?>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-big">Add Post</a> -->
                    <a href="users.php" class="btn btn-big">Manage Users</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Add New User</h2>

                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                        <div>
                            <label>First Name</label>
                            <input type="text" name="fname" class="text-input">
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="lname" class="text-input">
                        </div>
                        <div>
                            <label>User Name</label>
                            <input type="text" name="user" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="text" name="password" class="text-input">
                        </div>
                        <div>
                            <label>User Role</label>
                            <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                            <!-- <input type="text" name="title" class="text-input"> -->
                        </div>
                        
                        <div>
                            <button type="submit" name="save" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



       
<?php include('footer.php');
        ?>