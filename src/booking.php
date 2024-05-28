

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
        <div class="flex mb-20">
            <div class="w-1/2 px-10 pt-20">
                <h3 class="text-3xl text-center">Data Diri</h3>
                <div class="max-w-lg mx-auto mt-8">
                    <div class="mb-4">
                        <label class="text-2xl font-semibold text-primary" for="input_nama">Nama<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                        <input id="input_nama" class="px-4 py-3 rounded-lg bg-input w-80" type="text" required name="nama">
                    </div>
                    <div class="mb-4">
                        <label class="text-2xl font-semibold text-primary" for="input_telp">No.Telp<span class="text-red-600">*</span> <span class="ps-[4.7rem]">:</span></label>
                        <input id="input_telp" class="px-4 py-3 rounded-lg bg-input w-80" type="text" required name="telp">
                    </div>
                    <div class="mb-4">
                        <label class="text-2xl font-semibold text-primary" for="input_pass">Alamat<span class="text-red-600">*</span> <span class="ps-[4.7rem]">:</span></label>
                        <input id="input_pass" class="px-4 py-3 rounded-lg bg-input w-80" type="text" required name="password">
                    </div>
                    <div class="mb-4">
                        <label class="text-2xl font-semibold text-primary" for="input_email">Email<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                        <input id="input_email" class="px-4 py-3 rounded-lg bg-input w-80" type="email" required name="email">
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
                            <input class="w-full px-4 py-2 text-2xl" type="text" value="Hello World">
                        </div>
    
                        <div class="mt-5">
                            <label class="block mb-2 text-2xl" for="">Kota Tujuan</label>
                            <input class="w-full px-4 py-2 text-2xl" type="text" value="Hello World">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col items-center w-1/2 pt-20 ">
                <?php
                    include("./session-login/koneksi.php");
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM Vehicle WHERE  id = '$id'";
                    $data = mysqli_query($conn, $sql);
                    while($d=mysqli_fetch_array($data)) :
                        
                ?>
                <input type="hidden" name="id"  value="<?php echo $d['id']; ?>">
                
                <img class="w-4/5" src="./mobil/<?php echo $d["gambar"] ?>" alt="">
                <h2 class="mt-10 text-4xl"><?= "Unit " . $d["nama_mobil"] . " - No Pol " . $d["nomor_polisi"] ?></h2>
                <a class="mt-4 text-2xl font-light text-center text-blue-600" href="test.php?id=<?php echo $d["id"] ?>">Lihat Spesifikasi</a>
                <?php endwhile; ?>


                <div class="w-full mt-[3.19rem] bg-input">
                    <h1 class="py-2 text-2xl text-center text-white bg-primary">Tempat</h1>
                    <div class="px-16 py-10">
                        <div class="">
                            <label class="block mb-2 text-2xl" for="">Waktu Booking</label>
                            <div class="flex items-center justify-center">
                                <input class="px-4 py-2 text-lg border rounded-md" type="text" id="dateInput" placeholder="Pilih tanggal">
                            </div>
                        </div>
    
                        <div class="mt-5">
                            <label class="block mb-2 text-2xl" for="">Kota Tujuan</label>
                            <input class="w-full px-4 py-2 text-2xl" type="text" value="Hello World">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    
    <script>
        // Menginisialisasi Flatpickr
        flatpickr("#dateInput", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
        });
    </script>

</body>
</html>