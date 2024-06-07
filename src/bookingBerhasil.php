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

    <div class="relative flex flex-col items-center h-full pt-40 -z-30">
        <div class="flex flex-col items-center justify-center w-full max-w-2xl px-16 py-12 mb-32 bg-input rounded-xl">
            <div class="relative w-32 h-32 rounded-full bg-btncol">
                <span class="absolute text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 12l5 5l10 -10" />
                    </svg>
                </span>
            </div>

            <div class="w-full px-3 py-2 mt-16 bg-btncol rounded-2xl">
                <p class="text-2xl font-semibold text-center">Booking Berhasil</p>
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