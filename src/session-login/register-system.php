<?php
include("koneksi.php");
session_start();

if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST["submit"])) {
    $nama = mysqli_real_escape_string($conn, $_POST["nama"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = $_POST["telp"];
    $password = hash("sha256", $_POST["password"]);
    $confirms = hash('sha256', $_POST['confirms']);

    if ($password == $confirms) {
        // Check jika email sudah terdaftar sebelumnya
        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(!mysqli_num_rows($result) > 0) {
            // Insert data user baru ke dalam database
            $sql = "INSERT INTO user (nama, email, notelp, password) VALUES ('$nama', '$email', '$phone', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Redirect ke halaman registrasi dengan pesan sukses
                header("Location: ../register.php?success=registrasi berhasil");
                exit();
            } else {
                // Redirect ke halaman registrasi dengan pesan error jika terjadi kesalahan saat insert
                header("Location: ../register.php?error=terjadi kesalahan");
                exit();
            }
        } else {
            // Redirect ke halaman registrasi dengan pesan error jika email sudah terdaftar
            header("Location: ../register.php?error=email sudah terdaftar");
            exit();
        }
    } else {
        // Redirect ke halaman registrasi dengan pesan error jika password tidak sesuai
        header("Location: ../register.php?error=password tidak sesuai");
        exit();
    }
}
?>
