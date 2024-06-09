<?php
session_start();
include("session-login/koneksi.php");

$num_per_page = 9;
$rs = mysqli_query($conn, "SELECT * FROM Vehicle");
$jumlah_data = mysqli_num_rows($rs);

$sql = "SELECT * FROM Vehicle LIMIT 0, $num_per_page";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Car</title>
  <link rel="stylesheet" href="output.css" />
</head>

<body>
  <?php include("layout/fragments/navbarcars.php") ?>

  <!-- Section Car -->

  <section class="container relative flex justify-center mx-auto mt-5">
    <div class="flex flex-wrap w-full mx-auto 2xl:px-32 lg:ps-20 2xl:gap-x-32 gap-y-10 lg:gap-x-20">
      <?php if (
        mysqli_num_rows($result) >
        0
      ) : ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <div class="flex flex-col border shadow-sm bg-primary rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="p-4 md:p-7">

              <img class="w-80" src="mobil/<?php echo $row["gambar"] ?>" alt="" />

              <h2 class="mt-5 text-2xl font-semibold text-white">
                <?php echo $row['nama_mobil'] ?>
              </h2>
              <div class="flex mt-1">
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
                <img class="w-4" src="./asset/Vector.svg" alt="rate" />
              </div>

              <div class="mt-3">
                <span class="px-6 py-1 rounded-full bg-rate">5.0</span>
              </div>
            </div>
            <div class="relative py-1 ps-12">
              <div class="absolute inset-0 bg-input opacity-20"></div>
              <!-- Latar belakang dengan opacity -->
              <span class="relative z-10 w-full text-lg font-bold text-white">Seat :
                <?php echo $row["seat"] ?>
                Seat</span>
              <!-- Teks di atas latar belakang -->
            </div>

            <div class="w-full text-lg font-bold text-center text-white">
              Car Only
            </div>

            <div class="relative py-1 text-center">
              <div class="absolute inset-0 bg-input opacity-20"></div>
              <!-- Latar belakang dengan opacity -->
              <span class="relative z-10 w-full text-lg font-bold text-white">Rp.<?php echo $row["car_only"] ?>,00 - Full Day</span>
              <!-- Teks di atas latar belakang -->
            </div>

            <div class="w-full text-lg font-bold text-center text-white">
              Car + Driver
            </div>

            <div class="relative py-1 text-center">
              <div class="absolute inset-0 bg-input opacity-20"></div>
              <!-- Latar belakang dengan opacity -->
              <span class="relative z-10 w-full text-lg font-bold text-white">Rp.
                <?php echo $row["car_only_driver"] ?>,00 - Full Day</span>
              <!-- Teks di atas latar belakang -->
            </div>

            <div class="w-full text-lg font-bold text-center text-white">
              Car + Driver + Fuel
            </div>

            <div class="relative py-1 text-center">
              <div class="absolute inset-0 bg-input opacity-20"></div>
              <!-- Latar belakang dengan opacity -->
              <span class="relative z-10 w-full text-lg font-bold text-white">Rp.
                <?php echo $row["car_only_driver_fuel"] ?>,00 - Full Day</span>
              <!-- Teks di atas latar belakang -->
            </div>

            <div class="flex justify-center w-full p-4">
              <button id="bookBtn" class="px-6 py-1 font-bold text-white rounded-full bg-btncol" data-id="<?= $row['id'] ?>" data-gambar="<?= htmlspecialchars($row['gambar']) ?>">
                Book Now
              </button>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <div id="overlay" class="fixed inset-0 z-30 hidden bg-black opacity-50 size-full">
    </div>
    <div id="modal" class="container fixed z-40 hidden py-8 -translate-x-1/2 -translate-y-1/2 bg-white opacity-1 top-1/2 start-1/2">
      <img class="" src="./asset/WHEELZ FULL.png" alt="">
      <div class="flex items-center justify-center">
        <img id="modalImage" src="" alt="">
      </div>

      <div class="container text-center ">
        <div class="w-11/12 py-4 mx-auto rounded-full bg-input shadow-3xl">
          <h2 class="text-3xl font-semibold ">Apakah anda yakin ingin memesan kendaraan ini?</h2>
        </div>

        <div class="flex justify-around w-11/12 mx-auto mt-10">
          <a id="cancelBtn" class="py-4 text-2xl font-bold rounded-full w-44 bg-input" href="">Tidak</a>

          <a id="confirmBtn" class="py-4 text-2xl font-bold rounded-full w-44 bg-input" href="#">Ya</a>


        </div>
      </div>
    </div>
  </section>

  <!-- End Section Car -->

  <script src="./../node_modules/preline/dist/preline.js"></script>
  <script>
    const overlay = document.getElementById("overlay");
    const modal = document.getElementById("modal")
    const bookBtn = document.querySelectorAll("#bookBtn");
    const cancelBtn = document.querySelectorAll("#cancelBtn");
    const confirmBtn = document.getElementById("confirmBtn");
    const modalImage = document.getElementById("modalImage");


    let selectedId = "";

    bookBtn.forEach(btn => {
      btn.addEventListener("click", () => {
        const gambar = btn.getAttribute("data-gambar");
        selectedId = btn.getAttribute("data-id");
        modalImage.src = `./mobil/${gambar}`;
        modalImage.classList.add("w-1/2")
        modal.classList.remove("hidden");
        overlay.classList.remove("hidden")
      })
    })

    cancelBtn.forEach(cancel => {
      cancel.addEventListener("click", () => {
        modal.classList.add("hidden");
        overlay.classList.add("hidden");
      })
    })

    confirmBtn.addEventListener("click", () => {
      window.location.href = `booking.php?id=${selectedId}`;
    })
  </script>
</body>

</html>