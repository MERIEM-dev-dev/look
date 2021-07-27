<?php 
    $mysqli = new mysqli('localhost','root','','look') or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM categorie")or die ($mysqli->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Just take it</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="images/logo look.PNG" />

    <!-- font awesome cdn link  -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
  </body>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Accueil.css">
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
                <a href="Products.php">Optical Glasses</a>  
                <a href="Products.php">SunGlasses</a>
                <a href="Products.php">Last Trend</a>
            </div>
        </div> 
        <a href="#review">testemonial</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-user" id="login-btn"></i>
        <i class="fas fa-shopping-cart"></i>
    </div>


</header>

<!-- header section ends -->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="enter your password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
    </form>

</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>New look this year</h3>
        <p>Look invites you to discover or rediscover essential and original sunglasses and eyeglasses models revisited in wood. Between creation and innovation, Look is becoming the benchmark for wooden glasses in France and at the best value for money. Look is therefore a brand full of love, wood and craftsmanship. and all that, in your glasses!</p>
        <a href="#" class="btn">Read more</a>
    </div>

    <div class="video-container">
        <video src="images/LUNETTE.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>
<br>



<!-- home section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>c</span>
        <span>a</span>
        <span>t</span>
        <span>e</span>
        <span>g</span>
        <span>o</span>
        <span>r</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <br>
    <div class="box-container">
        <?php 
            while($row=$result->fetch_assoc()):
        ?>
        <div class="box">
            <a href="Products.php?idCat=<?php echo $row['ID_CATEGORIE']; ?>">
            <img src="<?php echo $row['img']?>" alt=""></a>
        </div>
        <?php endwhile; ?>
    </div>

</section>
<br>
<!-- packages section ends -->

<!-- services section starts  -->
<br>
<section class="services" id="services">

    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-truck"></i>
            <h3>Delivery Services</h3>
            
        </div>
        <div class="box">
            <i class="fas fa-exchange-alt"></i>
            <h3>Shipping & Returns</h3>
          
        </div>
        <div class="box">
            <i class="fas fa-percentage"></i>
            <h3>Promotion</h3>
        </div>
        <div class="box">
            <i class="fas fa-user"></i>
            <h3>24 Hours Service</h3>
        </div>

    </div>

</section>
<br>
<!-- services section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>p</span>
        <span>r</span>
        <span>o</span>
        <span>d</span> 
        <span>u</span>
        <span>c</span>
        <span>t</span>
        <span>s</span>
    </h1>
<br>
    <div class="box-container">

        <div class="box">
            <img src="images/lunettes-en-bois-enfant-play-black-13838227669062_large.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/lunettes-en-bois-enfant-play-pink-13838214332486_large.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/lunettes-en-bois-enfant-summer-green-13838324236358_large.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/photo1.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/photo2.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/photo3.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/wholesale-shinu-high-quality-round-vintage.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/U9575c8acfc354035bff5df3a6c727e4ff.jpg_350x350.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="images/2-1_84_1_436.jpg" alt="">
            <div class="content">
                <h3>Comfortable glasses</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                <a href="details.php" class="btn">see more</a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->
<br>
<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>t</span>
        <span>e</span>
        <span>s</span>
        <span>t</span>
        <span>e</span>
        <span>m</span>
        <span>o</span>
        <span>n</span>
        <span>i</span>
        <span>a</span>
        <span>l</span>
    </h1>
    <br>
    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/ulule100.QuSjRhgDbffB.jpg" alt="">

                    <h3>Emma</h3>
                    <p> Lunettes au top ! Légères et stylées
                        Conforme aux attentes, Lunette très agréable et très jolie. Elles sont excrément légères.
                    </p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/bose frames lunettes de soleil.jpg" alt="">
                    <h3>Sophia</h3>
                    <p>Delighted, in line with my expectations, serious site, great glasses, light, very good anti-UV index, nice case, I highly recommend to buy it.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/Einstoffenlunettesfemmeenboispng_5abc0197cc45a.png" alt="">
                    <h3>Luna</h3>
                    <p>Super hull, it's really pretty and original. In addition the finishes are neat and the black return on the sides protects the eyes very well !!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/lunettes-soleil-bois-femme_e1e2510d-dd7b-4499-a0b6-7e23a129a6c4_large.png" alt="">
                    <h3>Emily</h3>
                    <p>Delighted, in line with my expectations, serious site, superb glasses, light, very good Anti uv index, nice case, I strongly recommend to buy it</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/background contact us 2.png" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  starts-->

<section class="brand-container">

    <div class="swiper-container brand-slider">
    <h1 class="heading">
        <span>o</span>
        <span>u</span>
        <span>r</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>r</span>
        <span>t</span>
        <span>n</span>
        <span>e</span>
        <span>r</span>
        <span>s</span>
    </h1>
<br>
    
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/partenaire 1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/partenaire 2.png" alt=""></div>
            <div class="swiper-slide"><img src="images/partenaire 3-.png" alt=""></div>
            <div class="swiper-slide"><img src="images/partenaire 5.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- brand section  ends-->
<br>
<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Look</h3>
            <p>Look Invites You To Discover Or Rediscover Essential And Original Sunglasses And Eyeglasses Models Revisited In Wood.</p>
        </div>
        <div class="box">
            <h3>Our partners</h3>
            <a href="https://the-wood-stock.com/">THE WOOD STOCK</a>
            <a href="https://www.nordicwoodstore.com/">NORDIC WOOD</a>
            <a href="https://psir.fr/">PSIR</a>
            <a href="https://www.verre2vue.com/">verre2vue</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#categories">categories</a>
            <a href="#services">services</a>
            <a href="#our products">our products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
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

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="app.js"></script>

</body>
</html>