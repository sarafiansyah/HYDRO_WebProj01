<?php 
session_start();
require 'functions.php';
verifyCookie();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/style.css">
    <script src="js/scripts.js"></script>

    <title>HYDRO.com</title>
    </head>
    <body>
        <!-- NAV -->
        <?php
            include 'main-nav.php';
        ?>

  <!-- JUMBOTRON-->
  <div class="container-fluid">
<section class="">

  <div class="row" >
  <div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 3px;" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cf.shopee.co.id/file/56dc50b6e74e7e4cce26534d647ff27a" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cf.shopee.co.id/file/e3bfe9dc1072965da6f8b316dcfa6259" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>

  <!-- CARD LINE 1-->

<div class="row cardsizing" style="padding-top: 50px; padding-bottom: 20px;">
<h3 class="display-5 fw-bold">Tukarkan Poinmu! </h3>
 <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1624365169364-0640dd10e180?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&H=900');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1624365169364-0640dd10e180?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 500</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">EXCLUSIVE GOLDBAR 0,25gr</a></h4>
           <small><i class="far fa-clock"></i> End : July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
    <a href="https://wa.me/089668796550?text=Hallo%20kak%2C%0ASaya%20mau%20tukar%20poin%20hydrogel%20dengan%20GoldBar%200%2C25%20gr%20nih%20" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1624365168785-c65be9114821?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 1000</small>
            <h4 class="card-title mt-0 "><a class="text-white">EXCLUSIVE GOLDBAR 0,5gr</a></h4>
           <small><i class="far fa-clock"></i> End : July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
    <a href="https://wa.me/089668796550?text=Hallo%20kak%2C%0ASaya%20mau%20tukar%20poin%20hydrogel%20dengan%20GoldBar%200%2C5%20gr%20nih%20" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
  <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 2000</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">EXCLUSIVE GOLDBAR 1,0gr</a></h4>
           <small><i class="far fa-clock"></i> End : July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
  <a href="https://wa.me/089668796550?text=Hallo%20kak%2C%0ASaya%20mau%20tukar%20poin%20hydrogel%20dengan%20GoldBar%201%2C0%20gr%20nih%20" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
  
</div>
  
  <!-- CARD LINE 2 -->

<div class="row cardsizing" style="padding-top: 0px; padding-bottom: 50px;">

 <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 500</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">EXCLUSIVE GOLDBAR 0,25gr</a></h4>
           <small><i class="far fa-clock"></i> July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle cardsizing" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-white d-block">Reedem Now</h6>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 1000</small>
            <h4 class="card-title mt-0 "><a class="text-white">EXCLUSIVE GOLDBAR 0,5gr</a></h4>
           <small><i class="far fa-clock"></i> July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-white d-block">Reedem Now</h6>
  </div>
</div>
          </div>
        </div>
      </div></div>
  <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 2000</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">EXCLUSIVE GOLDBAR 1,0gr</a></h4>
           <small><i class="far fa-clock"></i> July 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="max-width:50px">
  <div class="media-body">
    <h6 class="my-0 text-white d-block">Reedem Now</h6>
  </div>
</div>
          </div>
        </div>
      </div></div>
  
</div>

</div>
</section>

 

    <!-- Footer -->
    <?php
    
    include 'main-footer.php';

    ?>
    <!-- Footer -->

 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
    <script>
      AOS.init();

      function logswitcher() {
      window.location.href="regform.php";

      var element = document.getElementById("signuppage");
      element.classList.remove("switched");
      var element = document.getElementById("superswitch");
      element.classList.add("active");
    }
    </script>

 
    </body>




</html>