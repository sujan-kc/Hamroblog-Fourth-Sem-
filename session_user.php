
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HamroBlog</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/all.css">
    <!-- Custom Style   -->
    <link rel="stylesheet" href="css/Style.css">
    <style>
        .News-footer{ position: relative; top: 0 ; margin:0; width: 100%; background-color: blue; display: inline-flex; overflow: hidden; white-space: nowrap; z-index:99; } .N-text { padding-top: 10px; vertical-align: middle; font-size: 25px; color: yellow; margin: 0; width:100%; animation: marquee 10s linear infinite; display: inline-block; padding-right: 10px; } .news{ height:auto; background-color:red; padding: 13px 30px 10px 30px; font-size:20px; color: white; z-index:9; display: block; } .news:after { content:&#39;&#39;; top:0; transform:translateX(100%); width:100%; height:220px; position: absolute; z-index:99; animation: slide 5s infinite;

         /* W3C */ filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=&#39;#00ffffff&#39;, endColorstr=&#39;#007db9e8&#39;,GradientType=1 ); /* IE6-9 */ } #news-head:before{position: absolute; content: ''; top:19px;left: 9px; display: inline-block;height: 10px; width: 10px;} @keyframes at-blink{from{opacity:0}to{opacity:1}} @keyframes slide { 0% {transform:translateX(-100%);} 100% {transform:translateX(100%);} } .t-link{color:inherit!important;list-style:none;}
        </style>

</head>

<body>
<!-- marquee tags falls here -->
<div class='News-footer'>
        <div class='news'>
          <span id='news-head'><b><?php echo date('d l M');?></b></span>
          </div>
       <p class='N-text'>
       <marquee direction='left'>
        <!-- <a class='t-link' href='#'>A talent without right platform and a platform without a right talent can never be the success. You are in exactly right place. This place is all about IT & Tech news. Happy Reading😊</a> -->
        <a class='t-link' href='#'>Spreading of IT and Tech related News all over the Nation. You are in exactly right place. This place is all about IT & Tech news. Happy Reading😊</a>
         </marquee>
       </p>
       </div>


    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
            
<a href="index.php"> <img class="logo" src="./admin/upload/news.png">
</a>
                <!-- <a href="index.php" class="text-gray" style="font-size:32px;"><span style="color:red">Hamro</span><span style="color:blue">Blog</span></a> -->
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="./admin/index.php">Dashboard</a>
                    </li>
                    <li class="nav-link">
                        <a href="#about">About</a>
                    </li>
                    <li class="nav-link">
                        <a href="developer.php">Developer</a>
                    </li>
                    <li class="nav-link">
                        <a href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-link">
                        <a href="book.php">Download Books</a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="User_logout.php">Log out</a>
                    </li>
                    <li class="nav-link"><i class="fa fa-bell" aria-hidden="true"></i></li>
                    <li class="nav-link">
                        <a href="#">Welcome User</a>
                        <!-- <a href="#"><p><?php echo $_SESSION["username"]."!"; ?></p></a> -->

                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-youtube"></i></a>
                <!-- Contact Number: +977-9819872129</a> -->
                

            </div>
        </div>
    </nav>



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
                                <span>
                                <a href="">

                                    <i class="fa fa-share" aria-hidden="true"></i></span>
                                </a>    
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
    <script src="js/Jquery3.4.1.min.js"></script>
    

    <!-- Custom Javascript file -->
    <script src="js/main.js"></script>
</body>

</html>
