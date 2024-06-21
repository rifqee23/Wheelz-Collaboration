<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="./output.css">

</head>

<body>

    <?php include("layout/navbar.php") ?>

    <section class="flex flex-col items-center w-full py-24 bg-input">
        <h1 class="text-4xl font-bold text-primary">Selamat Datang di</h1>
        <div>
            <img src="./asset/WHEELZ%20FULL.png" alt="">
        </div>
    </section>

    <section class="flex flex-col items-center justify-center">
        <h2 class="pt-16 text-3xl font-semibold text-center text-form">Silahkan masukkan email dan password anda!</h2>

        <form action="linkReset/send_reset_link.php" method="post" class="flex flex-col items-center justify-center w-full mx-auto mt-10 rounded-lg">
            <div class="max-w-sm">
                <div class="mb-4">
                    <input id="emailFor" class="px-4 py-3 rounded-lg bg-input w-80" type="email" placeholder="Masukkan Email Anda" name="email">

                </div>


            </div>

            <div class="w-full max-w-sm mt-4">
                <button id="btnLogin" type="submit" name="submit" class="w-full px-8 py-3 text-lg font-bold text-white rounded-full cursor-pointer bg-formbtn hover:opacity-75">MASUK</button>
            </div>
        </form>




        <p class="mt-24 text-lg font-semibold text-slate-600">Dengan masuk atau membuat akun, Anda setuju dengan <span class="cursor-pointer text-secondary hover:underline">Syarat & Ketentuan</span> dan <span class="cursor-pointer text-secondary hover:underline">Kebijakan Privasi kami.</span></p>

    </section>
    <div class="mt-36">
        <?php include("layout/footbar2.php") ?>
    </div>

    <script src="./scripts/main.js"></script>

    <script src="./../node_modules/preline/dist/preline.js"></script>
</body>

</html>