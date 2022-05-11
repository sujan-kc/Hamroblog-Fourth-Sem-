<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HamroBlog</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/Style.css">
    <!-- developer profile stylesheet -->
    <link rel="stylesheet" href="./css/developer.css">
    <style>
        .News-footer{ position: relative; top: 0 ; margin:0; width: 100%; background-color: blue; display: inline-flex; overflow: hidden; white-space: nowrap; z-index:99; } .N-text { padding-top: 10px; vertical-align: middle; font-size: 25px; color: yellow; margin: 0; width:100%; animation: marquee 10s linear infinite; display: inline-block; padding-right: 10px; } .news{ height:auto; background-color:red; padding: 13px 30px 10px 30px; font-size:20px; color: white; z-index:9; display: block; } .news:after { content:&#39;&#39;; top:0; transform:translateX(100%); width:100%; height:220px; position: absolute; z-index:99; animation: slide 5s infinite;

         /* W3C */ filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=&#39;#00ffffff&#39;, endColorstr=&#39;#007db9e8&#39;,GradientType=1 ); /* IE6-9 */ } #news-head:before{position: absolute; content: ''; top:19px;left: 9px; display: inline-block;height: 10px; width: 10px;} @keyframes at-blink{from{opacity:0}to{opacity:1}} @keyframes slide { 0% {transform:translateX(-100%);} 100% {transform:translateX(100%);} } .t-link{color:inherit!important;list-style:none;}
        </style>
        <style>
.nav .toggle-collapse .toggle-icons i {
    margin-top: 16px;
    font-size: 3.4rem;
    color: var(--text-gray);
} 

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
                </ul>
            </div>
            <div class="social text-gray">
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100004500587678" target="_blank"><i class="fab fa-youtube"></i></a>
                Contact Number: +977-9819872129</a>
                

            </div>
        </div>
    </nav>

    
<div class="container">


<h1 class="heading"> Developer Profile </h1>

<!-- developer section  -->

<section class="developer">

    <div class="box">
        <img src="images/narayan.jpg" alt="">
        <h3>Narayan Shah</h3>
        <span>Developer</span>
    
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
           </div>
    </div>
    <div class="box">
        <img src="images/bharat.jpg" alt="">
        <h3>Bharat Rajbanshi</h3>
        <span>Developer</span>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            </div>
    </div>

    

    <div class="box">
        <img src="images/mahesh.jpg" alt="">
        <h3>Mahesh Katwal</h3>
        <span>Developer</span>
      <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
           </div>
    </div>

    <div class="box">
        <div class="bir"><img src="images/bir.jpg" alt="">
        <h3>Bir Tajpuriya</h3>
        <span>Developer</span>
       <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
           </div>
        </div>
    </div>

</section>


</div>















<!-- custom js file link -->
  <!-- Jquery Library file -->
  <script src="./js/Jquery3.4.1.min.js"></script>
    

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>


</body>
</html>