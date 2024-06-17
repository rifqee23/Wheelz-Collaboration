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
    <title>Booking</title>
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body>
    <?php include("./layout/navbar.php") ?>

    <section class="container pt-32 font-bold">
        <h1 class="text-5xl text-center">Proses Booking</h1>

        <?php
        include("./session-login/koneksi.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM Vehicle WHERE  id = '$id'";
        $data = mysqli_query($conn, $sql);
        while ($d = mysqli_fetch_array($data)) :

        ?>
            <form action="crud/prosesBooking.php" method="post">
                <div class="flex mb-20">
                    <div class="w-1/2 px-10 pt-20">
                        <h3 class="text-3xl text-center">Data Diri</h3>
                        <div class="max-w-lg mx-auto mt-8">
                            <div class="mb-4">
                                <label class="text-2xl font-semibold text-primary" for="input_nama">Nama<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                                <input id="input_nama" class="px-4 py-3 rounded-lg bg-input w-80" type="text" required name="nama" value="<?php echo $_SESSION['user']['nama'] ?>">
                            </div>
                            <div class="mb-4">
                                <label class="text-2xl font-semibold text-primary" for="input_telp">No.Telp<span class="text-red-600">*</span> <span class="ps-[4.7rem]">:</span></label>
                                <input id="input_telp" class="px-4 py-3 rounded-lg bg-input w-80" type="text" required name="telp" value="<?php echo $_SESSION['user']['notelp'] ?>">
                            </div>
                            <div class="mb-4">
                                <label class="text-2xl font-semibold text-primary" for="input_pass">Alamat<span class="text-red-600">*</span> <span class="ps-[4.7rem]">:</span></label>
                                <input id="input_pass" class="px-4 py-3 rounded-lg bg-input w-80" type="text" name="alamat">
                            </div>
                            <div class="mb-4">
                                <label class="text-2xl font-semibold text-primary" for="input_email">Email<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                                <input id="input_email" class="px-4 py-3 rounded-lg bg-input w-80" type="email" required name="email" value="<?php echo $_SESSION['user']['email'] ?>">
                            </div>


                        </div>
                        <div class="mt-10 ">
                            <img src="./asset/WHEELZ FULL.png" alt="">
                        </div>


                        <div class="mt-1 bg-input">
                            <h1 class="py-2 text-2xl text-center text-white bg-primary">Tempat</h1>
                            <div class="px-16 py-10">
                                <div class="">
                                    <label class="block mb-2 text-2xl" for="">Lokasi Booking atau lokasi awal</label>
                                    <input class="w-full px-4 py-2 text-2xl" type="text" name="lokasi" placeholder="Pilih Lokasi Booking">
                                </div>

                                <div class="mt-5">
                                    <label class="block mb-2 text-2xl" for="">Kota Tujuan</label>
                                    <input class="w-full px-4 py-2 text-2xl" type="text" name="tujuan" placeholder="Pilih Lokasi Tujuan">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center w-1/2 pt-[2.34rem]">

                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                        <img class="w-4/5" src="./mobil/<?php echo $d["gambar"] ?>" alt="">
                        <h2 class="mt-10 text-4xl"><?= "Unit " . $d["nama_mobil"] . " - No Pol " . $d["nomor_polisi"] ?></h2>
                        <a class="mt-4 text-2xl font-light text-center text-blue-600" href="spesifikasi.php?id=<?php echo $d["id"] ?>">Lihat Spesifikasi</a>



                        <div class="w-full mt-24 bg-input">
                            <h1 class="py-2 text-2xl text-center text-white bg-primary">Waktu</h1>
                            <div class="px-16 py-10">
                                <div class="">
                                    <label class="block mb-2 text-2xl" for="">Waktu Booking</label>
                                    <div class="flex items-center">
                                        <div id="dateInput" class="relative">
                                            <a class="absolute text-2xl input-button top-2 left-2" title="toggle" data-toggle>
                                                <i class="cursor-pointer fas fa-calendar"></i>
                                            </a>
                                            <input class="w-full max-w-xs py-2 text-lg border rounded-md cursor-pointer ps-12 me-4" type="text" name="tanggalAwal" placeholder="Pilih tanggal" data-input>
                                        </div>

                                        <i class="mx-2 text-2xl fa-solid fa-arrow-right"></i>

                                        <div id="dateInputNext" class="relative dateInput">
                                            <a class="absolute text-2xl input-button top-2 left-2" title="toggle" data-toggle>
                                                <i class="cursor-pointer fas fa-calendar"></i>
                                            </a>
                                            <input class="w-full max-w-xs py-2 text-lg border rounded-md cursor-pointer ps-12" type="text" name="tanggalTujuan" placeholder="Pilih tanggal" data-input>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <label class="block mb-2 text-2xl" for="">Durasi</label>
                                    <input class="w-full px-4 py-2 text-2xl" type="text" name="durasi" value="Full Day" readonly>
                                </div>

                            </div>
                        </div>
                        <div class="flex justify-end w-full mt-10">
                            <button class="px-8 py-2 text-2xl text-white bg-green-600 rounded-full" type="submit" name="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php endwhile; ?>

    </section>
    <?php include("layout/footbar2.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://kit.fontawesome.com/fbda0dcbb4.js" crossorigin="anonymous"></script>
    <script>
        flatpickr("#dateInput", {
            dateFormat: "d/m/Y", // Mengatur format tanggal yang diinginkan
            altInput: true, // Menggunakan input tekstual alternatif untuk menampilkan tanggal
            altFormat: "d/m/Y", // Format tanggal yang ditampilkan kepada pengguna
            allowInput: true, // Memungkinkan pengguna untuk memasukkan tanggal manual
            wrap: true, // Membungkus input dalam sebuah div untuk styling yang lebih baik
            position: "auto", // Menempatkan kalender di sebelah kanan input
        });

        flatpickr("#dateInputNext", {
            dateFormat: "d/m/Y", // Mengatur format tanggal yang diinginkan
            altInput: true, // Menggunakan input tekstual alternatif untuk menampilkan tanggal
            altFormat: "d/m/Y", // Format tanggal yang ditampilkan kepada pengguna
            allowInput: true, // Memungkinkan pengguna untuk memasukkan tanggal manual
            wrap: true, // Membungkus input dalam sebuah div untuk styling yang lebih baik
            position: "auto", // Menempatkan kalender di sebelah kanan input
        });
    </script>

    <script src="./../node_modules/preline/dist/preline.js"></script>

</body>

</html>