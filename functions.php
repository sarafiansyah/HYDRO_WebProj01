<?php 

// Create connection
$conn = mysqli_connect("localhost", "root", "", "hydro_web");




    function registration($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if($password !== $password2) {
        echo "<script> alert ('salah'); </script>";
        return false;
    }

    return 1;
}
?>