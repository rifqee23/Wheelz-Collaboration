<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Rincian Pemesanan</title>
    <link rel="stylesheet" href="output.css">

</head>
<body class="">
    <?php include("layout/navbar.php") ?>

    <section class="max-w-[115rem] w-full mx-auto  pt-24  z-50">
        <div class="flex justify-around h-full py-16 mt-5 rounded-xl bg-input">
          <button class="self-end px-3 py-3 text-xl font-semibold text-white rounded-xl w-28 bg-btncol">Kembali</button>
        <div
          class="flex flex-col w-full max-w-xl border shadow-sm bg-primary rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70"
        >
        <?php
            include("session-login/koneksi.php");
            $id = $_GET['id'];
            $sql = "SELECT 
            u.nama,
            v.car_only,
            v.gambar,
            r.tanggalAwal,
            r.tanggalTujuan,
            r.durasi,
            u.notelp,
            r.alamat,
            u.email
        FROM 
            rincian r
        JOIN 
            user u ON r.id_user = u.id
        JOIN 
            Vehicle v ON r.id_vehicle = v.id

            WHERE v.id='$id'
        ";

          $result = mysqli_query($conn, $sql);

          while($data=mysqli_fetch_array($result)) :
            ?>
          <div class="p-4 md:p-7">
            
            
            <div class="flex justify-center">
                <img class="w-80" src="mobil/<?= $data["gambar"] ?>" alt="" />
            </div>

            <h2 class="mt-8 text-2xl font-semibold text-center text-white ">
              mobil
            </h2>
            
            
          </div>
        

          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Nama</span>
              <span class="ps-8">:</span>
              <span>Rifqi</span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Price</span>
              <span class="pl-[2.1rem]">:</span>
              <span>Rp 500,000,00</span>
            </p>
          </div>



          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Date</span>
              <span class="ps-[2.4rem]">:</span>
              <span>1/06/2024  -  8/06/2024</span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Time</span>
              <span class="pl-[2.1rem]">:</span>
              <span>Fullday</span>
            </p>
          </div>

          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>No Hp</span>
              <span class="ps-[1.65rem]">:</span>
              <span>081234567891</span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Alamat</span>
              <span class="pl-[0.8rem]">:</span>
              <span>Jalan Kopi</span>
            </p>
          </div>

          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Email</span>
              <span class="ps-[1.9rem]">:</span>
              <span>r@gmail.com</span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <?php endwhile; ?>
        </div>
        <button class="self-end px-3 py-3 text-xl font-semibold text-white rounded-xl w-28 bg-btncol">Booking</button>
        </div>
    </section>

    <?php include("layout/footbar2.php") ?>
</body>
</html>