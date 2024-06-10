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
    <title>Booked</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <?php include("layout/navbar.php") ?>

    <section class="h-screen pt-32   max-w-[115rem] mx-auto pb-36">
        <h1 class="max-w-sm py-1 mx-auto text-2xl font-semibold text-center rounded-full bg-input ">Pemesanan</h1>
        <div class="h-full px-4 py-4 mt-5 bg-input">
            <table class="w-full overflow-auto border-separate border-spacing-2">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>tipe mobil</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();
                    include("session-login/koneksi.php");
                    $id = $_SESSION['user']['id'];
                    $sql = "SELECT * FROM refund WHERE id_user='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($d = mysqli_fetch_array($result)) :
                    ?>
                        <tr class="bg-white rounded-full">
                            <td class="py-2 text-center rounded-l-full">
                                <div class="flex justify-center">
                                    <img src="asset/icons/bxs-purchase-tag-alt 1.svg" alt="">
                                </div>
                            </td>
                            <td class="py-2 text-center "><?= $d["nama"] ?></td>
                            <td class="text-center"><?= $d["tipe_mobil"] ?></td>
                            <td class="text-center"><?= $d["status"] ?></td>
                            <td class="text-center rounded-r-full ">
                                <div class="flex justify-around">
                                    <?= $d["Status"] ?>
                                    <?php if ($d["status"] == "belum di refund") : ?>
                                        <img src="asset/icons/clock.svg" alt="Pending" srcset="">
                                    <?php elseif ($d["Status"] == "verified") : ?>
                                        <img src="asset/icons/clock.svg" alt="" srcset="">
                                    <?php endif; ?>

                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>


            </table>
        </div>

        <div class="flex justify-around w-full h-12 max-w-5xl mx-auto mt-5 ">
            <a href="batalkanReservasi.php" class="flex items-center justify-center px-2 py-1 text-2xl font-semibold text-white bg-red-500 w-60 rounded-2xl">Batalkan Reservasi</a>
            <a href="csDiana.php" class="flex items-center justify-between px-6 py-3 text-2xl font-semibold bg-blue-100 w-96 rounded-2xl"><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#24f981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg></span>Konsultasi Via Whatsapp</a>
            <a href="car.php" class="flex items-center justify-center px-4 text-2xl font-semibold text-white bg-blue-500 w-60 rounded-2xl">Menu</a>
        </div>

        </tbody>
        </table>
        </div>
    </section>

    <?php include("layout/footbar2.php") ?>
    <script src="./../node_modules/preline/dist/preline.js"></script>

</body>

</html>