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
                <form action="" method="post">
                    <div class="flex">
                        <?php
                        include("session-login/koneksi.php");
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM pembayaran WHERE id='$id'";
                        $rs = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_array($rs)) :
                        ?>
                            <div class="w-1/2">
                                <div>
                                    <label class="text-lg font-semibold" for="">Ref Transaksi</label>
                                    <input class="px-3 py-1 rounded-full" type="text" value="<?= $row['ref'] ?>" readonly>
                                </div>

                                <div class="mt-4">
                                    <label class="text-lg font-semibold" for="">Waktu Transaksi</label>
                                    <input class="px-3 py-1 rounded-full" type="text" value="<?= $row['tanggal'] . ", " . $row['time'] . " WIB" ?>" readonly>
                                </div>

                                <div class="mt-4">
                                    <label class="text-lg font-semibold" for="">Metode Pembayaran</label>
                                    <input class="px-3 py-1 rounded-full" type="text" value="<?= $row['metode_pembayaran'] ?>" readonly>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="flex flex-col justify-center h-full mb-2">
                                    <label class="text-lg font-semibold" for="">Status</label>
                                    <input class="px-3 py-1 rounded-full" type="text" value="<?= $row['Status'] ?>" readonly>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </form>
            </div>
        </div>

        <div class="max-w-5xl w-full flex justify-around ">
            <button class="px-2 w-60 py-3 text-2xl font-semibold text-white bg-red-500 rounded-2xl">Batalkan Reservasi</button>
            <button class="px-6 w-96 items-center py-3 text-2xl font-semibold bg-blue-100 rounded-2xl flex justify-between"><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#24f981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                    </svg></span>
                    <a href="https://wa.me/085838767982">Konsultasi Via Whatsapp</a></button>
            <button class="px-4 w-60 py-3 text-2xl font-semibold text-white bg-blue-500 rounded-2xl">Lihat Rincian</button>
        </div>
        <div class="absolute bottom-0 w-full -z-20">
            <?php include("layout/footbar2.php") ?>
        </div>

    </div>

</body>

</html>