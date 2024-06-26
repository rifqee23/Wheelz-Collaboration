<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../session-login/koneksi.php");

if (isset($_POST['submit'])) {
    $idUser = $_SESSION['user']['id'];
    $id_pemesanan = $_POST["id"];
    $id_vehicle = $_POST["id_vehicle"];

    // upload
    $folder = "/opt/lampp/htdocs/wheelz admin/src/asset/bukti_bayar/";

    // Mendapatkan nama file asli
    $nama_file_asli = basename($_FILES["gambar"]["name"]);

    // Mendapatkan ekstensi file
    $file_extension = strtolower(pathinfo($nama_file_asli, PATHINFO_EXTENSION));

    // Menyusun nama file tanpa ekstensi
    $nama_file_tanpa_ekstensi = pathinfo($nama_file_asli, PATHINFO_FILENAME);

    // Membuat path lengkap untuk file
    $file_in_folder = $folder . $nama_file_asli;

    // Status awal
    $status = 1;

    //error
    $error = $_FILES["gambar"]["error"];

    if ($error === 4) {
        header("Location: ./../pembayaran.php?alert=belum_upload");
        exit();
    }

    // Memeriksa apakah file adalah gambar
    $cek = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($cek !== false) {
        $status = 1;
    } else {
        header("Location: ./../pembayaran.php?alert=bukan_gambar");
        exit();
    }

    // Memeriksa ekstensi file
    if ($file_extension !== "jpg" && $file_extension !== "png" && $file_extension !== "jpeg" && $file_extension !== "gif") {
        echo "Format file tidak didukung";
        exit();
    }

    // Menangani kemungkinan nama file yang sama
    $counter = 1;
    while (file_exists($file_in_folder)) {
        $nama_file_asli = $nama_file_tanpa_ekstensi . "(" . $counter . ")." . $file_extension;
        $file_in_folder = $folder . $nama_file_asli;
        $counter++;
    }

    // Menyimpan atau menampilkan pesan jika upload berhasil atau gagal
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $file_in_folder)) {
        // Mengunggah file ke folder pertama
        echo "Upload gambar berhasil";
    } else {
        echo "Upload gambar gagal!";
    }

    $unique_number = substr(time(), -5) . rand(10000, 99999);

    $unique_number = str_pad($unique_number, 13, '0', STR_PAD_LEFT);

    // Set waktu berdasarkan local
    date_default_timezone_set('Asia/Jakarta');

    // waktu sekarang
    $time = date("H:i:s");

    // tanggal sekarang
    $tanggal = date("Y-m-d");

    // Query untuk menambahkan data baru
    $sql = "INSERT INTO pembayaran (id_user, id_rincian, id_vehicle, bukti_bayar, ref, `time`, tanggal) VALUES('$idUser', '$id_pemesanan', '$id_vehicle','$nama_file_asli', '$unique_number', '$time', '$tanggal')";
    // Jalankan query untuk menambahkan data baru
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        header("Location: ./../bookingBerhasil.php?id=$last_id");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
