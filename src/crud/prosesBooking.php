<?php
session_start();
include("./../session-login/koneksi.php");

if (isset($_POST["submit"])) {
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

    // Update existing details
    $sql = "UPDATE user SET nama='$nama', notelp='$telp', email='$email' WHERE id='$idUser'";
    $rs_sql = mysqli_query($conn, $sql);

    if (!$rs_sql) {
        die("Error updating record: " . mysqli_error($conn));
    }

    // Insert new details
    $sqlTempat = "INSERT INTO rincian (id_user, id_vehicle, alamat, lokasiAwal, lokasiTujuan, tanggalAwal, tanggalTujuan, durasi) 
                  VALUES ('$idUser', '$id', '$alamat', '$lokasi', '$tujuan', '$tanggalAwal', '$tanggalTujuan', '$durasi')";
    $rs_sqlTempat = mysqli_query($conn, $sqlTempat);

    if (!$rs_sqlTempat) {
        die("Error inserting record: " . mysqli_error($conn));
    }

    $id_pelanggan = mysqli_insert_id($conn);

    // Redirect or display success message
    header("Location: ../rincian.php?id=$id_pelanggan&id_mobil=$id");
    exit();
}
