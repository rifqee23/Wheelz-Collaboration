
<?php include("session-login/login-system.php") ?>


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

<section class="w-full bg-input flex flex-col  items-center py-24">
    <h1 class="text-4xl font-bold text-primary">Selamat Datang di</h1>
    <div>
        <img src="./asset/WHEELZ%20FULL.png" alt="">
    </div>
</section>

<section class="flex justify-center items-center flex-col">
    <h2 class="pt-16 text-3xl font-semibold text-form text-center">Silahkan masukkan email dan password anda!</h2>

    <form action="session-login/login-system.php" method="post" class="mt-10 w-full mx-auto flex flex-col justify-center items-center  rounded-lg">
        <div class="max-w-sm">
            <div class="mb-4">
                <input class="bg-input py-3 px-4 rounded-lg w-80" type="email" placeholder="email" name="email">
                <?php if (isset($_GET['error']) && $_GET['error'] === "Harap isi email") : ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-4">
                <input class="bg-input py-3 px-4 rounded-lg w-80" type="password" placeholder="password" name="password">
                <?php if (isset($_GET['error']) && $_GET['error'] === "Harap isi password") : ?>
                    <p><?php echo $_GET['error']; ?></p>
                <?php endif; ?>
                
            </div>

        </div>
        <div class="max-w-sm">
            <p id="passwordHelp" class="form-text ps-8">Password harus berisi minimal 8 karakter dan mengandung huruf besar dan angka.</p>

        </div>
        <div class="max-w-sm w-full mt-4">
            <button id="btnLogin" type="submit" name="submit" class="bg-formbtn cursor-pointer text-white font-bold text-lg rounded-full py-3 px-8 w-full hover:opacity-75">MASUK</button>
        </div>
    </form>
    <div class="max-w-sm w-full mt-2 flex justify-between ">
        <p class="text-sm">Belum memiliki akun? <a href="register.php" class="text-[#5A85B8] hover:underline cursor-pointer">Daftar disini.</a></p>
        <p class="text-sm hover:underline hover:text-[#5A85B8] cursor-pointer">Lupa Password?</p>
    </div>
    
    <div class=" max-w-sm w-full">
            <?php if (isset($_GET['error']) && $_GET['error'] === "Email atau Password salah") : ?>
                <p class="text-start"><?php echo $_GET['error']; ?></p>
            <?php endif; ?>
    </div>

    <div class="w-full mt-12">
        <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-black before:me-44 after:flex-1 after:border-t after:border-black after:ms-44 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600"></div>

    </div>

    <p class="mt-24 text-lg font-semibold text-slate-600">Dengan masuk atau membuat akun, Anda setuju dengan <span class="text-secondary hover:underline cursor-pointer">Syarat & Ketentuan</span> dan <span class="text-secondary hover:underline cursor-pointer">Kebijakan Privasi kami.</span></p>

</section>
<div class="mt-36">
    <?php include("layout/footbar2.php") ?>
</div>

<script src="./scripts/main.js"></script>

<script src="./../node_modules/preline/dist/preline.js"></script>
</body>
</html>