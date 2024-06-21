<?php
include '../session-login/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO comments (post_id, user_id, content) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $post_id, $user_id, $content);
    $stmt->execute();
    $stmt->close();
}

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    $stmt = $conn->prepare("SELECT u.nama, c.content FROM comments c JOIN user u ON c.user_id = u.id WHERE c.post_id = ? ORDER BY c.created_at ASC;
    ");
    $stmt->bind_param("i", $post_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $comments = [];
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }

    echo json_encode($comments);

    $stmt->close();
}

$conn->close();
?>
