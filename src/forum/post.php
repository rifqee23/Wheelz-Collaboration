<?php
include '../session-login/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id']; // Ambil user_id dari input form
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO posts (user_id, content) VALUES (?, ?)");
    $stmt->bind_param("is", $user_id, $content);
    $stmt->execute();
    $stmt->close();
}

$result = $conn->query("
    SELECT p.id, p.content, u.nama 
    FROM posts p 
    JOIN user u ON p.user_id = u.id 
    ORDER BY p.created_at DESC
");

$posts = [];
while ($row = $result->fetch_assoc()) {
    $posts[] = $row;
}

echo json_encode($posts);

$conn->close();
?>
