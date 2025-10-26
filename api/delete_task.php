<?php
include 'db_connect.php';
$id = $_POST['id'] ?? '';
if (!$id) {
    http_response_code(400);
    echo json_encode(['error' => 'Missing id']);
    exit;
}
$stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
$stmt->bind_param('i', $id);
$stmt->execute();
echo json_encode(['success' => true]);
$stmt->close();
$conn->close();
