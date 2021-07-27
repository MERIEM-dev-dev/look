<?php 
    $idCat=$_GET['id'];
    $mysqli = new mysqli('localhost','root','','look') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM produit WHERE ID_PRODUIT='$idCat'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="images/logo look.PNG" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <!-- script link-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Accueil.css">
    <link rel="stylesheet" href="Products.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="details.css">

    <!-- fontawesome cdn link -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <!-- header section starts  -->

    <header>

      <div id="menu-bar" class="fas fa-bars"></div>
  
      <a href="#" class="logo">L<span>oo</span>k</a>
  
      <nav class="navbar">
          <a href="#home">home</a>
          <a href="#services">services</a>
          <a href="#gallery">gallery</a>
          <div class="dropdown">
              <button class="dropbtn" onclick="myFunction()">catégories
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content" id="myDropdown">
                <a href="#">Optical Glasses</a>  
                <a href="#">SunGlasses</a>
                <a href="#">Last Trend</a>
              </div>
          </div> 
          <a href="#review">testemonial</a>
          <a href="#contact">contact</a>
      </nav>
  
      <div class="icons">
          <i class="fas fa-search" id="search-btn"></i>
          <i class="fas fa-user" id="login-btn"></i>
          <i class="fas fa-shopping-cart" <?php $go="SELECT * FROM addcard  "; $resultat=mysqli_query($mysqli,$go);$nbr=mysqli_num_rows($resultat); echo "<p>  <b> ".$nbr."</b> </p>";?>>p</i>
        
  
 
 

  
  

         
            
      </div>
  
  </header>

<!-- header section ends -->

<form>


<?php
     if(isset($_POST['addcard']))
     {
         
         $id=$_POST['id'];
      
        
         $reqAdd="INSERT INTO `addcard` (`ID_PRODUIT`) VALUES ('$id')";
    
   $resultat=mysqli_query($mysqli,$reqAdd);
   if($resultat){
     echo "<label style='text-align: center; color:#00F834;'>Add is successfully done!</label>";
                 }else{
     echo "<label style='text-align: center; color:#FF1301;'>Add failed!</label>";              }


          
     }
     ?>

<div class="form-group">
<label for="inputsm">id :</label>
<input class="form-control col-lg input-lg" name=""  id="inputsm" type="text" required>
</div>

<div class="form-group">

<input class="btn btn-warning " type="submit" name="addcard id" value="save" class="submit">
</div>




<!-- details section starts -->



<div class="container" id="back">
<div class="box-container">
    <?php while($row=$result->fetch_assoc()):?>
        <div class="box">
            <img src="<?php echo $row['img']?>" alt="">
            <div class="content">
                <h3><?php echo $row['NOM_PRODUIT']?></h3>
            </div>
            <p><?php echo $row['DESCRIPTION']?></p>
            <button type="button" id="Add to cart" name="addcard" class="btn btn-default cart">Add to cart</button>
        <button type="button" id="Remove" class="btn btn-default cart">Remove</button>
        </div>
    <?php endwhile;?>

    </div>

    </form>


    <!-- <div class="row">
        <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel   slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/lunettes-en-bois-enfant-play-black-13838227669062_large.jpg" class="d-block w-100" alt="First slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/lunettes-en-bois-enfant-play-pink-13838214332486_large.jpg" class="d-block w-100" alt="Second slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/lunettes-en-bois-enfant-summer-green-13838324236358_large.jpg" class="d-block w-100" alt="Third slide" id="details-img">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>

        </div>
    
        <div class="col-md-7">
        <p class="newarrival text-center">New</p>
        <h2 id="detail-title">wooden-glasses-child
        </h2>
        <p>Product Code:ISRC2018</p>
        <img src="./images/stars.png" alt="stars">
        <p id="price">USD $15.00</p>
        <p id="Availability"><b>Availability:</b> In Stock</p>
        <p id="Condition"><b>Condition:</b> New</p>
        <p id="Brand"><b>Brand:</b> THE WOOD STOCK Company</p>
        <p id="Discription"><b>Discription:</b> Thanks to their black frame and their brown wooden temples, the Play Black give this model a unique look.
        Wooden glasses have been in fashion for some timenow, because wood is a noble material that can beworn easily with all colors and materials. Thebrown color on this model allows the accessory toremain discreet and understated. </p>
        
        <label id="Quantity">Quantity:</label>
        <input type="text" value="1">
        <button type="button" id="Add to cart" class="btn btn-default cart">Add to cart</button>
        <button type="button" id="Remove" class="btn btn-default cart">Remove</button>
            
    </div>
    </div>

