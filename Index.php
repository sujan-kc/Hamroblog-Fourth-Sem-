<?php 
include('includes/header.php');

?>
    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content">
                    <?php
                 include('admin/config.php');

 /* Calculate Offset Code */
 $limit = 2;
 if(isset($_GET['page'])){
   $page = $_GET['page'];
 }else{
   $page = 1;
 }
 $offset = ($page - 1) * $limit;


                 $sql=mysqli_query($conn,"select * from post join category where post.category=category.category_id order by post.post_id desc limit {$offset},{$limit}");
                 if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql)){
                        ?>
                        <div class="post-image">
                            <div>
                            <a href='single.php?id=<?php echo $row['post_id']; ?>'><img src="admin/upload/<?php echo $row['post_img'];?>" class="img" alt=""></a>
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Author: <?php echo $row['author']; ?> </span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Category: <?php echo $row['category_name']; ?> </span>
                            </div>
                        </div>
                        <div class="post-title">
                        <a href='single.php?id=<?php echo $row['post_id']; ?>'><h3><?php echo $row['title']; ?></h3></a>
                            <p><?php echo substr($row['description'],0,250) ."...."; ?> </p>
                            <a href='single.php?id=<?php echo $row['post_id']; ?>'><button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a> 
                        </div>
                            <?php } 
                        }?>
                    </div>
                    <hr>
                    
                    <div class="pagination flex-row">
                        <?php  
                        $sql1 = "SELECT * FROM post";
                        $result1 = mysqli_query($conn, $sql1) or die("Query Failed.");

                        if(mysqli_num_rows($result1) > 0){

                          $total_records = mysqli_num_rows($result1);

                          $total_page = ceil($total_records / $limit);

                        //echo'<a href="#"><i class="fas fa-chevron-left"></i></a>';
                        if($page > 1){
                            echo '<a href="index.php?page='.($page - 1).'" class="pages">Previous</a>';
                          }
                          for($i = 1; $i <= $total_page; $i++){
                            echo '<a href="index.php?page='.$i.'" class="pages">'.$i.'</a>';}

                            if($total_page > $page){
                                echo '<a href="index.php?page='.($page + 1).'" class="pages">Next</a>';
                              }
                        
                       ?>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <?php
                        include('admin/config.php');
                       if(isset($_GET['id'])){
                        $cat_id=$_GET['id'];}
                 $sql=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($sql)){
                       
                      ?>

                        <ul class="category-list">
                        
                            <li class="list-items">

                                <a href='category.php?id=<?php echo $row['category_id']; ?>'><?php echo $row['category_name']; ?></a>
                                <!-- <span>(05)</span> -->
                            </li>
                             
                        </ul>
                        <?php }
                         }else{
                            echo "<h2>No Result Found</h2>"; }?>
                    </div>
                     <div class="popular-post">
                        <h2>Other Posts</h2>
                        <div class="post-content">
                        <?php
                 include('admin/config.php');
                 $sql=mysqli_query($conn,"select * from post join category where post.category=category.category_id");
                 if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_assoc($sql)){
                    ?>

                            <div class="post-image">
                                <div>
                                <a href='single.php?id=<?php echo $row['post_id']; ?>'><img src="admin/upload/<?php echo $row['post_img'];?>" class="img" alt=""></a>
                                
                                </div>
                                
                            </div>
                            <div class="post-title">
                            <a href='single.php?id=<?php echo $row['post_id']; ?>'><h3><?php echo $row['title']; ?></h3></a>
                            </div>
                                <?php }
                            }?>
                        </div> 
                      
                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag">Software</span>
                            <span class="tag">technology</span>
                            <span class="tag">project</span>
                            <span class="tag">BCA</span>
                            <span class="tag">Information Technology</span>
                            <span class="tag">ICT Mela</span>
                            <span class="tag">IT Gyan</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


    <!-- --------------------------- Footer ---------------------------------------- -->
    <?php 
     include('includes/footer.php');

    ?>
    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>
    

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>