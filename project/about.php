<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content" style="text-align: center;">
         <h3 style="font-weight: bold;">Cosrx believes</h3>
         <p>COSRX believes that <b>cosmetics should give more than just outward beauty.</b> We are devoted to enabling individuals 
            to find solutions according to their personal skin conditions. We strive to help our customers to gain self-confidence, 
            and ultimately to find their own unique beauty inside.</p>
         <p>Since 2002 and finally, <b>“Cosmetics + RX(Prescription) = COSRX”</b> was founded <b>in 2013.</b></p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="about">

   <div class="flex">

   <div class="content" style="text-align: center;">
         <h3 style="font-weight: bold;">Our ingredients</h3>
         <p>We create <b><i>prescriptions Free from</i></b> Parabens, Artificial fragrances, Artificial dyes, Alcohol, Mineral Oils, Essential Oils&more. 
            Also we keep it mind <b><i>“No Snails are Harmed”.</i></b></p>
         <p>The mind to consider those ingredients is contained in our products, finally <b><i>communicated to our customers.</i></b></p>
      </div>

      <div class="image">
         <img src="images/about2.webp" alt="">
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This is so much better for my skin than the products I’ve used on my acne before! Super easy to use, you can’t even feel when you’re wearing them.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>OK, I absolutely love this product! We can start off by addressing the obvious which is that it’s a product made from snail mucin. Yes it sounds weird but hey, it works!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lindsay M.</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I love this cream. The goopiness of the formula feels nostalgic to me. I love how easily it glides over my face and how soft my skin feels afterwards.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Timothy L.</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I think this time of year is the best time to put these products to the test and without hesitation I say this brand is great when it comes to lip care.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Klorissa</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Absolutely love this sunscreen, please keep it available. Your product works wonders on oily skin and keeps my face protected without it running into my eyes and burning.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aleandro</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I really loved this cream. It is pretty slimy in texture, but if you can get passed that, I highly recommend it. It leaves your skin feeling so hydrated and glowing.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bianca</h3>
      </div>

   </div>

</section>

<section>

</section>


<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>