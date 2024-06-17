<?php
include "./../session-login/koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Cek apakah email ada dalam database
    $stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $token = bin2hex(random_bytes(50)); // Menghasilkan token

        // Simpan token ke database
        $stmt = $conn->prepare("INSERT INTO password_resets (user_id, token) VALUES (?, ?)");
        $stmt->bind_param('is', $user['id'], $token);
        $stmt->execute();

        // Kirim email
        $resetLink = "http://localhost/adsi/src/reset_password.php?token=$token";
        $subject = "Reset Kata Sandi Anda";
        $message = "Klik link berikut untuk mereset kata sandi Anda: $resetLink";
        $headers = "From: rifqifebrianto746@gmail.com";

        mail($email, $subject, $message, $headers);

        echo "Link reset kata sandi telah dikirim ke email Anda.";
    } else {
        echo "Email tidak ditemukan.";
    }
}
