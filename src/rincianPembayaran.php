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
                        <div class="w-1/2">
                            <div>
                                <label class="text-lg font-semibold" for="">Ref Transaksi</label>
                                <input class="px-3 py-1 rounded-full" type="text" placeholder="0008211372195" readonly>
                            </div>

                            <div class="mt-4">
                                <label class="text-lg font-semibold" for="">Waktu Transaksi</label>
                                <input class="px-3 py-1 rounded-full" type="text" placeholder="0008211372195" readonly>
                            </div>

                            <div class="mt-4">
                                <label class="text-lg font-semibold" for="">Metode Pembayaran</label>
                                <input class="px-3 py-1 rounded-full" type="text" placeholder="0008211372195" readonly>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="flex flex-col justify-center h-full mb-2">
                                <label class="text-lg font-semibold" for="">Status</label>
                                <input class="px-3 py-1 rounded-full" type="text" placeholder="pending" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="container flex justify-end ">
            <button class="px-4 py-3 text-2xl font-semibold text-white bg-blue-500 rounded-2xl">Lihat Rincian</button>
        </div>
        <div class="absolute bottom-0 w-full -z-20">
            <?php include("layout/footbar2.php") ?>
        </div>

    </div>

</body>

</html>