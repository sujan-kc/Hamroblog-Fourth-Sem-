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
                 $post_id=$_GET['id'];
                 if(isset($_GET['id'])){
                    $cat_id=$_GET['id'];
                    }
                 
                 $sql="select * from post join category where post.category=category.category_id AND post_id={$post_id}";
                 $result = mysqli_query($conn, $sql) or die("Query Failed.");
                 if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {
               
                        ?>
                        <div class="post-image">
                            <div>
                            <img src="admin/upload/<?php echo $row['post_img'];?>" class="img" alt="">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Author:-<?php echo $row['author']; ?> </span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Category: <?php echo $row['category_name']; ?></span>
                            </div>
                        </div>
                        <div class="post-title">
                        <h3><?php echo $row['title']; ?></h3>
                            <p><?php echo $row['description']; ?> </p>
                            
                        </div>
                        <?php }
                        }else{
                            echo "<h2>No Result Found</h2>";
                        }?>
                    </div>
                    <hr>
                    
                    <div class="pagination flex-row">
                       
                        <a href="index.php" class="pages">Read More Related Posts</a>
                        
                     
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <?php
                        include('admin/config.php');
                        if(isset($_GET['id'])){
                            $cat_id=$_GET['id'];}
                 $sql=mysqli_query($conn,"select * from category") or die("Failed Query");
                 if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_array($sql)){
                       
                      ?>

                        <ul class="category-list">
                        
                            <li class="list-items">

                                <a href="#"><?php echo $row['category_name']; ?></a>
                                <!-- <span>(05)</span> -->
                            </li>
                             
                        </ul>
                        <?php } }?>
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
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $row['post_date']; ?></span>
                                </div>
                                
                            </div>
                            <div class="post-title">
                                <a href="single.php?id=<?php echo $row['post_id']; ?>"><h3><?php echo $row['title']; ?></h3></a>
                            </div>

                            
                                <?php }
                            }?>
                        </div>

                        
                      
                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag">Software</span>
                            <span class="tag">technology</span>
                            <span class="tag">travel</span>
                            <span class="tag">illustration</span>
                            <span class="tag">design</span>
                            <span class="tag">lifestyle</span>
                            <span class="tag">project</span>
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