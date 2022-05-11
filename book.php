
<?php 
include('includes/header.php');

?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books Download</title>
  <style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  background: #fefefe;
  font-family: sans-serif;
}

.container {
  width: 90%;
  margin: 50px auto;
}
.heading {
  text-align: center;
  font-size: 30px;
  margin-bottom: 50px;
}

.row {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-flow: wrap;
}

.card {
  width: 20%;
  background: #fff;
  border: 1px solid #ccc;
  margin-bottom: 50px;
  transition: 0.3s;
}

.card-header {
  text-align: center;
  padding: 50px 10px;
  background: #006568;
}

.card-body {
  padding: 30px 20px;
  text-align: center;
  font-size: 18px;
}

.card-body .btn {
  display: block;
  color: #fff;
  text-align: center;
  background: linear-gradient(
120deg, #641972 0%, #002b3e 100%);
  margin-top: 30px;
  text-decoration: none;
  padding: 10px 5px;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.25);
}

@media screen and (max-width: 1000px) {
  .card {
    width: 40%;
  }
}

@media screen and (max-width: 620px) {
  .container {
    width: 100%;
  }

  .heading {
    padding: 20px;
    font-size: 20px;
  }

  .card {
    width: 80%;
  }
}

  </style>
</head>

<body>
  <div class="container">
    <div class="heading">
      <h1>Download Programming Books & Learn</h1>
    </div>
    
    <div class="row">
  
                                                  
    <?php
    include "admin/config.php"; // database configuration
                  $sql="select * from book";
                  $result = mysqli_query($conn, $sql) or die("Query Failed.");
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)) {

                ?>

      <div class="card">
             <div class="card-header">

          <h1><?php echo $row['b_name'];?></h1>
        </div>
        <div class="card-body">
          <p>
          <?php echo $row['b_description'];?></p>
          <a href="admin/upload/<?php echo $row['b_file'];?>" class="btn">Download</a>
        </div>
        
      </div>
      <?php }
      }?>
    </div>
    
  </div>
  <?php 
     include('includes/footer.php');

    ?>
    <!-- Jquery Library file -->
    <script src="./js/Jquery3.4.1.min.js"></script>
    

    <!-- Custom Javascript file -->
    <script src="./js/main.js"></script>
</body>

</html>
