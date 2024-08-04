<?php

@include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css" src="style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

        <div class="image">
            <img src="images/about-img.jpg" alt="img">
        </div>

        <div class="content" style="text-align: justify;">
            <span><h3>Welcome to our shop</h3></span>
            <h3>Fresh and organic groceries</h3>
            <p>
                At Our Shop, we believe in the power of fresh, organic food to nourish and sustain a healthy lifestyle. Our selection is carefully curated to offer you a variety of high-quality groceries that support your well-being.
We work directly with local farmers and trusted suppliers to bring you the freshest produce and pantry items. Our goal is to make healthy eating accessible and enjoyable for everyone.
Visit us today and experience the difference that fresh and organic can make!
            </p>
        </div>
</section>

<section class="reviews">
   

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p style="text-align:justify">Groco solves your dietary woes! They boast a wide variety of organic, gluten-free, and vegan options, plus handy filters to find exactly what you need.</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">4.5</i>
         </div>
         <h3>John deo</h3>
      </div>

      <div class="box" >
         <img src="images/pic-2.png" alt="">
         <p style="text-align:justify">
         Groco's online grocery shopping is a game-changer!  I can browse, compare prices, and order from my couch, ditching the crowds and long lines</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">4.8</i>
         </div>
         <h3>Ava</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p style="text-align:justify">Groco fixes missing items fast! Online chat resolved my issue, offered a discount, all with friendly service.No More Fighting Crowds Or Waiting In Long Lines!</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">5.0</i>
         </div>
         <h3>Oliver</h3>
</div>
      <div class="box" style="width=40px;height=30px; ">
         <img src="images/pic-4.png" alt="">
         <p style="text-align:justify">Groco's customer service impressed me! I had a missing item, but their online chat team responded quickly, fixed the issue on the spot.</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">4.9</i>
         </div>
         <h3>Isabella</h3>
      </div>

      <div class="box" style="max-width:400px;max-height:600px;">
         <img src="images/pic-5.png" alt="">
         <p style="text-align:justify">Groco's delivery is top-notch! Insulated bags keep your groceries fresh, sturdy boxes prevent damage, and flexible time slots ensure convenient arrival.</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">5.0</i>
         </div>
         <h3>Lucifer</h3>
      </div>

      <div class="box" style="max-width:400px;max-height:600px;">
         <img src="images/pic-6.png" alt="">
         <p style="text-align:justify">Their app is fantastic! I can easily create shopping lists, reorder my favorite items, and track my deliveries all in one place. It makes grocery shopping a breeze!</p>
         <div class="stars" style=" border-radius: 25px;background-color:green;">
            <i class="fas fa-star" style="color:white;">4.7</i>
         </div>
         <h3>Maya</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>