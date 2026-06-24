<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
      <iframe src="https://giphy.com/embed/L1R1tvI9svkIWwpVYr" width="480" height="271" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></p>

      </div>
      
      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hello Everyone! 🌟 We are Group 7, embarking on an exciting journey in the realm of Computer Science, under the course code COM2303. Our adventure takes shape as we dive into the Web Design Group Project at the Faculty of Applied Science, Rajarata University of Sri Lanka.</p>

         <p>This project has been a great learning experience, allowing us to apply our knowledge and skills in solving real-world problems. Our team is dedicated to delivering innovative solutions and exploring new ideas throughout the development process.  </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.avif" alt="">
         <p>"I've been using the services of this mobile phone shop for quite some time now, and I’ve never encountered any issues with the quality of their products. Their online e-products are working great as well! My only concern is that deliveries often happen when I’m a bit busy, even though I’ve set a preferred delivery time. Other than that, everything has been excellent!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/profile.php?id=100083292714419" target="_blank">Kasun Prabath</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.avif" alt="">
         <p>"RUSLMobile.lk is the first online service in Srilanka that I can completely trust. I often unbox my purchases while recording a video, and if anything goes wrong, I can instantly file a complaint. Sometimes, I don’t even need to return the item for a refund! They take customer satisfaction seriously,  which is why their platform continues to improve day by day."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/profile.php?id=100075602340579" target="_blank">Mahesh Lakshan</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.avif" alt="">
         <p>"I had a fantastic experience shopping at RUSLMobile.lk! The selection of mobile phones and accessories is impressive, with a variety of options to choose from. I appreciate their commitment to quality and customer satisfaction. I highly recommend RUSLMobile.lk to anyone looking for reliable products and excellent service!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/kaushalsah135790" target="_blank">Nadini Darmarathne</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.avif" alt="">
         <p>"I've been shopping at RUSLMobile.lk for almost three years now, and my experience has been outstanding! The variety of mobile phones and accessories they offer is impressive.The option for pickup point delivery with zero shipping charges is a major plus, saving me both time and money. Highly recommend RUSLMobile.lk for all your mobile needs!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/fuccheekta.moh.1" target="_blank">Piyal Gunasekara</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.jpeg" alt="">
         <p>"I have been using the services of RUSLMobile.lk for the past two years. Their return policy adds an extra layer of confidence and peace of mind; if the product doesn't meet your expectations or if there’s any fault, you can return it within seven days of delivery. This commitment to customer satisfaction makes shopping with RUSLMobile.lk a stress-free experience. Highly recommend!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/ranjitchaudhary159" target="_blank">Ranjit Rupasinghe</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.avif" alt="">
         <p>"RUSLMobile.lk is fantastic! I've ordered numerous products from this shop, and I've never faced any issues. The prices are competitive, and the service is top-notch. I’m truly impressed with the variety of mobile phones and accessories available. I will definitely keep shopping at RUSLMobile.lk for all my mobile needs!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/pra.x.nil"  target="_blank">Sanduni Lakshani</a></h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>