</div>


<div class="container" id="back">
    <div class="row">
        <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel   slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/photo1.jpg" class="d-block w-100" alt="First slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/photo2.jpg" class="d-block w-100" alt="Second slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/photo3.jpg" class="d-block w-100" alt="Third slide" id="details-img">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>

        </div>
    
        <div class="col-md-7">
        <p class="newarrival text-center">New</p>
        <h2 id="detail-title">wooden-glasses-man
        </h2>
        <p>Product Code:ISRC2018</p>
        <img src="./images/stars.png" alt="stars">
        <p id="price">USD $15.00</p>
        <p id="Availability"><b>Availability:</b> In Stock</p>
        <p id="Condition"><b>Condition:</b> New</p>
        <p id="Brand"><b>Brand:</b> THE WOOD STOCK Company</p>
        <p id="Discription"><b>Discription:</b> Thanks to their black frame and their brown wooden temples, the Play Black give this model a unique look.
        Wooden glasses have been in fashion for some timenow, because wood is a noble material that can beworn easily with all colors and materials. Thebrown color on this model allows the accessory toremain discreet and understated. </p>
        
        <label id="Quantity">Quantity:</label>
        <input type="text" value="1">
        <button type="button" class="btn btn-default cart">Add to cart</button>
        <button type="button" class="btn btn-default cart">Remove</button>
            
    </div>
    </div>

</div>

<div class="container" id="back">
    <div class="row">
        <div class="col-md-5">
        <div id="carouselExampleControls" class="carousel   slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./images/wholesale-shinu-high-quality-round-vintage.jpg" class="d-block w-100" alt="First slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/U9575c8acfc354035bff5df3a6c727e4ff.jpg_350x350.jpg" class="d-block w-100" alt="Second slide" id="details-img">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/2-1_84_1_436.jpg" class="d-block w-100" alt="Third slide" id="details-img">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
        </div>

        </div>
    
        <div class="col-md-7">
        <p class="newarrival text-center">New</p>
        <h2 id="detail-title">wooden-glasses-optical
        </h2>
        <p>Product Code:ISRC2018</p>
        <img src="./images/stars.png" alt="stars">
        <p id="price">USD $15.00</p>
        <p id="Availability"><b>Availability:</b> In Stock</p>
        <p id="Condition"><b>Condition:</b> New</p>
        <p id="Brand"><b>Brand:</b> THE WOOD STOCK Company</p>
        <p id="Discription"><b>Discription:</b> Thanks to their black frame and their brown wooden temples, the Play Black give this model a unique look.
        Wooden glasses have been in fashion for some timenow, because wood is a noble material that can beworn easily with all colors and materials. Thebrown color on this model allows the accessory toremain discreet and understated. </p>
        
        <label id="Quantity">Quantity:</label>
        <input type="text" value="1">
        <button type="button" class="btn btn-default cart">Add to cart</button>
        <button type="button" class="btn btn-default cart">Remove</button>
            
    </div>
    </div> -->

</div> 


<!-- details section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Look</h3>
            <p>Look Invites You To Discover Or Rediscover Essential And Original Sunglasses And Eyeglasses Models Revisited In Wood.</p>
        </div>
        <div class="box">
            <h3>Our partners</h3>
            <a href="#">THE WOOD STOCK</a>
            <a href="#">NORDIC WOOD</a>
            <a href="#">PSIR</a>
            <a href="#">verre2vue</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">categories</a>
            <a href="#">services</a>
            <a href="#">our products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="social">
            <h3 class="">follow us</h3>
            <ul>
                <li><i href="https://fr-fr.facebook.com/" class="fab fa-facebook-f"></i></li>
                <li><i href="https://twitter.com/?lang=fr" class="fab fa-twitter"></i></li>
                <li><i href="https://www.instagram.com/?hl=fr" class="fab fa-instagram"></i></li>
                <li><i href="https://www.linkedin.com/" class="fab fa-linkedin-in"></i></li>
            </ul>
        </div>
    </div>

    <h1 class="credit"> created by <span> mm. Ahouzi Meriem develloper </span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="app.js"></script>

</body>
</html>






