<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pembayaran</title>
  <link rel="stylesheet" href="output.css">
</head>

<body class="">
  <?php include './layout/navbar.php'; ?>

  <section class="max-w-[115rem] relative flex items-center justify-center h-screen mx-auto ">
    <div class="flex justify-center w-1/2">
      <?php
      include("./session-login/koneksi.php");
      $id = $_GET["id"];
      $sql = "SELECT 
            u.nama,
            v.car_only,
            v.gambar,
            v.nama_mobil,
            r.tanggalAwal,
            r.tanggalTujuan,
            r.durasi,
            r.id_pemesanan,
            u.notelp,
            r.alamat,
            u.email
        FROM 
            rincian r
        JOIN 
            user u ON r.id_user = u.id
        JOIN 
            Vehicle v ON r.id_vehicle = v.id

            WHERE r.id_pemesanan  ='$id'
        ";

      $result = mysqli_query($conn, $sql);

      while ($data = mysqli_fetch_array($result)) :

      ?>
        <div class="flex flex-col w-full max-w-xl border shadow-sm bg-primary rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
          <div class="p-4 md:p-7">


            <div class="flex justify-center">
              <img class="w-80" src="mobil/<?= $data["gambar"] ?>" alt="" />
            </div>

            <h2 class="mt-8 text-2xl font-semibold text-center text-white ">
              <?= $data["nama_mobil"] ?>
            </h2>


          </div>


          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Nama</span>
              <span class="ps-8">:</span>
              <span><?= $data["nama"] ?></span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Price</span>
              <span class="pl-[2.1rem]">:</span>
              <span><?= $data["car_only"] ?></span>
            </p>
          </div>



          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Date</span>
              <span class="ps-[2.4rem]">:</span>
              <span><?= $data["tanggalAwal"] . " - " . $data["tanggalTujuan"] ?></span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Time</span>
              <span class="pl-[2.1rem]">:</span>
              <span><?= $data["durasi"] ?></span>
            </p>
          </div>

          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>No Hp</span>
              <span class="ps-[1.65rem]">:</span>
              <span><?= $data["notelp"] ?></span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

          <div class="w-full px-10 text-lg font-bold text-left text-white">
            <p class="flex items-center space-x-2">
              <span>Alamat</span>
              <span class="pl-[0.8rem]">:</span>
              <span><?= $data["alamat"] ?></span>
            </p>
          </div>

          <div class="relative px-10 text-left">
            <div class="absolute inset-0 bg-input opacity-20"></div>
            <!-- Latar belakang dengan opacity -->
            <p class="relative z-10 w-full text-lg font-bold text-white">
              <span>Email</span>
              <span class="ps-[1.9rem]">:</span>
              <span><?= $data["email"] ?></span>
            </p>
            <!-- Teks di atas latar belakang -->
          </div>

        </div>
      <?php endwhile; ?>

    </div>

    <div class="flex justify-center w-1/2">

      <div class="w-full max-w-2xl bg-input">
        <h1 class="text-2xl text-center text-white bg-primary">Pembayaran</h1>
        <div class="p-8">
          <h3 class="font-bold">NO REKENING BANK DAN E-WALLET</h3>
          <div class="w-full max-w-lg p-4 mt-5 bg-white">
            <span class="font-bold">REK BRI</span>
            <span>0134 2447246 28468 AN. JESSEN RAMADEKSA ALLEN</span>
          </div>

          <div class="w-full max-w-lg p-4 mt-5 bg-white">
            <span class="font-bold">DANA</span>
            <span>0858 - 4358 - 2836 AN RAFIF MAULANA</span>
          </div>

          <h3 class="mt-5 font-bold">MASUKKAN BUKTI PEMBAYARAN</h3>

          <?php
          include("session-login/koneksi.php");
          $id = $_GET["id"];
          $id_mobil = $_GET["id_mobil"];
          $sql = "SELECT * FROM rincian WHERE id_pemesanan='$id' AND id_vehicle='$id_mobil'";
          $rs = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($rs)) :
          ?>
            <form action="crud/pay.php" method="post" enctype="multipart/form-data">
              <div class="max-w-sm mt-5">
                <input type="hidden" name="id" value="<?= $row["id_pemesanan"] ?>">
                <input type="hidden" name="id_vehicle" value="<?= $row["id_vehicle"] ?>">
                <label class="block">
                  <span class="sr-only">Choose profile photo</span>
                  <input type="file" name="gambar" class="block w-full text-sm text-gray-500 file:me-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700 file:disabled:opacity-50 file:disabled:pointer-events-none dark:text-neutral-500 dark:file:bg-blue-500 dark:hover:file:bg-blue-400 ">
                </label>

              </div>
              <div class="flex justify-center mt-16">
                <button name="submit" type="submit" class="px-20 py-4 text-white bg-btncol rounded-xl">Simpan</button>
              </div>

            <?php endwhile; ?>
            </form>
        </div>
      </div>
    </div>
  </section>
  <?php include("./layout/footbar2.php") ?>


  <script src="./../node_modules/preline/dist/preline.js"></script>
</body>

</html>