<?php
include ('functions.php');

if (isset($_POST["edit"])) {
    $username = $_POST["username"];
    $points = $_POST["points"];

    $sql = "UPDATE users SET points='$points' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('New data added')</script>";
  
} 
else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>User Edit Panel</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                    
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];
                                        
                                        $query = "SELECT * FROM users WHERE username='$stud_id' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                    <div class="form-group mb-3">
                                                    <label for="">Username</label>
                                                    <input type="text" value="<?= $row['username']; ?>" class="form-control" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['nama_depan']; ?>" class="form-control" name="nama_depan" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" value="<?= $row['nama_belakang']; ?>" class="form-control" name="nama_belakang" disabled>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Points</label>
                                                    <input type="text" value="<?= $row['points']; ?>" class="form-control" disabled>
                                                </div>
                                                <hr>
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="POST">
                        <div class="form-group mb-3">
            <label for="formGroupExampleInput">Username : </label>
            <input type="text" class="form-control" name="username" value="<?=$row['username']?>"></label>
        </div>
        <div class="form-group mb-3">
            <label for="formGroupExampleInput">Points : </label>
            <input type="text" class="form-control" name="points" value="<?=$row['points']?>"></label>
        </div>
        <button type="submit" class="btn btn-primary" name="edit" value="edit">Submit Edit</button>
    </form>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>
                        

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>