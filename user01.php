<?php
  include "functions.php";
  session_start();
  verifyCookie();

  if(!isset($_SESSION['username'])){
    header('Location: index.php');
    return;
  }

  $no=1;
  $username = $_SESSION['username'];
  $showdata = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'"));

	if(isset($_POST['addpoint'])) {
		$tbhPembelian = $_POST["tambahPembelian"];
		mysqli_query($conn, "UPDATE users SET points=5000 WHERE username LIKE 'supertest' SET points=5000");
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>HYDROweb</title>
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
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="nama" value="<?php echo $showdata['nama_depan'] , ' ', $showdata['nama_belakang']?> ">
      <div id="emailHelp" class="form-text">Masukan Nama lengkap anda</div>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">No. Invoice</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="noinvoice">
      <div id="emailHelp" class="form-text">Contoh IN/123/123.</div>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="jumlahpembelian">
      <div id="emailHelp" class="form-text">Contoh: 2 barang</div>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Media Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="mediapembelian">
      <div id="emailHelp" class="form-text">Contoh: Tokopedia/Shopee/Langsung</div>
    </div>
    <div class="mb-3 d-none">
      <label for="disabledTextInput" class="form-label">Time</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="waktupembelian" value="<?php
date_default_timezone_set("Asia/Jakarta");
echo date("H:i:s");
?> " >
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3 d-none">
      <label for="disabledTextInput" class="form-label">Date</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="" name="tanggalpembelian" value="<?php
date_default_timezone_set("Asia/Jakarta");
echo date("d:m:Y");
?> " >
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

        
        <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn submitBtn" type="submit" name="addpoint">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
        <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn loadingBtn d-none" type="submit" name="addpoint">
							<span>
								Harap Tunggu  
                <div class="spinner-border spinner-border-sm" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
								
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>	</div>
  
	<div style="padding-left: 50px; padding-right: 50px; padding-top: 50px; padding-bottom: 50px;">
  <div class="row" >
  <div class="row cardsizing" style="padding-top: 50px; padding-bottom: 20px;">
<h3 class="display-5 fw-bold text-light">Tukarkan Poinmu! </h3>
 <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://images.unsplash.com/photo-1624365169364-0640dd10e180?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&H=900');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1624365169364-0640dd10e180?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 1000</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">XIAOMI Mi BAND 4</a></h4>
           <small><i class="far fa-clock"></i> End : October 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
    <a href="https://wa.me/6282260123235?text=Hallo%20kak%2C%20%0ASaya%20mau%20tukar%201000%20poin%20dengan%20reward%20nih%20%3AD%0ATerimakasih%20kak" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
     <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?tree,nature');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1624365168785-c65be9114821?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8Z29sZCUyMGJhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 2500</small>
            <h4 class="card-title mt-0 "><a class="text-white">XIAOMMI REDMI 10C</a></h4>
           <small><i class="far fa-clock"></i> End : October 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
    <a href="https://wa.me/6282260123235?text=Hallo%20kak%2C%20%0ASaya%20mau%20tukar%202500%20poin%20dengan%20reward%20nih%20%3AD%0ATerimakasih%20kak" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
  <div class="col-md-4 cardsizing"><div class="card text-white card-has-bg click-col" style="background-image:url('https://source.unsplash.com/600x900/?computer,design');">
         <img class="card-img d-none" src="https://images.unsplash.com/photo-1610375461369-d613b564f4c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
        <div class="card-img-overlay d-flex flex-column">
         <div class="card-body">
            <small class="card-meta mb-2">POIN NEEDED : 5000</small>
            <h4 class="card-title mt-0 "><a class="text-white" herf="#">XIAOMI REDMI NOTE 11</a></h4>
           <small><i class="far fa-clock"></i> End : October 1, 2022</small>
          </div>
          <div class="card-footer">
           <div class="media">
  <div class="media-body">
  <a href="https://wa.me/6282260123235?text=Hallo%20kak%2C%20%0ASaya%20mau%20tukar%205000%20poin%20dengan%20reward%20nih%20%3AD%0ATerimakasih%20kak" class="btn btn-primary btn-lg rounded-pill">Reedem Now</a>
  </div>
</div>
          </div>
        </div>
      </div></div>
  
</div>
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
  const scriptURL = 'https://script.google.com/macros/s/AKfycbzx0CAWWbUuekgo2wU93Oq2lz8HjO3DiZqokz-hZljv_e5mkhlLjT7_UmyAENjF_TjB/exec'
  const form = document.forms['hydro-database-01'];
  const successAlert = document.querySelector('.sc-alert');
  const submitBtn = document.querySelector('.submitBtn');
  const loadingBtn = document.querySelector('.loadingBtn');


  form.addEventListener('submit', e => {
    e.preventDefault()
    submitBtn.classList.toggle('d-none')
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then((response) => {
		successAlert.classList.toggle('d-none'); 

    loadingBtn.classList.toggle('d-none'); 
    submitBtn.classList.toggle('d-none')
    
		form.reset(); 
    window.scrollTo({ top: 0, behavior: 'smooth' });
		console.log('Success!', response)})
    
    loadingBtn.classList.toggle('d-none') 
 
    
      .catch(error => console.error('Error!', error.message))
  })

  function loading() {
  var x = document.getElementById("loadingbtn");
  x.style.display = "none";
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>


 <!-- Footer -->
 <?php
    
    include 'main-footer.php';

    ?>
    <!-- Footer -->

</body>
</html>
