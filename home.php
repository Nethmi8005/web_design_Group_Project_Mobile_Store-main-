<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>RUSLMobile.lk</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/abc.png" alt="">
         </div>
         <div class="content">
            <span>Upto 20% Off</span>
            <h3>Latest Iphones</h3>
            <a href="category.php?category=iphone" class="btn">Shop Now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/abc-2.png" alt="">
         </div>
         <div class="content">
            <span>Upto 15% off</span>
            <h3>Latest Samsung</h3>
            <a href="category.php?category=Samsung" class="btn">Shop Now.</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="images/abc-3.png" alt="">
         </div>
         <div class="content">
            <span>upto 20% off</span>
            <h3>Latest Google Pixel</h3>
            <a href="shop.php?category=Pixel" class="btn">Shop Now.</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">Shop by Mobile Phone Category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=iphone" class="swiper-slide slide">
      <img src="images/icon-01.png" alt="">
      <h3>Apple iphone</h3>
   </a>

   <a href="category.php?category=pixel" class="swiper-slide slide">
      <img src="images/icon-02.png" alt="">
      <h3>Google Pixel</h3>
   </a>

   <a href="category.php?category=samsung" class="swiper-slide slide">
      <img src="images/icon-03.png" alt="">
      <h3>Samsung</h3>
   </a>

   <a href="category.php?category=xiomi" class="swiper-slide slide">
      <img src="images/icon-04.png" alt="">
      <h3>Xiaomi</h3>
   </a>

   <a href="category.php?category=oneplus" class="swiper-slide slide">
      <img src="images/icon-05.png" alt="">
      <h3>OnePlus</h3>
   </a>

   <a href="category.php?category=oppo" class="swiper-slide slide">
      <img src="images/icon-06.png" alt="">
      <h3>Oppo</h3>
   </a>

   <a href="category.php?category=sony" class="swiper-slide slide">
      <img src="images/icon-07.png" alt="">
      <h3>Sony</h3>
   </a>

   <a href="category.php?category=motorola" class="swiper-slide slide">
      <img src="images/icon-08.png" alt="">
      <h3>Motorola</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<section class="home-products">

   <h1 class="heading">Latest products</h1>
<!-- Latest products START -->
   <section class="latest">

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=iphone" class="swiper-slide slide">
      <img src="images/p1.png" alt="">
      <h2 style="color: red;">15% Off</h2>
      <h3>iPhone 16 Pro Max</h3>
   </a>

   <a href="category.php?category=pixel" class="swiper-slide slide">
      <img src="images/p2.png" alt="">
      <h2 style="color: red;">10% Off</h2>
      <h3>Google Pixel</h3>
   </a>

   <a href="category.php?category=samsung" class="swiper-slide slide">
      <img src="images/p3.png" alt="">
      <h2 style="color: red;">10% Off</h2>
      <h3>Samsung s24 ultra</h3>
   </a>

   <a href="category.php?category=redmi" class="swiper-slide slide">
      <img src="images/p4.png" alt="">
      <h2 style="color: red;">5% Off</h2>
      <h3>Redmi Note 14 Pro</h3>
   </a>

   <a href="category.php?category=oneplus" class="swiper-slide slide">
      <img src="images/p5.png" alt="">
      <h2 style="color: red;">10% Off</h2>
      <h3>Oneplus nord 4</h3>
   </a>

   <a href="category.php?category=oppo" class="swiper-slide slide">
      <img src="images/p6.png" alt="">
      <h2 style="color: red;">5% Off</h2>
      <h3>Oppo Find N</h3>
   </a>

   <a href="category.php?category=sony" class="swiper-slide slide">
      <img src="images/p7.png" alt="">
      <h2 style="color: red;">10% Off</h2>
      <h3>Sony Xperia 5</h3>
   </a>

   <a href="category.php?category=moto" class="swiper-slide slide">
      <img src="images/p8.png" alt="">
      <h2 style="color: red;">20% Off</h2>
      <h3>Moto G Stylus 5g</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>
<!-- Latest products END -->

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>LKR.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
  <?php
      }
   }else{
      echo '';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>