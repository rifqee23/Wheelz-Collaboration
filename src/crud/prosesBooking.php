<?php
session_start();
include("./../session-login/koneksi.php");
if(isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $alamat = $_POST["alamat"];
    $email = $_POST["email"];

    $lokasi = $_POST["lokasi"];
    $tujuan = $_POST["tujuan"];
    $id = $_POST["id"];
    $idUser = $_SESSION['user']['id'];

    $tanggalAwal = $_POST["tanggalAwal"];
    $tanggalTujuan = $_POST["tanggalTujuan"];
    $durasi = $_POST["durasi"];

    $sql = "INSERT INTO user (nama, email, notelp) VALUES('$nama', '$email', '$telp')";
    $rs_sql = mysqli_query($conn, $sql);
    
}
?>