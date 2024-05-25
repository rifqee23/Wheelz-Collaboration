<?php include("session-login/register-system.php") ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitrasi</title>
    <link rel="stylesheet" href="output.css">
</head>
<body>

    <?php include('layout/fragments/headers.php') ?>

    <section class="flex justify-center items-center flex-col">
        

        <form action="session-login/register-system.php" method="post" class="mt-10 w-full mx-auto flex flex-col justify-center items-center  rounded-lg">
            <div class="max-w-lg">
                <div class="mb-4">
                    <label class="text-primary font-semibold" for="input_nama">Nama<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                    <input id="input_nama" class="bg-input py-3 px-4 rounded-lg w-80" type="text" required name="nama">
                </div>
                <div class="mb-4">
                    <label class="text-primary font-semibold" for="input_email">Email<span class="text-red-600">*</span> <span class="ps-24">:</span></label>
                    <input id="input_email" class="bg-input py-3 px-4 rounded-lg w-80" type="email" required name="email">
                </div>
                <div class="mb-4">
                    <label class="text-primary font-semibold" for="input_telp">No.Telp<span class="text-red-600">*</span> <span class="ps-20">:</span></label>
                    <input id="input_telp" class="bg-input py-3 px-4 rounded-lg w-80" type="text" required name="telp">
                </div>
                
                <div class="mb-4">
                    <label class="text-primary font-semibold" for="input_pass">Password<span class="text-red-600">*</span> <span class="ps-16">:</span></label>
                    <input id="input_pass" class="bg-input py-3 px-4 rounded-lg w-80" type="password" required name="password">
                </div>

                <div class="mb-4">
                    <label for="input_conpass" class="block text-primary font-semibold">Confirms</label>
                    <label class="text-primary font-semibold" for="input_conpass">Password<span class="text-red-600">*</span> <span class="ps-16">:</span></label>
                    <input id="input_conpass" class="bg-input py-3 px-4 rounded-lg w-80" type="password" required name="confirms">
                </div>


            </div>
            <div class="max-w-sm w-full mt-4">
                <button type="submit" name="submit" class="bg-formbtn  text-white font-bold text-lg rounded-full py-3 px-8 w-full hover:opacity-75">DAFTAR</button>
            </div>
        </form>
        <div class="max-w-sm w-full mt-2 ">
            <p class="text-sm">Sudah punya akun? <span class="text-[#5A85B8] hover:underline cursor-pointer">Login disini.</span></p>
        </div>

        <?php include("layout/fragments/bottom-foot.php") ?>

    </section>

    <?php if (isset($_GET['success'])) : ?>
    <div class="absolute inset-0 z-50 flex items-center justify-center overflow-x-hidden overflow-y-auto">
        <div class="relative mx-auto w-full max-w-lg p-6 bg-white rounded-lg shadow-lg">
            <!-- Content -->
            <div class="text-center">
                <h2 class="text-3xl font-semibold text-form">Registrasi Berhasil</h2>
                <p class="mt-2">Silahkan Login</p>
            </div>
            
            <div class="flex justify-center mt-5">
                <button class="py-1 px-3 bg-primary text-white font-semibold rounded-lg">
                    <a href="login.php">Login</a>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>


    <

    <script src="./../node_modules/preline/dist/preline.js"></script>
</body>
</html>