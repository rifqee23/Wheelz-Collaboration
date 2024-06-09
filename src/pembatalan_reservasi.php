<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembatalan Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .header {
            background-color: #232d51;
            padding: 20px;
            color: white;
            text-align: left;
        }
        .header h1 {
            margin: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 8px;
        }
        .form-title {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 0 auto;
            display: block;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .form-group input[type="submit"] {
            background-color: #4b61d1;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #3949a3;
        }
        .whatsapp-button {
            background-color: #25d366;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            text-align: center;
            margin: 10px 0;
            text-decoration: none;
            font-size: 16px;
        }
        .footer {
            background-color: #232d51;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        .footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            display: inline-block;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Wheelz Collaboration</h1>
    </div>
    <div class="container">
        <div class="form-title">
            <h2>Pembatalan Reservasi</h2>
        </div>
        <form action="pembatalan_reservasi.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Masukkan Nama</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="payment_proof">Masukkan Bukti Pembayaran</label>
                <input type="file" id="payment_proof" name="payment_proof" required>
            </div>
            <div class="form-group">
                <label for="car_type">Masukkan Tipe Mobil</label>
                <input type="text" id="car_type" name="car_type" required>
            </div>
            <div class="form-group">
                <label for="account_number">Masukkan No Rekening/E-Wallet</label>
                <input type="text" id="account_number" name="account_number" required>
            </div>
            <div class="form-group">
                <a href="https://wa.me/085838767982" class="whatsapp-button">Konsultasi Via WhatsApp</a>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan">
            </div>
        </form>
    </div>
    <div class="footer">
        <a href="#">About</a>
        <a href="#">Career</a>
        <a href="#">Brand Center</a>
        <a href="#">Blog</a>
        <a href="#">Help Center</a>
        <a href="#">Discord Server</a>
        <a href="#">Twitter</a>
        <a href="#">Facebook</a>
        <a href="#">Contact Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Licensing</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">IOS</a>
        <a href="#">Android</a>
        <a href="#">Windows</a>
        <a href="#">MacOS</a>
    </div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $car_type = $_POST['car_type'];
    $account_number = $_POST['account_number'];
    
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['payment_proof']['name']);
    
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    if (move_uploaded_file($_FILES['payment_proof']['tmp_name'], $uploadFile)) {
        echo "File is valid, and was successfully uploaded.\n";
        // You can save the $name, $car_type, $account_number, and $uploadFile to a database here.
    } else {
        echo "Possible file upload attack!\n";
    }
}
?>
