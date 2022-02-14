<?php

require 'functions.php';

if(isset($_POST['register'])) {
  if(registration($_POST) > 0){
    echo "<script>
          alert('User baru berhasil');
          </script>";
  }
}
else {
  echo mysqli_error($conn);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet"  href="css/styles.css">
    <script src="js/scripts.js"></script>

    <title>HYDRO.com</title>
    </head>
    <body>
        <!-- NAV -->
        <?php
            include 'main-nav.php';
        ?>



<div class="container">
    <section id="formHolder">
 
       <div class="row">
 
          <!-- Brand Box -->
          <div class="col-sm-6 brand">
             <a href="#" class="logo">MR <span>.</span></a>
 
             <div class="heading">
                <h2>HYDRO</h2>
                <p>Your Right Choice</p>
             </div>
 
             <div class="success-msg">
                <p>Great! You are one of our members now</p>
                <a href="#" class="profile">Your Profile</a>
             </div>
          </div>
 
 
          <!-- Form Box -->
          <div class="col-sm-6 form">
 
             <!-- Login Form -->
             <div class="login form-peice switched">
                <form class="" action="#" method="post">
                   <div class="form-group"  style="color: black;">
                   <h3>Login</h3>
                      <label for="loginemail">Email Adderss</label>
                      <input type="email" name="loginemail" id="loginemail" required>
                   </div>
 
                   <div class="form-group"  style="color: black;">
                      <label for="loginPassword">Password</label>
                      <input type="password" name="loginPassword" id="loginPassword" required>
                   </div>
 
                   <div class="CTA">
                      <input type="submit" value="Login">
                      <a href="#" class="switch">I'm New</a>
                   </div>
                </form>
             </div><!-- End Login Form -->
 
 
             <!-- Signup Form -->
             <div class="signup form-peice">
                <form class="" action="#" method="post">
 
                   <div class="form-group" style="color: black;">
                     <h3>Sign Up</h3>
                      <label for="username" >Username</label>
                      <input type="text" name="username" id="username" class="">
                      <span class="error"></span>
                   </div>
 
                   <!--<div class="form-group">
                      <label for="email">Email Adderss</label>
                      <input type="email" name="emailAdress" id="email" class="email">
                      <span class="error"></span>
                   </div>-->
 
                   <!--<div class="form-group">
                      <label for="phone">Phone Number - <small>Optional</small></label>
                      <input type="text" name="phone" id="phone">
                   </div>-->
 
                   <div class="form-group" style="color: black;">
                      <label for="password">Password</label>
                      <input type="password" name="password" id="password" class="">
                      <span class="error"></span>
                   </div>
 
                   <div class="form-group" style="color: black;">
                      <label for="passwordCon">Confirm Password</label>
                      <input type="password" name="password2" id="password2" class="">
                      <span class="error"></span>
                   </div>
 
                   <div class="CTA">
                   <input type="submit" name="register" id="register" value="Sign Up">
                   
                      <a href="#" class="switch" style="color: black;">I have an account</a>
                   </div>
                </form>
             </div><!-- End Signup Form -->
          </div>
       </div>
 
    </section>
 
 
    
 
 </div>
 

    <!-- Footer -->
    <?php
    
    include 'main-footer.php';

    ?>
    <!-- Footer -->

 
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
    <script>
      AOS.init();
    </script>

 
    </body>




</html>