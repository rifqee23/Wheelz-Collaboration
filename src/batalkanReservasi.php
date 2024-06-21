<?php
session_start();
include("session-login/koneksi.php");

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Berhasil</title>
    <link rel="stylesheet" href="output.css">
</head>

<body class="h-screen">
    <?php include("layout/navbar.php") ?>

    <div class="relative flex flex-col items-center h-full pt-40">
        <div class="flex flex-col items-center justify-center w-full max-w-2xl px-4 py-4 mb-32 bg-input rounded-xl">
            <h3 class="px-5 py-2 text-xl font-semibold text-center bg-white rounded-full">Rincian Pembayaran</h3>
            <div class="w-full">
                <form action="crud/refund.php" method="post" enctype="multipart/form-data">
                    <div class="flex">

                        <div class="w-1/2">
                            <div>
                                <label class="text-lg font-semibold" for="">Nama</label>
                                <input class="px-3 py-1 rounded-full" type="text" name="name">
                            </div>

                            <div class="mt-4">
                                <label class="text-lg font-semibold" for="">Bukti Pembayaran</label>

                                <input type="file" name="gambar" class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 file:disabled:opacity-50 file:disabled:pointer-events-none dark:text-neutral-500 dark:file:bg-blue-500 dark:hover:file:bg-blue-400 ">

                            </div>

                            <div class="mt-4">
                                <label class="text-lg font-semibold" for="">Nomor Rekening</label>
                                <input class="px-3 py-1 rounded-full" type="text" name="norek">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex flex-col justify-center h-full mb-2">
                                <label class="text-lg font-semibold" for="">Tipe Mobil</label>
                                <input class="px-3 py-1 rounded-full" type="text" name="type_mobil">
                            </div>
                        </div>

                    </div>

            </div>
        </div>

        <div class="flex flex-row-reverse justify-around w-full max-w-5xl">
            <button type="submit" name="submit" class="px-4 py-3 text-2xl font-semibold text-white bg-blue-500 w-60 rounded-2xl">Simpan</button>
            </form>
            <a href="csDiana.php" class="flex items-center justify-between px-6 py-3 text-2xl font-semibold bg-blue-100 w-96 rounded-2xl"><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#24f981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg></span>Konsultasi Via Whatsapp
            </a>
        </div>
        <div class="w-full">
            <?php include("layout/footbar2.php") ?>
        </div>

    </div>

</body>

</html>