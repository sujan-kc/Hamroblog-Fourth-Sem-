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
                        if(isset($_GET['id'])){
                        $cat_id=$_GET['id'];}
                 $sql=mysqli_query($conn,"select post_id,title,description,category,author,post_img,category_id,category_name from post left outer join category on(post.category=category.category_id) where category_id={$cat_id}") or die("Failed Query");
                 if(mysqli_num_rows($sql)>0){
                while($row=mysqli_fetch_array($sql)){
                       
                      ?>
                        <div class="post-image">
                            <div>
                            <a href='single.php?id=<?php echo $row['post_id']; ?>'><img src="admin/upload/<?php echo $row['post_img'];?>" class="img" alt=""></a>
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Author: <?php echo $row['author']; ?> </span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;Category: <?php echo $row['category_name']; ?></span>
                            </div>
                        </div>
                        <div class="post-title">
                        <a href='single.php?id=<?php echo $row['post_id']; ?>'><h3><?php echo $row['title']; ?></h3></a>
                            <p><?php echo substr($row['description'],0,130) ."...."; ?> </p>
                            <a href='single.php?id=<?php echo $row['post_id']; ?>'><button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button></a> 
                        </div>
                        <?php }
                 }
                 else{echo ' <div class="pagination flex-row">
                    
                    <a href="#" class="pages">Sorry Sir/Mam, No result found. You can check out other post<span><a href="index.php">Click Here</a></span></a>
                    
                    
                </div>
                    ';}
                         ?>
                        <!-- php ends here -->
                    </div>
                    <hr>
                
                <!-- This is for Pagination -->
                    <!-- <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="#" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="#"><i class="fas fa-chevron-right"></i></a>
                    </div> -->
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <!-- php is here -->
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

                                <a href='category.php?id=<?php echo $row['category_id']; ?>'><?php echo $row['category_name']; ?></a>
                                <!-- <span>(05)</span> -->
                            </li>
                             
                        </ul>
                       <!-- php ends here -->
                       <?php } 
                       }?>
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