

<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
  <div class="container-fluid ">
  <a class="navbar-brand" href="#"><i class="fa fa-tint" aria-hidden="true"></i> <strong> HYDRO</strong>web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user01.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-gift" aria-hidden="true"></i> Rewards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> E-Commerce</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>

    <div class="btn-group" >
  <button type="button" class="btn  dropdown-toggle dropleft text-light" data-bs-toggle="dropdown" aria-expanded="false">
  <img class="mr-3 rounded-circle" src="https://cdn0.iconfinder.com/data/icons/user-pictures/100/male-512.png" alt="Generic placeholder image" style="width: 25px; height: 25px; margin-right: 10px;">
     
<?php echo $showdata['nama_depan']?>

  </button>
  <ul class="dropdown-menu dropdown-menu-lg-right" >
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Feedback</a></li>
    <li><a class="dropdown-item" href="#">Something</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item text-danger" href="logout.php">Log Out</a></li>
  </ul>
</div>


    </div>
  </div>
</nav>