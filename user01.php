<?php
    include "functions.php";

    $no=1;
    $ambildata = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE 'admin'");
    $showdata = mysqli_fetch_array($ambildata);

	if(isset($_POST['addpoint'])) {
		$tbhPembelian = $_POST["tambahPembelian"];
		mysqli_query($conn, "UPDATE users SET points=5000 WHERE username LIKE 'supertest' SET points=5000");
	}

	
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Profile Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css" integrity="sha512-c93ifPoTvMdEJH/rKIcBx//AL1znq9+4/RmMGafI/vnTFe/dKwnn1uoeszE2zJBQTS1Ck5CqSBE+34ng2PthJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<!-- NAV -->
	<?php
	include 'log-nav.php';
?>

<div class="alert alert-success alert-dismissible fade show d-none sc-alert" role="alert">
  <strong>Data Berhasil Ditambahkan!</strong> Menunggu respon dari pihak admin.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<div class="user01bg">
<div class="p-5 mb-4  rounded-3 mx-auto text-center text-light">
      <div class="container-fluid py-5 text-center" style="text-align: center;">
        <h1 class="display-5 fw-bold">WELCOME, <?php echo $showdata['nama_depan']?> </h1>
        <p class="col-md-8 fs-4 text-center text-light mx-auto">Your Total Points is :</p>
		<p class="col-md-8 fs-4 text-center text-light mx-auto"><?php echo $showdata['points']?> Points</p>
		<br>
        <button class="btn btn-primary btn-lg rounded-pill" type="button" onclick="window.location='regform.php';" >Pelajari Lebih Lanjut</button>
      </div>
    </div>


<div class="" id="">
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" name="hydro-database-01">
				<span class="contact100-form-title">
					Data Pelanggan
				</span>



        <!-- <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Cari Username</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['username']?>" >
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    
    <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>

        <br> -->

				<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Username</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['username']?>" disabled>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['nama_depan'] , ' ', $showdata['nama_belakang']?>" disabled>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
	
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Email</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['nama_depan']?>" disabled>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
				
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Total Poin</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['points']?>" disabled>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <br>
    <hr>
    <br>
    <span class="contact100-form-title">
					Tambahkan Data
				</span>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="nama">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="jumlahpembelian">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Media Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="mediapembelian">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

        
        <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>	</div>
  
	<div style="padding-left: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
  <div class="row" >
	<h1 class="display-5 fw-bold  text-light">Tukarkan Poinmu! </h1>
 <div class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
         <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tree,nature" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 500</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">EXCLUSIVE GOLDBAR 0,25gr</a></h4>
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
     <div class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
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
  <div class="col-md-4"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80');">
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
</div>




	<div id="dropDownSelect1"></div>


	
	<script src="vendor/animsition/js/animsition.min.js"></script>
	
	
	<script src="vendor/select2/select2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

	<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxM4O8yISXP6QkbFBGrBV8zEVfdkEGalL4mMIcORNqKpVoYy6AB1zg1yhtgLMYsuO0/exec'
  const form = document.forms['hydro-database-01'];
  const successAlert = document.querySelector('.sc-alert');


  form.addEventListener('submit', e => {
    e.preventDefault()
	
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
		successAlert.classList.toggle('d-none'); 
		form.reset(); 
    window.scrollTo({ top: 0, behavior: 'smooth' });
		console.log('Success!', response)})
      .catch(error => console.error('Error!', error.message))
  })
</script>


 <!-- Footer -->
 <?php
    
    include 'main-footer.php';

    ?>
    <!-- Footer -->

</body>
</html>
