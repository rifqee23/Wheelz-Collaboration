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

    <section class="h-screen pt-40 max-w-[115rem] mx-auto pb-40">
        <h1 class="max-w-sm py-1 mx-auto text-2xl font-semibold text-center rounded-full bg-input ">Pemesanan</h1>
        <div class="h-full px-4 py-4 mt-10 bg-input">
            <table class="w-full border-separate border-spacing-2">
                <thead>
                    <tr>
                        <th></th>
                        <th>Nama</th>
                        <th>Kendaraan</th>
                        <th>Waktu</th>
                        <th>Harga</th>
                        <th class="w-40">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    session_start();
                    include("session-login/koneksi.php");
                    $id = $_SESSION['user']['id'];
                    $sql = "SELECT 
                    u.nama,
                    v.nama_mobil,
                    r.tanggalAwal,
                    r.tanggalTujuan,
                    v.car_only,
                    p.Status
                FROM 
                    pembayaran p
                JOIN 
                    user u ON p.id_user = u.id
                JOIN 
                    Vehicle v ON p.id_vehicle = v.id
                JOIN 
                    rincian r ON p.id_rincian = r.id_pemesanan 
                WHERE 
                    u.id='$id'";

                    $rs = mysqli_query($conn, $sql);

                    while ($d = mysqli_fetch_array($rs)) :
                    ?>
                        <tr class="bg-white rounded-full">
                            <td class="py-2 text-center rounded-l-full">
                                <div class="flex justify-center">
                                    <img src="asset/icons/bxs-purchase-tag-alt 1.svg" alt="">
                                </div>
                            </td>
                            <td class="py-2 text-center "><?= $d["nama"] ?></td>
                            <td class="text-center"><?= $d["nama_mobil"] ?></td>
                            <td class="text-center"><?= $d["tanggalAwal"] . " - " . $d["tanggalTujuan"] ?></td>
                            <td class="text-center"><?= "Rp " . $d["car_only"] . ",00" ?></td>
                            <td class="text-center rounded-r-full ">
                                <div class="flex justify-around">
                                    <?= $d["Status"] ?>
                                    <?php if ($d["Status"] == "pending") : ?>
                                        <img src="asset/icons/clock.svg" alt="Pending" srcset="">
                                    <?php elseif ($d["Status"] == "verified") : ?>
                                        <img src="asset/icons/clock.svg" alt="" srcset="">
                                    <?php endif; ?>

                                </div>
                            </td>

        </div>

        </tr>

    <?php endwhile; ?>

    </tbody>
    </table>
    </div>
    </section>

    <script src="./../node_modules/preline/dist/preline.js"></script>

</body>

</html>