<?php
include './../session-login/koneksi.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM Vehicle WHERE nama_mobil  LIKE '%$keyword%'";
$result = mysqli_query($conn, $query);
?>

<div class="flex flex-wrap w-full gap-10 ">
    <?php if (
        mysqli_num_rows($result) >
        0
    ) : ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="flex flex-col border shadow-sm bg-primary rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="p-0 mx-auto md:p-7 md:h-[28rem]">

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