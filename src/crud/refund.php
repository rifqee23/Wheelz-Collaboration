<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../session-login/koneksi.php");

if (isset($_POST['submit'])) {
    $idUser = $_SESSION['user']['id'];
    $name = htmlspecialchars($_POST["name"]);
    $norek = htmlspecialchars($_POST["norek"]);
    $type_mobil = htmlspecialchars($_POST["type_mobil"]);

    // upload
    $folder = "/opt/lampp/htdocs/wheelz admin/src/asset/buktI_bayar2/";

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

    // Query untuk menambahkan data baru
    $sql = "INSERT INTO refund (id_user, nama, bukti_bayar, tipe_mobil, norek) VALUES('$idUser', '$name','$nama_file_asli', '$type_mobil', '$norek')";
    // Jalankan query untuk menambahkan data baru
    if (mysqli_query($conn, $sql)) {
        $last_id = mysqli_insert_id($conn);
        header("Location: ./../refundProses.php?id=$last_id");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fix permission denied error
// Make sure the target directory is writable by the web server user
// You can do this by running the following command in your terminal:
// sudo chmod -R 755 /opt/lampp/htdocs/wheelz\ admin/src/asset/buktI_bayar2/
