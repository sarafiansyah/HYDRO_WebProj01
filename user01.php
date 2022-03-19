



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
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

</head>
<body>

	<!-- NAV -->
	<?php
	include 'main-nav.php';
?>

<div class="alert alert-success alert-dismissible fade show d-none sc-alert" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" name="hydro-database-01">
				<span class="contact100-form-title">
					Data Pelanggan
				</span>

<?php
    include "functions.php";

    $no=1;
    $ambildata = mysqli_query($conn, "SELECT * FROM users WHERE username LIKE 'admin'");
    $showdata = mysqli_fetch_array($ambildata);
    
    ?>

				<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['username']?>" disabled>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Total Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['total_pembelian']?>" disabled>
    </div>

				
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Total Poin</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $showdata['points']?>" disabled>
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Tambahkan Pembelian</label>
      <input type="text" id="disabledTextInput" class="form-control" name="tambahPembelian" id="tambahPembelian" placeholder="Masukan jumlah pembelian..." >
    </div>

				<div class="container-contact100-form-btn" name="addpoint" id="addpoint">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" type="submit">
							<span>
								Tambah Poin
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
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
