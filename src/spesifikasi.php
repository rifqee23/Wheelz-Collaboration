<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesifikasi</title>
    <link rel="stylesheet" href="output.css">
</head>

<body>
    <?php include("layout/navbar.php") ?>

    <section class="container h-screen p-40">
        <div class="flex">
            <div class="w-1/2">
                <?php
                include("session-login/koneksi.php");
                $id = $_GET["id"];
                $sql = "SELECT * FROM Vehicle WHERE id='$id'";
                $rs = mysqli_query($conn, $sql);
                while ($d = mysqli_fetch_array($rs)) :
                ?>
                    <img class="mx-auto" src="mobil/<?= $d["gambar"] ?>" alt="">
                    <h1 class="mt-10 text-2xl font-semibold text-center">Unit <?= $d["nama_mobil"] ?> - No Pol <?= $d["nomor_polisi"] ?></h1>
                    <div class="flex justify-center mt-10">
                        <a href="booking.php?id=<?= $d["id"] ?>" class="px-8 py-2 text-2xl font-semibold text-white rounded-3xl bg-btncol">Back</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="flex justify-center w-1/2">
                <div class="flex justify-between gap-10">
                    <div class="flex flex-col gap-5">
                        <div class="relative w-20 h-20 rounded-full bg-input">
                            <img class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="asset/icons/spec/bxs-tired 1.svg" alt="">
                        </div>
                        <div class="relative w-20 h-20 rounded-full bg-input">
                            <img class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="asset/icons/spec/bxs-cog 1.svg" alt="">
                        </div>
                        <div class="relative w-20 h-20 rounded-full bg-input">
                            <img class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="asset/icons/spec/bxs-wrench 1.svg" alt="">
                        </div>
                        <div class="relative w-20 h-20 rounded-full bg-input">
                            <img class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="asset/icons/spec/bx-color 1.svg" alt="">
                        </div>
                        <div class="relative w-20 h-20 rounded-full bg-input">
                            <img class="absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="asset/icons/spec/bxs-car 1.svg" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-5">
                        <div class="px-3 py-1 mt-4 text-lg text-center rounded-lg w-96 bg-input">265/60 (TRD, SRZ) dan 265/65 (VRZ, G)</div>
                        <div class="px-3 py-1 mt-12 text-lg text-center rounded-lg w-96 bg-input">MPV, Bensin, CVT</div>
                        <div class="px-3 py-1 mt-12 text-lg text-center rounded-lg w-96 bg-input">RPM At Max Power</div>
                        <div class="px-3 py-1 mt-12 text-lg text-center rounded-lg w-96 bg-input">R18 (TRD, SRZ) dan R17 (VRZ, G)</div>
                        <div class="px-3 py-1 mt-12 text-lg text-center rounded-lg w-96 bg-input">163 PS /3,400 rpm</div>


                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src=" ./../node_modules/preline/dist/preline.js"></script>
</body>

</html>