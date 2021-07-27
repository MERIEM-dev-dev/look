<?php 
    $idCat=$_GET['idCat'];
    $mysqli = new mysqli('localhost','root','','look') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM produit WHERE ID_CATEGORIE like '$idCat'")or die ($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
            <i class="fas fa-shopping-cart"></i>
        </div>
    
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    
    </header>

<!-- header section ends -->
</body>

<!-- gallery section starts  -->

<section class="gallery" id="gallery">
<br>
<br>
<br>
<br>
<br>
    <div class="box-container">
    <?php while($row=$result->fetch_assoc()):?>
        <div class="box">
            <img src="<?php echo $row['img']?>" alt="">
            <div class="content">
                <h3><?php echo $row['NOM_PRODUIT']?></h3>
            
                <a href="details.php?id=<?php echo $row['ID_PRODUIT']?>" class="btn">see more</a>
            </div>
        </div>
    <?php endwhile;?>

    </div>

</section>

<!-- gallery section ends -->

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
                <li><i class="fab fa-facebook-f"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-linkedin-in"></i></li>
            </ul>
        </div>
        

    </div>

    <h1 class="credit"> created by <span> mm. Ahouzi Meriem develloper </span> | all rights reserved! </h1>

</section>

<!-- footer section ends -->
<script src="app.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>