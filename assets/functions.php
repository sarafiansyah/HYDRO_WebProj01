<?php 

// Create connection
$conn = mysqli_connect("localhost", "u328896269_hydrowebdb", "K3dairoxy!!", "u328896269_hydro_main");

    function registration($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $namadepan = $_REQUEST['namadepan'];
    $namabelakang = $_REQUEST['namabelakang'];


    //Username Confirmation
    $resultReg = mysqli_query($conn, "SELECT username FROM users WHERE 
    username = '$username'");

    if(mysqli_fetch_assoc($resultReg)){
        echo "<script> alert ('sudah terdafdtar'); </script>";
        return false;
    }

    //Password Confirmation
    if($password !== $password2) {
        echo "<script> alert ('salah'); </script>";
        return false;
    }

    //Password encryption, PASSWORD_DEFAULT Method
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    //User add 
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password', '$namadepan', '$namabelakang', 0)");

    return mysqli_affected_rows($conn);

    //return 1;
}


function pointupdate($data){
    global $conn;

    $tambahPembelian = $data["tambahPembelian"];

    mysqli_query($conn, "INSERT INTO users (points) VALUES(100)");

    //return 1;
}

function verifyCookie() {
    global $conn;
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $cookieId = $_COOKIE['id'];
        $cookieKey = $_COOKIE['key'];

        $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT username FROM users WHERE id = $cookieId"));
        
        $username = $row === null ? '' : $row['username'] ;
        $hashedUsername = hash('sha256', $username);
        
        if ($cookieKey === $hashedUsername) {
           $_SESSION['username'] = $username;
        }
    }
}

?>