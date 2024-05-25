<?php 
include("koneksi.php");
session_start();

if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

    

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']);

    if (empty($email)) {
        header("Location: ../login.php?error=Harap isi email");
        exit();
    } elseif (empty($password)) {
        header("Location: ../login.php?error=Harap isi password");
        exit();
    } else{
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $row;
    
            header("Location: ../index.php");
            exit();
        }  else {
            header("Location: ../login.php?error=Email atau Password salah");
            exit();
        }
    }

} 

?>